<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nivelindicador */

$this->title = 'Creando Nivel de indicador';
$this->params['breadcrumbs'][] = ['label' => 'Niveles de indicador', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nivelindicador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
