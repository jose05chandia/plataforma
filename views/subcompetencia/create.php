<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subcompetencia */

$this->title = 'Creando Subcompetencia';
$this->params['breadcrumbs'][] = ['label' => 'Subcompetencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subcompetencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
