<div class="main-page" style="padding: 100px 15px 0;">
	<h1 class="jumbo-title">MASUK GUDANGPROYEK</h1>
	<!-- <p class="login-options">Pilih salah satu di bawah ini untuk masuk GudangProyek:</p> -->
	<?php $form = $this->beginWidget('CActiveForm', array('id'=>'login-form', 'action'=>Yii::app()->createUrl('/admin/login')));?>
	<div class="login-form">
		<div class="form-group">
        	<?php echo $form->textField($userModel, 'Username', array('class'=>'form-control login-field', 'placeholder'=>'Masukkan nama pengguna'));?>  
			<label class="login-field-icon fui-user" for="login-name"></label>
		</div>

		<div class="form-group">
        	<?php echo $form->passwordField($userModel, 'Password', array('class'=>'form-control login-field', 'placeholder'=>'Masukkan password'));?>  
			<label class="login-field-icon fui-lock" for="login-pass"></label>
		</div>

  		<?php echo CHtml::submitButton('Masuk!', array('class'=>'btn btn-primary btn-lg btn-block', 'style'=>'margin-top:10px; float:right'));?>
  		<a class="login-link" href="client_forget-pass.html">Lupa kata sandi Anda?</a>
	</div>
	<?php $this->endWidget();?>

</div>
