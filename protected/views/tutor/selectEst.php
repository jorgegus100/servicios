

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'estudiante-grid',
	'dataProvider'=>$modelESearch->search(),
	'filter'=>$modelESearch,
	'columns'=>array(

		'nomEstudiante',
		'apellEstudiante',
		'secApellEstudante',
		'ciEstudiante',

		/*
		'sexEstudiante',
		'nacEstudiante',
		'cursoEstudiante',
		'etapaEstudiante',
		'numCasaEstudiante',
		'pisoEstudiante',
		'provinciaEstudiante',
		'LocalidadEst',
		'calleEstudiante',
		'codPostalEst',
		'paisEst',
		'idCentroEst',
		'telEstudiante',
		'emailEstudiante',
		'nroCuentaEst',
		'dietaEstudiante',
		'nutricionEst',
		'tel2Estudiante',
		'menuEst',
		'comidaEst',
		'desayunoEst',
		'becaEst',
		'descuentoEst',
		'diasEstudiante',
		*/
        array(
            'template'=>'{Asignar}',
            'class'=>'CButtonColumn',
            'buttons'=>array(
            'Asignar'=>array(
                    'url'=>'$this->grid->controller->createUrl("/analisis/selecAnalisis", array("idMed"=>$data->primaryKey,"id"=>'.$id.'))',
                    //'click'=>'',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/themes/mattskitchen/img/ActionsAss.png',
                ),
            ),
        ),
	),
)); ?>
