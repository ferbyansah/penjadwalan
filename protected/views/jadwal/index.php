<?php
/* @var $this BarangMasukController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barang Masuk',
);

// $this->menu=array(
// 	array('label'=>'Create BarangMasuk', 'url'=>array('create')),
// 	array('label'=>'Manage BarangMasuk', 'url'=>array('admin')),
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
  $q = mysqli_query($koneksi, "SELECT * FROM barang_masuk WHERE tanggal BETWEEN '$date1' and '$date2'"); 
 } else {
  // perintah tampil semua data
  $q = mysqli_query($koneksi, "SELECT * FROM barang_masuk"); 
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
}

?>
<font color="black">
<div class="container mt-5 mx-auto">
<center><h3><img width="60px" height="60px" src="images/sahabat1.jpg">  PT.Sahabat Langit Indonesia</br>
	<h5>Jl. Pulo Asem Utara 5, No. 18, Rt.010/Rw.001, Kel. Jati, Kec. Pulogadung,</br>Kota. Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</h5>
	<h3>Barang Masuk</h3>
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
      <th>Jumlah Di Pesan</th>
      <th>Jumlah Di Terima</th>
      <th>Asal</th>
      <th>Tanggal</th>
     </tr>

     <?php
     
     $no = 1;

     while ($r = $q->fetch_assoc()) {
     ?>

     <tr>
      <td><?= $no++ ?></td>
      <td><?= ucwords($r['nama_barang']) ?></td>
      <td><?= $r['dipesan'] ?></td>
      <td><?= $r['jumlah'] ?></td>
      <td><?= $r['asal'] ?></td>
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

<!-- <center><h3>DATA KESELURUHAN</h3></center>
<div class="container">
<font color="black"></center>
</div>

<div class="container">
 <table class="table" table border="1" width="600px" > -->
	<!-- <div class="col-md-12"> -->
			<!-- <table class="table table-bordered" style="margin-bottom: 5px" >
				<thead>
			      <tr>
			        <th width="100px">Nama Barang</th>
			        <th width="100px">Jumlah</th>
			        <th width="120px">Tanggal</th>
			      </tr>
   				 </thead>
   			</div>
		</div> -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
