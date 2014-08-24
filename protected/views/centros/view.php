<?php
/* @var $this CentrosController */
/* @var $model Centros */

$this->breadcrumbs=array(
	'Centroses'=>array('index'),
	$model->idCentro,
);

$this->menu=array(
	array('label'=>'List Centros', 'url'=>array('index')),
	array('label'=>'Create Centros', 'url'=>array('create')),
	array('label'=>'Update Centros', 'url'=>array('update', 'id'=>$model->idCentro)),
	array('label'=>'Delete Centros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCentro),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Centros', 'url'=>array('admin')),
);
?>

<h1>View Centros #<?php echo $model->idCentro; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCentro',
		'nomCentro',
		'calleCentro',
		'numDomCentro',
		'pisoCentro',
		'telfCentro',
		'faxCentro',
		'emailCentro',
		'expedienteCentro',
		'loteCentro',
		'provCentro',
		'localidadCentro',
		'personalCentro',
		'codPostalCentro',
		'cifCentro',
		'codigoCentro',
		'respCreacionCentro',
	),
)); ?>
