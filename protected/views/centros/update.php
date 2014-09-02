<?php
/* @var $this CentrosController */
/* @var $model Centros */

$this->breadcrumbs=array(
	'Centroses'=>array('index'),
	$model->idCentro=>array('view','id'=>$model->idCentro),
	'Update',
);

$this->menu=$this->menuCentros;
?>

<h1>Modificar datos del Centro <?php echo $model->nomCentro; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>