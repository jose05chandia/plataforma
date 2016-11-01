<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Competencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="competencia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nombre',
            'descripcion',
            'imagen',
			
        ],
    ]) ?>

	
		<a href="#" data-rel="colorbox">
			<img width="200" height="150" alt="150x150" src="/plataforma/views/site/images/<?php echo $model->imagen;?>" />
			<div class="text">
				<div class="inner"><?php echo $model->nombre;?></div>
			</div>
		</a>
</div>
