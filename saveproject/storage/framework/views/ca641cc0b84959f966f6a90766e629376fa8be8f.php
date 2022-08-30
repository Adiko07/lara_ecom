<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Caroussel',
    'url' => "slider.index",
    'section_name' => 'Ajouter un nouveau caroussel'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Ajouter un caroussel</h3>
                        <a href="<?php echo e(route('slider.index')); ?>" class="btn btn-primary">Liste des caroussels</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('slider.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <h4 class="text-warning">Barre d'état de l'image du curseur</h4>
                            <hr ><hr>
                            <div class="form-group mb-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox"
                                    id="status" name="slider_status" value="1" checked>
                                    <label class="form-check-label" for="status">Statut Actif</label>
                                </div>
                            </div>
                            <h4 class="text-warning">Informations sur l'image du curseur</h4>
                            <hr><hr>
                            <div class="form-group">
                                <h5>Nom du caroussel<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="slider_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['slider_name'];
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
                                <h5>Titre du caroussel <span class="text-danger"></span></h5>
                                <div class="controls">
                                    <input type="text" name="slider_title" class="form-control">
                                    <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['slider_title'];
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
                                    <h5>Description du Caroussel<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <textarea name="slider_description" id="editor5" cols="30" rows="5" class="form-control"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <?php $__errorArgs = ['slider_description'];
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

                            <h4 class="text-warning">Ajout d'image à téléchargement unique</h4>
                            <hr><hr>
                            <div class="form-group">
                                <h5>Image du caroussel<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="slider_image" class="form-control" required="" data-validation-required-message="This field is required"
                                    onchange="sliderShow(this)"> <div class="help-block"></div>
                                </div>
                                <?php $__errorArgs = ['slider_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="alert text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <img src="" id="sliderImage" alt="">
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
    <?php $__env->startSection('dashboard_script'); ?>
    <script type="text/javascript">
        function sliderShow(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#sliderImage').attr('src', e.target.result).width(100).height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script src="<?php echo e(asset('')); ?>assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js"></script>
    <script src="<?php echo e(asset('')); ?>assets/vendor_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo e(asset('')); ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
    <script src="<?php echo e(asset('backend')); ?>/js/pages/editor.js"></script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/admin/Slider/create.blade.php ENDPATH**/ ?>