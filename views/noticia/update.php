<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */

$this->title = 'Actualizando Noticia ' ;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fechaCreacion, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizando Noticia';
?>
<div class="noticia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
