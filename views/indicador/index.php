<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicador-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Indicador', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'descripcion',
            'idNivelIndicadorFk',
            'idDesempenoFk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
