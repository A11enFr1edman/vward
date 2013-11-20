<?php

/**
 * This is the model class for table "team".
 *
 * The followings are the available columns in table 'team':
 * @property integer $id
 * @property string $slug
 * @property string $name
 * @property integer $owner_id
 * @property string $date_added
 *
 * The followings are the available model relations:
 * @property Accessgroup[] $accessgroups
 * @property Pendingteammember[] $pendingteammembers
 * @property Project[] $projects
 * @property AuthUser $owner
 * @property Teammember[] $teammembers
 */
class Team extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Team the static model class
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
		return 'team';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('slug, name, owner_id', 'required'),
			array('owner_id', 'numerical', 'integerOnly'=>true),
			array('slug', 'length', 'max'=>50),
			array('name', 'length', 'max'=>64),
			array('date_added', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, slug, name, owner_id, date_added', 'safe', 'on'=>'search'),
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
			'accessgroups' => array(self::HAS_MANY, 'Accessgroup', 'team_id'),
			'pendingteammembers' => array(self::HAS_MANY, 'Pendingteammember', 'team_id'),
			'projects' => array(self::HAS_MANY, 'Project', 'team_id'),
			'owner' => array(self::BELONGS_TO, 'AuthUser', 'owner_id'),
			'teammembers' => array(self::HAS_MANY, 'Teammember', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'slug' => 'Slug',
			'name' => 'Name',
			'owner_id' => 'Owner',
			'date_added' => 'Date Added',
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
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('owner_id',$this->owner_id);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}