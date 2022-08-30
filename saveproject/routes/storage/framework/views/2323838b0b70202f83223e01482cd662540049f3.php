<?php $__env->startSection('title', 'Admin Password Update'); ?>

<?php $__env->startSection('dashboard_content'); ?>
<section class="content">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Formulaire de mise à jour du mot de passe administrateur</h4>
                </div>
                <div class="box-body">
                            <form action="<?php echo e(route('admin.password.update')); ?>" method="POST">
                                
                                <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">

                                    <div class="form-group">
                                        <h5>Mot de passe actuel<span class="text-danger">*</span></h5>
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
                                        <h5>Nouveau mot de passe<span class="text-danger">*</span></h5>
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
                                        <h5>Confirmez le mot de passe <span class="text-danger">*</span></h5>
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
                                        <button type="submit" class="btn btn-rounded btn-primary mb-5">Modifier</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
            </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Profile/change_password.blade.php ENDPATH**/ ?>