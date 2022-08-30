

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'State',
    'url' => "state.index",
    'section_name' => 'All State'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">All State Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>State Name</th>
                                                    <th>District Name</th>
                                                    <th>Division Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo e($item->state_name); ?></td>
                                                    <td class="sorting_1"><?php echo e($item->district->district_name); ?></td>
                                                    <td class="sorting_1"><?php echo e($item->division->division_name); ?></td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="<?php echo e(route('state.edit', $item)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="<?php echo e(route('state.destroy', $item)); ?>" method="post">
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php echo csrf_field(); ?>
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            
            <div class="col-md-4 col-lg-4">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New state</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('state.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <h5>Division Name <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="division_id">
                                    <option selected>Select Division Name</option>
                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($division->id); ?>"><?php echo e($division->division_name); ?></option>
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
                                <h5>Division Name <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="district_id">
                                    <option selected>Select District Name</option>
                                    <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($district->id); ?>"><?php echo e($district->district_name); ?></option>
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
                                <h5>State Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="state_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
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
                                <button type="submit" class="btn btn-rounded btn-info">Submit</button>
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\State\index.blade.php ENDPATH**/ ?>