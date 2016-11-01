<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\Navbar;
use app\models\User;
use app\models\Competencia;
use yii\bootstrap\Nav;
use yii\widgets\Breadcrumbs;
//AppAsset::register($this);
$asset= app\assets\AppAsset::register($this);
$baseUrl=$asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
</head>
<body class="no-skin">
<?php $this->beginBody() ?>


<!---->
<div class="wrap">
    <?php
 
    /*echo Nav::widget([
       
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);*/
    
    ?>

   
</div>



<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							<!--Título head-->
							Plataforma 
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
				
					<ul class="nav ace-nav">
					
						<?php if(Yii::$app->user->isGuest){   ?>
						
						<li>
									<a href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=site/login';?> ">
										<i class="ace-icon fa fa-power-off"></i>
										Entrar
										
									</a>
									
									
									
								</li>
						
						<?php }else{ 
						
						
						echo Nav::widget([
       
        'items' => [
            (
                 '<a>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</a>'
                
            )
        ],
    ]);
						
						
						?>
						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="\plataforma\vendor\bower\plantilla\assets\avatars\user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Bienvenid@,</small>
									<?php 
									if(Yii::$app->user->identity->role==User::ESTUDIANTE){
										echo Yii::$app->user->identity->role;
										echo 'Estudiante';
									}
									if(Yii::$app->user->identity->role==User::DOCENTE){
										echo 'Docente';
									}
									
									if(Yii::$app->user->identity->role==User::ADMINISTRATIVO){
										echo 'Administrativo';
									}
										?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
								<!--<form action="/site/logout" method="">
								</form>
									<a href="/site/logout">
										<i class="ace-icon fa fa-power-off"></i>
										Salir
										
									</a>-->
									
									<?php echo '<a href="#"><i class="ace-icon fa fa-power-off"></i>salir'
                . Html::beginForm(['/site/logout'], 'post')
                .'ss'
                . Html::endForm()
                . '</a>'?>									
								</li>
							</ul>
						</li>
						<?php  }?>
						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				
				
				
				<!--MENU-->
				<ul class="nav nav-list">
				
					
					
					<li class="">						
							<!--<i class="menu-icon fa fa-list-alt"></i>-->
						<?php 												
						echo Nav::widget([
       
							'items' => [
								['label' => 'Inicio', 'url' => ['/site/index']],
								
							],
						]);
						?>
						<!--<b class="arrow"></b>-->
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-university"></i>
							<span class="menu-text">
								Plataforma
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								
							<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Qué es PLATAFORMA?', 'url' => ['/site/quees']],								
									],								
								]);						
							?> 
								<b class="arrow"></b>
							</li>

							<li class="">
								
							<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Equipo', 'url' => ['/site/equipo']],								
									],								
								]);						
							?> 
								<b class="arrow"></b>
							</li>
							
							<li class="">
								
							<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Unidades Participantes', 'url' => ['/site/up']],								
									],								
								]);						
							?> 
								<b class="arrow"></b>
							</li>

							<li class="">
								
							<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Contacto', 'url' => ['/site/contacto']],								
									],								
								]);						
							?> 
								<b class="arrow"></b>
							</li>							

							
						</ul>
					</li>
					
			
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text">
								Eval. Inst.
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<li class="">								
								<?php 
									echo Nav::widget([
										'items' => [
											['label' => 'Conducta de Entr.', 'url' => ['/site/conductaentrada']],								
										],								
									]);						
								?> 
								<b class="arrow"></b>
							</li>	

								<b class="arrow"></b>
							</li>

							<li class="">
								<?php 
									echo Nav::widget([
										'items' => [
											['label' => 'CG Prácticas Profesionales', 'url' => ['/site/cgpracticas']],								
										],								
									]);						
								?> 

								<b class="arrow"></b>
							</li>

							<li class="">
								<?php 
									echo Nav::widget([
										'items' => [
											['label' => 'Eval. Idioma Inglés', 'url' => ['/site/evalingles']],								
										],								
									]);						
								?> 

								<b class="arrow"></b>
							</li>

							

							
						</ul>
					</li>
					
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-spinner"></i>
							<span class="menu-text">
								Proceso de Certif.
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Modelo Certificación Interna', 'url' => ['/site/modelocertificacion']],								
									],								
								]);						
								?> 

								<b class="arrow"></b>
							</li>

							<li class="">
								<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Proceso de validación', 'url' => ['/site/procesovalidacion']],								
									],								
								]);						
								?> 

								<b class="arrow"></b>
							</li>


							

							
						</ul>
					</li>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-clock-o"></i>
							<span class="menu-text">
								Periodos de Certif.
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Programación de Eval. Internas', 'url' => ['/site/programacion']],								
									],								
								]);						
								?> 

								<b class="arrow"></b>
							</li>


							

							
						</ul>
					</li>
					
					
					<?php
					if(!Yii::$app->user->isGuest){
						if(
							(Yii::$app->user->identity->role==User::ESTUDIANTE)
							||
							(Yii::$app->user->identity->role==User::DOCENTE)
							||
							(Yii::$app->user->identity->role==User::ADMINISTRATIVO)
							){//estudiante
						
					
					
					?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Inscr. y Result.
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								
									<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Inscripción', 'url' => ['/competencia/inscripcion']],								
									],								
								]);						
								?> 
								

								<b class="arrow"></b>
							</li>

							<li class="">
								<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Resultados', 'url' => ['/competencia/resultados']],								
									],								
								]);						
								?> 
								<b class="arrow"></b>
							</li>

							
							
						</ul>
					</li>
					
					
					
					<?php }}?>
					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-line-chart"></i>
							<span class="menu-text">
								Competencias Gen.
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							
							
						<?php
						$competencias = Competencia::find()->all();
						foreach($competencias as $c){?>
							<li class="">
								
								<a href="<?php  echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?r=competencia/view&id='.$c->id;?>">
									<?php 
								echo  $c->nombre;						
								?> 
								</a>
								

								<b class="arrow"></b>
							</li>
						
						<?php }?>
							
						</ul>
					</li>
					
					<?php
					if(!Yii::$app->user->isGuest){
						if(
							(Yii::$app->user->identity->role==User::ESTUDIANTE)
							||
							(Yii::$app->user->identity->role==User::DOCENTE)
							||
							(Yii::$app->user->identity->role==User::ADMINISTRATIVO)
							){//estudiante
						
					
					
				
					?>
					<li class="">
						<a href="#" class="dropdown-toggle">
							
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text">
								Tutoriales
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="">
								
									<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Indicadores de Certificación', 'url' => ['/competencia/indicadorescertificacion']],								
									],								
								]);						
								?> 
								

								<b class="arrow"></b>
							</li>

							<li class="">
								<?php 
								echo Nav::widget([
									'items' => [
										['label' => 'Tutoriales por Competencia', 'url' => ['/competencia/tutoriales']],								
									],								
								]);						
								?> 
								<b class="arrow"></b>
							</li>

							
							
						</ul>
					</li>
					
					
					
					<?php }}?>
					
					<li class="">						
							<!--<i class="menu-icon fa fa-list-alt"></i>-->
						<?php 												
						echo Nav::widget([
       
							'items' => [								
								['label' => 'Noticias', 'url' => ['/site/noticias']],
							],
						]);
						?>
						<!--<b class="arrow"></b>-->
					</li>
					
					<?php
					if(!Yii::$app->user->isGuest){
						if(Yii::$app->user->identity->role==User::ADMINISTRATIVO){//administrativo
						
					
					
					?>
					<li class="">						
							<!--<i class="menu-icon fa fa-list-alt"></i>-->
						<?php 												
						echo Nav::widget([
       
							'items' => [
								['label' => 'Competencias', 'url' => ['/competencia']],
								['label' => 'Subcompetencias', 'url' => ['/subcompetencia']],
								['label' => 'Noticias', 'url' => ['/noticia']],
								['label' => 'Desempeño', 'url' => ['/desempeno']],
								['label' => 'Indicador', 'url' => ['/indicador']],
								['label' => 'Nivel de Indicador', 'url' => ['/nivelindicador']],
							],
						]);
						?>
						<!--<b class="arrow"></b>-->
					</li>
					
					
						<?php }}?>
						
						
						<?php
					if(!Yii::$app->user->isGuest){
						if(Yii::$app->user->identity->username==='177559202'){//administrativo
						
					
					
					?>
					<li class="">						
							<!--<i class="menu-icon fa fa-list-alt"></i>-->
						<?php 												
						echo Nav::widget([
       
							'items' => [
								['label' => 'Rúbrica', 'url' => ['/competencia/rubrica']],
								
							],
						]);
						?>
						<!--<b class="arrow"></b>-->
					</li>
					
					
						<?php }}?>
					<!--<li class="">
							<?php 												
						echo Nav::widget([       
							'items' => [
								['label' => 'Abouttttttttt', 'url' => ['/site/about'],'visible'=>!Yii::$app->user->isGuest,],
								
							],
						]);						
						?> 
						<b class="arrow"></b>
					</li>
				-->
					
					

					<!--
					<li class="">
						<a href="index.html">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Inicio </span>
						</a>

						<b class="arrow"></b>
					</li>
					
	
				-->
	
	
					
				

					
				</ul><!-- /.nav-list -->
				
				<!--Fin menu invitado-->
				
				
				
				
				
				
				
				
				

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						

						<!-- #section:basics/content.searchbox -->
						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->

						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						

						<div class="row">
							<div class="col-xs-12">
								
							
								<div class="">
									<?= Breadcrumbs::widget([
										'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
									]) ?>
									<?= $content ?>
								</div>
								

								

							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Universidad del Bío-Bío </span>
							Todos los derechos reservados &copy; 2016-2017
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../vendor/bower/plantilla/components/_mod/jquery.mobile.custom/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
		


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<!-- inline scripts related to this page -->


