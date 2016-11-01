<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubcompetenciaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subcompetencias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcompetencia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Subcompetencia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'descripcion',
            'idCompetenciaFk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
