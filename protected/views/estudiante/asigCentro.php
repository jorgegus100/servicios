

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'centros-grid',
	'dataProvider'=>$modelCSearch->search(),
	'filter'=>$modelCSearch,
	'columns'=>array(

		'nomCentro',
		'calleCentro',
		'numDomCentro',
		'pisoCentro',
		'telfCentro',
		/*
		'faxCentro',
		'emailCentro',
		'expedienteCentro',
		'loteCentro',
		'provCentro',
		'localidadCentro',
		'personalCentro',
		'codPostalCentro',
		'cifCentro',
		'codigoCentro',
		'respCreacionCentro',
		*/
        array(
            'template'=>'{Asignar}',
            'class'=>'CButtonColumn',
            'buttons'=>array(
                'Asignar'=>array(
                    'url'=>'$this->grid->controller->createUrl("/estudiante/update",array("idCentro"=>$data->primaryKey,"id"=>'.$model->idEstudiante.'))',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/themes/blackboot/img/Ok-icon.png',
                ),

            ),
        ),
	),
)); ?>
