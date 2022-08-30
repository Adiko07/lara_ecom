<?php $__env->startSection('title'); ?>
    SODIB-CI || Produit de sous-catégorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class="col-md-12">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    <div id="category" class="category-carousel hidden-xs">
                        <div class="item">
                            <div class="image"> <img src="<?php echo e(asset('frontend')); ?>/assets/images/banners/banner.jpg"
                                    alt="" class="img-responsive"> </div>
                            <div class="container-fluid">
                                <div class="caption vertical-top text-left">
                                    <div class="big-text"> SODIB-CI </div>
                                    <div class="excerpt hidden-sm hidden-md"> Tous ce qu'il vous faut pour le Batiment </div>
                                    <div class="excerpt-normal hidden-sm hidden-md"> Découvrez des milliers d'articles pour vos travaux de construction. </div>
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </div>


                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    
                                </div>
                                <!-- /.filter-tabs -->
                            </div>
                            <!-- /.col -->
                            
                                <!-- /.col -->
                                
                            <!-- /.col -->
                            <div class="col col-sm-6 col-md-4 text-right">
                                
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active" id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                    <?php if($products->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInUp animated"
                                            style="visibility: visible; animation-name: fadeInUp;">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"> <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"><img
                                                                    src="<?php echo e(asset($product->product_thumbnail)); ?>"
                                                                    alt=""></a> </div>
                                                        <!-- /.image -->

                                                    <?php
                                                        $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                                                    ?>
                                                    <?php if($product->discount_price == NULL): ?>
                                                        <div class="tag new"><span>New</span></div>
                                                    <?php else: ?>
                                                        <div class="tag new"><span><?php echo e(round($discount_amount)); ?>%</span></div>
                                                    <?php endif; ?>
                                                    <!-- /.product-image -->
                                                    </div>
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                                            <?php if(session()->get('language') == 'bangla'): ?>
                                                                <?php echo e($product->product_name_bn); ?>

                                                            <?php else: ?>
                                                                <?php echo e($product->product_name_en); ?>

                                                            <?php endif; ?>
                                                        </a>
                                                        </h3>
                                                        
                                                        <div class="description"></div>
                                                        <div class="product-price">
                                                            <?php if($product->discount_price == NULL): ?>
                                                            <span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                                                            <?php else: ?>
                                                            <span class="price"><?php echo e($product->discount_price); ?> FCFA</span>
                                                            <span class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA</span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                    <!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            
                                                        </div>
                                                        <!-- /.action -->
                                                    </div>
                                                    <!-- /.cart -->
                                                </div>
                                                <!-- /.product -->

                                            </div>
                                            <!-- /.products -->
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <!-- /.item -->
                                    <?php endif; ?>
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="list-container">
                                <div class="category-product">
                                <?php if($products->isNotEmpty()): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="category-product-inner wow fadeInUp animated"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image"> <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"><img
                                                                src="<?php echo e(asset($product->product_thumbnail)); ?>"
                                                                alt=""></a>
                                                            </div>
                                                        </div>
                                                        <!-- /.product-image -->
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col col-sm-8 col-lg-8">
                                                        <div class="product-info">
                                                            <h3 class="name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                                                <?php if(session()->get('language') == 'bangla'): ?>
                                                                <?php echo e($product->product_name_bn); ?>

                                                                <?php else: ?>
                                                                <?php echo e($product->product_name_en); ?>

                                                                <?php endif; ?>
                                                            </a>
                                                            </h3>
                                                            <div class="rating rateit-small rateit"><button
                                                                    id="rateit-reset-14" data-role="none"
                                                                    class="rateit-reset" aria-label="reset rating"
                                                                    aria-controls="rateit-range-14"
                                                                    style="display: none;"></button>
                                                                <div id="rateit-range-14" class="rateit-range" tabindex="0"
                                                                    role="slider" aria-label="rating"
                                                                    aria-owns="rateit-reset-14" aria-valuemin="0"
                                                                    aria-valuemax="5" aria-valuenow="4" aria-readonly="true"
                                                                    style="width: 70px; height: 14px;">
                                                                    <div class="rateit-selected"
                                                                        style="height: 14px; width: 56px;"></div>
                                                                    <div class="rateit-hover" style="height:14px"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-price">
                                                                <?php if($product->discount_price == NULL): ?>
                                                                    <span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                                                                <?php else: ?>
                                                                    <span class="price"><?php echo e($product->discount_price); ?> FCFA</span>
                                                                    <span class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA</span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <!-- /.product-price -->
                                                            <div class="description m-t-10">
                                                                <?php if(session()->get('language') == 'bangla'): ?>
                                                                <?php echo e($product->short_description_bn); ?>

                                                                <?php else: ?>
                                                                <?php echo e($product->short_description_en); ?>

                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <button class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button"> <i
                                                                                    class="fa fa-shopping-cart"></i>
                                                                            </button>
                                                                            <button class="btn btn-primary cart-btn"
                                                                                type="button">Add to cart</button>
                                                                        </li>
                                                                        <li class="lnk wishlist"> <a class="add-to-cart"
                                                                                href="detail.html" title="Wishlist"> <i
                                                                                    class="icon fa fa-heart"></i> </a> </li>
                                                                        <li class="lnk"> <a class="add-to-cart"
                                                                                href="detail.html" title="Compare"> <i
                                                                                    class="fa fa-signal"></i> </a> </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /.action -->
                                                            </div>
                                                            <!-- /.cart -->

                                                        </div>
                                                        <!-- /.product-info -->
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.product-list-row -->
                                                <?php
                                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                                                ?>
                                                <?php if($product->discount_price == NULL): ?>
                                                    <div class="tag new"><span>New</span></div>
                                                <?php else: ?>
                                                    <div class="tag new"><span><?php echo e(round($discount_amount)); ?>%</span></div>
                                                <?php endif; ?>
                                            </div>
                                            <!-- /.product-list -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- /.category-product-inner -->
                                <?php endif; ?>
                                </div>
                                <!-- /.category-product -->
                            </div>
                            <!-- /.tab-pane #list-container -->
                        </div>
                        <!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        
                                    </ul>
                                    <!-- /.list-inline -->
                                </div>
                                <!-- /.pagination-container -->
                            </div>
                            <!-- /.text-right -->

                        </div>
                        <!-- /.filters-container -->

                    </div>
                    <!-- /.search-result-container -->

                </div>
                <!-- /.col -->
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
<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/autosearch.blade.php ENDPATH**/ ?>