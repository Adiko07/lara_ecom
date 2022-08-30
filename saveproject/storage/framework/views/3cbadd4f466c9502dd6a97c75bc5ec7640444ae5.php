<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo e(asset('frontend')); ?>/assets/images/logo.png">

    <title>SODIB-CI || - Se connecter à l'administration </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo e(asset('backend')); ?>/css/skin_color.css">

</head>
<body class="hold-transition theme-primary bg-gradient-primary">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">SODIB-CI</h2>
							<p class="text-white-50">CONNECTEZ-VOUS POUR DÉMARRER VOTRE SESSION</p>
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
                            <form method="POST" action="<?php echo e(isset($guard) ? url($guard.'/login') : route('login')); ?>">
                                <?php echo csrf_field(); ?>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email" name="email" required autofocus>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Mot de passe" required autofocus>
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox text-white">
										<input type="checkbox" id="basic_checkbox_1" name='remember'>
										<label for="basic_checkbox_1"><?php echo e(__('Se souvenir de moi')); ?></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right">
										<a href="<?php echo e(route('admin_forgot.password.form')); ?>" class="text-white hover-info"><i class="ion ion-locked"></i> <?php echo e(__('Mot de passe oublié ?')); ?></a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-rounded mt-10"><?php echo e(__("SE CONNECTER")); ?></button>
									</div>
									<!-- /.col -->
								  </div>
							</form>

							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="<?php echo e(asset('backend')); ?>/js/vendors.min.js"></script>
    <script src="<?php echo e(asset('')); ?>/assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
<?php /**PATH /home/sodiicmc/public_html/resources/views/auth/admin_login.blade.php ENDPATH**/ ?>