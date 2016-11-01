<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subcompetencia */

$this->title = 'Actualizando Subcompetencia ' ;
$this->params['breadcrumbs'][] = ['label' => 'Subcompetencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizando Subcompetencia';
?>
<div class="subcompetencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
