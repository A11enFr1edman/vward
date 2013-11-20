<?php

/**
 * This is the model class for table "projectkey".
 *
 * The followings are the available columns in table 'projectkey':
 * @property integer $id
 * @property integer $project_id
 * @property string $public_key
 * @property string $secret_key
 * @property integer $user_id
 * @property integer $user_added_id
 * @property string $date_added
 *
 * The followings are the available model relations:
 * @property AuthUser $userAdded
 * @property Project $project
 * @property AuthUser $user
 */
class Projectkey extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projectkey the static model class
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
		return 'projectkey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id', 'required'),
			array('project_id, user_id, user_added_id', 'numerical', 'integerOnly'=>true),
			array('public_key, secret_key', 'length', 'max'=>32),
			array('date_added', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, public_key, secret_key, user_id, user_added_id, date_added', 'safe', 'on'=>'search'),
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
			'userAdded' => array(self::BELONGS_TO, 'AuthUser', 'user_added_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'user' => array(self::BELONGS_TO, 'AuthUser', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_id' => 'Project',
			'public_key' => 'Public Key',
			'secret_key' => 'Secret Key',
			'user_id' => 'User',
			'user_added_id' => 'User Added',
			'date_added' => 'Date Added',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('public_key',$this->public_key,true);
		$criteria->compare('secret_key',$this->secret_key,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_added_id',$this->user_added_id);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}