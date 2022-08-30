



<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
    <div class="container">
        <div class="row">
                <?php echo $__env->make('frontend.profile.user-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="col-md-10">
                Welcome To <?php echo e(env('APP_NAME')); ?> <strong><?php echo e(Auth::user()->name); ?></strong>
                <?php echo $__env->yieldContent('userdashboard_content'); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\dashboard.blade.php ENDPATH**/ ?>