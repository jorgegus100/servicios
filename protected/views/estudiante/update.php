<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->idEstudiante=>array('view','id'=>$model->idEstudiante),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'View Estudiante', 'url'=>array('view', 'id'=>$model->idEstudiante)),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

<h1>Update Estudiante <?php echo $model->idEstudiante; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>