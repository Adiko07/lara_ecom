

<?php $__env->startSection('title', 'Admin Profile Edit'); ?>

<?php $__env->startSection('dashboard_content'); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Admin Profile Edit Form</h4>
                    </div>
                    <div class="box-body">
                                <form action="<?php echo e(route('profile.update', $editData)); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo method_field('PUT'); ?>
                                    <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Admin Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" value="<?php echo e($editData->name); ?>" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
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
                                        </div>
                                        <div class="form-group">
                                            <h5>Email Field <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" value="<?php echo e($editData->email); ?>" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
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
                                        </div>
                                        
                                        <div class="form-group">
                                            <h5>File Input Field <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="file" name="image" id="image" class="form-control" required=""> <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 widget-user-image">
                                            <img  id="show-image" class="rounded-circle" src="<?php echo e(!empty($editData->profile_photo_path) ? url('upload/admin_images/'.$editData->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg')); ?>" alt="User Avatar" style="float: right" width="100px" height="100px">
                                        </div>
                                        <div class="text-xs-right">
                                            <button type="submit" class="btn btn-rounded btn-primary mb-5">Update</button>
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
    <?php $__env->startSection('dashboard_script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
        $('#image').change(function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                $('#show-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\Profile\edit.blade.php ENDPATH**/ ?>