<?php
/* @var $this TutorController */
/* @var $model Tutor */

$this->breadcrumbs=array(
	'Tutors'=>array('index'),
	$model->idTutor,
);

$this->menu=array(
	array('label'=>'List Tutor', 'url'=>array('index')),
	array('label'=>'Create Tutor', 'url'=>array('create')),
	array('label'=>'Update Tutor', 'url'=>array('update', 'id'=>$model->idTutor)),
	array('label'=>'Delete Tutor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTutor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tutor', 'url'=>array('admin')),
);
?>

<h1>View Tutor #<?php echo $model->idTutor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTutor',
		'nomTutor',
		'apellTutor',
		'direcTutor',
		'ciTutor',
	),
)); ?>
