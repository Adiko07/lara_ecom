<div class="sidebar-widget outer-bottom-small wow fadeInUp">
    <h3 class="section-title">
        <?php if(session()->get('language') == 'bangla'): ?>
        বিশেষ প্রস্তাব
        <?php else: ?>
        Offre spéciale
        <?php endif; ?>
    </h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
            <div class="item">
                <div class="products special-product">
                    <?php
                    $special_offer_products = App\Models\Product::where('special_offer', 1)->latest()->limit(3)->get();
                    ?>
                    <?php $__currentLoopData = $special_offer_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="product">
                        <div class="product-micro">
                            <div class="row product-micro-row">
                                <div class="col col-xs-5">
                                    <div class="product-image">
                                        <div class="image"> <a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>"> <img src="<?php echo e(asset($product->product_thumbnail)); ?>" alt=""> </a> </div>
                                        <!-- /.image -->

                                    </div>
                                    <!-- /.product-image -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-xs-7">
                                    <div class="product-info">
                                        <h3 class="name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                            <?php if(session()->get('language') == 'bangla'): ?>
                                            <?php echo e($product->product_name_bn); ?>

                                            <?php else: ?>
                                            <?php echo e($product->product_name_en); ?>

                                            <?php endif; ?>
                                        </a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price">
                                            <?php if($product->discount_price == NULL): ?>
                                            <span class="price"><?php echo e($product->selling_price); ?> FCFA </span>
                                            <?php else: ?>
                                            <span class="price"><?php echo e($product->discount_price); ?> FCFA </span>
                                            <span class="price"><?php echo e($product->selling_price); ?> FCFA </span>
                                            <?php endif; ?>
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.sidebar-widget-body -->
</div>
<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/widgets/special-offer-widget.blade.php ENDPATH**/ ?>