<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estudiante-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomEstudiante'); ?>
		<?php echo $form->textField($model,'nomEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellEstudiante'); ?>
		<?php echo $form->textField($model,'apellEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apellEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciEstudiante'); ?>
		<?php echo $form->textField($model,'ciEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ciEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idTutor'); ?>
		<?php echo $form->textField($model,'idTutor'); ?>
		<?php echo $form->error($model,'idTutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->