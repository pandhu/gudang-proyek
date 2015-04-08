<div class="container main-page" style="padding: 140px 15px 0;">
	<h1 class="jumbo-title">LUPA KATA SANDI</h1>
	<div class="forget-pass-form">
		<p class="login-options">Silakan masukkan alamat e-mail Anda yang terdaftar di GudangProyek. Sistem akan mengirimkan link yang Anda akan gunakan untuk masuk ke dalam GudangProyek.</p>
		<form class="form-horizontal" role="form" method="post" action="<?php echo Yii::app()->baseUrl?>/site/lupapassword">
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">E-mail</label>
				<div class="col-sm-8">
					<input type="email" name="email" class="form-control" id="email">
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<button class="btn btn-primary btn-lg btn-block" href="index.html">Kirim</button>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</form>

	</div>
</div>