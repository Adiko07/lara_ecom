<?php $__env->startSection('title'); ?>
    SODIB-CI || Checkout Page
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
                                        <h4 class="checkout-subtitle"><b>Shipping Address</b></h4>

                                        <form class="shipping-form" method="POST" action="<?php echo e(route('checkout.store')); ?>">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label class="info-title" for="shippingName">Shipping
                                                    Name<span>*</span></label>
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
                                                <label class="info-title" for="shippingEmail">Shipping email
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
                                                <label class="info-title" for="shippingPhone">Shipping
                                                    Phone<span>*</span></label>
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
                                                <label class="info-title" for="shippingPhone2">Phone 2
                                                    <span>*</span></label>
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
                                        <h4 class="checkout-subtitle"><b>Address Bar</b></h4>

                                        <div class="form-group">
                                            <h5>Division Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="Division Select" name="division_id">
                                                    <option selected>Select Division Name</option>
                                                    <?php $__currentLoopData = $divisions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $division): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($division->id); ?>">
                                                            <?php echo e($division->division_name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <?php $__errorArgs = ['division_id'];
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
                                            <h5>District Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select class="custom-select form-control unicase-form-control" aria-label="District Select" name="district_id">
                                                    <option selected="" disabled="">Select district Name</option>

                                                </select>
                                            </div>
                                            <?php $__errorArgs = ['district_id'];
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
                                        

                                        <label class="info-title" for="shippingAddrees">Shipping
                                            Addres<span>*</span></label>
                                        <textarea name="shipping_address" id="" cols="30" rows="10"
                                            class="form-control unicase-form-control text-input" id="shippingAddrees"
                                            placeholder="Example: H#05,R#02, Uttara Sector: 11, Uttara"></textarea>
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
                                                <label class="info-title" for="shippingNotes">Shipping Notes<span></span></label>
                                                <textarea name="shipping_notes" id="" cols="30" rows="10" class="form-control unicase-form-control text-input" id="shippingNotes" placeholder="any Shipping notes"></textarea>
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
                                <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
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
                                            <strong>Qty:</strong>
                                            <?php echo e($item->qty); ?>

                                            <strong>Color:</strong>
                                            <?php echo e($item->options->color); ?>

                                            <strong>Size:</strong>
                                            <?php echo e($item->options->size); ?>

                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Select Payment Method</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Stripe</label>
                                    <input type="radio" name="payment_method" id="" value="stripe">
                                    <img src="<?php echo e(asset('frontend/assets/images/payments/4.png')); ?>" alt="">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Card</label>
                                    <input type="radio" name="payment_method" id="" value="card">
                                    <img src="<?php echo e(asset('frontend/assets/images/payments/1.png')); ?>" alt="">
                                </div>
                                <div class="col-md-4">
                                    <label for="">COD</label>
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

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\checkout_page\checkout_page.blade.php ENDPATH**/ ?>