

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Order Details',
    'url' => "orders.index",
    'section_name' => 'View Order'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Shipping Details</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
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
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Order Details</h3>
                        <span class="text-danger"> Invoice : <?php echo e($order->invoice_number); ?></span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
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
                                <th> Order Total : </th>
                                <th>$ <?php echo e($order->amount); ?> </th>
                            </tr>
                            <tr>
                                <th> Status : </th>
                                <th>
                                    <span class="badge badge-success"><?php echo e($order->status); ?>

                                    </span>
                                </th>
                            </tr>
                            <tr>
                                <th>Return Reason: <p><?php echo e($order->return_reason); ?></p></th>
                                <th>
                                    <?php if($order->status == 'pending'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'confirmed'
                                    ])); ?>" class="btn btn-block btn-success">Confirm Order</a>
                                    <?php elseif($order->status == 'confirmed'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'processing'
                                    ])); ?>" class="btn btn-block btn-success">Process Order</a>
                                    <?php elseif($order->status == 'processing'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'picked'
                                    ])); ?>" class="btn btn-block btn-success">Pick Order</a>
                                    <?php elseif($order->status == 'picked'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'shipped'
                                    ])); ?>" class="btn btn-block btn-success">Ship Order</a>
                                    <?php elseif($order->status == 'shipped'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'delivered'
                                    ])); ?>" class="btn btn-block btn-success">Deliverd Order</a>
                                    <?php elseif($order->status == 'cancel'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'return'
                                    ])); ?>" class="btn btn-block btn-danger">Return Order</a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-lg-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Order View</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr style="background: #e3e3e3;">
                                        <td class="text-dark">
                                            <label for=""> Image</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Product Name </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Product Code</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Color </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Size </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Quantity </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Price </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Download </label>
                                        </td>
                                    </tr>
                                    <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="col-md-1">
                                                <label for=""><img src="<?php echo e(asset( $item->product->product_thumbnail )); ?>"
                                                        height="50px;" width="50px;"> </label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> <?php echo e($item->product->product_name_en); ?></label>
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
                                                            File</span> </strong>

                                                <?php elseif($order->status == 'confirm'): ?>

                                                    <a target="_blank" href="<?php echo e(asset('upload/pdf/' . $file->digital_file)); ?>">
                                                        <strong>
                                                            <span class="badge badge-pill badge-success" style="background: #FF0000;">
                                                                Download Ready</span> </strong> </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\Orders\show.blade.php ENDPATH**/ ?>