<?php
/* @var $this CentrosController */
/* @var $model Centros */

$this->breadcrumbs=array(
	'Centroses'=>array('index'),
	$model->idCentro=>array('view','id'=>$model->idCentro),
	'Update',
);

$this->menu=array(
	array('label'=>'List Centros', 'url'=>array('index')),
	array('label'=>'Create Centros', 'url'=>array('create')),
	array('label'=>'View Centros', 'url'=>array('view', 'id'=>$model->idCentro)),
	array('label'=>'Manage Centros', 'url'=>array('admin')),
);
?>

<h1>Update Centros <?php echo $model->idCentro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>