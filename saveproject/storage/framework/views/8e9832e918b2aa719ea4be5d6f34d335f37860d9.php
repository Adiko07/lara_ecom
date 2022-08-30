

<?php $__env->startSection('userdashboard_content'); ?>
<div class="card-body">
    <form action="<?php echo e(route('user.update.password')); ?>" method="post">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <h5>Current Password Field <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="password" name="current_password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                </div>
                <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="alert text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
                <h5>New Password Input Field <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
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
            </div>
            <div class="form-group">
                <h5>Confirm Password Input Field <span class="text-danger">*</span></h5>
                <div class="controls">
                    <input type="password" name="password_confirmation" data-validation-match-match="password" class="form-control" required=""> <div class="help-block"></div>
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
            </div>
            <div class="text-xs-right">
                <button type="submit" class="btn btn-rounded btn-primary mb-5">Update</button>
            </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\profile\changepassword.blade.php ENDPATH**/ ?>