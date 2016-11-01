<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Desempeno */

$this->title = $model->descripcion;
$this->params['breadcrumbs'][] = ['label' => 'Desempenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desempeno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Estás seguro/a de eliminar?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'descripcion',
            'idSubcompetenciaFk',
        ],
    ]) ?>

</div>
