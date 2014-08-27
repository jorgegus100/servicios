<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->idEstudiante,
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'Update Estudiante', 'url'=>array('update', 'id'=>$model->idEstudiante)),
	array('label'=>'Delete Estudiante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEstudiante),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
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
