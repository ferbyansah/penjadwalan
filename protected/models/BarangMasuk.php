<?php

/**
 * This is the model class for table "barang_masuk".
 *
 * The followings are the available columns in table 'barang_masuk':
 * @property integer $id
 * @property string $kode_barang
 * @property integer $jumlah
 * @property string $tanggal
 * @property integer $user_id
 */
class BarangMasuk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BarangMasuk the static model class
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
		return 'barang_masuk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_barang, no_po, dipesan, jumlah, asal, status, tanggal, user_id', 'required'),
			array('jumlah, dipesan, user_id', 'numerical', 'integerOnly'=>true),
			array('nama_barang,status', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama_barang, no_po, dipesan, jumlah, asal, status, tanggal, user_id', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'nama_barang' => 'Nama Barang',
			'no_po' => 'Nomor PO',
			'dipesan' => 'Jumlah Dipesan',
			'jumlah' => 'Jumlah Diterima',
			'asal' => 'Asal Barang',
			'status' => 'Status',
			'tanggal' => 'Tanggal Barang Masuk',
			'user_id' => 'User',
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
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('no_po',$this->no_po,true);
		$criteria->compare('dipesan',$this->dipesan,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('asal',$this->asal,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->order = 'tanggal desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}