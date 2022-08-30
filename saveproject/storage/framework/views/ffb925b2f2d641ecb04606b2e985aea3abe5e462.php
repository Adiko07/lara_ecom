

<?php $__env->startSection('title'); ?>
    Al Araf Fashion - COD Page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-6">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Your Shopping Amount</h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <hr>
                                    <li>
                                        <?php if(Session::has('coupon')): ?>
                                            <strong>SubTotal: </strong> $<?php echo e($cart_total); ?>

                                            <hr>
                                            <strong>Coupon Name: </strong> <?php echo e(session()->get('coupon')['coupon_name']); ?>

                                            ( <?php echo e(session()->get('coupon')['coupon_discount']); ?> %)
                                            <hr>
                                            <strong>Coupon Discount:
                                            </strong>(-)$<?php echo e(session()->get('coupon')['discount_amount']); ?>

                                            <hr>
                                            <strong>Grand Total: </strong>$<?php echo e(session()->get('coupon')['total_amount']); ?>

                                            <hr>
                                        <?php else: ?>
                                            <strong>SubTotal: </strong> $<?php echo e($cart_total); ?>

                                            <hr>
                                            <strong>Grand Total: </strong> $<?php echo e($cart_total); ?>

                                            <hr>
                                        <?php endif; ?>

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-progress-sidebar -->
            </div>
            <div class="col-md-6">
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <form action="<?php echo e(route('cod.order')); ?>" method="post" id="payment-form">
                            <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <img src="<?php echo e(asset('frontend/assets/images/payments/cash.png')); ?>" alt="">
                              <label for="card-element">

                            <input type="hidden" name="shipping_name" value="<?php echo e($data['shipping_name']); ?>">
                            <input type="hidden" name="shipping_email" value="<?php echo e($data['shipping_email']); ?>">
                            <input type="hidden" name="shipping_phone" value="<?php echo e($data['shipping_phone']); ?>">
                            <input type="hidden" name="shipping_postCode" value="<?php echo e($data['shipping_postCode']); ?>">
                            <input type="hidden" name="division_id" value="<?php echo e($data['division_id']); ?>">
                            <input type="hidden" name="district_id" value="<?php echo e($data['district_id']); ?>">
                            <input type="hidden" name="state_id" value="<?php echo e($data['state_id']); ?>">
                            <input type="hidden" name="shipping_address" value="<?php echo e($data['shipping_address']); ?>">
                            <input type="hidden" name="shipping_notes" value="<?php echo e($data['shipping_notes']); ?>">

                              </label>
                            </div>
                            <br>
                            <button class="btn btn-primary">Confirm Order</button>
                          </form>
                    </div>
                </div>
            </div>
            </div><!-- /.row -->
            <hr>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('frontend_script'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\payment\cod.blade.php ENDPATH**/ ?>