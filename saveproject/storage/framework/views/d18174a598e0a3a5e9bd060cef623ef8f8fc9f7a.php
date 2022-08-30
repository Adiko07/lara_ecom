
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Sunny Admin - Dashboard</title>

    
	<?php echo $__env->make('admin.dashboard_layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">


<?php echo $__env->make('admin.dashboard_layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Left side column. contains the logo and sidebar -->
<?php echo $__env->make('admin.dashboard_layout.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <?php echo $__env->yieldContent('dashboard_content'); ?>
    </div>
</div>
<!-- /.content-wrapper -->


<?php echo $__env->make('admin.dashboard_layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Control Sidebar -->
<?php echo $__env->make('admin.dashboard_layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->


<?php echo $__env->make('admin.dashboard_layout.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>
</html>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>