<?php
/* @var $this RecibosController */
/* @var $data Recibos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRecibos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRecibos), array('view', 'id'=>$data->idRecibos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colegio')); ?>:</b>
	<?php echo CHtml::encode($data->colegio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alumno')); ?>:</b>
	<?php echo CHtml::encode($data->alumno); ?>
	<br />


</div>