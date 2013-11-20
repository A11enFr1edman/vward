<?php

/**
 * This is the model class for table "projectcountbyminute".
 *
 * The followings are the available columns in table 'projectcountbyminute':
 * @property integer $id
 * @property integer $project_id
 * @property string $date
 * @property string $times_seen
 * @property integer $time_spent_total
 * @property integer $time_spent_count
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Projectcountbyminute extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Projectcountbyminute the static model class
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
		return 'projectcountbyminute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, times_seen, time_spent_total, time_spent_count', 'required'),
			array('project_id, time_spent_total, time_spent_count', 'numerical', 'integerOnly'=>true),
			array('times_seen', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, date, times_seen, time_spent_total, time_spent_count', 'safe', 'on'=>'search'),
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
			'project_id' => 'Project',
			'date' => 'Date',
			'times_seen' => 'Times Seen',
			'time_spent_total' => 'Time Spent Total',
			'time_spent_count' => 'Time Spent Count',
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
		$criteria->compare('date',$this->date,true);
		$criteria->compare('times_seen',$this->times_seen,true);
		$criteria->compare('time_spent_total',$this->time_spent_total);
		$criteria->compare('time_spent_count',$this->time_spent_count);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}