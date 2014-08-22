<?php
/* @var $this TutorController */
/* @var $model Tutor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTutor'); ?>
		<?php echo $form->textField($model,'idTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomTutor'); ?>
		<?php echo $form->textField($model,'nomTutor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellTutor'); ?>
		<?php echo $form->textField($model,'apellTutor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direcTutor'); ?>
		<?php echo $form->textField($model,'direcTutor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciTutor'); ?>
		<?php echo $form->textField($model,'ciTutor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->