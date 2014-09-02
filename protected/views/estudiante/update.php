<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->idEstudiante=>array('view','id'=>$model->idEstudiante),
	'Update',
);

$this->menu=$this->menuEstudiantes;
?>

<h1>Modificar datos de estudiante <?php echo $model->nomEstudiante.' '.$model->apellEstudiante; ?></h1>

<span>Centro Educativo <h1><?php echo $nombreCentro; ?></h1></span>

<?php
echo CHtml::link('Asignar Centro', '#', array(
    'onclick'=>'$("#mydialog").dialog("open"); return false;',
));

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id'=>'mydialog',
    // additional javascript options for the dialog plugin
    'options'=>array(
        'title'=>'Asignar Centro',
        'autoOpen'=>false,
        'width' => '600px',
        //'height' => '600px',
        'modal' => true,
        //'resizable' => true,


    ),
));


$this->renderPartial('asigCentro', array('modelCSearch'=>$modelCSearch, 'model'=>$model ));
$this->endWidget('zii.widgets.jui.CJuiDialog');

$this->renderPartial('_form', array('model'=>$model)); ?>