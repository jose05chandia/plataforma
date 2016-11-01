<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Indicador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <!--<?= $form->field($model, 'idNivelIndicadorFk')->textInput() ?>-->
	
	<!--Lista desplegable-->
	<?php $dataCategory=ArrayHelper::map(\app\models\Nivelindicador::find()->asArray()->all(), 'id', 'descripcion'); ?>
	  <?=	$form->field($model, 'idNivelIndicadorFk')->dropDownList($dataCategory, 
             ['prompt'=>'-Seleccione un nivel-',
              'onchange'=>'
                $.post( "'.Yii::$app->urlManager->createUrl('post/lists?id=').'"+$(this).val(), function( data ) {
                  $( "select#title" ).html( data );
                });
            ']); 
	  ?>

    <!--<?= $form->field($model, 'idDesempenoFk')->textInput() ?>-->
	
	<!--Lista desplegable-->
	<?php $dataCategory=ArrayHelper::map(\app\models\Desempeno::find()->asArray()->all(), 'id', 'descripcion'); ?>
	  <?=	$form->field($model, 'idDesempenoFk')->dropDownList($dataCategory, 
             ['prompt'=>'-Seleccione un desempeno-',
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
