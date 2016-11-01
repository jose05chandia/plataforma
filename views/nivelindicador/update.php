<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nivelindicador */

$this->title = 'Actualizando Nivel de indicador: ' . $model->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Niveles de indicador', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizando';
?>
<div class="nivelindicador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
