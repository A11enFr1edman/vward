<?php

/**
 * This is the model class for table "sentry_project".
 *
 * The followings are the available columns in table 'sentry_project':
 * @property integer $status
 * @property string $name
 * @property string $slug
 * @property string $platform
 * @property integer $team_id
 * @property integer $id
 * @property string $date_added
 * @property boolean $public
 * @property integer $owner_id
 */
class Project extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Project the static model class
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
		return 'sentry_project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, name, date_added, public', 'required'),
			array('status, team_id, owner_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>200),
			array('slug', 'length', 'max'=>50),
			array('platform', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('status, name, slug, platform, team_id, id, date_added, public, owner_id', 'safe', 'on'=>'search'),
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
            'team' => array(self::BELONGS_TO, 'Team', 'team_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'status' => 'Status',
			'name' => 'Name',
			'slug' => 'Slug',
			'platform' => 'Platform',
			'team_id' => 'Team',
			'id' => 'ID',
			'date_added' => 'Date Added',
			'public' => 'Public',
			'owner_id' => 'Owner',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('platform',$this->platform,true);
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('id',$this->id);
		$criteria->compare('date_added',$this->date_added,true);
		$criteria->compare('public',$this->public);
		$criteria->compare('owner_id',$this->owner_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}