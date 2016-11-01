<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Competencia */
/* @var $form ActiveForm */

$this->title = 'Eval. Compentencias Gen. Práctica';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ecpp">

    <div class="page-header">
		<h1>Evaluación de las Competencias Genéricas en la Práctica Profesional </h1>
	</div>
	
	<div class="col-sm-12">
										<div class="widget-box transparent" id="recent-box">
											<div class="widget-header">
												
												
												
												
												<p>
													Estimados supervisores o encargados de práctica por favor evalúe el desempeño de los estudiantes,  
													en el caso que tenga alguna duda sobre el desempeño, por favor consulte con las personas que 
													trabajaron en el entorno del estudiante, pares, superiores u otros.  
												</p>
													<br>
												<div class="widget-toolbar no-border">
													<ul class="nav nav-tabs" id="recent-tab">
														<li class="active">
															<a data-toggle="tab" href="#cg1">Disposición para el Aprendizaje</a>
														</li>

														<li>
															<a data-toggle="tab" href="#cg2">Responsabilidad Social</a>
														</li>

														<li>
															<a data-toggle="tab" href="#cg3">Trabajo Colaborativo</a>
														</li>
														
														<li>
															<a data-toggle="tab" href="#cg4">Capacidad Emprendedora y Liderazgo</a>
														</li>
														
														<li>
															<a data-toggle="tab" href="#cg5">Capacidad para Comunicarse</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div class="tab-content padding-8">
														<div id="cg1" class="tab-pane active">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																Disposición para el Aprendizaje
															</h4>

															<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Criterios sobre el estudiante</th>
													<th class="center">7</th>
													<th class="center">6</th>
													<th class="center">5</th>
													<th class="center">4</th>
													<th class="center">3</th>
													<th class="center">2</th>
													<th class="center">1</th>
													<th class="center">0 (No observado)</th>
												</tr>
											</thead>

											<tbody>
												

												

												
												<tr>
													

													<td >
														1.	Hace consultas  sobre los aspectos  técnicos formales o cotidianos  que no entiende. 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												
												
												
												<tr>
													

													<td >
														2.	Indaga o investiga  en fuentes bibliográficas  o manuales sobre los aspectos técnicos que enfrenta en su trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												<tr>
													

													<td >
														3.	Reconoce sus debilidades y fortalezas frente a una tarea compleja .
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														4.	Organiza su tiempo en forma adecuada para realizar el trabajo encomendado.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														5.	Demuestra interés y motivación por las tareas que realiza.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														6.	Frente a una dificultad en el trabajo modifica su accionar en busca de lograr la tarea.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														7.	En la interacción cotidiana con sus pares demuestra conocimiento de la actualidad nacional y de la  empresa en que trabaja.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												<tr>
													

													<td >
														8.	Demuestra manejo de las tecnologías informáticas básicas (Word, Excel, PowerPoint e internet). 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														9.	En la interacción con otros demuestra conocer aspectos sobre la cultura nacional y regional.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="da9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

															<!-- /section:pages/dashboard.tasks -->
														</div>
				
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														
														<div id="cg2" class="tab-pane ">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																Responsabilidad Social
															</h4>

															<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Criterios sobre el estudiante</th>
													<th class="center">7</th>
													<th class="center">6</th>
													<th class="center">5</th>
													<th class="center">4</th>
													<th class="center">3</th>
													<th class="center">2</th>
													<th class="center">1</th>
													<th class="center">0 (No observado)</th>
												</tr>
											</thead>

											<tbody>
												

												

												
												<tr>
													

													<td >
														1.	Es puntual en la hora de llegada y en la entrega de los trabajos asignados.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												
												
												
												<tr>
													

													<td >
														2.	Asume y reconoce en buena forma la responsabilidad que tiene en los trabajos asignados.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												<tr>
													

													<td >
														3.	Se preocupa por mantener su medio ambiente laboral ordenado y en las condiciones adecuadas. 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														4.	Realiza acciones de cuidado y ahorro de los recursos básicos como energía y agua potable. 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														5.	Demuestra buena disposición para trabajar con personas de diferente condición social, sexual, étnica y religiosa.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														6.	Respeta a los superiores y a las demás personas de su entorno laboral.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="rs6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

															<!-- /section:pages/dashboard.tasks -->
														</div>
														
														
														<div id="cg3" class="tab-pane ">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																Trabajo Colaborativo
															</h4>

															<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Criterios sobre el estudiante</th>
													<th class="center">7</th>
													<th class="center">6</th>
													<th class="center">5</th>
													<th class="center">4</th>
													<th class="center">3</th>
													<th class="center">2</th>
													<th class="center">1</th>
													<th class="center">0 (No observado)</th>
												</tr>
											</thead>

											<tbody>
												

												

												
												<tr>
													

													<td >
														1.	Contribuye en la búsqueda de acuerdos cuando trabaja en equipos.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												
												
												
												<tr>
													

													<td >
														2.	Tiene facilidad relacionarse y trabajar con otras personas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												<tr>
													

													<td >
														3.	Expone opiniones diferentes a las que tiene los demás. 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														4.	Discute en forma adecuada los puntos de vista presentados por los demás. 
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>
												
												
												<tr>
													

													<td >
														5.	Reconoce los aportes de los demás para solucionar un problema.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												<tr>
													

													<td >
														6.	Respeta las opiniones de los demás aun cuando difiera con las opiniones o ideas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="tc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

															<!-- /section:pages/dashboard.tasks -->
														</div>
														
														
														<div id="cg4" class="tab-pane ">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																Capacidad Emprendedora y Liderazgo
															</h4>

															<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Criterios sobre el estudiante</th>
													<th class="center">7</th>
													<th class="center">6</th>
													<th class="center">5</th>
													<th class="center">4</th>
													<th class="center">3</th>
													<th class="center">2</th>
													<th class="center">1</th>
													<th class="center">0 (No observado)</th>
												</tr>
											</thead>

											<tbody>
												

												

												
												<tr>
													

													<td >
														1.	Demuestra perseverancia frente a las dificultades del trabajo asignado.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>

												
												
												
												
												<tr>
													

													<td >
														2.	Facilita la participación a los demás integrantes del equipo de trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
												</tr>

												
												<tr>
													

													<td >
														3.	Asume en buena forma las consecuencias de sus acciones personales en el trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												<tr>
													

													<td >
														4.	Tiene facilidad  para buscar alguna solución  a los problemas en su trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												<tr>
													

													<td >
														5.	Es constante y finaliza en buena forma las tareas  asignadas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												<tr>
													

													<td >
														6.	Transmite entusiasmo cuando trabaja con sus pares en las tareas asignadas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												<tr>
													

													<td >
														7.	Reconoce sus fortalezas y debilidades al  enfrentar la tarea encomendada.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												<tr>
													

													<td >
														8.	Se adapta con facilidad cuando debe enfrentar nuevas tareas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												<tr>
													

													<td >
														9.	Se esfuerza en resolver situaciones complejas durante las tareas asignadas.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cel9" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

															<!-- /section:pages/dashboard.tasks -->
														</div>
														
														
														<div id="cg5" class="tab-pane ">
															<h4 class="smaller lighter green">
																<i class="ace-icon fa fa-list"></i>
																Capacidad para Comunicarse
															</h4>

															<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th>Criterios sobre el estudiante</th>
													<th class="center">7</th>
													<th class="center">6</th>
													<th class="center">5</th>
													<th class="center">4</th>
													<th class="center">3</th>
													<th class="center">2</th>
													<th class="center">1</th>
													<th class="center">0 (No observado)</th>
												</tr>
											</thead>

											<tbody>
												

												

												
												<tr>
													

													<td >
														1.	Expresa con facilidad sus ideas, opiniones y /o criticas frente a los demás.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc1" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>

												
												
												
												
												<tr>
													

													<td >
														2.	Demuestra facilidad  para hablar en público.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc2" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>

												
												<tr>
													

													<td >
														3.	Expone con facilidad los resultados de sus trabajos  frente a los demás.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc3" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												<tr>
													

													<td >
														4.	Los informes escritos son de buena calidad, coherentes  y sin faltas de ortografía.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc4" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												<tr>
													

													<td >
														5.	Controla sus emosiones y nerviosismo al presentar los informes en forma verbal.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc5" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												
												<tr>
													

													<td >
														6.	Respeta su turno para hablar en las reuniones de trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc6" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
												</tr>
												
												
												
												<tr>
													

													<td >
														7.	Expresa en buena forma sus puntos de vista y requerimientos en el trabajo.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc7" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>
												
												<tr>
													

													<td >
														8.	Maneja en buena forma sus expresiones verbales y no verbales al comunicarse con los demás.
													</td>

													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													<td class="center">
														<label class="pos-rel">
															<input type="radio" name="cc8" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
													
													
													
												</tr>

												
											</tbody>
										</table>
									</div><!-- /.span -->
								</div><!-- /.row -->

															<!-- /section:pages/dashboard.tasks -->
														</div>
														

														
													</div>
												</div><!-- /.widget-main -->
											</div><!-- /.widget-body -->
										</div><!-- /.widget-box -->
									</div><!-- /.col -->

</div><!-- ecpp -->
<div class="form-group">
										<label class="col-sm-1 control-label no-padding-right" >  </label>

										<div class="col-sm-4">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Enviar
											</button>
										</div>
									</div>