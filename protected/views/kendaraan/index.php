<?php
/* @var $this BarangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barangs',
);

// $this->menu=array(
// 	array('label'=>'Create Barang', 'url'=>array('create')),
// 	array('label'=>'Manage Barang', 'url'=>array('admin')),
// );
?>
<div class="container">
<font color="black"></center>
<b><?php echo date('d/m/Y') ?></b>
</div>
<center><h3><img width="60px" height="60px" src="images/sahabat1.jpg">  PT.Sahabat Langit Indonesia</br>
	<h5>Jl. Pulo Asem Utara 5, No. 18, Rt.010/Rw.001, Kel. Jati, Kec. Pulogadung,</br>Kota. Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</h5>
	<h3>Data Barang</h3>

<div class="container">
 <table class="table" table border="1" width="600px" >
	<!-- <div class="col-md-12"> -->
			<table class="table table-bordered" style="margin-bottom: 5px" >
				<thead>
			      <tr>
			        <th width="100px">Nama Barang</th>
			        <th width="100px">Stok Akhir (pcs)</th>
			        <th width="120px">Harga</th>
			        <th width="100px">Penggunaan Tahun</th>
					<th width="100px">Safety Stock</th>
					<th width="120px">Nama Supplier</th>
					<!-- <th width="100px">ROP</th> -->
					<!-- <th width="100px">EOQ</th> -->
			      </tr>
   				 </thead>
   			</div>
		</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
