



<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
<div class="col-md-12 col-sm-12 sign-in m-auto">
	<h4 class="">Password Reset Form</h4>
	<p class="">Provide information to all fields</p>
	<form class="register-form outer-top-xs" role="form" action="<?php echo e(route('password.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="token" value="<?php echo e($request->route('token')); ?>">
		<div class="form-group">
		<label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		<input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
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
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1">
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
	<button type="submit" class="btn-upper btn btn-primary checkout-page-button"><?php echo e(__("RESET PASSWORD")); ?></button>
	</form>
</div>
<!-- Sign-in -->	
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		</div><!-- /.container -->
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\auth\reset-password.blade.php ENDPATH**/ ?>