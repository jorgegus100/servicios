<?php
/* @var $this EstudianteController */
/* @var $data Estudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstudiante')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEstudiante), array('view', 'id'=>$data->idEstudiante)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->nomEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->apellEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciEstudiante')); ?>:</b>
	<?php echo CHtml::encode($data->ciEstudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTutor')); ?>:</b>
	<?php echo CHtml::encode($data->idTutor); ?>
	<br />


</div>