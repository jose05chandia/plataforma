<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Indicador */

$this->title = $model->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Indicadors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicador-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estás segiro/a de elmiminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'descripcion',
            'idNivelIndicadorFk',
            'idDesempenoFk',
        ],
    ]) ?>

</div>
