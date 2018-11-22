<?php
//if ($this->session->userdata('logged_in') == TRUE) {
    ?>

<?php $this->load->view('estructura/header');?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
	<!-- login area start -->
	<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
	<?php endif; ?>

    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
			<?= form_open('login/valida') ?>
                    <div class="login-form-head">
                        <h4>aplicativo SUNAT</h4>
                        <p>Beta</p>
                    </div>
                    <div class="login-form-body">
						<div class="form-gp">
                            <label for="exampleInputName1">Usuario</label>
                            <input type="text" id="username" name="username" oninvalid="this.setCustomValidity('Ingrese usuario')" oninput="setCustomValidity('')" placeholder="" required>
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Clave</label>
                            <input type="password" id="password" name="password" oninvalid="this.setCustomValidity('Ingrese clave')" oninput="setCustomValidity('')"  placeholder="" required>
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area">
                            <button type="submit">Aceptar <i class="ti-arrow-right"></i></button>         
                        </div>
                    </div>
			</form>
		</div>
	</div>
    </div>
    <!-- login area end -->
</body>
<?php $this->load->view('estructura/footer');?>
</html>
<?php /*
} else {
    redirect('login', 'refresh');
}*/
?>
