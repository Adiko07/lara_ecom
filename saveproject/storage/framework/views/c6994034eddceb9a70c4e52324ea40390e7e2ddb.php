

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Product',
    'url' => "products.index",
    'section_name' => 'All Product'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Tous les produits</h3>
                        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Créer un nouveau produit</a>
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
                                                    <th>Image</th>
                                                    <th>Nom du produit</th>
                                                    <th>Quantité du produit</th>
                                                    <th>Prix d'achat</th>
                                                    <th>Prix de vente</th>
                                                    <th>Statut</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e($loop->index+1); ?></td>
                                                    <td>
                                                        <img src="<?php echo e(asset($item->product_thumbnail)); ?>" alt=""  style="width: 70px; height:70px;">
                                                    </td>
                                                    <td class="sorting_1"><?php echo e($item->product_name_en); ?></td>
                                                    <td><?php echo e($item->product_qty); ?></td>
                                                    <td><?php echo e($item->purchase_price); ?></td>
                                                    <td><?php echo e($item->selling_price); ?></td>
                                                    <td>
                                                        
                                                        <input data-id="<?php echo e($item->id); ?>" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" <?php echo e($item->status ? 'checked' : ''); ?>>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="<?php echo e(route('products.edit', $item)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="<?php echo e(route('products.destroy', $item)); ?>" method="post">
                                                                <?php echo method_field('DELETE'); ?>
                                                                <?php echo csrf_field(); ?>
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                            </form>
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
    <?php $__env->startSection('dashboard_script'); ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var product_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/changestatus',
                    data: {'status': status, 'product_id': product_id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\Product\index.blade.php ENDPATH**/ ?>