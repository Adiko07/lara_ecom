

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Coupon',
    'url' => "coupons.index",
    'section_name' => 'All Coupon'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Add New Coupon</h3>
                        <a href="<?php echo e(route('coupons.index')); ?>" class="btn btn-primary">Back List Coupon</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('coupons.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <h5>Coupon Name <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="coupon_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['coupon_name'];
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
                                <h5>Coupon Discount (%) <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="number" name="coupon_discount" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['coupon_discount'];
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
                                <h5>Coupon Validity <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="coupon_validity" class="form-control" required="" min="<?php echo e(Carbon\Carbon::now()->format('Y-m-d')); ?>" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['coupon_validity'];
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
                                <h5>Coupon Status <span class="text-danger"></span></h5>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                    id="coupon_status" name="coupon_status" checked value="1">
                                    <label class="form-check-label" for="coupon_status">Active Status</label>
                                </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\Coupons\create.blade.php ENDPATH**/ ?>