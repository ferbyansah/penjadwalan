<?php

/**
 * This is the model class for table "rules".
 *
 * The followings are the available columns in table 'rules':
 * @property integer $id
 * @property integer $biaya_pemesanan
 * @property integer $biaya_penyimpanan
 * @property integer $lead_time
 */
class Supplier extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Rules the static model class
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
		return 'rumah_sakit';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_kontrak, nama_perusahaan, nama_rs, status_kontrak, no_telp, alamat, jangkau, jarak, area, beban, hari, status', 'required'),
			array('no_telp', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, no_kontrak, nama_perusahaan, nama_rs, status_kontrak, no_telp, alamat, jangkau, jarak, area, beban, hari, status', 'safe', 'on'=>'search'),
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
			'id' => 'ID Rumah Sakit',
			'no_kontrak' => 'Nomor Kontrak',
			'nama_perusahaan' => 'Nama Perusahaan',
			'nama_rs' => 'Nama Rumah Sakit',
			'status_kontrak' => 'Status Kontrak',
			'no_telp' => 'Nomor Telefon',
			'alamat' => 'Alamat',
			'jangkau' => '(Estimasi) Jarak Tempuh Rumah Sakit',
			'jarak' => '(Aktual) Jarak Tempuh Rumah Sakit',
			'area' => 'Area Rumah Sakit',
			'beban' => '(Estimasi) Beban Limbah',
			'hari' => 'Hari Perjanjian Pengambilan Limbah',
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
		$criteria->compare('no_kontrak',$this->no_kontrak);
		$criteria->compare('nama_perusahaan',$this->nama_perusahaan);
		$criteria->compare('nama_rs',$this->nama_rs);
		$criteria->compare('status_kontrak',$this->status_kontrak);
		$criteria->compare('no_telp',$this->no_telp);
		$criteria->compare('alamat',$this->alamat);
		$criteria->compare('jangkau',$this->jangkau);
		$criteria->compare('jarak',$this->jarak);
		$criteria->compare('area',$this->area);
		$criteria->compare('beban',$this->beban);
		$criteria->compare('hari',$this->hari);
		$criteria->compare('status',$this->status);
		$criteria->order = 'id desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}