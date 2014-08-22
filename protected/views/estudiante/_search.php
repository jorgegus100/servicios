<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEstudiante'); ?>
		<?php echo $form->textField($model,'idEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomEstudiante'); ?>
		<?php echo $form->textField($model,'nomEstudiante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellEstudiante'); ?>
		<?php echo $form->textField($model,'apellEstudiante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciEstudiante'); ?>
		<?php echo $form->textField($model,'ciEstudiante',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTutor'); ?>
		<?php echo $form->textField($model,'idTutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->