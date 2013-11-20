<?php

/**
 * This is the model class for table "messagefiltervalue".
 *
 * The followings are the available columns in table 'messagefiltervalue':
 * @property integer $id
 * @property integer $group_id
 * @property string $times_seen
 * @property string $key
 * @property string $value
 * @property integer $project_id
 * @property string $last_seen
 * @property string $first_seen
 *
 * The followings are the available model relations:
 * @property Groupedmessage $group
 * @property Project $project
 */
class Messagefiltervalue extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Messagefiltervalue the static model class
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
		return 'messagefiltervalue';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, times_seen, key, value', 'required'),
			array('group_id, project_id', 'numerical', 'integerOnly'=>true),
			array('times_seen', 'length', 'max'=>10),
			array('key', 'length', 'max'=>32),
			array('value', 'length', 'max'=>200),
			array('last_seen, first_seen', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, group_id, times_seen, key, value, project_id, last_seen, first_seen', 'safe', 'on'=>'search'),
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
			'group_id' => 'Group',
			'times_seen' => 'Times Seen',
			'key' => 'Key',
			'value' => 'Value',
			'project_id' => 'Project',
			'last_seen' => 'Last Seen',
			'first_seen' => 'First Seen',
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('times_seen',$this->times_seen,true);
		$criteria->compare('key',$this->key,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('first_seen',$this->first_seen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}