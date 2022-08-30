<?php $__env->startSection('title'); ?>
    SODIB-CI || Produit de sous-catégorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar">
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <?php echo $__env->make('frontend.frontend_layout.body.side-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /.side-menu -->
                    <!-- ================================== TOP NAVIGATION : END ================================== -->
                    <?php echo $__env->make('frontend.frontend_layout.category_page.shop-by-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class="col-md-9">
                    <!-- ========================================== SECTION – HERO ========================================= -->

                    


                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-2">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"> <a data-toggle="tab" href="#grid-container"><i
                                                    class="icon fa fa-th-large"></i>Grid</a> </li>
                                        <li><a data-toggle="tab" href="#list-container"><i
                                                    class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
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
                                        <?php $__currentLoopData = $subcategory_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-6 col-md-4 wow fadeInUp animated"
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

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="list-container">
                                <div class="category-product">
                                    <?php $__currentLoopData = $subcategory_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="category-product-inner wow fadeInUp animated"
                                        style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="products">
                                            <div class="product-list product">
                                                <div class="row product-list-row">
                                                    <div class="col col-sm-4 col-lg-4">
                                                        <div class="product-image">
                                                            <div class="image"> <img
                                                                    src="<?php echo e(asset($product->product_thumbnail)); ?>"
                                                                    alt=""> </div>
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
                                                                <?php echo $product->short_description_bn; ?>

                                                                <?php else: ?>
                                                                <?php echo $product->short_description_en; ?>

                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="cart clearfix animate-effect">
                                                                <div class="action">
                                                                    <ul class="list-unstyled">
                                                                        <li class="add-cart-button btn-group">
                                                                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>" class="btn btn-primary icon"
                                                                                data-toggle="dropdown" type="button"> <i
                                                                                    class="fa fa-shopping-cart"></i>
                                                                            </a>
                                                                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>" class="btn btn-primary cart-btn"
                                                                                >Acheter</a>
                                                                        </li>
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
                                        <?php echo e($subcategory_products->links()); ?>

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

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/subcategory_page/subcategory_product_page.blade.php ENDPATH**/ ?>