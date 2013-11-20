<?php

/**
 * This is the model class for table "auth_user".
 *
 * The followings are the available columns in table 'auth_user':
 * @property integer $id
 * @property string $password
 * @property string $last_login
 * @property integer $is_superuser
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $is_staff
 * @property integer $is_active
 * @property string $date_joined
 *
 * The followings are the available model relations:
 * @property AccessgroupMembers[] $accessgroupMembers
 * @property Activity[] $activities
 * @property AuthUserGroups[] $authUserGroups
 * @property AuthUserUserPermissions[] $authUserUserPermissions
 * @property Groupbookmark[] $groupbookmarks
 * @property Groupseen[] $groupseens
 * @property Lostpasswordhash[] $lostpasswordhashes
 * @property Project[] $projects
 * @property Projectkey[] $projectkeys
 * @property Projectkey[] $projectkeys1
 * @property Team[] $teams
 * @property Teammember[] $teammembers
 * @property Useroption[] $useroptions
 */
class AuthUser extends CActiveRecord
{
    public $algorithm = 'sha256';
    public $iterations = 1024;
    public $salt_bytes = 24; // 24 bytes generates a 32-character string
    public $hash_bytes = 24; // 24 bytes generates a 32-character string

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuthUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'auth_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, last_login, is_superuser, username, first_name, last_name, email, is_staff, is_active, date_joined', 'required'),
			array('is_superuser, is_staff, is_active', 'numerical', 'integerOnly'=>true),
			array('password', 'length', 'max'=>128),
			array('username, first_name, last_name', 'length', 'max'=>30),
			array('email', 'length', 'max'=>75),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, password, last_login, is_superuser, username, first_name, last_name, email, is_staff, is_active, date_joined', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'accessgroupMembers' => array(self::HAS_MANY, 'AccessgroupMembers', 'user_id'),
			'activities' => array(self::HAS_MANY, 'Activity', 'user_id'),
			'authUserGroups' => array(self::HAS_MANY, 'AuthUserGroups', 'user_id'),
			'authUserUserPermissions' => array(self::HAS_MANY, 'AuthUserUserPermissions', 'user_id'),
			'groupbookmarks' => array(self::HAS_MANY, 'Groupbookmark', 'user_id'),
			'groupseens' => array(self::HAS_MANY, 'Groupseen', 'user_id'),
			'lostpasswordhashes' => array(self::HAS_MANY, 'Lostpasswordhash', 'user_id'),
			'projects' => array(self::HAS_MANY, 'Project', 'owner_id'),
			'projectkeys' => array(self::HAS_MANY, 'Projectkey', 'user_added_id'),
			'projectkeys1' => array(self::HAS_MANY, 'Projectkey', 'user_id'),
			'teams' => array(self::HAS_MANY, 'Team', 'owner_id'),
			'teammembers' => array(self::HAS_MANY, 'Teammember', 'user_id'),
			'useroptions' => array(self::HAS_MANY, 'Useroption', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'password' => 'Password',
			'last_login' => 'Last Login',
			'is_superuser' => 'Is Superuser',
			'username' => 'Username',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'is_staff' => 'Is Staff',
			'is_active' => 'Is Active',
			'date_joined' => 'Date Joined',
		);
	}

    /**
     * Generate a secure password hash
     *
     * @param string $raw Raw (unhashed) string
     * @return object Object containing the generated salt and PBKDF2-hashed password
     */
    public function generate_hash($raw)
    {
        // Generate a new salt every time a new password hash is generated
        $salt = base64_encode(mcrypt_create_iv($this->salt_bytes, MCRYPT_DEV_URANDOM));

        return (object) array(
            'salt'=>$salt,
            'hash'=>base64_encode(self::pbkdf2(
                $raw,
                $salt,
                $this->hash_bytes
            )),
        );
    }

    /**
     * Check user input against encrypted and salted password hash
     *
     * @param string $raw User input
     * @param string $salt User's salt stored with hashed password
     * @param string $hash User's password hash
     * @return bool If the hashes match
     */
    public function validate_hash($raw, $salt, $hash)
    {
        return self::slow_equals(
            base64_decode($hash),
            self::pbkdf2(
                $raw,
                $salt,
                strlen(base64_decode($hash))
            )
        );
    }

    /**
     * Compares two strings in length-constant time
     */
    protected function slow_equals($a, $b)
    {
        $diff = strlen($a) ^ strlen($b);

        for ($i = 0; $i < strlen($a) && $i < strlen($b); $i++)
        {
            $diff |= ord($a[$i]) ^ ord($b[$i]);
        }

        return $diff === 0;
    }

    /*
     * PBKDF2 key derivation function as defined by RSA's PKCS #5: https://www.ietf.org/rfc/rfc2898.txt
     * @param string $raw The string to validate.
     * @param string $salt A salt that is unique to the password.
     * @param integer $key_length The length of the derived key in bytes.
     * @return string A $key_length-byte key derived from the password and salt.
     *
     * Test vectors can be found here: https://www.ietf.org/rfc/rfc6070.txt
     *
     * This implementation of PBKDF2 was originally created by https://defuse.ca
     * With improvements by http://www.variations-of-shadow.com
     * Further modified for Yii Component usage by http://github.com/therealklanni
     */
    protected function pbkdf2($raw, $salt, $key_length)
    {
        $algorithm = strtolower($this->algorithm); // for sanity

        if (!in_array($algorithm, hash_algos(), true)) {
            // Throw error: Invalid hash algorithm
            throw new CException('Invalid hash algorithm '.$algorithm);
            return false;
        }

        $hash_length = strlen(hash($algorithm, "", true));
        $block_count = ceil($key_length / $hash_length);
        $output = "";

        for ($i = 1; $i <= $block_count; $i++)
        {
            // $i encoded as 4 bytes, big endian
            $last = $salt . pack("N", $i);

            // first iteration
            $last = $xorsum = hash_hmac($algorithm, $last, $raw, true);

            // perform the other ($iterations - 1) iterations
            for ($j = 1; $j < (int) $this->iterations; $j++)
            {
                $xorsum ^= ($last = hash_hmac($algorithm, $last, $raw, true));
            }

            $output .= $xorsum;
        }

        return substr($output, 0, $key_length);
    }
}