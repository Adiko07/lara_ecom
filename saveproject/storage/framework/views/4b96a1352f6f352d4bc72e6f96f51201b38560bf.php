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
                        <img src="<?php echo e(asset('backend')); ?>/images/logo-dark.png" alt="">
                        <h3><b>Al Araf Store</b> Admin</h3>
                    </div>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

    <li class="<?php echo e(($route == 'admin.dashboard') ? 'active':''); ?>">
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <i data-feather="pie-chart"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="treeview <?php echo e(Request::is('admin/orders*') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Orders</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(route('orders.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('orders.index')); ?>"><i class="ti-more"></i>All Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/pending') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('pending.orders')); ?>"><i class="ti-more"></i>Pending Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/confirmed') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('confirmed.orders')); ?>"><i class="ti-more"></i>Confirmed Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/processing') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('processing.orders')); ?>"><i class="ti-more"></i>Processing Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/picked') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('picked.orders')); ?>"><i class="ti-more"></i>Picked Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/shipped') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('shipped.orders')); ?>"><i class="ti-more"></i>Shipped Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/order/delivered*') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('delivered.orders')); ?>"><i class="ti-more"></i>Delivered Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/cancel') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('cancel.orders')); ?>"><i class="ti-more"></i>Cancel Orders</a>
            </li>
            <li class=" <?php echo e(Request::is('admin/orders/return') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('return.orders')); ?>"><i class="ti-more"></i>Return Orders</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($route == 'brands.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>Brands</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li class=" <?php echo e(($route == 'brands.index') ? 'active' : ''); ?>">
            <a href="<?php echo e(route('brands.index')); ?>"><i class="ti-more"></i>All Brand</a>
        </li>
        </ul>
    </li>
    <li class="treeview <?php echo e(($route == 'categories.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="message-circle"></i>
        <span>Category</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == 'categories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('categories.index')); ?>"><i class="ti-more"></i>All Category</a>
            </li>
            <li class=" <?php echo e(($route == 'subcategories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subcategories.index')); ?>"><i class="ti-more"></i>All SubCategory</a>
            </li>
            <li class=" <?php echo e(($route == 'subsubcategories.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('subsubcategories.index')); ?>"><i class="ti-more"></i>All Sub-SubCategory</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($route == 'products.index') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="mail"></i> <span>Product Catalog</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == 'products.create') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('products.create')); ?>"><i class="ti-more"></i>Add Product</a>
            </li>
            <li class=" <?php echo e(($route == 'products.index') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('products.index')); ?>"><i class="ti-more"></i>Manage Products</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($prefix == '/slider') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Slider</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == '/slider') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('slider.index')); ?>"><i class="ti-more"></i>Manage Slider</a>
            </li>
        </ul>
    </li>

    <li class="treeview <?php echo e(($prefix == '/coupons') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Coupons</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == '/coupons') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('coupons.index')); ?>"><i class="ti-more"></i>Manage Coupon</a>
            </li>
        </ul>
    </li>
    <li class="treeview <?php echo e(($prefix == '/division') ? 'active' : ''); ?>">
        <a href="#">
        <i data-feather="file"></i> <span>Shipping Area</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class=" <?php echo e(($route == '/division') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('division.index')); ?>"><i class="ti-more"></i>Ship Division</a>
            </li>
            <li class=" <?php echo e(($route == '/division') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('district.index')); ?>"><i class="ti-more"></i>Ship District</a>
            </li>
            <li class=" <?php echo e(($route == '/state') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('state.index')); ?>"><i class="ti-more"></i>Ship State</a>
            </li>
        </ul>
    </li>

    <li class="header nav-small-cap">User Interface</li>

    <li class="treeview">
        <a href="#">
        <i data-feather="grid"></i>
        <span>Components</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
        <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
        <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
        <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
        <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
        <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
        <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
        <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
        </ul>
    </li>
    </ul>
</section>


</aside>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\admin\dashboard_layout\aside.blade.php ENDPATH**/ ?>