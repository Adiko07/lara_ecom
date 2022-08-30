<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
<div class="col-md-12 col-sm-12 sign-in m-auto">
	<h4 class="">Réinitialisation de mot de passe</h4>
	<p class="">Remplisser correctement tous les champs</p>
	<form class="register-form outer-top-xs" role="form" action="<?php echo e(route('reset.password')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(Session::get('fail')): ?>
            <div class="alert alert-danger">
                <?php echo e(Session::get('fail')); ?>

            </div>
        <?php endif; ?>

        <?php if(Session::get('success')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <input type="hidden" name="token" value="<?php echo e($token); ?>">
        <input class="block mt-1 w-full" type="hidden" name="token" value="<?php echo e($token); ?>"/>
		<div class="form-group">
		<label class="info-title" for="exampleInputEmail1">Email<span>*</span></label>
		<input type="email"name="email" value="<?php echo e($email ?? old('email')); ?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
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
		    <label class="info-title" for="exampleInputPassword1">Mot de passe <span>*</span></label>
		    <input type="password" name="password" value="<?php echo e(old('password')); ?>" required class="form-control unicase-form-control text-input" id="exampleInputPassword1">
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
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" required class="form-control unicase-form-control text-input" id="exampleInputEmail1">
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
	<button type="submit" class="btn-upper btn btn-primary checkout-page-button"><?php echo e(__("REINITIALISER LE MOT DE PASSE")); ?></button>
	</form>
</div>
<!-- Sign-in -->	
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		</div><!-- /.container -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/auth/reset.blade.php ENDPATH**/ ?>