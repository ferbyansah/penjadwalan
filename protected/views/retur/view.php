<?php
/* @var $this ReturController */
/* @var $model Retur */

$this->breadcrumbs=array(
	'Barang Keluars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Retur', 'url'=>array('index')),
	array('label'=>'Create Retur', 'url'=>array('create')),
	array('label'=>'Update Retur', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Retur', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Retur', 'url'=>array('admin')),
);
?>

<h1>View Retur #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_barang',
		'jumlah',
		'tanggal',
		'user_id',
	),
)); ?>
