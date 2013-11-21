<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
 * @property string $name
 * @property integer $owner_id
 * @property integer $public
 * @property string $date_added
 * @property string $status
 * @property string $slug
 * @property integer $team_id
 * @property string $platform
 *
 * The followings are the available model relations:
 * @property AccessgroupProjects[] $accessgroupProjects
 * @property Activity[] $activities
 * @property Alert[] $alerts
 * @property Eventmapping[] $eventmappings
 * @property Filterkey[] $filterkeys
 * @property Filtervalue[] $filtervalues
 * @property Groupbookmark[] $groupbookmarks
 * @property Groupedmessage[] $groupedmessages
 * @property Groupseen[] $groupseens
 * @property Grouptagkey[] $grouptagkeys
 * @property Message[] $messages
 * @property Messagecountbyminute[] $messagecountbyminutes
 * @property Messagefiltervalue[] $messagefiltervalues
 * @property AuthUser $owner
 * @property Team $team
 * @property Projectcountbyminute[] $projectcountbyminutes
 * @property Projectkey[] $projectkeys
 * @property Projectoptions[] $projectoptions
 * @property Searchdocument[] $searchdocuments
 * @property Useroption[] $useroptions
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, public, date_added, status', 'required'),
			array('owner_id, public, team_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('status', 'length', 'max'=>10),
			array('slug', 'length', 'max'=>50),
			array('platform', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, owner_id, public, date_added, status, slug, team_id, platform', 'safe', 'on'=>'search'),
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
			'accessgroupProjects' => array(self::HAS_MANY, 'AccessgroupProjects', 'project_id'),
			'activities' => array(self::HAS_MANY, 'Activity', 'project_id'),
			'alerts' => array(self::HAS_MANY, 'Alert', 'project_id'),
			'eventmappings' => array(self::HAS_MANY, 'Eventmapping', 'project_id'),
			'filterkeys' => array(self::HAS_MANY, 'Filterkey', 'project_id'),
			'filtervalues' => array(self::HAS_MANY, 'Filtervalue', 'project_id'),
			'groupbookmarks' => array(self::HAS_MANY, 'Groupbookmark', 'project_id'),
			'groupedmessages' => array(self::HAS_MANY, 'Groupedmessage', 'project_id'),
			'groupseens' => array(self::HAS_MANY, 'Groupseen', 'project_id'),
			'grouptagkeys' => array(self::HAS_MANY, 'Grouptagkey', 'project_id'),
			'messages' => array(self::HAS_MANY, 'Message', 'project_id'),
			'messagecountbyminutes' => array(self::HAS_MANY, 'Messagecountbyminute', 'project_id'),
			'messagefiltervalues' => array(self::HAS_MANY, 'Messagefiltervalue', 'project_id'),
			'owner' => array(self::BELONGS_TO, 'AuthUser', 'owner_id'),
			'team' => array(self::BELONGS_TO, 'Team', 'team_id'),
			'projectcountbyminutes' => array(self::HAS_MANY, 'Projectcountbyminute', 'project_id'),
			'projectkeys' => array(self::HAS_MANY, 'Projectkey', 'project_id'),
			'projectoptions' => array(self::HAS_MANY, 'Projectoptions', 'project_id'),
			'searchdocuments' => array(self::HAS_MANY, 'Searchdocument', 'project_id'),
			'useroptions' => array(self::HAS_MANY, 'Useroption', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'owner_id' => 'Owner',
			'public' => 'Public',
			'date_added' => 'Date Added',
			'status' => 'Status',
			'slug' => 'Slug',
			'team_id' => 'Team',
			'platform' => 'Platform',
		);
	}

    /**
     * @param $team_slug
     * @param $project_id
     * @return array|CActiveRecord|mixed|null
     * @throws CHttpException
     */
    public static function load($team_slug, $project_id){
        $param = ctype_digit($project_id) ? array('id' => $project_id) : array('slug'=>$project_id);
        $project = self::model()->with('team')->FindByAttributes($param);
        if(empty($project->team) || $project->team->slug !== $team_slug){
            throw new CHttpException(404,'The specified project cannot be found.');
        }
        return $project;
    }

}