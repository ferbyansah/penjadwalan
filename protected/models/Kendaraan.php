<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property string $kode_barang
 * @property string $nama_barang
 * @property integer $satuan
 * @property integer $stok_akhir
 * @property integer $harga
 * @property integer $penggunaan_tahun
 * @property integer $safety_stok
 * @property string $no_rak
 * @property integer $rop
 * @property integer $eoq
 */
class Kendaraan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	// public $jumlah;
	// public $kode_barang;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kendaraan';
	}

	// public function cek()
 //    {
 //        $query = $this->db->query("SELECT MAX(kode_barang) as kode_barang from barang");
 //        $hasil = $query->row();
 //        return $hasil->kode_barang;
 //    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_plat, nama_kendaraan, jenis_kendaraan, nama_supir', 'required'),
			array('nama_supir, jenis_kendaraan','match' ,'pattern'=>'/^[A-Za-z ]+$/u'),
			array('no_plat, nama_kendaraan, jenis_kendaraan, nama_supir', 'length', 'max'=>50),
			// array('nama_barang', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_plat, nama_kendaraan, jenis_kendaraan, nama_supir', 'safe', 'on'=>'search'),
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

	// public function generateKode_Barang(){
 //        $_i = "KD-";
 //        $_left = $_i;
 //        $_first = "0001";
 //        $_len = strlen($_left);
 //        $no = $_left . $_first;
      
 //        $last_po = $this->find(
 //                array(
 //                    "select"=>"kode_barang",
 //                    "condition" => "left(kode_barang, " . $_len . ") = :_left",
 //                    "params" => array(":_left" => $_left),
 //                    "order" => "kode_barang DESC"
 //                ));
      
 //        if($last_po != null){
 //            $_no = substr($last_po->kode_barang, $_len);
 //            $_no++;
 //            $_no = substr("0000", strlen($_no)) . $_no;
 //            $no = $_left . $_no;
 //        }
      
 //        return $no;
 //    }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'no_plat' => 'Nomor Plat Kendaraan',
			'nama_kendaraan' => 'Nama Kendaraan',
			'jenis_kendaraan' => 'Jenis Kendaraan',
			'nama_supir' => 'Nama Supir',
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
		$criteria->compare('no_plat',$this->no_plat,true);
		$criteria->compare('nama_kendaraan',$this->nama_kendaraan,true);
		$criteria->compare('jenis_kendaraan',$this->jenis_kendaraan);
		$criteria->compare('nama_supir',$this->nama_supir);
		$criteria->order = 'id desc';


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}