<?php $__env->startSection('frontend_style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('userdashboard_content'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping Details</h4>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                    <table class="table">
                        <tr>
                            <th> Shipping Name : </th>
                            <th> <?php echo e($order->name); ?> </th>
                        </tr>

                        <tr>
                            <th> Shipping Phone : </th>
                            <th> <?php echo e($order->phone); ?> </th>
                        </tr>

                        <tr>
                            <th> Shipping Email : </th>
                            <th> <?php echo e($order->email); ?> </th>
                        </tr>

                        <tr>
                            <th> Division : </th>
                            <th> <?php echo e($order->division->division_name); ?> </th>
                        </tr>

                        <tr>
                            <th> District : </th>
                            <th> <?php echo e($order->district->district_name); ?> </th>
                        </tr>

                        <tr>
                            <th> State : </th>
                            <th><?php echo e($order->state->state_name); ?> </th>
                        </tr>

                        <tr>
                            <th> Post Code : </th>
                            <th> <?php echo e($order->post_code); ?> </th>
                        </tr>

                        <tr>
                            <th> Order Date : </th>
                            <th> <?php echo e($order->order_date); ?> </th>
                        </tr>

                    </table>
                </div>

            </div>

        </div> <!-- // end col md -6 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Order Details
                        <span class="text-danger"> Invoice : <?php echo e($order->invoice_number); ?></span>
                    </h4>
                    <?php if($order->status == 'pending'): ?>

                    <?php else: ?>
                    <ul>
                        <li> Confirmed Date: <?php echo e($order->confirmed_date); ?></li>
                        <li> Processing Date: <?php echo e($order->processing_date); ?></li>
                        <li> Picked Date: <?php echo e($order->picked_date); ?></li>
                        <li> Shipped Date: <?php echo e($order->shipped_date); ?></li>
                        <li> Delivered Date: <?php echo e($order->delivered_date); ?></li>
                        <li> Cancel Date: <?php echo e($order->cancel_date); ?></li>
                        <li> Return Date: <?php echo e($order->return_date); ?></li>
                    </ul>
                    <?php endif; ?>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                    <table class="table">
                        <tr>
                            <th> Name : </th>
                            <th> <?php echo e($order->user->name); ?> </th>
                        </tr>

                        <tr>
                            <th> Phone : </th>
                            <th> <?php echo e($order->user->phone); ?> </th>
                        </tr>

                        <tr>
                            <th> Payment Type : </th>
                            <th> <?php echo e($order->payment_method); ?> </th>
                        </tr>

                        <tr>
                            <th> Tranx ID : </th>
                            <th> <?php echo e($order->transaction_id); ?> </th>
                        </tr>

                        <tr>
                            <th> Invoice : </th>
                            <th class="text-danger"> <?php echo e($order->invoice_number); ?> </th>
                        </tr>

                        <tr>
                            <th> Order Total :$ </th>
                            <th><?php echo e($order->amount); ?> </th>
                        </tr>

                        <tr>
                            <th> Order : </th>
                            <th>
                                <span class="badge badge-pill badge-warning"
                                    style="background: #418DB9;"><?php echo e($order->status); ?> </span>
                            </th>
                        </tr>

                    </table>
                </div>
            </div>
        </div> <!-- // 2ND end col md -5 -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr style="background: #e2e2e2;">
                            <td class="col-md-1">
                                <label for=""> Image</label>
                            </td>
                            <td class="col-md-3">
                                <label for=""> Product Name </label>
                            </td>
                            <td class="col-md-3">
                                <label for=""> Product Code</label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Color </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Size </label>
                            </td>
                            <td class="col-md-1">
                                <label for=""> Quantity </label>
                            </td>
                            <td class="col-md-1">
                                <label for=""> Price </label>
                            </td>
                            <td class="col-md-1">
                                <label for=""> Action </label>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-md-1">
                                    <label for=""><img src="<?php echo e(asset( $item->product->product_thumbnail )); ?>"
                                            height="50px;" width="50px;"> </label>
                                </td>
                                <td class="col-md-3">
                                    <label for=""> <?php echo e($item->product->product_name); ?></label>
                                </td>
                                <td class="col-md-3">
                                    <label for=""> <?php echo e($item->product->product_code); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->color); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->size); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->qty); ?></label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> $<?php echo e($item->unit_price); ?> ( $ <?php echo e($item->unit_price * $item->qty); ?> ) </label>
                                </td>
                                <?php
                                    $file = App\Models\Product::where('id', $item->product_id)->first();
                                ?>

                                <td class="col-md-1">
                                    <?php if($order->status == 'pending'): ?>
                                        <strong>
                                            <span class="badge badge-pill badge-success" style="background: #418DB9;"> No
                                                File</span>
                                        </strong>

                                    <?php elseif($order->status != 'pending'): ?>

                                        <a target="_blank" class="btn btn-danger" href="<?php echo e(asset('upload/pdf/' . $file->digital_file)); ?>">
                                            <i class="fa fa-download"></i>Inovice
                                        </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div> <!-- / end col md 8 -->
    </div> <!-- // END ORDER ITEM ROW -->
    <?php if($order->status == 'delivered'): ?>
    Delivered
    <?php else: ?>
        <?php
            $order = App\Models\Order::where('id', $order->id)
                ->where('return_reason', '=', null)
                ->first();
        ?>
        <?php if($order): ?>
            <form action="<?php echo e(route('return.order', $order->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="label"> Order Return Reason:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>
                </div>
                <button type="submit" class="btn btn-danger">Order Return</button>
            </form>
        <?php else: ?>
            <span class="badge badge-pill badge-warning" style="background: red">You Have send return request for this product</span>
        <?php endif; ?>
    <?php endif; ?>
    <br><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\order\order-details.blade.php ENDPATH**/ ?>