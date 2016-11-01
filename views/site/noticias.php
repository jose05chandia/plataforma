<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Noticia ;
/* @var $this yii\web\View */
/* @var $model app\models\Noticia 

/* @var $form ActiveForm */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticias">

		<div class="page-header">
		<h1>Noticias</h1>
	</div>
	
		<!--Listado NOTICIAS-->
				<div class="">
					<div class="row">
						
						<?php  								
						$noticias = Noticia::find()->all();
						foreach($noticias as $not){
							//echo $not2->titulo;
						?>
						<div class="col-sm-3 col-md-4">
							<div class="post">
								<div class="">
								
									<span class="post-title">
										<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$not->id;?>" ><b><?php echo $not->titulo;?></b></a>
										<br/>
									</span>
									   <div class="center">
									<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$not->id;?>" ><img width="350" height="170" src="/plataforma/views/site/noticias/<?php echo $not->imagen;?>" class="" /></a>
									</div>
								</div>
								<div class="content">
									<div class="author">
									<?php echo $not->fechaCreacion;?>
									</div>
									<div>
									   <?php echo substr($not->descripcion,0,90).'...';?>
									</div>
									<div>
										<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$not->id;?>" class="btn btn-info btn-sm">Ver más</a>
									</div>
								</div>
							</div>
						</div>   
	   
						<?php  								
						}
						?>		
					</div>
					

				</div>
				<!--Fin Listado NOTICIAS-->

</div><!-- noticias -->
	<style type="text/css">
		.post
{
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 0 0 1px #CCC;
}

.post .content
{
    padding: 15px;
}
.post .author
{
    font-size: 11px;
    color: #737373;
    padding: 25px 30px 20px;
}

	
			.post .post-img-content img
		{
			position: absolute;
		}
		.post .post-title
		{
			display: table-cell;
			vertical-align: bottom;
			z-index: 2;
			position: relative;
		}
		.post .post-title b
		{
			background-color: rgba(51, 51, 51, 0.58);
			display: inline-block;
			margin-bottom: 5px;
			color: #FFF;
			padding: 10px 15px;
			margin-top: 5px;
		}
	</style>