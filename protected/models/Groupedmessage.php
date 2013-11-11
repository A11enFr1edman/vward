<?php

/**
 * This is the model class for table "sentry_groupedmessage".
 *
 * The followings are the available columns in table 'sentry_groupedmessage':
 * @property integer $status
 * @property string $first_seen
 * @property string $resolved_at
 * @property string $last_seen
 * @property integer $time_spent_count
 * @property integer $level
 * @property integer $num_comments
 * @property integer $times_seen
 * @property string $active_at
 * @property integer $id
 * @property integer $time_spent_total
 * @property integer $score
 * @property string $platform
 * @property string $checksum
 * @property boolean $is_public
 * @property string $message
 * @property integer $project_id
 * @property string $data
 * @property string $logger
 * @property string $view
 */
class Groupedmessage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Groupedmessage the static model class
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
		return 'sentry_groupedmessage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, first_seen, last_seen, time_spent_count, level, times_seen, time_spent_total, score, checksum, message, logger', 'required'),
			array('status, time_spent_count, level, num_comments, times_seen, time_spent_total, score, project_id', 'numerical', 'integerOnly'=>true),
			array('platform, logger', 'length', 'max'=>64),
			array('checksum', 'length', 'max'=>32),
			array('view', 'length', 'max'=>200),
			array('resolved_at, active_at, is_public, data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status, first_seen, resolved_at, last_seen, time_spent_count, level, num_comments, times_seen, active_at, id, time_spent_total, score, platform, checksum, is_public, message, project_id, data, logger, view', 'safe', 'on'=>'search'),
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
			'status' => 'Status',
			'first_seen' => 'First Seen',
			'resolved_at' => 'Resolved At',
			'last_seen' => 'Last Seen',
			'time_spent_count' => 'Time Spent Count',
			'level' => 'Level',
			'num_comments' => 'Num Comments',
			'times_seen' => 'Times Seen',
			'active_at' => 'Active At',
			'id' => 'ID',
			'time_spent_total' => 'Time Spent Total',
			'score' => 'Score',
			'platform' => 'Platform',
			'checksum' => 'Checksum',
			'is_public' => 'Is Public',
			'message' => 'Message',
			'project_id' => 'Project',
			'data' => 'Data',
			'logger' => 'Logger',
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

		$criteria->compare('status',$this->status);
		$criteria->compare('first_seen',$this->first_seen,true);
		$criteria->compare('resolved_at',$this->resolved_at,true);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('time_spent_count',$this->time_spent_count);
		$criteria->compare('level',$this->level);
		$criteria->compare('num_comments',$this->num_comments);
		$criteria->compare('times_seen',$this->times_seen);
		$criteria->compare('active_at',$this->active_at,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('time_spent_total',$this->time_spent_total);
		$criteria->compare('score',$this->score);
		$criteria->compare('platform',$this->platform,true);
		$criteria->compare('checksum',$this->checksum,true);
		$criteria->compare('is_public',$this->is_public);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('logger',$this->logger,true);
		$criteria->compare('view',$this->view,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}