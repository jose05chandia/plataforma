<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */

$this->title = 'Actualizando Competencia ';
$this->params['breadcrumbs'][] = ['label' => 'Competencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="competencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
