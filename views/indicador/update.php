<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indicador */

$this->title = 'Actualizando Indicador ' ;
$this->params['breadcrumbs'][] = ['label' => 'Indicadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->descripcion, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indicador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
