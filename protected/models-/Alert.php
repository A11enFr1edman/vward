<?php

/**
 * This is the model class for table "sentry_alert".
 *
 * The followings are the available columns in table 'sentry_alert':
 * @property integer $status
 * @property integer $project_id
 * @property string $datetime
 * @property string $message
 * @property integer $group_id
 * @property string $data
 * @property integer $id
 */
class Alert extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alert the static model class
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
		return 'sentry_alert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, project_id, datetime, message', 'required'),
			array('status, project_id, group_id', 'numerical', 'integerOnly'=>true),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status, project_id, datetime, message, group_id, data, id', 'safe', 'on'=>'search'),
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
			'project_id' => 'Project',
			'datetime' => 'Datetime',
			'message' => 'Message',
			'group_id' => 'Group',
			'data' => 'Data',
			'id' => 'ID',
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
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}