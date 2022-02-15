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
class PoSupplier extends CActiveRecord
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
		return 'po_supplier';
	}

	public function generateNomor_po(){
        $_d = date("ymd");
        $_i = "PO-S";
        $_left = $_i . $_d;
        $_first = "001";
        $_len = strlen($_left);
        $no = $_left . $_first;
      
        $last_po = $this->find(
                array(
                    "select"=>"nomor_po",
                    "condition" => "left(nomor_po, " . $_len . ") = :_left",
                    "params" => array(":_left" => $_left),
                    "order" => "nomor_po DESC"
                ));
      
        if($last_po != null){
            $_no = substr($last_po->nomor_po, $_len);
            $_no++;
            $_no = substr("000", strlen($_no)) . $_no;
            $no = $_left . $_no;
        }
      
        return $no;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomor_po, nama_barang, jumlah, supplier, status, tanggal', 'required'),
			array('jumlah', 'numerical', 'integerOnly'=>true),
			array('nama_barang,status', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nomor_po, nama_barang, jumlah, supplier, status, tanggal', 'safe', 'on'=>'search'),
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
			'nomor_po' => 'Nomor PO',
			'nama_barang' => 'Nama Barang',
			'jumlah' => 'Jumlah',
			'supplier' => 'Supplier',
			'status' => 'Status',
			'tanggal' => 'Tanggal PO',
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
		$criteria->compare('nomor_po',$this->nomor_po,true);
		$criteria->compare('nama_barang',$this->nama_barang,true);
		$criteria->compare('jumlah',$this->jumlah);
		$criteria->compare('supplier',$this->supplier,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->order = 'tanggal desc';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}