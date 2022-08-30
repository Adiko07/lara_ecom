<header class="main-header">
<!-- Header Navbar -->
<nav class="navbar navbar-static-top pl-30">
    <!-- Sidebar toggle button-->
    <div>
        
    </div>

    <div class="navbar-custom-menu r-side">
    <ul class="nav navbar-nav">
        <!-- full Screen -->
        
        </li>

        <!-- User Account-->
        <li class="dropdown user user-menu">
        <a href="#" class="waves-effect waves-light rounded dropdown-toggle p-0" data-toggle="dropdown" title="User">
            <img class="rounded-circle" src="<?php echo e(url('upload/admin_images/blank_profile_photo.jpg')); ?>" alt="User Avatar">
            
        </a>
        <ul class="dropdown-menu animated flipInX">
            <li class="user-body">
                <a class="dropdown-item" href="<?php echo e(route('profile.index')); ?>"><i class="ti-user text-muted mr-2"></i> Profile</a>
                <a class="dropdown-item" href="<?php echo e(route('admin.change.password')); ?>"><i class="ti-wallet text-muted mr-2"></i>Changer le mot de passe</a>
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(route('admin.logout')); ?>"><i class="ti-lock text-muted mr-2"></i> Déconnexion</a>
            </li>
        </ul>
        </li>
        

    </ul>
    </div>
</nav>
</header>
<?php /**PATH /home/sodiicmc/public_html/resources/views/admin/dashboard_layout/header.blade.php ENDPATH**/ ?>