<?php
/* @var $this RulesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supplier',
);

$this->menu=array(
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
);
?>

<h1>Supplier</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
