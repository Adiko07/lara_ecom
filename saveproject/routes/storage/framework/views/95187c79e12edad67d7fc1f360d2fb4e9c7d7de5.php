<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">S'identifier</h4>
	<p class="">Bonjour, Bienvenue sur votre compte.</p>
	
	<form class="register-form outer-top-xs" role="form" action="<?php echo e(isset($guard) ? url($guard.'/login') : route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
		    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mot de passe<span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
		</div>
        
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="remember" id="optionsRadios2" value="option2">Souviens-toi de moi!
		  	</label>
		  	    <a href="<?php echo e(route('forgot.password.form')); ?>" class="forgot-password pull-right">Mot de passe oublié ?</a>
            </div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Se connecter</button>
	</form>
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Créer un nouveau compte</h4>
	<p class="text title-tag-line">Créez votre nouveau compte.</p>
	<form class="register-form outer-top-xs" role="form" method="POST" action="<?php echo e(route('register')); ?>">
        <?php echo csrf_field(); ?>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
	    	<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
          <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert text-danger"><?php echo e($message); ?></span>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Nom & prénoms <span>*</span></label>
		    <input type="text" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Numéro de téléphone <span>*</span></label>
		    <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mot de passe <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirmez le mot de passe <span>*</span></label>
		    <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">S'inscrire</button>
	</form>


</div>
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!--  BRANDS CAROUSEL  -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
					</a>
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->

</div><!-- /.logo-slider -->
<!--  BRANDS CAROUSEL : END  -->	</div><!-- /.container -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>