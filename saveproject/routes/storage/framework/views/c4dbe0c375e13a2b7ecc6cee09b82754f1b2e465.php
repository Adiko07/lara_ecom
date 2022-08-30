

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'State',
    'url' => "state.index",
    'section_name' => 'All State'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            
            <div class="col-md-8 col-lg-8 m-auto">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit State</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('state.update', $state)); ?>" method="post">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <h5>Division Name <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="division_id">
                                    
                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($division->id); ?>" <?php echo e($division->id == $state->division_id ? 'selected': ''); ?> ><?php echo e($division->division_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                <?php $__errorArgs = ['division_id'];
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
                                <h5>District Name <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="district_id">
                                    
                                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($district->id); ?>" <?php echo e($district->id == $state->district_id ? 'selected': ''); ?> ><?php echo e($district->district_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                <?php $__errorArgs = ['district_id'];
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
                                <h5>state Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="state_name" class="form-control" required=""  value="<?php echo e(old('state_name',$state->state_name)); ?>" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['state_name'];
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
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <?php $__env->startSection('dashboard_script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
          $('select[name="division_id"]').on('change', function(){
              var division_id = $(this).val();
              if(division_id) {
                  $.ajax({
                      url: "<?php echo e(url('/admin/division/district/ajax')); ?>/"+division_id,
                      type:"GET",
                      dataType:"json",
                      success:function(data) {
                         var d =$('select[name="district_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                      },
                  });
              } else {
                  alert('danger');
              }
          });
      });
      </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\State\edit.blade.php ENDPATH**/ ?>