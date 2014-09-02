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

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

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
		<?php echo $form->labelEx($model,'secApellEstudante'); ?>
		<?php echo $form->textField($model,'secApellEstudante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'secApellEstudante'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'sexEstudiante'); ?>
		<?php echo $form->textField($model,'sexEstudiante'); ?>
		<?php echo $form->error($model,'sexEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nacEstudiante'); ?>
		<?php echo $form->textField($model,'nacEstudiante'); ?>
		<?php echo $form->error($model,'nacEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cursoEstudiante'); ?>
		<?php echo $form->textField($model,'cursoEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cursoEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etapaEstudiante'); ?>
		<?php echo $form->textField($model,'etapaEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'etapaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numCasaEstudiante'); ?>
		<?php echo $form->textField($model,'numCasaEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'numCasaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pisoEstudiante'); ?>
		<?php echo $form->textField($model,'pisoEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pisoEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'provinciaEstudiante'); ?>
		<?php echo $form->textField($model,'provinciaEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'provinciaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LocalidadEst'); ?>
		<?php echo $form->textField($model,'LocalidadEst',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'LocalidadEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calleEstudiante'); ?>
		<?php echo $form->textField($model,'calleEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'calleEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codPostalEst'); ?>
		<?php echo $form->textField($model,'codPostalEst'); ?>
		<?php echo $form->error($model,'codPostalEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paisEst'); ?>
		<?php echo $form->textField($model,'paisEst',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'paisEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telEstudiante'); ?>
		<?php echo $form->textField($model,'telEstudiante'); ?>
		<?php echo $form->error($model,'telEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailEstudiante'); ?>
		<?php echo $form->textField($model,'emailEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emailEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nroCuentaEst'); ?>
		<?php echo $form->textField($model,'nroCuentaEst'); ?>
		<?php echo $form->error($model,'nroCuentaEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dietaEstudiante'); ?>
		<?php echo $form->textField($model,'dietaEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dietaEstudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nutricionEst'); ?>
		<?php echo $form->textField($model,'nutricionEst',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nutricionEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel2Estudiante'); ?>
		<?php echo $form->textField($model,'tel2Estudiante'); ?>
		<?php echo $form->error($model,'tel2Estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menuEst'); ?>
		<?php echo $form->textField($model,'menuEst'); ?>
		<?php echo $form->error($model,'menuEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comidaEst'); ?>
		<?php echo $form->textField($model,'comidaEst'); ?>
		<?php echo $form->error($model,'comidaEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desayunoEst'); ?>
		<?php echo $form->textField($model,'desayunoEst'); ?>
		<?php echo $form->error($model,'desayunoEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'becaEst'); ?>
		<?php echo $form->textField($model,'becaEst'); ?>
		<?php echo $form->error($model,'becaEst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descuentoEst'); ?>
		<?php echo $form->textField($model,'descuentoEst'); ?>
		<?php echo $form->error($model,'descuentoEst'); ?>
	</div>

	<div class="span6">
		<?php echo $form->labelEx($model,'diasEstudiante',array("class"=>"span12")); ?>
        <?php echo CHtml::checkBoxList("weekdays","",array(
            "0"=>"Domingo",
            "1"=>"Lunes",
            "2"=>"Martes",
            "3"=>"Miercoles",
            "4"=>"Jueves",
            "5"=>"Viernes",
            "6"=>"Sabado",
        ),array("class"=>"span6"))
        ?>
		<?php echo $form->error($model,'diasEstudiante',array("class"=>"span12")); ?>
	</div>

	<div class="span12">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->