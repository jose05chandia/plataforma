<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Desempeno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desempeno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <!--<?= $form->field($model, 'idSubcompetenciaFk')->textInput() ?>-->
	
	<!--Lista desplegable-->
	<?php $dataCategory=ArrayHelper::map(\app\models\Subcompetencia::find()->asArray()->all(), 'id', 'descripcion'); ?>
	  <?=	$form->field($model, 'idSubcompetenciaFk')->dropDownList($dataCategory, 
             ['prompt'=>'-Seleccione una subcompetencia-',
              'onchange'=>'
                $.post( "'.Yii::$app->urlManager->createUrl('post/lists?id=').'"+$(this).val(), function( data ) {
                  $( "select#title" ).html( data );
                });
            ']); 
	  ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
