<?php
date_default_timezone_set("Asia/Bangkok");
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
class Laporan extends CActiveRecord
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
		return 'laporan';
	}

	// public function generateJadwal(){
 //        $_d = date("ymd");
 //        $_i = "NP-";
 //        $_left = $_i . $_d;
 //        $_first = "001";
 //        $_len = strlen($_left);
 //        $no = $_left . $_first;
      
 //        $last_po = $this->find(
 //                array(
 //                    "select"=>"no_perjalanan",
 //                    "condition" => "left(no_perjalanan, " . $_len . ") = :_left",
 //                    "params" => array(":_left" => $_left),
 //                    "order" => "no_perjalanan DESC"
 //                ));
      
 //        if($last_po != null){
 //            $_no = substr($last_po->no_perjalanan, $_len);
 //            $_no++;
 //            $_no = substr("000", strlen($_no)) . $_no;
 //            $no = $_left . $_no;
 //        }
      
 //        return $no;
 //    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('no_perjalanan1, nama_rs, alamat, no_plat, nama_supir, status, tanggal, beban_aktual', 'required'),
			// array('jumlah', 'numerical', 'integerOnly'=>true),
			array('nama_rs,status', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('no_perjalanan1, nama_rs, alamat, no_plat, nama_supir, status, tanggal, beban_aktual', 'safe', 'on'=>'search'),
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
			'no_perjalanan1' => 'Nomor Perjalanan',
			'nama_rs' => 'Nama Rumah Sakit',
			'alamat' => 'Alamat',
			'no_plat' => 'Plat Kendaraan',
			'nama_supir' => 'Nama Supir',
			'status' => 'Status Pengambilan Limbah',
			'tanggal' => 'Tanggal',
			'beban_aktual' => '(Aktual) Beban Angkut Limbah [KG]',
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
		$criteria->compare('no_perjalanan1',$this->no_perjalanan1,true);
		$criteria->compare('nama_rs',$this->nama_rs,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('no_plat',$this->no_plat,true);
		$criteria->compare('nama_supir',$this->nama_supir,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('beban_aktual',$this->beban_aktual,true);
		$criteria->order = 'tanggal desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}