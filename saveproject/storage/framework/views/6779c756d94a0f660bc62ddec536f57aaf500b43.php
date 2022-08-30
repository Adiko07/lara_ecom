<?php $__env->startSection('frontend_content'); ?>
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row single-product">
                <div class="col-md-3 sidebar">
                    <div class="sidebar-module-container">
                        <div class="home-banner outer-top-n">
                            <img src="<?php echo e(asset('frontend')); ?>/assets/images/icon.png" alt="logo" class="img-fluid">
                        </div>
                        <!--  HOT DEALS  -->
                        <?php echo $__env->make('frontend.frontend_layout.widgets.hot-deals-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!--  HOT DEALS: END  -->

                        <!--  NEWSLETTER  -->
                        

                    </div>
                </div><!-- /.sidebar -->
                <div class="col-md-9">
                    <div class="detail-block">
                        <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">


                                    <div id="owl-single-product">
                                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="single-product-gallery-item" id="slide<?php echo e($img->id); ?>">
                                            <a data-lightbox="image-1" data-title="Gallery" href="<?php echo e(asset($img->photo_name )); ?> ">
                                            <img class="img-responsive" alt="" src="<?php echo e(asset($img->photo_name )); ?> " data-echo="<?php echo e(asset($img->photo_name )); ?> " />
                                            </a>
                                        </div><!-- /.single-product-gallery-item -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div><!-- /.single-product-slider -->

                                    
                                    <div class="single-product-gallery-thumbs gallery-thumbs">
                                        <div id="owl-single-product-thumbnails">
                                        <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="item">
                                                <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide<?php echo e($img->id); ?>">
                                                    <img class="img-responsive" width="85" alt="" src="<?php echo e(asset($img->photo_name )); ?> " data-echo="<?php echo e(asset($img->photo_name )); ?> " />
                                                </a>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div><!-- /#owl-single-product-thumbnails -->
                                    </div><!-- /.gallery-thumbs -->

                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class="col-sm-6 col-md-7 product-info-block">
                                <div class="product-info">
                                    <h1 class="name" id="pname">
                                        <?php if(session()->get('language') =='bangla'): ?>
                                        <?php echo e($product->product_name_bn); ?>

                                        <?php else: ?>
                                        <?php echo e($product->product_name_en); ?>

                                        <?php endif; ?>
                                    </h1>
                                    

                                    <div class="stock-container info-container m-t-10">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span class="label">Disponibilité : </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <?php if($product->product_qty<1): ?>
                                                    <span class="value"> Stock épuisé</span>
                                                    <?php else: ?>
                                                    <span class="value"> En Stock</span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.stock-container -->

                                    <div class="description-container m-t-20">
                                        <?php if(session()->get('language') == 'bangla'): ?>
                                        <?php echo $product->short_description_bn; ?>

                                        <?php else: ?>
                                        <?php echo $product->short_description_en; ?>

                                        <?php endif; ?>
                                    </div><!-- /.description-container -->

                                    <div class="price-container info-container m-t-20">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="price-box">
                                                    <?php if($product->discount_price == NULL): ?>
                                                        <span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                                                    <?php else: ?>
                                                    <span class="price"><?php echo e($product->discount_price); ?> FCFA</span>
                                                    <span class="price-strike"><?php echo e($product->selling_price); ?> FCFA</span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php if($product->product_color_en == NULL): ?>
                                                <?php else: ?>
                                                <label class="info-title control-label">Couleur <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="color">
                                                <option selected="" disabled="">--Choisissez la couleur--</option>
                                                    <?php $__currentLoopData = $colors_en; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item); ?>"><?php echo e(ucwords($item)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php if($product->product_size_en == NULL): ?>
                                                <?php else: ?>
                                                <label class="info-title control-label">Taille <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="size">
                                                    <option selected="" disabled="">--Choisissez la taille--</option>
                                                    <?php $__currentLoopData = $size_en; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item); ?>"> <?php echo e(ucwords($item)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php if($product->longueur == NULL): ?>
                                                <?php else: ?>
                                                <label class="info-title control-label">Longueur <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="longueur">
                                                    <option selected="" disabled="">--choisissez la longueur--</option>
                                                    <?php $__currentLoopData = $longueur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item); ?>"> <?php echo e(ucwords($item)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php if($product->largeur == NULL): ?>
                                                <?php else: ?>
                                                <label class="info-title control-label">Largeur <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="largeur">
                                                    <option selected="" disabled="">--Choisissez la largeur--</option>
                                                    <?php $__currentLoopData = $largeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item); ?>"> <?php echo e(ucwords($item)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <?php if($product->epaisseur == NULL): ?>
                                                <?php else: ?>
                                                <label class="info-title control-label">Epaisseur <span>*</span></label>
                                                <select class="form-control unicase-form-control selectpicker" style="display: none;"
                                                id="epaisseur">
                                                    <option selected="" disabled="">--Choisissez une épaisseur--</option>
                                                    <?php $__currentLoopData = $epaisseur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($item); ?>"> <?php echo e(ucwords($item)); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    

                                    <div class="quantity-container info-container">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <span class="label">Quantité:</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        
                                                        <input type="number" name="quantity" id="product_qty" value="1" min="1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <input type="hidden" name="" id="product_id" value="<?php echo e($product->id); ?>" min="1">
                                                <button type="submit" class="btn btn-primary" onclick="addToCart()">
                                                    <i class="fa fa-shopping-cart inner-right-vs"></i> AJOUTER AU PANIER</button>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </div><!-- /.product-info -->
                            </div><!-- /.col-sm-7 -->
                        </div><!-- /.row -->
                    </div>
                    <div class="product-tabs inner-bottom-xs  wow fadeInUp animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    
                                </ul><!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-9">

                                <div class="tab-content">

                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">
                                            <p class="text">
                                                <?php if(session()->get('language') == 'bangla'): ?>
                                                <?php echo $product->long_description_bn; ?>

                                                <?php else: ?>
                                                <?php echo $product->long_description_en; ?>

                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div><!-- /.tab-pane -->

                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">

                                            <div class="product-reviews">
                                                <h4 class="title">Caracteristique du produit</h4>

                                                <div class="reviews">
                                                    <div class="review">
                                                        <div class="review-title"><span class="summary">We love this
                                                                product</span><span class="date"><i
                                                                    class="fa fa-calendar"></i><span>1 days
                                                                    ago</span></span></div>
                                                        <div class="text">"Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit.Aliquam suscipit."</div>
                                                    </div>

                                                </div><!-- /.reviews -->
                                            </div><!-- /.product-reviews -->



                                            <div class="product-add-review">
                                                <h4 class="title">Write your own review</h4>
                                                <div class="review-table">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="cell-label">&nbsp;</th>
                                                                    <th>1 star</th>
                                                                    <th>2 stars</th>
                                                                    <th>3 stars</th>
                                                                    <th>4 stars</th>
                                                                    <th>5 stars</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="cell-label">Quality</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Price</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="cell-label">Value</td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="1"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="2"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="3"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="4"></td>
                                                                    <td><input type="radio" name="quality" class="radio"
                                                                            value="5"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><!-- /.table .table-bordered -->
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- /.review-table -->

                                                

                                            </div><!-- /.product-add-review -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                    <div id="tags" class="tab-pane">
                                        <div class="product-tag">

                                            <h4 class="title">Product Tags</h4>
                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-container">

                                                    <div class="form-group">
                                                        <label for="exampleInputTag">Add Your Tags: </label>
                                                        <input type="email" id="exampleInputTag" class="form-control txt">


                                                    </div>

                                                    <button class="btn btn-upper btn-primary" type="submit">ADD
                                                        TAGS</button>
                                                </div><!-- /.form-container -->
                                            </form><!-- /.form-cnt -->

                                            <form role="form" class="form-inline form-cnt">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <span class="text col-md-offset-3">Use spaces to separate tags. Use
                                                        single quotes (') for phrases.</span>
                                                </div>
                                            </form><!-- /.form-cnt -->

                                        </div><!-- /.product-tab -->
                                    </div><!-- /.tab-pane -->

                                </div><!-- /.tab-content -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.product-tabs -->

                    <!--  UPSELL PRODUCTS  -->
                    <?php echo $__env->make('frontend.frontend_layout.product_page.up-sell-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--  UPSELL PRODUCTS : END  -->
                </div><!-- /.col -->
                <div class="clearfix"></div>
            </div>
            <!-- /.row -->
            <!--  BRANDS CAROUSEL  -->
            <?php echo $__env->make('frontend.frontend_layout.home_page.brands-carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /.logo-slider -->
            <!--  BRANDS CAROUSEL : END  -->
        </div>
        <!-- /.container -->
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/product_page/product-page.blade.php ENDPATH**/ ?>