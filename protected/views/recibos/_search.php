<?php
/* @var $this RecibosController */
/* @var $model Recibos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRecibos'); ?>
		<?php echo $form->textField($model,'idRecibos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colegio'); ?>
		<?php echo $form->textField($model,'colegio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alumno'); ?>
		<?php echo $form->textField($model,'alumno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->