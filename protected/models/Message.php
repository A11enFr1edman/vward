<?php

/**
 * This is the model class for table "sentry_message".
 *
 * The followings are the available columns in table 'sentry_message':
 * @property integer $group_id
 * @property string $logger
 * @property string $message_id
 * @property string $server_name
 * @property integer $level
 * @property string $checksum
 * @property string $site
 * @property string $datetime
 * @property integer $time_spent
 * @property string $platform
 * @property integer $num_comments
 * @property string $message
 * @property integer $project_id
 * @property string $data
 * @property integer $id
 * @property string $view
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
		return 'sentry_message';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('logger, level, checksum, datetime, message', 'required'),
			array('group_id, level, time_spent, num_comments, project_id', 'numerical', 'integerOnly'=>true),
			array('logger, platform', 'length', 'max'=>64),
			array('message_id, checksum', 'length', 'max'=>32),
			array('server_name, site', 'length', 'max'=>128),
			array('view', 'length', 'max'=>200),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('group_id, logger, message_id, server_name, level, checksum, site, datetime, time_spent, platform, num_comments, message, project_id, data, id, view', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'group_id' => 'Group',
			'logger' => 'Logger',
			'message_id' => 'Message',
			'server_name' => 'Server Name',
			'level' => 'Level',
			'checksum' => 'Checksum',
			'site' => 'Site',
			'datetime' => 'Datetime',
			'time_spent' => 'Time Spent',
			'platform' => 'Platform',
			'num_comments' => 'Num Comments',
			'message' => 'Message',
			'project_id' => 'Project',
			'data' => 'Data',
			'id' => 'ID',
			'view' => 'View',
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

		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('logger',$this->logger,true);
		$criteria->compare('message_id',$this->message_id,true);
		$criteria->compare('server_name',$this->server_name,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('checksum',$this->checksum,true);
		$criteria->compare('site',$this->site,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('time_spent',$this->time_spent);
		$criteria->compare('platform',$this->platform,true);
		$criteria->compare('num_comments',$this->num_comments);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('view',$this->view,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}