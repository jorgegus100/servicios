<?php
/* @var $this CentrosController */
/* @var $model Centros */

$this->breadcrumbs=array(
	'Centroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Centros', 'url'=>array('index')),
	array('label'=>'Manage Centros', 'url'=>array('admin')),
);
?>

<h1>Create Centros</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>