<?php

/**
 * This is the model class for table "tutor".
 *
 * The followings are the available columns in table 'tutor':
 * @property integer $idTutor
 * @property string $nomTutor
 * @property string $apellTutor
 * @property string $direcTutor
 * @property string $ciTutor
 *
 * The followings are the available model relations:
 * @property Estudiante[] $estudiantes
 */
class Tutor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tutor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomTutor, apellTutor, direcTutor, ciTutor', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idTutor, nomTutor, apellTutor, direcTutor, ciTutor', 'safe', 'on'=>'search'),
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
			'estudiantes' => array(self::HAS_MANY, 'Estudiante', 'idTutor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTutor' => 'Id Tutor',
			'nomTutor' => 'Nom Tutor',
			'apellTutor' => 'Apell Tutor',
			'direcTutor' => 'Direc Tutor',
			'ciTutor' => 'Ci Tutor',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idTutor',$this->idTutor);
		$criteria->compare('nomTutor',$this->nomTutor,true);
		$criteria->compare('apellTutor',$this->apellTutor,true);
		$criteria->compare('direcTutor',$this->direcTutor,true);
		$criteria->compare('ciTutor',$this->ciTutor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tutor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
