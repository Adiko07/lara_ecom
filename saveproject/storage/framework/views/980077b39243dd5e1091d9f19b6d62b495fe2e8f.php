<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Marque',
    'url' => "brands.index",
    'section_name' => 'All Brands'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Toutes les marques</h3>
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
                                                    <th>Marque</th>
                                                    
                                                    <th>Logo de la Marque</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?php echo e($item->brand_name_en); ?></td>
                                                    
                                                    <td>
                                                        <img src="<?php echo e(asset($item->brand_image)); ?>" alt=""
                                                        style="width: 60px; height:60px;">
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="<?php echo e(route('brands.edit', $item)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="<?php echo e(route('brands.destroy', $item)); ?>" method="post">
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
                        <h3 class="box-title">Nouvelle Marque</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('brands.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <h5>Nom de la marque <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="brand_name_en" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['brand_name_en'];
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
                                <h5>Logo de la marque <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="brand_image" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['brand_image'];
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
                                <button type="submit" class="btn btn-rounded btn-info">Envoyer</button>
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Brands/index.blade.php ENDPATH**/ ?>