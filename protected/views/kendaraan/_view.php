<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="container">
 <table class="table" table border="0" width="500px" >
    <tbody>
      <tr>
        <td width="100px"><?php echo CHtml::encode($data->nama_barang); ?></td>
        <td width="100px"><?php echo CHtml::encode($data->stok_akhir); ?></td>
        <td width="120px">Rp. <?php echo number_format($data->harga); ?></td>
        <td width="100px"><?php echo CHtml::encode($data->penggunaan_tahun); ?></td>
        <td width="100px"><?php echo CHtml::encode($data->safety_stok); ?></td>
        <td width="120px"><?php echo CHtml::encode($data->supplier); ?></td>
        <!-- <td width="100px"><?php echo CHtml::encode($data->rop); ?></td> -->
       <!--  <td width="100px"><?php echo CHtml::encode($data->eoq); ?></td> -->
      </tr>
    </tbody>
  </table>
</div>

<!-- <div class="table-responsive">
	<table class="table">
		<thead>
		<tr>
        <th>Nama Barang</th>
        <th>Stok Akhir</th>
        <th>Harga</th>
        <th>Penggunaan Tahun</th>
		<th>Safety Stock</th>
		<th>ROP</th>
		<th>EOQ</th>
		</thead>
    </tr>
    <tr>
        <td><?php echo CHtml::encode($data->nama_barang); ?></td>
        <td><?php echo CHtml::encode($data->stok_akhir); ?></td></td>
        <td><?php echo CHtml::encode($data->harga); ?></td>
        <td><?php echo CHtml::encode($data->penggunaan_tahun); ?></td>
        <td><?php echo CHtml::encode($data->safety_stok); ?></td>
        <td><?php echo CHtml::encode($data->rop); ?></td>
        <td><?php echo CHtml::encode($data->eoq); ?></td>
    </tr>
	</table> -->

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('kode_barang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_barang), array('view', 'id'=>$data->kode_barang)); ?>
	<br /> -->
	
	<!-- <h5>
	<td><b><?php echo CHtml::encode($data->getAttributeLabel('nama_barang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_barang); ?></td>
	
	</h5> -->

	<!-- <?php echo CHtml::encode($data->getAttributeLabel('satuan')); ?>:
	<?php echo CHtml::encode($data->satuan); ?>
	<br />
 	-->
	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('stok_akhir')); ?>:
	<?php echo CHtml::encode($data->stok_akhir); ?></td>
	 -->

	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>: Rp.
	<?php echo CHtml::encode($data->harga); ?></td> -->
	

	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('penggunaan_tahun')); ?>:
	<?php echo CHtml::encode($data->penggunaan_tahun); ?></td> -->


	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('safety_stok')); ?>:
	<?php echo CHtml::encode($data->safety_stok); ?></td> -->
	

	<!-- <?php echo CHtml::encode($data->getAttributeLabel('no_rak')); ?>:
	<?php echo CHtml::encode($data->safety_stok); ?>
	<br /> -->
	
	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('rop')); ?>:
	<?php echo CHtml::encode($data->rop); ?></td>
	 -->

	<!-- <td><?php echo CHtml::encode($data->getAttributeLabel('eoq')); ?>:
	<?php echo CHtml::encode($data->eoq); ?></td> -->
	


</table>
</div>