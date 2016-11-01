<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Desempeno */

$this->title = 'Creando Desempeño';
$this->params['breadcrumbs'][] = ['label' => 'Desempenos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desempeno-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
