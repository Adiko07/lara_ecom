

<?php $__env->startSection('title'); ?>
    Al Araf Fashion - Wishlist Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
<div class="body-content">
	<div class="container">
    <div class="my-wishlist-page">
        <div class="row">
            <div class="col-md-12 my-wishlist">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="4" class="heading-title">My Wishlist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $wishlists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $wish->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-md-2"><img src="<?php echo e(asset($product->product_thumbnail)); ?>" alt="imga"></td>
                                <td class="col-md-7">
                                    <div class="product-name"><a href="<?php echo e(route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en])); ?>">
                                        <?php if(session()->get('language') == 'bangla'): ?>
                                            <?php echo e($product->product_name_bn); ?>

                                        <?php else: ?>
                                            <?php echo e($product->product_name_en); ?>

                                        <?php endif; ?>
                                    </a></div>
                                        <?php if($product->discount_price == NULL): ?>
                                        <div class="price">$<?php echo e($product->selling_price); ?></div>
                                        <?php else: ?>
                                        <div class="price">$<?php echo e($product->discount_price); ?>

                                        <span class="price-before-discount">$<?php echo e($product->selling_price); ?></span>
                                        </div>
                                        <?php endif; ?>
                                </td>
                                <td class="col-md-2">
                                    <button class="btn-upper btn btn-primary" type="button" data-toggle="modal"
                                    data-target="#productViewModal" onclick="productView(this.id)"
                                    id="<?php echo e($product->id); ?>">Add to cart</button>
                                </td>
                                <td class="col-md-1 close-btn">
                                    <button type="button" class="" onclick="removeWishlist(this.id)" id=<?php echo e($wish->id); ?>><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.row -->
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\wishlist_page\wishlist_list.blade.php ENDPATH**/ ?>