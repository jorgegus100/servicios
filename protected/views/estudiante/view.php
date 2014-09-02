<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->idEstudiante,
);

$this->menu=$this->menuEstudiantes;
?>

<h1>Datos Estudiante <?php echo $model->nomEstudiante.' '.$model->apellEstudiante.' '.$model->secApellEstudante; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(

		'nomEstudiante',
		'apellEstudiante',
		'secApellEstudante',
		'ciEstudiante',
		'idTutor',
		'sexEstudiante',
		'nacEstudiante',
		'cursoEstudiante',
		'etapaEstudiante',
		'numCasaEstudiante',
		'pisoEstudiante',
		'provinciaEstudiante',
		'LocalidadEst',
		'calleEstudiante',
		'codPostalEst',
		'paisEst',
		'idCentroEst',
		'telEstudiante',
		'emailEstudiante',
		'nroCuentaEst',
		'dietaEstudiante',
		'nutricionEst',
		'tel2Estudiante',
		'menuEst',
		'comidaEst',
		'desayunoEst',
		'becaEst',
		'descuentoEst',
		'diasEstudiante',
	),
)); ?>
