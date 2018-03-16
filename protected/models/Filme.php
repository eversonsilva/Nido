<?php

/**
 * This is the model class for table "filme".
 *
 * The followings are the available columns in table 'filme':
 * @property integer $id_filme
 * @property string $nomeFilme
 * @property integer $anoFilme
 * @property string $imgFilme
 */
class Filme extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'filme';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anoFilme, imgFilme', 'required'),
			array('anoFilme', 'numerical', 'integerOnly'=>true),
			array('nomeFilme, imgFilme', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_filme, nomeFilme, anoFilme, imgFilme', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_filme' => 'Id Filme',
			'nomeFilme' => 'Nome Filme',
			'anoFilme' => 'Ano Filme',
			'imgFilme' => 'Img Filme',
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

		$criteria->compare('id_filme',$this->id_filme);
		$criteria->compare('nomeFilme',$this->nomeFilme,true);
		$criteria->compare('anoFilme',$this->anoFilme);
		$criteria->compare('imgFilme',$this->imgFilme,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Filme the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
