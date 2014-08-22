<?php
/* @var $this TutorController */
/* @var $data Tutor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTutor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTutor), array('view', 'id'=>$data->idTutor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomTutor')); ?>:</b>
	<?php echo CHtml::encode($data->nomTutor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellTutor')); ?>:</b>
	<?php echo CHtml::encode($data->apellTutor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direcTutor')); ?>:</b>
	<?php echo CHtml::encode($data->direcTutor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciTutor')); ?>:</b>
	<?php echo CHtml::encode($data->ciTutor); ?>
	<br />


</div>