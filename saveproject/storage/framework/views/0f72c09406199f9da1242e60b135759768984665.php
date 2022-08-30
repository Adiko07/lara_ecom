<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
        <div class="col-md-12 col-sm-12 sign-in m-auto">
            <h4 class="">Mot de passe oublié</h4>
            <p class="">Mot de passe oublié ? Ne vous inquietez pas, vous pouvez le réinitialisé. Entrez votre email utilisé lors de la création de votre compte.</p>
            <form class="register-form outer-top-xs" role="form" action="<?php echo e(route('forgot.password.link')); ?>" method="POST">
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
                <div class="form-group">
                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                    <input type="email" name="email" :value="old('email')" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                </div>
                <button type="submit" class="btn-upper btn btn-primary checkout-page-button"><?php echo e(__('RECEVOIR LE LIEN')); ?></button>
            </form>
        </div>
        <!-- Sign-in -->
    </div><!-- /.row -->
</div><!-- /.sigin-in-->
</div><!-- /.container -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/auth/forgot.blade.php ENDPATH**/ ?>