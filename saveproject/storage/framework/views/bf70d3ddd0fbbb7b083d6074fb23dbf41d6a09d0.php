<div class="breadcrumb">
<div class="container">
    <div class="breadcrumb-inner">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <?php if(request()->routeIs('category')): ?>
        <li class="request()->routeIs('category')? 'active': ''">Category</li>
        <?php elseif(request()->routeIs('login')): ?>
        <li class="request()->routeIs('login')? 'active': ''">Login</li>
        <?php else: ?>
        
        <?php endif; ?>
    </ul>
    </div>
    <!-- /.breadcrumb-inner -->
</div>
<!-- /.container -->
</div>
<!-- /.breadcrumb -->
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\body\breadcrumb.blade.php ENDPATH**/ ?>