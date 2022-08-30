<?php $__env->startSection('dashboard_content'); ?>

    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [

    'name' => 'Marque',

    'url' => "brands.index",

    'section_name' => 'modification de marque'

    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="content">

        <div class="row">

            

            <div class="col-md-8 col-lg-8 m-auto">

                <div class="box">

                    <div class="box-header with-border">

                        <h3 class="box-title">Modifier Marque</h3>

                    </div>

                    <!-- /.box-header -->

                    <div class="box-body">

                        <form action="<?php echo e(route('brands.update', $brand)); ?>" method="post" enctype="multipart/form-data">

                            <?php echo method_field('PUT'); ?>

                            <?php echo csrf_field(); ?>

                            <div class="form-group">

                                <h5>Nom de la marque <span class="text-danger">*</span></h5>

                                <div class="controls">

                                    <input type="text" name="brand_name_en" value="<?php echo e($brand->brand_name_en); ?>" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>

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

                                <h5>Logo de la Marque<span class="text-danger">*</span></h5>

                                <div class="controls">

                                    <input type="file" name="brand_image" id="brand_image" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>

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

                            <div class="col-md-12 widget-user-image">

                                <img  id="show-image" class="rounded-circle" src="<?php echo e(!empty($brand->brand_image) ? url(''.$brand->brand_image) : url('upload/brands/blank_profile_photo.jpg')); ?>" alt="User Avatar" style="float: right" width="200px" height="100px">

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

    <?php $__env->startSection('dashboard_script'); ?>

    <script type="text/javascript">

        $(document).ready(function(){

        $('#brand_image').change(function(e){

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


<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/admin/Brands/edit.blade.php ENDPATH**/ ?>