

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Orders',
    'url' => "orders.index",
    'section_name' => 'All Orders'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <?php if(Request::is('admin/orders')): ?>
                                All Orders List
                            <?php else: ?>
                                Statuswise Order List
                            <?php endif; ?>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Invoice</th>
                                                    <th>Amount</th>
                                                    <th>Method</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">
                                                        <?php echo e($loop->index+1); ?>

                                                    </td>
                                                    <td class="sorting_1"><?php echo e($order->created_at->diffForHumans()); ?></td>
                                                    <td class="soring_1"><?php echo e($order->invoice_number); ?></td>
                                                    <td class="sorting_1"><?php echo e($order->amount); ?></td>
                                                    <td class="sorting_1"><?php echo e($order->payment_method); ?></td>
                                                    <td class="sorting_1">
                                                        <?php if($order->status == 'pending'): ?>
                                                        <span class="badge badge-primary"><?php echo e($order->status); ?></span>
                                                        <?php elseif($order->status == 'confirmed'): ?>
                                                        <span class="badge badge-secondary"><?php echo e($order->status); ?></span>
                                                        <?php elseif($order->status == 'processing'): ?>
                                                        <span class="badge badge-info"><?php echo e($order->status); ?></span>
                                                        <?php elseif($order->status == 'picked'): ?>
                                                        <span class="badge badge-warning"><?php echo e($order->status); ?></span>
                                                        <?php elseif($order->status == 'shipped'): ?>
                                                        <span class="badge badge-light"><?php echo e($order->status); ?></span>
                                                        <?php elseif($order->status == 'delivered'): ?>
                                                        <span class="badge badge-success"><?php echo e($order->status); ?></span>
                                                        <?php else: ?>
                                                        <span class="badge badge-danger"><?php echo e($order->status); ?></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="<?php echo e(route('orders.show', $order)); ?>" class="btn btn-success" title="View"><i class="fa fa-eye"></i>
                                                            </a>
                                                            <?php if($order->status =='pending'): ?>

                                                            <?php else: ?>
                                                            <a href="<?php echo e(route('admin-invoice-download', $order->id)); ?>" class="btn btn-danger" title="Download"><i class="fa fa-download"></i>
                                                            </a>
                                                            <?php endif; ?>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                </div>
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\Orders\index.blade.php ENDPATH**/ ?>