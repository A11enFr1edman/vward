<?php

/**
 * This is the model class for table "message".
 *
 * The followings are the available columns in table 'message':
 * @property integer $id
 * @property string $logger
 * @property string $level
 * @property string $message
 * @property string $view
 * @property string $server_name
 * @property string $checksum
 * @property string $datetime
 * @property string $data
 * @property integer $group_id
 * @property string $site
 * @property string $message_id
 * @property integer $project_id
 * @property integer $time_spent
 * @property string $platform
 * @property string $num_comments
 *
 * The followings are the available model relations:
 * @property Activity[] $activities
 * @property Groupedmessage $group
 * @property Project $project
 */
class Message extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Message the static model class
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
		return 'message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('logger, level, message, checksum, datetime', 'required'),
			array('group_id, project_id, time_spent', 'numerical', 'integerOnly'=>true),
			array('logger, platform', 'length', 'max'=>64),
			array('level, num_comments', 'length', 'max'=>10),
			array('view', 'length', 'max'=>200),
			array('server_name, site', 'length', 'max'=>128),
			array('checksum, message_id', 'length', 'max'=>32),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, logger, level, message, view, server_name, checksum, datetime, data, group_id, site, message_id, project_id, time_spent, platform, num_comments', 'safe', 'on'=>'search'),
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
			'activities' => array(self::HAS_MANY, 'Activity', 'event_id'),
			'group' => array(self::BELONGS_TO, 'Groupedmessage', 'group_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'logger' => 'Logger',
			'level' => 'Level',
			'message' => 'Message',
			'view' => 'View',
			'server_name' => 'Server Name',
			'checksum' => 'Checksum',
			'datetime' => 'Datetime',
			'data' => 'Data',
			'group_id' => 'Group',
			'site' => 'Site',
			'message_id' => 'Message',
			'project_id' => 'Project',
			'time_spent' => 'Time Spent',
			'platform' => 'Platform',
			'num_comments' => 'Num Comments',
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
		$criteria->compare('logger',$this->logger,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('view',$this->view,true);
		$criteria->compare('server_name',$this->server_name,true);
		$criteria->compare('checksum',$this->checksum,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('message_id',$this->message_id,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('time_spent',$this->time_spent);
		$criteria->compare('platform',$this->platform,true);
		$criteria->compare('num_comments',$this->num_comments,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}