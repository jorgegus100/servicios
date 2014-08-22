<?php
/* @var $this TutorController */
/* @var $model Tutor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tutor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomTutor'); ?>
		<?php echo $form->textField($model,'nomTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellTutor'); ?>
		<?php echo $form->textField($model,'apellTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direcTutor'); ?>
		<?php echo $form->textField($model,'direcTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direcTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciTutor'); ?>
		<?php echo $form->textField($model,'ciTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ciTutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->