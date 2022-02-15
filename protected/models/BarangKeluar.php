<?php

/**
 * This is the model class for table "barang_keluar".
 *
 * The followings are the available columns in table 'barang_keluar':
 * @property integer $id
 * @property string $kode_barang
 * @property integer $jumlah
 * @property string $tanggal
 * @property integer $user_id
 */
class BarangKeluar extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BarangKeluar the static model class
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
		return 'barang_keluar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_po,nama_barang, jumlah, tujuan, status, tanggal, user_id', 'required'),
			array('jumlah, user_id', 'numerical', 'integerOnly'=>true),
			array('nama_barang, keterangan, status', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, no_po, nama_barang, jumlah, tujuan, keterangan, status, tanggal, user_id', 'safe', 'on'=>'search'),
			// array('stok_akhir','validasi'),
		);
	}

	// public function validasi($attributes,$params)
	// {
	// 	if(!empty($this->stok_akhir))
	// 	{
	// 		$stok = Barang::model()->findByAttributes(array('stok_akhir' => $this->stok_akhir));
	// 		$safety_stok = Barang::model()->findByAttributes(array('safety_stok'=>$this->safety_stok));
	// 		$stok_akhir->jumlah;
	// 		if($stok > $safety_stok)
	// 		{
	// 		$this->addError($attribute, 'cek jumlah stok');
	// 		}
	// 		}
	// 	// $models = Barang::model()->findAll(array('condition' => 'stok = ' . $this->Barang->stok, 'order'=>'kode_barang'));
	// 	// foreach ($models as $model) 
		
	// 	// if($this->stok_akhir < $model->safety_stok)
	// 	// {
	// 	// 	$this->addError('stok_akhir', 'Stock Barang Kurang!');
	// 	// }
	// 	// else
	// 	// 	return true;
	// }

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
			'no_po' => 'Nomor PO',
			'nama_barang' => 'Nama Barang',
			'jumlah' => 'Jumlah',
			'tujuan' => 'Tujuan',
			'keterangan' => 'Keterangan',
			'status' => 'Status',
			'tanggal' => 'Tanggal Barang Keluar',
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
		$criteria->compare('no_po',$this->no_po,true);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('tujuan',$this->tujuan);
		$criteria->compare('keterangan',$this->keterangan);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->order = 'tanggal desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}