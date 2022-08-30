

<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Category',
    'url' => "categories.index",
    'section_name' => 'All Category'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Toutes les catégories</h3>
                        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">Créér une nouvelle catégorie</a>
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
                                                    <th>Icone Catégorie</th>
                                                    <th>Catégorie</th>
                                                    
                                                    <th>Image Catégorie</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr role="row" class="odd">
                                                    <td><?php echo e($loop->index+1); ?></td>
                                                    <td><?php echo e($item->category_icon); ?></td>
                                                    <td class="sorting_1"><?php echo e($item->category_name_en); ?></td>
                                                    
                                                    <td>
                                                        <img src="<?php echo e(asset($item->category_image)); ?>" alt="" style="width: 70px; height:40px;">
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="<?php echo e(route('categories.edit', $item)); ?>" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="<?php echo e(route('categories.destroy', $item)); ?>" method="post">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Category/index.blade.php ENDPATH**/ ?>