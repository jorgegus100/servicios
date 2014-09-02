<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);

$this->menu=$this->menuEstudiantes;
?>

<h1>Crear Estudiante</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>