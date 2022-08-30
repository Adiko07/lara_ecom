<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Product',
    'url' => "products.index",
    'section_name' => 'Create Product'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Nouveau produit</h3>
                        <a href="<?php echo e(route('subsubcategories.index')); ?>" class="btn btn-primary">Liste des produits</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <h5 class="text-warning">Catégorie liée au produit et zone de sélection de la marque</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Nom de la catégorie <span class="text-danger">*</span></h5>
                                        <select class="custom-select" aria-label="Default select example" name="category_id">
                                            <option selected>Choisissez une catégorie</option>
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
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Nom de la sous-catégorie<span class="text-danger"></span></h5>
                                        <select class="custom-select" name="subcategory_id" aria-label="Default select example">
                                            <option value="" selected="" disabled="">Choisissez une sous-catégorie</option>
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
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Nom de la sous-sous-catégorie <span class="text-danger"></span></h5>
                                        <select class="custom-select" name="sub_subcategory_id" aria-label="Default select example">
                                            <option value="" selected="" disabled="">Choisissez une sous sous-catégorie</option>
                                        </select>
                                        <?php $__errorArgs = ['sub_subcategory_id'];
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
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <h5>Nom de marque <span class="text-danger"></span></h5>
                                        <select class="custom-select" aria-label="Default select example" name="brand_id">
                                            <option>Choisissez une marque</option>
                                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->brand_name_en); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['brand_id'];
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
                                </div>
                            </div>
                            
                            <h5 class="text-warning mt-4">Zone d'informations de base sur le produit</h5>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Nom du produit <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_name_en" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_name_en'];
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
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>N° de code SKU du produit <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_code" class="form-control"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_code'];
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Quantité de produit <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="product_qty" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_qty'];
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
                                </div>
                            </div>
                            
                            <h5 class="text-warning mt-4">Étiquette de produit, taille, zone d'information sur la couleur</h5>
                            <hr>
                            
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Taille du produit <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_size_en" class="form-control" value="small,medium,large" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_size_en'];
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
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Couleur du produit <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="product_color_en" class="form-control" value="red,green,blue" data-role="tagsinput">
                                            <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_color_en'];
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
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Longueur <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="longueur" class="form-control" value="1m,2m,3m" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['longueur'];
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Largeur <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="largeur" class="form-control" value="25cm,20cm" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['largeur'];
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Epaisseur <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="epaisseur" class="form-control" value="2cm,5mm" data-role="tagsinput"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['epaisseur'];
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
                                </div>
                            </div>
                            
                            <h5 class="text-warning mt-4">Zone d'information sur les prix des produits</h5>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Prix ​​d'achat<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="purchase_price" class="form-control"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['purchase_price'];
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Prix ​​de vente <span class="text-danger">*</span></h5>
                                        <div class="controls input-group mb-3">
                                            <span class="input-group-text">0.00 FCFA</span>
                                            <input type="number" name="selling_price" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['selling_price'];
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5>Prix ​​bas <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="number" name="discount_price" class="form-control"
                                            > <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['discount_price'];
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
                                </div>
                            </div>
                            
                            <h5 class="text-warning mt-4">Zone de description du produit</h5>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Brève description<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="short_description_en" id="editor1" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['short_description_en'];
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
                                </div>
                                
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5>Description longue<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <textarea name="long_description_en" id="editor3" cols="30" rows="5" class="form-control"></textarea>
                                            <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['long_description_en'];
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
                                </div>
                                
                            </div>
                            
                            <h5 class="text-warning mt-4">Zone de téléchargement des images du produit</h5>
                            <hr>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Vignette du produit <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_thumbnail" class="form-control" required="" data-validation-required-message="This field is required"
                                            onChange="mainThumbnailShow(this)"> <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="alert text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <img src="" id="mainThumbnail" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Image multiple du produit <span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="file" name="product_images[]" class="form-control"  multiple="" id="multiImg" > <div class="help-block"></div>
                                        </div>
                                        <?php $__errorArgs = ['product_images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="alert text-danger"><?php echo e($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="row" id="preview_img"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <h5 class="text-warning mt-4">Zone d'informations supplémentaires sur le produit</h5>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="hot_deals" name="hot_deals" value="1">
                                        <label class="form-check-label" for="hot_deals">Bonne affaire</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="featured" name="featured" value="1">
                                        <label class="form-check-label" for="featured">Mis en avant</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="new_arrival" name="new_arrival" checked value="1">
                                        <label class="form-check-label" for="new_arrival">Nouvelle arrivée</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_offer" name="special_offer" value="1">
                                        <label class="form-check-label" for="special_offer">Offre spéciale</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="special_deals" name="special_deals" value="1">
                                        <label class="form-check-label" for="special_deals">Offres spéciales</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                        id="status" name="status" checked value="1">
                                        <label class="form-check-label" for="status">Statut actif</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Ajouter un produit</button>
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
                    $('select[name="sub_subcategory_id"]').html('');
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
      $('select[name="subcategory_id"]').on('change', function(){
          var subcategory_id = $(this).val();
          if(subcategory_id) {
              $.ajax({
                  url: "<?php echo e(url('/admin/category/subsubcategory/ajax')); ?>/"+subcategory_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                     var d =$('select[name="sub_subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="sub_subcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name_en + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });

      $(document).ready(function(){
    $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
    });
    });
  });
</script>
<script type="text/javascript">
    function mainThumbnailShow(input){
        if(input.files && input.files[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Product/create.blade.php ENDPATH**/ ?>