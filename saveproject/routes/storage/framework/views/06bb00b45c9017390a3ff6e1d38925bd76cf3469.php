
<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">
        <?php if(session()->get('language') == 'bangla'): ?>
        <?php echo e($skip_brand_0->brand_name_bn); ?> ব্র্যান্ড পণ্য
        <?php else: ?>
        PRODUITS DE MARQUE <?php echo e($skip_brand_0->brand_name_en); ?>

        <?php endif; ?>
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        <?php $__currentLoopData = $skip_brand_products_0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item item-carousel">
            <div class="products">
                <div class="product">
                    <div class="product-image">
                        <div class="image"> <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"><img
                                    src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""></a> </div>
                        <!-- /.image -->

                        <div class="tag hot"><span>hot</span></div>
                    </div>
                    <!-- /.product-image -->

                    <div class="product-info text-left">
                        <h3 class="name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
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
                            <div class="product-price"> <span class="price"> <?php echo e($product->discount_price); ?> FCFA</span> <span class="price-before-discount"><?php echo e($product->selling_price); ?> FCFA</span> </div>
                        <?php endif; ?>
                        <!-- /.product-price -->

                    </div>
                    <!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                                
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

<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/home_page/brandwise.blade.php ENDPATH**/ ?>