<?php
/* @var $this TutorController */
/* @var $model Tutor */

$this->breadcrumbs=array(
	'Tutors'=>array('index'),
	'Manage',
);

$this->menu=$this->menuEstudiantes;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tutor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Tutores</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tutor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		'nomTutor',
		'apellTutor',
		'apell2Tutor',
		'direcTutor',
		'dniTutor',
		/*
		'sexoTutor',
		'relAlumTutor',
		'principalTutor',
		'calleTutor',
		'numCasaTutor',
		'pisoTutor',
		'provinciaTutor',
		'localidadTutor',
		'codPostalTutor',
		*/
		'telfTutor',
		'telf2Tutor',
		'emailTutor',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
