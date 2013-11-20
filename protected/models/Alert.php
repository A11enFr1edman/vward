<?php

/**
 * This is the model class for table "alert".
 *
 * The followings are the available columns in table 'alert':
 * @property integer $id
 * @property integer $project_id
 * @property integer $group_id
 * @property string $datetime
 * @property string $message
 * @property string $data
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Groupedmessage $group
 * @property Project $project
 * @property Alertrelatedgroup[] $alertrelatedgroups
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
		return 'alert';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, datetime, message, status', 'required'),
			array('project_id, group_id', 'numerical', 'integerOnly'=>true),
			array('status', 'length', 'max'=>10),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, group_id, datetime, message, data, status', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'Groupedmessage', 'group_id'),
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'alertrelatedgroups' => array(self::HAS_MANY, 'Alertrelatedgroup', 'alert_id'),
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
			'group_id' => 'Group',
			'datetime' => 'Datetime',
			'message' => 'Message',
			'data' => 'Data',
			'status' => 'Status',
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}