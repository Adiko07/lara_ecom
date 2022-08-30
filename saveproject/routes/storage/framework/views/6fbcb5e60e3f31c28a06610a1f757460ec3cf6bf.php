<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">
        <?php if(session()->get('language') == 'bangla'): ?>
            বৈশিষ্ট্যযুক্ত পণ্য
        <?php else: ?>
        Produits populaires
        <?php endif; ?>
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        <?php
            $featured_products = App\Models\Product::where('featured', 1)
                ->latest()
                ->limit(6)
                ->get();
        ?>
        <?php $__currentLoopData = $featured_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="<?php echo e(route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"><img
                                        src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="<?php echo e(route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        <?php echo e($product->product_name_bn); ?>

                                    <?php else: ?>
                                        <?php echo e($product->product_name_en); ?>

                                    <?php endif; ?>
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <?php if($product->discount_price == null): ?>
                                <div class="product-price"><span class="price"><?php echo e($product->selling_price); ?> FCFA</span>
                                </div>
                            <?php else: ?>
                                <div class="product-price"> <span class="price">
                                        <?php echo e($product->discount_price); ?> FCFA</span> <span
                                        class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA </span> </div>
                            <?php endif; ?>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <?php if($product->product_qty>0): ?>
                                        <button class="btn btn-primary icon" type="button" data-toggle="modal"
                                            data-target="#productViewModal" onclick="productView(this.id)"
                                            id="<?php echo e($product->id); ?>">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <?php else: ?>
                                        <button class="btn btn-danger" type="button">
                                            <i class="fa fa-close"></i>
                                        </button>
                                        <?php endif; ?>

                                        <!-- Button trigger modal -->
                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist">
                                        <button class="add-to-cart" type="button" title="Wishlist"
                                            onclick="addToWishlist(this.id)" id="<?php echo e($product->id); ?>">
                                            <i class="icon fa fa-heart"></i> </button>
                                        
                                    </li>
                                    
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /.item -->
    </div>
    <!-- /.home-owl-carousel -->
</section>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/frontend_layout/home_page/featured-products.blade.php ENDPATH**/ ?>