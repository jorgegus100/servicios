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

	<div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model,'nomEstudiante',array('class'=>'span6')); ?>
            <?php echo $form->textField($model,'nomEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'nomEstudiante',array('class'=>'span12')); ?>
        </div>

        <div class="span4">
            <?php echo $form->labelEx($model,'apellEstudiante',array('class'=>'span6')); ?>
            <?php echo $form->textField($model,'apellEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'apellEstudiante',array('class'=>'span12')); ?>
        </div>

        <div class="span4">
            <?php echo $form->labelEx($model,'secApellEstudante',array('class'=>'span6')); ?>
            <?php echo $form->textField($model,'secApellEstudante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'secApellEstudante',array('class'=>'span12')); ?>
        </div>
    </div>


    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model,'ciEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'ciEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'ciEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'sexEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'sexEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'sexEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'nacEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'nacEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'nacEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'paisEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'paisEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'paisEst',array('class'=>'span12')); ?>
        </div>

    </div>

    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->labelEx($model,'cursoEstudiante',array('class'=>'span6')); ?>
            <?php echo $form->textField($model,'cursoEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'cursoEstudiante',array('class'=>'span12')); ?>
        </div>

        <div class="span6">
            <?php echo $form->labelEx($model,'etapaEstudiante',array('class'=>'span6')); ?>
            <?php echo $form->textField($model,'etapaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'etapaEstudiante',array('class'=>'span12')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->labelEx($model,'calleEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'calleEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'calleEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'numCasaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'numCasaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'numCasaEstudiante',array('class'=>'span12')); ?>
        </div>

        <div class="span3">
            <?php echo $form->labelEx($model,'pisoEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'pisoEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'pisoEstudiante',array('class'=>'span12')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model,'provinciaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'provinciaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'provinciaEstudiante',array('class'=>'span12')); ?>
        </div>

        <div class="span4">
            <?php echo $form->labelEx($model,'LocalidadEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'LocalidadEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'LocalidadEst',array('class'=>'span12')); ?>
        </div>
        <div class="span4">
            <?php echo $form->labelEx($model,'codPostalEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'codPostalEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'codPostalEst',array('class'=>'span12')); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->labelEx($model,'emailEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'emailEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'emailEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'telEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'telEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'telEstudiante',array('class'=>'span12')); ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model,'tel2Estudiante',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'tel2Estudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'tel2Estudiante',array('class'=>'span12')); ?>
        </div>

    </div>

    <div class="row-fluid">
        <div class="span12">
            <?php echo $form->labelEx($model,'dietaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->textArea($model,'dietaEstudiante',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'dietaEstudiante',array('class'=>'span12')); ?>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->labelEx($model,'menuEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'menuEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'menuEst',array('class'=>'span12')); ?>
        </div>

        <div class="span4">
            <?php echo $form->labelEx($model,'comidaEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'comidaEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'comidaEst',array('class'=>'span12')); ?>
        </div>

        <div class="span4">
            <?php echo $form->labelEx($model,'desayunoEst',array('class'=>'span12')); ?>
            <?php echo $form->textField($model,'desayunoEst',array('class'=>'span12')); ?>
            <?php echo $form->error($model,'desayunoEst',array('class'=>'span12')); ?>
        </div>
    </div>
<div class="row-fluid">
    <div class="span4">
        <?php echo $form->labelEx($model,'becaEst',array('class'=>'span12')); ?>
        <?php echo $form->textField($model,'becaEst',array('class'=>'span12')); ?>
        <?php echo $form->error($model,'becaEst',array('class'=>'span12')); ?>
    </div>

    <div class="span4">
        <?php echo $form->labelEx($model,'descuentoEst',array('class'=>'span12')); ?>
        <?php echo $form->textField($model,'descuentoEst',array('class'=>'span12')); ?>
        <?php echo $form->error($model,'descuentoEst',array('class'=>'span12')); ?>
    </div>
    <div class="span4">
        <?php echo $form->labelEx($model,'nroCuentaEst',array('class'=>'span12')); ?>
        <?php echo $form->textField($model,'nroCuentaEst',array('class'=>'span12')); ?>
        <?php echo $form->error($model,'nroCuentaEst',array('class'=>'span12')); ?>
    </div>
</div>


	<div class="row">
		<?php echo $form->labelEx($model,'idCentroEst'); ?>
		<?php echo $form->textField($model,'idCentroEst'); ?>
		<?php echo $form->error($model,'idCentroEst'); ?>
	</div>










    <div class="row-fluid">
	<div class="row">
		<?php echo $form->labelEx($model,'nutricionEst'); ?>
		<?php echo $form->textField($model,'nutricionEst',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nutricionEst'); ?>
	</div>






    </div>



	<div class="row">
		<?php echo $form->labelEx($model,'diasEstudiante'); ?>
		<?php echo $form->textField($model,'diasEstudiante',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'diasEstudiante'); ?>
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