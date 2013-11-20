<?php

/**
 * This is the model class for table "grouptagkey".
 *
 * The followings are the available columns in table 'grouptagkey':
 * @property integer $id
 * @property integer $project_id
 * @property integer $group_id
 * @property string $key
 * @property string $values_seen
 *
 * The followings are the available model relations:
 * @property Groupedmessage $group
 * @property Project $project
 */
class Grouptagkey extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Grouptagkey the static model class
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
		return 'grouptagkey';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, key, values_seen', 'required'),
			array('project_id, group_id', 'numerical', 'integerOnly'=>true),
			array('key', 'length', 'max'=>32),
			array('values_seen', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, group_id, key, values_seen', 'safe', 'on'=>'search'),
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
			'key' => 'Key',
			'values_seen' => 'Values Seen',
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
		$criteria->compare('key',$this->key,true);
		$criteria->compare('values_seen',$this->values_seen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}