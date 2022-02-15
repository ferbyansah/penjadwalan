<?php
/* @var $this BarangKeluarController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Jadwals'=>array('view'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'Create BarangKeluar', 'url'=>array('create')),
// 	array('label'=>'Manage BarangKeluar', 'url'=>array('admin')),
// );
?>
<?php 
 
$host = "localhost";
$user = "root";
$password = "";
$database = "penjadwalan";
 
$koneksi = mysqli_connect($host,$user,$password,$database);

?>

<font color="black">
<div class="container mt-5 mx-auto">
<center><h3><img width="100px" height="60px" src="images/jh.jpeg">  PT.Jalan Hijau</br>
	<h5>Jl.Setia 1F No.79,Jati Cempaka,Pondok Gede,Bekasi<br>Telp & Fax : (021) 8473177</h5>
	<h3>Manifes Limbah Bahan Berbahaya dan Beracun</h3>
</center>
<br>
<br>
	<table class="table">
     <!-- <tr>
      <th>No</th>
      <th>No Perjalanan</th>
      <th>Nama RS</th>
      <th>Estimasi Beban</th>
      <th>Nomor Plat</th>
      <th>Nama Supir</th>
      <th>Urutan Tujuan</th>
      <th>Status</th>
      <th>Tanggal</th>
     </tr> -->

     <!-- <tr>
      <td><?= 'no_perjalanan' ?></td>
      <td><?= 'nama_rs' ?></td>
      <td><?= 'estimasi_beban' ?></td>
      <td><?= 'no_plat' ?></td>
      <td><?= 'nama_supir' ?></td>
      <td><?= 'urutan_tujuan' ?></td>
      <td><?= 'status' ?></td>
      <td><?= 'tanggal' ?></td>
     </tr> -->
<?php
/* @var $this BarangMasukController */
/* @var $model BarangMasuk */

$this->breadcrumbs=array(
	'Jadwals'=>array('index'),
	$model->id,
);

// $this->menu=array(
// 	array('label'=>'List BarangMasuk', 'url'=>array('index')),
// 	array('label'=>'Create BarangMasuk', 'url'=>array('create')),
// 	array('label'=>'Update BarangMasuk', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete BarangMasuk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage BarangMasuk', 'url'=>array('admin')),
// );
?>
<font size="3px" color="black">
<!-- <h1>Surat Manifes #<?php echo $model->id; ?></h1> -->
<p>Surat ini dikeluarkan oleh PT Jalan Hijau sebagai maksud pengambilan limbah B3 dengan keterangan sebagai berikut.</p>
<br>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		// 'id',
		'no_perjalanan',
        'nama_rs',
        'alamat',
        'estimasi_beban',
        'no_plat',
        'nama_supir',
        'urutan_tujuan',
        // 'status',
        'tanggal',

  
	),
)); ?>
<table class="container">
  <tr>
  <th width="350px">(Aktual) Beban Angkut Limbah : ..................</th> 
  <th width="1000px">[KG]</th>
</tr>
</table>

<br>
<br>
<!-- <table class="row">
  <tr>
  <th width="100px"><?php echo $model->nama_supir; ?></th>
  <th width="100px"><?php echo $model->nama_rs; ?></th>
  <th width="100px"><?php echo $model->nama_supir; ?></th>
  </tr>
</table>

<table class="row">
  <td width="100px">Pelaksana</td>
  <td width="200px">Pihak Rumah Sakit</td>
  <td width="200px">Pelaksana</td>
</table> -->
      <div style="text-align: right;">
        <p>Jakarta, <?php echo date('d/m/Y') ?></p>
      </div>
      <div class="container">
        <table  width="1100px">
        <tr>
        <th width="500px">Pelaksana</th>
        <th width="500px">Pihak Rumah Sakit</th>
        <th width="200px">General Manajer</th>
        </tr>
        </table>
      </div>
      <br><br><br><br>
      <div class="container">
        <table  width="1100px">
        <tr>
          <th width="500px"><?php echo $model->nama_supir; ?></th>
          <th width="500px"><?php echo $model->nama_rs; ?></th>
          <th width="200px">Muhamad Firdaus</th>
        </tr>
      </div>