<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */
/* @var $form ActiveForm */

$this->title = 'Rúbrica Ejemplo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubrica">

   <div class="page-header">
		<h1>Rúbrica Ejemplo </h1>
	</div>
	
	
	
		
		
		<h2 class="widget-title lighter smaller">Nivel inicial (1)</h2>
		
		
		<div class="row">
										<div class="col-xs-12 col-lg-6">
											<div>
												<h3 class="widget-title lighter smaller">DISPOSICIÓN PARA EL APRENDIZAJE</h3>
											</div>
										</div>

										<div class="col-xs-12 col-lg-6">
											<div>
												<h3 class="widget-title lighter smaller">Subcompetencia</h3>
											</div>
										</div>
									</div>
			
			
	<span class="profile-picture">
	
	<div class="col-sm-12">
		
		
	
			
		
		<h3 >Desempeño</h3>
		<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Indicador</th>
													<th class="center">No logrado</th>
													<th class="center">Medianamente logrado</th>
													<th class="center">Logrado</th>
													<th class="center">Logrado con distinción</th>
													<th class="center">% de ponderación</th>
													
												</tr>
											</thead>

											<tbody>

												<tr>
													<td>
														1. Presenta una planificación de las actividades de aprendizaje autónomo y con los pares.
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<input type="number" min="0" max="100" step="5">
													</td>
													
													
												</tr>
												
												<tr>
													<td>
														2. Presenta una planificación de las actividades de aprendizaje autónomo y con los pares.
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<input type="number" min="0" max="100" step="5">
													</td>
													
													
												</tr>
												
												
												<tr>
													<td>
														3. Presenta una planificación de las actividades de aprendizaje autónomo y con los pares.
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<input type="number" min="0" max="100" step="5">
													</td>
													
													
												</tr>
												
												
												<tr>
													<td>
														4. Presenta una planificación de las actividades de aprendizaje autónomo y con los pares.
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<input type="number" min="0" max="100" step="5">
													</td>
													
													
												</tr>
												
												<tr>
													<td style="visibility:hidden"></td>
													<td style="visibility:hidden"></td>
													<td style="visibility:hidden"></td>
													<td style="visibility:hidden"></td>
													<td style="visibility:hidden"></td>
													<td class="center">100%</td>
												</tr>
												
												
											</tbody>
		
		</table>
		
				<span class="btn btn-app btn-sm btn-pink no-hover">
					<span class="line-height-1 bigger-170"> 3 </span>
					<br />
					<span class="line-height-1 smaller-90"> Nota final </span>
				</span>
				
				o
				
				<span class="btn btn-app btn-sm btn-primary no-hover">
					<span class="line-height-1 bigger-170"> 7 </span>
					<br />
					<span class="line-height-1 smaller-90"> Nota final </span>
				</span>
	</div>
	
</span>
	

</div><!-- rubrica -->
