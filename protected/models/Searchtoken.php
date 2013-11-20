<?php

/**
 * This is the model class for table "searchtoken".
 *
 * The followings are the available columns in table 'searchtoken':
 * @property integer $id
 * @property integer $document_id
 * @property string $field
 * @property string $token
 * @property string $times_seen
 *
 * The followings are the available model relations:
 * @property Searchdocument $document
 */
class Searchtoken extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Searchtoken the static model class
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
		return 'searchtoken';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('document_id, field, token, times_seen', 'required'),
			array('document_id', 'numerical', 'integerOnly'=>true),
			array('field', 'length', 'max'=>64),
			array('token', 'length', 'max'=>128),
			array('times_seen', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, document_id, field, token, times_seen', 'safe', 'on'=>'search'),
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
			'document' => array(self::BELONGS_TO, 'Searchdocument', 'document_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'document_id' => 'Document',
			'field' => 'Field',
			'token' => 'Token',
			'times_seen' => 'Times Seen',
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
		$criteria->compare('document_id',$this->document_id);
		$criteria->compare('field',$this->field,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('times_seen',$this->times_seen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}