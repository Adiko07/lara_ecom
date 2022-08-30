

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Sub Category',
    'url' => "subcategories.index",
    'section_name' => 'Create Sub Category'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Nouvelle Sous Catégorie</h3>
                        <a href="<?php echo e(route('subcategories.index')); ?>" class="btn btn-primary">Liste des sous catégories</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('subcategories.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <h5>Sous catégorie <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subcategory_name_en" class="form-control" required="" data-validation-required-message="Ce champs est requis"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['subcategory_name_en'];
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
                                <h5>Category Name <span class="text-danger">*</span></h5>
                                
                                <select class="custom-select" aria-label="Default select example" name="category_id">
                                    <option selected>Attribuer une catégorie</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name_en); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                <?php $__errorArgs = ['category_id'];
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
                                <button type="submit" class="btn btn-rounded btn-info">Ajouter</button>
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/SubCategory/create.blade.php ENDPATH**/ ?>