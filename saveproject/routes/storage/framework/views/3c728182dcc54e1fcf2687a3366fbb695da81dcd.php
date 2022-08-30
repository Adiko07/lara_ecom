<?php $__env->startSection('dashboard_content'); ?>

    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [

    'name' => 'Sous sous-catégories',

    'url' => "subsubcategories.index",

    'section_name' => 'Modification de sous sous-catégories'

    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="content">

        <div class="row">

            

            <div class="col-md-8 col-lg-8 offset-2">

                <div class="box">

                    <div class="box-header with-border d-flex justify-content-between align-items-center">

                        <h3 class="box-title">Modifier sous sous-catégorie</h3>

                        <a href="<?php echo e(route('subsubcategories.index')); ?>" class="btn btn-primary">Liste de Sous sous-catégories</a>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <form action="<?php echo e(route('subsubcategories.update', $subsubCategory)); ?>" method="post" enctype="multipart/form-data">

                            <?php echo method_field('put'); ?>

                            <?php echo csrf_field(); ?>

                            <div class="form-group">

                                <h5>Sous sous-catégorie <span class="text-danger">*</span></h5>

                                <div class="controls">

                                    <input type="text" value="<?php echo e(old('subsubcategory_name_en', $subsubCategory->subsubcategory_name_en)); ?>" name="subsubcategory_name_en" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>

                                </div>

                                <?php $__errorArgs = ['subsubcategory_name_en'];
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

                                <h5>Attribuer une catégorie <span class="text-danger">*</span></h5>

                                <select name="category_id" class="form-control"  >

                                    <option value="" selected="" disabled="">Catégorie parente</option>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $subsubCategory->category_id ? 'selected':''); ?> ><?php echo e($category->category_name_en); ?></option>

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

                            <div class="form-group">

                                <h5>Attribuer une sous-catégorie <span class="text-danger">*</span></h5>

                                <div class="controls">

                                    <select name="subcategory_id" class="form-control"  >

                                        <option value="" selected="" disabled="">Choisissez une sous sous-catégorie</option>

                                        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($subsub->id); ?>" <?php echo e($subsub->id == $subsubCategory->subcategory_id ? 'selected':''); ?> ><?php echo e($subsub->subcategory_name_en); ?></option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                    <?php $__errorArgs = ['subcategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                        <span class="text-danger"><?php echo e($message); ?></span>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>

                            </div>

                            <div class="text-xs-right">

                                <button type="submit" class="btn btn-rounded btn-info">Modifier</button>

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


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/admin/SubSubCategory/edit.blade.php ENDPATH**/ ?>