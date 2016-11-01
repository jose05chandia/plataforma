<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use app\models\Competencia;
use app\models\Noticia;
use yii\bootstrap\Nav;

$this->title = '';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
<!--
    <div class="">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>
	-->
	
	
	
	
	
				<div class="page-header">
					<h1>Competencias Genéricas</h1>
				</div>
	
	
				<!--Listado Competencias genéricas-->
				<div class="row">
					<div class="col-xs-12">
						<div>
							<ul class="ace-thumbnails clearfix">
								<?php  								
								$competencias = Competencia::find()->all();
								foreach($competencias as $comp){
										//echo $comp->nombre;
								?>										
								<li >
								
									<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=competencia/view&id='.$comp->id;?>" data-rel="colorbox">
										<img width="200" height="150" alt="150x150" src="/plataforma/views/site/images/<?php echo $comp->imagen;?>" />
										<div class="text">
										<div class="inner"><?php echo $comp->nombre;?></div>
										</div>
									</a>
								</li>									
								<?php									
								}								
								?>
							</ul>
						</div>
					</div>
				</div>
				<!--Fin Listado Competencias genéricas-->
	<br>
			
	<div class="page-header">
		<h1>Noticias</h1>
	</div>
	
		
	
		<!--Listado NOTICIAS-->
				<div class="">
					<div class="row">
					
						<?php  			
						
$connection = Yii::$app->getDb();
$command = $connection->createCommand('
    SELECT TOP 3 id,titulo, descripcion, imagen, fechaCreacion FROM noticia 
ORDER BY fechaCreacion DESC
');

$result = $command->queryAll();
	
						
						
						foreach($result as $r) {
							//echo $not2->titulo;
						?>
						<div class="col-sm-3 col-md-4">
							<div class="post">
								<div class="">
								
									<span class="post-title">
										<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$r['id'];?>" ><b><?php echo $r['titulo'];?></b></a>
										<br/>
									</span>
									   <div class="center">
									<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$r['id'];?>" ><img width="350" height="170" src="/plataforma/views/site/noticias/<?php echo $r['imagen'];?>" class="" /></a>
									</div>
								</div>
								<div class="content">
									<div class="author">
									<?php echo $r['fechaCreacion'];?>
									</div>
									<div>
									   <?php echo substr($r['descripcion'],0,90).'...';?>
									</div>
									<div>
										<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=noticia/view&id='.$r['id'];?>" class="btn btn-info btn-sm">Ver más</a>
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
						
						
	

    
	
</div>








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
	
	
	
	