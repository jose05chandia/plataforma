<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">

	 <div class="page-header">
		    <h1><?= Html::encode($this->title) ?></h1>
	</div>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
           Gracias por contactarnos. Te responderemos lo antes posible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

        <p>
           
        </p>

        <div class="row">
		<div class="col-xs-12">
		<div class="col-lg-4 center">
			Universidad del Bío-Bío, Fdo. May, Chillán.
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.9942055368647!2d-72.0792096!3d-36.6024486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad+del+BioBio+Campus+F.+May!5e0!3m2!1ses!2ses!4v1476940941994" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>				
			</div>
				<br><br>
				
			Universidad del Bío-Bío, La Castilla, Chillán.
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.9942055368647!2d-72.0792096!3d-36.6024486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad+del+BioBio+Campus+F.+May!5e0!3m2!1ses!2ses!4v1476940941994" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>				
			</div>
				<br><br>
				
			Universidad del Bío-Bío, Andrés Bello, Chillán.
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.9942055368647!2d-72.0792096!3d-36.6024486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad+del+BioBio+Campus+F.+May!5e0!3m2!1ses!2ses!4v1476940941994" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>				
			</div>
				<br><br>
				
			Universidad del Bío-Bío, Concepción, Concepción.
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3202.9942055368647!2d-72.0792096!3d-36.6024486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9668d6273b1ad7ff%3A0xd768b9a8510513f6!2sUniversidad+del+BioBio+Campus+F.+May!5e0!3m2!1ses!2ses!4v1476940941994" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>				
			</div>
				<br><br>
			</div>
            
			
			
			
			<div class="col-lg-4 ">
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
									
									
									
								</div><!-- PAGE CONTENT ENDS --><br><br>
			</div>
			
		
			<br><br>
			
			<div class="col-lg-4 center">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-5">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div> 
			
			
		</div>
        </div>

    <?php endif; ?>
</div>
