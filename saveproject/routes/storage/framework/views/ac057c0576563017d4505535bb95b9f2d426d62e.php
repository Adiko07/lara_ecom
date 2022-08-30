<?php $__env->startSection('title'); ?>
    SODIB-CI || Page de paiement
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-8">
                <div class="panel-group checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->
                    <div class="panel panel-default checkout-step-01">

                        <div id="collapseOne" class="panel-collapse collapse in">
                            <!-- panel-body  -->
                            <div class="panel-body">
                                <div class="row">

                                    <!-- guest-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>Adresse de livraison</b></h4>

                                        <form class="shipping-form" method="POST" action="<?php echo e(route('checkout.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingName">Nom pour la livraison<span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"
                                                    id="shippingName" placeholder="Enter your name here"
                                                    name="shipping_name" value="<?php echo e(Auth::user()->name); ?>">
                                                    <?php $__errorArgs = ['shipping_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="alert text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingEmail">Email d'expédition
                                                    <span>*</span></label>
                                                <input type="email" class="form-control unicase-form-control text-input"
                                                    id="shippingEmail" placeholder="Enter your email here"
                                                    name="shipping_email" value="<?php echo e(Auth::user()->email); ?>">
                                                    <?php $__errorArgs = ['shipping_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="alert text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingPhone">Téléphone :<span>*</span></label>
                                                <input type="phone" class="form-control unicase-form-control text-input"
                                                    id="shippingPhone" placeholder="Enter your phone number"
                                                    name="shipping_phone" value="<?php echo e(Auth::user()->phone_number); ?>">
                                                    <?php $__errorArgs = ['shipping_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="alert text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>

                                            <div class="form-group">
                                                <label class="info-title" for="shippingPhone2">Téléphone 2
                                                    <span></span></label>
                                                <input type="tel" class="form-control unicase-form-control text-input"
                                                    id="shippingPhone2" placeholder="Enter your name here"
                                                    name="shipping_phone2">
                                                    <?php $__errorArgs = ['shipping_phone2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="alert text-danger"><?php echo e($message); ?></span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                    </div>
                                    <!-- guest-login -->

                                    <!-- already-registered-login -->
                                    <div class="col-md-6 col-sm-6 already-registered-login">
                                        <h4 class="checkout-subtitle"><b>Barre d'adresse</b></h4>

                                        

                                        
                                        

                                        <label class="info-title" for="shippingAddrees">Adresse de livraison<span>*</span></label>
                                        <textarea name="shipping_address" id="" cols="30" rows="1"
                                            class="form-control unicase-form-control text-input" id="shippingAddrees"
                                            placeholder="Example: ABIDJAN YOPOUGON NIANGON TERMINUS 27"></textarea>
                                            <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="alert text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingNotes">Notes d'expédition<span></span></label>
                                                <textarea name="shipping_notes" id="" cols="30" rows="10" class="form-control unicase-form-control text-input" id="shippingNotes" placeholder="Souhaitez vous nous laisser des instruction concernant la livraison ?"></textarea>
                                            </div>
                                    </div>
                                    <!-- already-registered-login -->

                                </div>
                            </div>
                            <!-- panel-body  -->

                        </div><!-- row -->
                    </div>
                    <!-- checkout-step-01  -->

                </div><!-- /.checkout-steps -->
            </div>
            <div class="col-md-4">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Progression de votre Paiement</h4>
                            </div>
                            <div class="___class_+?71___">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <strong>Image: </strong>
                                            <img src="<?php echo e(asset($item->options->image)); ?>"
                                                style="height: 50px; width: 50px;" alt="">
                                        </li>
                                        <li>
                                            <strong>Qté:</strong>
                                            <?php echo e($item->qty); ?>

                                            <strong>Couleur:</strong>
                                            <?php echo e($item->options->color); ?>

                                            <strong>Taille:</strong>
                                            <?php echo e($item->options->size); ?> <br>
                                            <strong>Longueur:</strong>
                                            <?php echo e($item->options->longueur); ?>

                                            <strong>Largeur:</strong>
                                            <?php echo e($item->options->largeur); ?>

                                            <strong>Epaisseur:</strong>
                                            <?php echo e($item->options->epaisseur); ?>

                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <hr>
                                    <li>
                                        <?php if(Session::has('coupon')): ?>
                                            <strong>Sous-Total: </strong> $<?php echo e($cart_total); ?>

                                            <hr>
                                            <strong>Coupon : </strong> <?php echo e(session()->get('coupon')['coupon_name']); ?>

                                            ( <?php echo e(session()->get('coupon')['coupon_discount']); ?> %)
                                            <hr>
                                            <strong>Bon de réduction:
                                            </strong>(-)<?php echo e(session()->get('coupon')['discount_amount']); ?> FCFA
                                            <hr>
                                            <strong>Total: </strong>$<?php echo e(session()->get('coupon')['total_amount']); ?>

                                            <hr>
                                        <?php else: ?>
                                            <strong>Sous-Total: </strong><?php echo e($cart_total); ?> FCFA
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

                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Sélectionnez le mode de paiement</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Cash à la livraison</label>
                                    <input type="radio" name="payment_method" id="" value="cod">
                                    <img src="<?php echo e(asset('frontend/assets/images/payments/6.png')); ?>" alt="">
                                </div>
                                <?php $__errorArgs = ['payment_method'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="alert text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="col-md-4">
                                    
                                    D'autres mode de paiement seront bientot disponible
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary checkout-page-button">Order
                Confirm</button>
            </form>
        </div><!-- /.row -->
    </div>
<?php $__env->startSection('frontend_script'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="division_id"]').on('change', function(){
                    var division_id = $(this).val();
                    if(division_id) {
                        $.ajax({
                            url: "<?php echo e(url('/division/district/ajax')); ?>/"+division_id,
                            type:"GET",
                            dataType:"json",
                            success:function(data) {
                                $('select[name="state_id"]').html('');
                                var d =$('select[name="district_id"]').empty();
                                    $.each(data, function(key, value){
                                        $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                                    });
                            },
                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        $(document).ready(function() {
            $('select[name="district_id"]').on('change', function(){
                var district_id = $(this).val();
                if(district_id) {
                    $.ajax({
                        url: "<?php echo e(url('/district/state/ajax')); ?>/"+district_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('select[name="state_id"]').html('');
                            var d =$('select[name="state_id"]').empty();
                                $.each(data, function(key, value){
                                    $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                                });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/checkout_page/checkout_page.blade.php ENDPATH**/ ?>