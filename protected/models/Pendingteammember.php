<?php

/**
 * This is the model class for table "pendingteammember".
 *
 * The followings are the available columns in table 'pendingteammember':
 * @property integer $id
 * @property integer $team_id
 * @property string $email
 * @property integer $type
 * @property string $date_added
 *
 * The followings are the available model relations:
 * @property Team $team
 */
class Pendingteammember extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pendingteammember the static model class
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
		return 'pendingteammember';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('team_id, email, type, date_added', 'required'),
			array('team_id, type', 'numerical', 'integerOnly'=>true),
			array('email', 'length', 'max'=>75),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, team_id, email, type, date_added', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'team_id' => 'Team',
			'email' => 'Email',
			'type' => 'Type',
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
		$criteria->compare('team_id',$this->team_id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('date_added',$this->date_added,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}