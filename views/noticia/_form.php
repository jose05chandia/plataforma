<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
//use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */
/* @var $form yii\widgets\ActiveForm */
?>


<?php  
	date_default_timezone_set("America/Santiago");
	$fec= date("d/m/Y").' '.date("h:i:s");
			
?>	

<div class="noticia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'titulo')->textInput() ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <?= $form->field($model, 'imagen')->textInput() ?>

    <?= $form->field($model, 'fechaCreacion')->textInput()?>
	
<!--	<?= $form->field($model, 'fechaCreacion')->hiddenInput(['value'=>$fec])->label(false);?>-->
	
	



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
								
														
												