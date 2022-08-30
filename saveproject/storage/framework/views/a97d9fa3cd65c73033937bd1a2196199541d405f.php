<section class="section featured-product wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <h3 class="section-title">Related products</h3>
    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs"
        style="opacity: 1; display: block;">

        <div class="owl-wrapper-outer">
            <div class="owl-wrapper" style="width: 2484px; left: 0px; display: block;">
                <?php $__currentLoopData = $related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="owl-item" style="width: 207px;">
                    <div class="item item-carousel">
                        <div class="products">
                            <div class="product">
                                <div class="product-image">
                                    <div class="image">
                                        <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"><img src="<?php echo e(asset($product->product_thumbnail)); ?>" alt="">
                                        </a>
                                    </div><!-- /.image -->

                                    <div class="tag sale"><span>sale</span></div>
                                </div><!-- /.product-image -->
                                <div class="product-info text-left">
                                    <h3 class="name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                        <?php if(session()->get('language') == 'bangla'): ?>
                                            <?php echo e($product->product_name_bn); ?>

                                        <?php else: ?>
                                            <?php echo e($product->product_name_en); ?>

                                        <?php endif; ?>
                                    </a></h3>
                                    <div class="rating rateit-small rateit"><button id="rateit-reset-6" data-role="none"
                                            class="rateit-reset" aria-label="reset rating"
                                            aria-controls="rateit-range-6" style="display: none;"></button>
                                        <div id="rateit-range-6" class="rateit-range" tabindex="0" role="slider"
                                            aria-label="rating" aria-owns="rateit-reset-6" aria-valuemin="0"
                                            aria-valuemax="5" aria-valuenow="4" aria-readonly="true"
                                            style="width: 70px; height: 14px;">
                                            <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                                            <div class="rateit-hover" style="height:14px"></div>
                                        </div>
                                    </div>
                                    <div class="description"></div>

                                    <div class="product-price">
                                        <?php if($product->discount_price == NULL): ?>
                                        <span class="price">$<?php echo e($product->selling_price); ?></span>
                                        <?php else: ?>
                                        <span class="price">$<?php echo e($product->discount_price); ?></span>
                                        <span class="price-before-discount">$<?php echo e($product->selling_price); ?></span>
                                        <?php endif; ?>
                                    </div><!-- /.product-price -->

                                </div><!-- /.product-info -->
                                <div class="cart clearfix animate-effect">
                                    <div class="action">
                                        <ul class="list-unstyled">
                                            <li class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown"
                                                    type="button">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to
                                                    cart</button>
                                            </li>
                                            <li class="lnk wishlist">
                                                <a class="add-to-cart" href="detail.html" title="Wishlist">
                                                    <i class="icon fa fa-heart"></i>
                                                </a>
                                            </li>
                                            <li class="lnk">
                                                <a class="add-to-cart" href="detail.html" title="Compare">
                                                    <i class="fa fa-signal"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.action -->
                                </div><!-- /.cart -->
                            </div><!-- /.product -->

                        </div><!-- /.products -->
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div><!-- /.item -->

        <div class="owl-controls clickable">
            <div class="owl-buttons">
                <div class="owl-prev"></div>
                <div class="owl-next"></div>
            </div>
        </div>
    </div><!-- /.home-owl-carousel -->
</section>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\product_page\up-sell-products.blade.php ENDPATH**/ ?>