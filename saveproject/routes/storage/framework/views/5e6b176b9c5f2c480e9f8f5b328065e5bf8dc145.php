<?php $__env->startSection('title'); ?>
    SODIB-CI || Page de paiement en espèces
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
                                <h4 class="unicase-checkout-title">Votre montant d'achat</h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <hr>
                                    <li>
                                        <?php if(Session::has('coupon')): ?>
                                            <strong>Sous-Total: </strong><?php echo e($cart_total); ?> FCFA
                                            <hr>
                                            <strong>Coupon: </strong> <?php echo e(session()->get('coupon')['coupon_name']); ?>

                                            ( <?php echo e(session()->get('coupon')['coupon_discount']); ?> %)
                                            <hr>
                                            <strong>Bon de réduction:
                                            </strong>(-)<?php echo e(session()->get('coupon')['discount_amount']); ?> FCFA
                                            <hr>
                                            <strong>Total: </strong><?php echo e(session()->get('coupon')['total_amount']); ?> FCFA
                                            <hr>
                                        <?php else: ?>
                                            <strong>Sous-Total: </strong> <?php echo e($cart_total); ?> FCFA
                                            <hr>
                                            <strong>Total: </strong> <?php echo e($cart_total); ?> FCFA
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
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img src="<?php echo e(asset('frontend/assets/images/payments/cashOnDelivery.png')); ?>" class="img-fluid" alt="">
                                </div>
                              <label for="card-element">

                            <input type="hidden" name="shipping_name" value="<?php echo e($data['shipping_name']); ?>">
                            <input type="hidden" name="shipping_email" value="<?php echo e($data['shipping_email']); ?>">
                            <input type="hidden" name="shipping_phone" value="<?php echo e($data['shipping_phone']); ?>">
                            <input type="hidden" name="shipping_phone2" value="<?php echo e($data['shipping_phone2']); ?>">
                            
                            <input type="hidden" name="shipping_address" value="<?php echo e($data['shipping_address']); ?>">
                            <input type="hidden" name="shipping_notes" value="<?php echo e($data['shipping_notes']); ?>">

                              </label>
                            </div>
                            <br>
                            <button class="btn btn-primary">Confirmer la commande</button>
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


<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/payment/cod.blade.php ENDPATH**/ ?>