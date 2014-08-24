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
		<?php echo $form->labelEx($model,'apell2Tutor'); ?>
		<?php echo $form->textField($model,'apell2Tutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'apell2Tutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direcTutor'); ?>
		<?php echo $form->textField($model,'direcTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direcTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dniTutor'); ?>
		<?php echo $form->textField($model,'dniTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dniTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexoTutor'); ?>
		<?php echo $form->textField($model,'sexoTutor'); ?>
		<?php echo $form->error($model,'sexoTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relAlumTutor'); ?>
		<?php echo $form->textField($model,'relAlumTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'relAlumTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'principalTutor'); ?>
		<?php echo $form->textField($model,'principalTutor'); ?>
		<?php echo $form->error($model,'principalTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calleTutor'); ?>
		<?php echo $form->textField($model,'calleTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'calleTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numCasaTutor'); ?>
		<?php echo $form->textField($model,'numCasaTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numCasaTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pisoTutor'); ?>
		<?php echo $form->textField($model,'pisoTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pisoTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinciaTutor'); ?>
		<?php echo $form->textField($model,'provinciaTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'provinciaTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidadTutor'); ?>
		<?php echo $form->textField($model,'localidadTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'localidadTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codPostalTutor'); ?>
		<?php echo $form->textField($model,'codPostalTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codPostalTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telfTutor'); ?>
		<?php echo $form->textField($model,'telfTutor'); ?>
		<?php echo $form->error($model,'telfTutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telf2Tutor'); ?>
		<?php echo $form->textField($model,'telf2Tutor'); ?>
		<?php echo $form->error($model,'telf2Tutor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailTutor'); ?>
		<?php echo $form->textField($model,'emailTutor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emailTutor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->