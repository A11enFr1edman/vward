<?php

/**
 * This is the model class for table "searchdocument".
 *
 * The followings are the available columns in table 'searchdocument':
 * @property integer $id
 * @property integer $project_id
 * @property integer $group_id
 * @property string $total_events
 * @property string $date_added
 * @property string $date_changed
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Groupedmessage $group
 * @property Project $project
 * @property Searchtoken[] $searchtokens
 */
class Searchdocument extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Searchdocument the static model class
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
		return 'searchdocument';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, group_id, total_events, date_added, date_changed, status', 'required'),
			array('project_id, group_id', 'numerical', 'integerOnly'=>true),
			array('total_events, status', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, project_id, group_id, total_events, date_added, date_changed, status', 'safe', 'on'=>'search'),
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
			'searchtokens' => array(self::HAS_MANY, 'Searchtoken', 'document_id'),
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
			'total_events' => 'Total Events',
			'date_added' => 'Date Added',
			'date_changed' => 'Date Changed',
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
		$criteria->compare('total_events',$this->total_events,true);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('date_changed',$this->date_changed,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}