<script type="text/javascript">
			jQuery(function($) {
			
				$('[data-rel=tooltip]').tooltip();
			
				$('.select2').css('width','200px').select2({allowClear:true})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard-container')
				.ace_wizard({
					//step: 2 //optional argument. wizard will jump to step "2" at first
					//buttons: '.wizard-actions:eq(0)'
				})
				.on('actionclicked.fu.wizard' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) e.preventDefault();
					}
				})
				//.on('changed.fu.wizard', function() {
				//})
				.on('finished.fu.wizard', function(e) {
					bootbox.dialog({
						message: "Gracias, el envío se realizó con éxito!", 
						buttons: {
							"success" : {
								"label" : "OK",
								"className" : "btn-sm btn-primary"
							}
						}
					});
				}).on('stepclick.fu.wizard', function(e){
					//e.preventDefault();//this will prevent clicking and selecting steps
				});
			
			
				//jump to a step
				/**
				var wizard = $('#fuelux-wizard-container').data('fu.wizard')
				wizard.currentStep = 3;
				wizard.setState();
				*/
			
				//determine selected step
				//wizard.selectedItem().step
			
			
			
				//hide or show the other form which requires validation
				//this is for demo only, you usullay want just one form in your application
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').removeClass('hide');
					}
					else {
						$('#validation-form').addClass('hide');
						$('#sample-form').show();
					}
				})
			
			
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'div',
					errorClass: 'help-block',
					focusInvalid: false,
					ignore: "",
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: {
							required: true,
						},
						agree: {
							required: true,
						}
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						state: "Please choose state",
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
			
					highlight: function (e) {
						$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
					},
			
					success: function (e) {
						$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
							var controls = element.closest('div[class*="col-"]');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
						}
						else if(element.is('.select2')) {
							error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
						}
						else if(element.is('.chosen-select')) {
							error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
						}
						else error.insertAfter(element.parent());
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
			
				
				
				
				$('#modal-wizard-container').ace_wizard();
				$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
				
				
				/**
				$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				
				$('#mychosen').chosen().on('change', function(ev) {
					$(this).closest('form').validate().element($(this));
				});
				*/
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					$('[class*=select2]').remove();
				});
			})
		</script>		
	