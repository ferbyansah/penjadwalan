<?php
/* @var $this ReturController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Returs',
);

// $this->menu=array(
// 	array('label'=>'Create Retur', 'url'=>array('create')),
// 	array('label'=>'Manage Retur', 'url'=>array('admin')),
// );
?>
<?php 
 
$host = "localhost";
$user = "root";
$password = "";
$database = "rop_siak";
 
$koneksi = mysqli_connect($host,$user,$password,$database);

if (isset($_POST['submit'])) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if (!empty($date1) && !empty($date2)) {
  // perintah tampil data berdasarkan range tanggal
  $q = mysqli_query($koneksi, "SELECT * FROM retur WHERE tanggal BETWEEN '$date1' and '$date2'"); 
 } else {
  // perintah tampil semua data
  $q = mysqli_query($koneksi, "SELECT * FROM retur"); 
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($koneksi, "SELECT * FROM retur");
}

?>
<font color="black">
<div class="container mt-5 mx-auto">
<center><h3><img width="60px" height="60px" src="images/sahabat1.jpg">  PT.Sahabat Langit Indonesia</br>
	<h5>Jl. Pulo Asem Utara 5, No. 18, Rt.010/Rw.001, Kel. Jati, Kec. Pulogadung,</br>Kota. Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</h5>
	<h3>Barang Keluar</h3>
  <div class="card mt-5">
   <div class="card-body mx-auto">
    <form method="POST" action="" class="form-inline mt-3">
     <label for="date1">Tanggal </label>
     <input type="date" name="date1" id="date1" >
     <label for="date2">sampai </label>
     <input type="date" name="date2" id="date2" >
     <button type="submit" name="submit" class="button">Cari</button>
    </form>

    <table class="table">
     <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Tanggal</th>
     </tr>

     <?php
     
     $no = 1;

     while ($r = $q->fetch_assoc()) {
     ?>

     <tr>
      <td><?= $no++ ?></td>
      <td><?= ucwords($r['nama_barang']) ?></td>
      <td><?= $r['jumlah'] ?></td>
      <td><?= $r['tanggal'] ?></td>
     </tr>

     <?php   
     }
     ?>

    </table>
   </div>
  </div>
 </div>
<br>
<br>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
