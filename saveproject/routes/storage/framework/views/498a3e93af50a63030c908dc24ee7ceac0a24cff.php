



<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
        <div class="col-md-12 col-sm-12 sign-in m-auto">
            <h4 class="">Forget Password</h4>
            <p class=""><?php echo e(__('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')); ?></p>
            <form class="register-form outer-top-xs" role="form" action="<?php echo e(route('password.email')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                    <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                </div>
                <button type="submit" class="btn-upper btn btn-primary checkout-page-button"><?php echo e(__('Email Password Reset Link')); ?></button>
            </form>
        </div>
        <!-- Sign-in -->
    </div><!-- /.row -->
</div><!-- /.sigin-in-->
</div><!-- /.container -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>