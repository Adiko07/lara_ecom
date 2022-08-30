<div class="breadcrumb">
<div class="container">
    <div class="breadcrumb-inner">
    <ul class="list-inline list-unstyled">
        <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
        <?php if(request()->routeIs('category')): ?>
        <li class="request()->routeIs('category')? 'active': ''">Catégorie</li>
        <?php elseif(request()->routeIs('login')): ?>
        <li class="request()->routeIs('login')? 'active': ''">Se connecter</li>
        <?php else: ?>
        
        <?php endif; ?>
    </ul>
    </div>
    <!-- /.breadcrumb-inner -->
</div>
<!-- /.container -->
</div>
<!-- /.breadcrumb -->
<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/body/breadcrumb.blade.php ENDPATH**/ ?>