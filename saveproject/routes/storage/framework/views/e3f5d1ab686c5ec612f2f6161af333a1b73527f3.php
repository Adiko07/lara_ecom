<?php $__env->startSection('title', 'Profile Administrateur'); ?>

<?php $__env->startSection('dashboard_content'); ?>
<section class="content">
<div class="row">
    <div class="col-12 col-lg-5 col-xl-6">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black">
            <a href="<?php echo e(route('admin.profile.edit')); ?>" class="btn btn-info" style="float: right">Editer votre Profile</a>
            <h3 class="widget-user-username">Nom de l'administrateur: <?php echo e($adminData->name); ?></h3>
            <h6 class="widget-user-desc">Email: <?php echo e($adminData->email); ?></h6>
        </div>
        <div class="widget-user-image">
            <img class="rounded-circle" src="<?php echo e(!empty($adminData->profile_photo_path) ? url('upload/admin_images/'.$adminData->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg')); ?>" alt="User Avatar">
        </div>
        <div class="box-footer">
            <div class="row">
                
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Profile/index.blade.php ENDPATH**/ ?>