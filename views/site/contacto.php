<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */
/* @var $form ActiveForm */

$this->title = 'Contacto';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacto">

  <div class="page-header">
		<h1>Contacto</h1>
	</div>
	
	
	<div class="row">
							<div class="col-sm-6">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<table>
										<tr>
											<td>Teléfono: </td>
											<td>&nbsp;</td>
											<td>(42) 233445</td>
										</tr>
										<tr>
											<td>Email: </td>
											<td>&nbsp;</td>
											<td>ubiobio@ubiobio.cl</td>
										</tr>
										<tr>
											<td>Dirección: </td>
											<td>&nbsp;</td>
											<td>Av. Andrés Bello 720, Chillán, Chile.</td>
										</tr>
										<tr>
											<td>Facebook: </td>
											<td>&nbsp;</td>
											<td>www.facebook.com/ufi</td>
										</tr>
									</table>
									
									<br><br>
									<div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.9942055368647!2d-72.0792096!3d-36.6024486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad+del+BioBio+Campus+F.+May!5e0!3m2!1ses!2ses!4v1476940941994" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
							
							<div class="col-sm-6">
							 <div class="page-header">
								<h1>Envíanos un mensaje</h1>
							</div>
								<form class="form-horizontal" role="form">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" > Nombre </label>

										<div class="col-sm-9">
											<input type="text"  placeholder="Nombre" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" > Email </label>

										<div class="col-sm-9">
											<input type="text"  placeholder="Email" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" > Asunto </label>

										<div class="col-sm-9">
											<input type="text"  placeholder="Asunto" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" > Mensaje </label>

										<div class="col-sm-4">
											<textarea class="col-xs-5 col-sm-5 autosize-transition form-control" id="form-field-9" maxlength="200"></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" >  </label>

										<div class="col-sm-4">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Enviar
											</button>
										</div>
									</div>
									
									
									
								</form>
							</div>
						</div><!-- /.row -->
</div><!-- contacto -->
