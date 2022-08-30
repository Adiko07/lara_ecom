<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title"><?php echo e($name); ?></h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href='<?php echo e(route($url)); ?>'><?php echo e($name); ?></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($section_name); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\dashboard_layout\breadcrumb.blade.php ENDPATH**/ ?>