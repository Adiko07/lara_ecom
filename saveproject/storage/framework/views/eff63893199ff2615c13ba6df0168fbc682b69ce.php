<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
<div class="more-info-tab clearfix ">
    <h3 class="new-product-title pull-left">
        <?php if(session()->get('language') == 'bangla'): ?>
        নতুন পণ্য
        <?php else: ?>
        Nouveaux produits
        <?php endif; ?>
    </h3>
    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
            <?php if(session()->get('language') == 'bangla'): ?> সব <?php else: ?> All <?php endif; ?>
        </a></li>

        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->index>3): ?>
            <?php
                continue;
            ?>
        <?php endif; ?>
        <li><a data-transition-type="backSlide" href="#category<?php echo e($category->id); ?>" data-toggle="tab">
            <?php if(session()->get('language') == 'bangla'): ?> <?php echo e($category->category_name_bn); ?> <?php else: ?> <?php echo e($category->category_name_en); ?> <?php endif; ?>
        </a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </ul>
    <!-- /.nav-tabs -->
</div>
<div class="tab-content outer-top-xs">
    <div class="tab-pane in active" id="all">
        <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
            <?php $__empty_1 = true; $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                        <div class="image">
                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                            <img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt="">
                            </a>
                        </div>
                        <!-- /.image -->
                        <?php
                            $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                        ?>
                        <?php if($product->discount_price == NULL): ?>
                            <div class="tag new"><span>New</span></div>
                        <?php else: ?>
                            <div class="tag new"><span><?php echo e(round($discount_amount)); ?>%</span></div>
                        <?php endif; ?>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                        <h3 class="name">
                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                            <?php if(session()->get('language') == 'bangla'): ?>
                            <?php echo e($product->product_name_bn); ?>

                            <?php else: ?>
                            <?php echo e($product->product_name_en); ?>

                            <?php endif; ?>
                        </a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <?php if($product->discount_price == NULL): ?>
                            <div class="product-price"><span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                            </div>
                        <?php else: ?>
                            <div class="product-price"> <span class="price"> <?php echo e($product->discount_price); ?> FCFA</span> <span class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA </span> </div>
                        <?php endif; ?>
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
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h5 class="text-danger">No Product Found</h5>
            <?php endif; ?>
        <!-- /.item -->
        </div>
        <!-- /.home-owl-carousel -->
        </div>
    <!-- /.product-slider -->
    </div>
    <!-- /.tab-pane -->
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="tab-pane" id="category<?php echo e($category->id); ?>">
        <div class="product-slider">
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
            <?php $__empty_1 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                        <div class="image">
                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                            <img  src="<?php echo e(asset($product->product_thumbnail)); ?>" alt="">
                            </a>
                        </div>
                        <!-- /.image -->
                            <?php
                                $discount_amount = (($product->selling_price-$product->discount_price)/($product->selling_price))*100
                            ?>
                            <?php if($product->discount_price == NULL): ?>
                                <div class="tag new"><span>New</span></div>
                            <?php else: ?>
                                <div class="tag new"><span><?php echo e(round($discount_amount)); ?>%</span></div>
                            <?php endif; ?>

                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                        <h3 class="name">
                            <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                            <?php if(session()->get('language') == 'bangla'): ?>
                            <?php echo e($product->product_name_bn); ?>

                            <?php else: ?>
                            <?php echo e($product->product_name_en); ?>

                            <?php endif; ?>
                        </a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <?php if($product->discount_price == NULL): ?>
                            <div class="product-price"><span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                            </div>
                        <?php else: ?>
                            <div class="product-price"> <span class="price"> <?php echo e($product->discount_price); ?> FCFA</span> <span class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA </span> </div>
                        <?php endif; ?>
                        <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                            </li>
                            <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                        </div>
                        <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                <!-- /.product -->
                </div>
            <!-- /.products -->
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h5 class="text-danger">No Product Found</h5>
            <?php endif; ?>
        <!-- /.item -->
        </div>
        <!-- /.home-owl-carousel -->
        </div>
    <!-- /.product-slider -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
</div>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/frontend_layout/home_page/new-products.blade.php ENDPATH**/ ?>