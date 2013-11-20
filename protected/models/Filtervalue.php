<?php

/**
 * This is the model class for table "filtervalue".
 *
 * The followings are the available columns in table 'filtervalue':
 * @property integer $id
 * @property string $key
 * @property string $value
 * @property integer $project_id
 * @property string $times_seen
 * @property string $last_seen
 * @property string $first_seen
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class Filtervalue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Filtervalue the static model class
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
		return 'filtervalue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('key, value, times_seen', 'required'),
			array('project_id', 'numerical', 'integerOnly'=>true),
			array('key', 'length', 'max'=>32),
			array('value', 'length', 'max'=>200),
			array('times_seen', 'length', 'max'=>10),
			array('last_seen, first_seen, data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, key, value, project_id, times_seen, last_seen, first_seen, data', 'safe', 'on'=>'search'),
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
			'key' => 'Key',
			'value' => 'Value',
			'project_id' => 'Project',
			'times_seen' => 'Times Seen',
			'last_seen' => 'Last Seen',
			'first_seen' => 'First Seen',
			'data' => 'Data',
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
		$criteria->compare('key',$this->key,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('times_seen',$this->times_seen,true);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('first_seen',$this->first_seen,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}