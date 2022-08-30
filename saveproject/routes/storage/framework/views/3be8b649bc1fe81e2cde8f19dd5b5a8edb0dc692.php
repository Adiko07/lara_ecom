

<?php $__env->startSection('userdashboard_content'); ?>
<div class="card-body">
    <form action="<?php echo e(route('user.profile')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($user->id); ?>">
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
            <input type="name" name="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value=<?php echo e($user->name); ?>>
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
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo e($user->email); ?>">
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
            <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
            <input type="text" name="phone_number" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo e($user->phone_number); ?>">
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
            <h5>Profile Picture <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="file" name="image" id="image" class="form-control" required=""> <div class="help-block"></div>
            </div>
        </div>
        <div class="col-md-12 widget-user-image">
            <img  id="show-image" class="rounded-circle" src="<?php echo e(!empty($user->profile_photo_path) ? url('storage/profile-photos/'.$user->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg')); ?>" alt="User Avatar" style="float: right" width="100px" height="100px">
        </div>
        <div class="text-xs-right">
            <button type="submit" class="btn btn-rounded btn-primary mb-5">Update Profile</button>
        </div>
    </form>
</div>
<?php $__env->startSection('frontend_script'); ?>
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
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\profile\index.blade.php ENDPATH**/ ?>