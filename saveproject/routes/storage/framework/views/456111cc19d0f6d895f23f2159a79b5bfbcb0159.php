<?php $__env->startSection('frontend_style'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('userdashboard_content'); ?>

    <div class="table-responsive">
        <table id="myOrder" class="table table-hover table-bordered display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Facture No</th>
                    <th>Total</th>
                    <th>Paiement</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td scope="row"><?php echo e($loop->index+1); ?></td>
                    <td><?php echo e($order->created_at->diffForHumans()); ?></td>
                    <td><?php echo e($order->invoice_number); ?></td>
                    <td><?php echo e($order->amount); ?></td>
                    <td><?php echo e($order->payment_method); ?></td>
                    <td>
                        <?php if($order->status == 'En attente'): ?>
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
                        <a href="<?php echo e(route('order-deatils', $order->id)); ?>" class="btn btn-sm btn-primary">
                            <i class="fa fa-eye"></i>View
                        </a>
                        <a href="<?php echo e(route('invoice-download', $order->id)); ?>" class="btn btn-sm btn-danger"><i class="fa fa-download"></i>Facture</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td>Pas encore de commande passée !</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_script'); ?>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myOrder').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/order/order-history.blade.php ENDPATH**/ ?>