<?php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
    // $request = Request::is('/orders');
    // dd($route, $prefix, $request);
?>

<aside class="main-sidebar">
<!-- sidebar-->
<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
                <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="<?php echo e(asset('frontend')); ?>/assets/images/logo.png" alt="">
                        <h3><b></b></h3>
                    </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

    <li class="<?php echo e(($route == 'admin.dashboard') ? 'active':''); ?>">
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <i data-feather="pie-chart"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
    <li class="treeview <?php echo e(Request::is('admin/orders*') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Vos Commandes</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(route('orders.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('orders.index')); ?>"><i class="ti-more"></i>Toutes les commandes</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/pending') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pending.orders')); ?>"><i class="ti-more"></i>Commandes en attentes</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/confirmed') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('confirmed.orders')); ?>"><i class="ti-more"></i>Commandes Confirmées</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/processing') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('processing.orders')); ?>"><i class="ti-more"></i>Commandes en traitement</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/picked') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('picked.orders')); ?>"><i class="ti-more"></i>Commandes sélectionnées</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/shipped') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('shipped.orders')); ?>"><i class="ti-more"></i>Commandes expédiées</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/order/delivered*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('delivered.orders')); ?>"><i class="ti-more"></i>Commandes livrées</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/cancel') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('cancel.orders')); ?>"><i class="ti-more"></i>Commandes annulées</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/return') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('return.orders')); ?>"><i class="ti-more"></i>Commandes retournées</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($route == 'brands.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>Vos Marques</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class=" <?php echo e(($route == 'brands.index') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('brands.index')); ?>"><i class="ti-more"></i>Toutes les marques</a>
        </li>
        </ul>
    </li>
    <li class="treeview <?php echo e(($route == 'categories.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>Gestion des Catégories</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == 'categories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('categories.index')); ?>"><i class="ti-more"></i>Vos catégories</a>
            </li>
            <li class=" <?php echo e(($route == 'subcategories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subcategories.index')); ?>"><i class="ti-more"></i>Vos sous-catégories</a>
            </li>
            <li class=" <?php echo e(($route == 'subsubcategories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subsubcategories.index')); ?>"><i class="ti-more"></i>Vos sous sous-carégories</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($route == 'products.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="mail"></i> <span>Catalogue de produit</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == 'products.create') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('products.create')); ?>"><i class="ti-more"></i>Ajouter un produit</a>
            </li>
            <li class=" <?php echo e(($route == 'products.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('products.index')); ?>"><i class="ti-more"></i>Gestion des produits</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($prefix == '/slider') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Vos Caroussels</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == '/slider') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('slider.index')); ?>"><i class="ti-more"></i>Gestion des caroussels</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($prefix == '/coupons') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Bon de réduction</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == '/coupons') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('coupons.index')); ?>"><i class="ti-more"></i>Gestion des bons de réductions</a>
            </li>
        </ul>
    </li>
    

    
    </ul>
</section>


</aside>
<?php /**PATH /home/sodiicmc/public_html/resources/views/admin/dashboard_layout/aside.blade.php ENDPATH**/ ?>