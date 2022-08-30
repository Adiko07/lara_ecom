<?php $__env->startSection('dashboard_content'); ?>

    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [

    'name' => 'Sous sous-catégories',

    'url' => "subsubcategories.index",

    'section_name' => 'Creation de Sous sous-catégories'

    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="content">

        <div class="row">

            

            <div class="col-md-8 col-lg-8 offset-2">

                <div class="box">

                    <div class="box-header with-border d-flex justify-content-between align-items-center">

                        <h3 class="box-title">Nouvelle sous sous-catégorie</h3>

                        <a href="<?php echo e(route('subsubcategories.index')); ?>" class="btn btn-primary">Liste des sous sous-catégories</a>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <form action="<?php echo e(route('subsubcategories.store')); ?>" method="post" enctype="multipart/form-data">

                            <?php echo csrf_field(); ?>

                            <div class="form-group">

                                <h5>Sous sous-catégorie<span class="text-danger">*</span></h5>

                                <div class="controls">

                                    <input type="text" name="subsubcategory_name_en" class="form-control" required="" data-validation-required-message="Ce champs est requis"> <div class="help-block"></div>

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

                                <select class="custom-select" aria-label="Default select example" name="category_id">

                                    <option selected>Catégorie parente</option>

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



                            <div class="form-group">

                                <h5>Attribuer une sous-catégorie <span class="text-danger">*</span></h5>

                                <select class="custom-select" name="subcategory_id" aria-label="Default select example">

                                    <option value="" selected="" disabled="">choisissez une sous-catégorie</option>

                                </select>

                                <?php $__errorArgs = ['subcategory_id'];
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

<?php $__env->startSection('dashboard_script'); ?>

<script type="text/javascript">

    $(document).ready(function() {

      $('select[name="category_id"]').on('change', function(){

          var category_id = $(this).val();

          if(category_id) {

              $.ajax({

                  url: "<?php echo e(url('/admin/category/subcategory/ajax')); ?>/"+category_id,

                  type:"GET",

                  dataType:"json",

                  success:function(data) {

                     var d =$('select[name="subcategory_id"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');

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


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/admin/SubSubCategory/create.blade.php ENDPATH**/ ?>