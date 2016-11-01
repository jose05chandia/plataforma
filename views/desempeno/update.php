<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Desempeno */

$this->title = 'Actualizando Desempeño ' ;
$this->params['breadcrumbs'][] = ['label' => 'Desempenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizando Desempeño';
?>
<div class="desempeno-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
