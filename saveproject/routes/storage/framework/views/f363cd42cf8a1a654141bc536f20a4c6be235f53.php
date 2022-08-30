<header class="header-style-1">
    <!--  TOP MENU  -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <?php if(session()->get('language') == 'bangla'): ?>
                            
                        <?php else: ?>
                            <li><a href="<?php echo e(route('dashboard')); ?>" style="color: #000;"><i class="icon fa fa-user"></i>Mon Compte</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('listWishlist')); ?>" style="color: #000;"><i class="icon fa fa-heart"></i>Liste de souhait</a></li>
                        <li><a href="<?php echo e(route('myCartView')); ?>" style="color: #000;"><i class="icon fa fa-shopping-cart"></i>Mon panier</a></li>
                        <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(route('checkout-page')); ?>" style="color: #000;"><i class="icon fa fa-check"></i>Mes commandes</a></li>
                        <?php endif; ?>

                        <li>
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('user.logout')); ?>" style="color: #000;"><i class="icon fa fa-user"></i>deconnexion</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>" style="color: #000;"><i class="icon fa fa-lock"></i>connexion/inscription</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!--  TOP MENU : END  -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!--  LOGO  -->
                    <div class="logo"> 
                        <a href="<?php echo e(route('home')); ?>" class="">
                            <img src="<?php echo e(asset('frontend')); ?>/assets/images/logo.png" alt="logo" class="img-fluid">
                            
                        </a> 
                    </div>
                    <!-- /.logo -->
                    <!--  LOGO : END  -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!--  SEARCH AREA  -->
                    <div class="search-area">
                        
                        <form action="<?php echo e(route('product-search')); ?>" method="GET" role="search">
                            <div class="control-group">
                                
                                <input class="search-field" placeholder="Rechercher un produit..." type="text" name="name" id="name" />
                                <button class="search-button"></button>
                                <div id="product_list"></div>
                                <div class="col-lg-3"></div>
                            </div>
                        </form>
                    </div>
                    <!-- /.search-area -->
                    <!--  SEARCH AREA : END  -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!--  SHOPPING CART DROPDOWN  -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                                <div class="basket-item-count"><span class="count" id="cartQty"></span></div>
                                <div class="total-price-basket"> <span class="lbl">Panier -</span>
                                    <span class="total-price">
                                        <span class="value" id="cartSubTotal"></span>
                                        <span class="sign">FCFA</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                

                                
                                <div id="miniCart">

                                </div>
                                

                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sous Total :</span class="sign">FCFA<span
                                            class='price' id="cartSubTotal"></span> </div>
                                    <div class="clearfix"></div>

                                    <a href="<?php echo e(route('myCartView')); ?>" class="btn btn-upper btn-primary btn-block m-t-20">COMMANDER</a>

                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!--  SHOPPING CART DROPDOWN : END -->

                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!--  NAVBAR  -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active yamm-fw"> <a href="<?php echo e(route('home')); ?>">
                                        Accueil
                                    </a>
                                </li>
                                <?php
                                    $categories = \App\Models\Category::with(['subcategory', 'subsubcategory', 'products'])->orderBy('category_name_en', 'ASC')->get();
                                ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($loop->index > 4): ?>
                                        <?php
                                            continue;
                                        ?>
                                    <?php endif; ?>
                                    <li class="dropdown yamm mega-menu"> <a href="" data-hover="dropdown"
                                            class="dropdown-toggle" data-toggle="dropdown">
                                            <?php if(session()->get('language') == 'bangla'): ?>
                                                <?php echo e($category->category_name_bn); ?>

                                            <?php else: ?>
                                                <?php echo e($category->category_name_en); ?>

                                            <?php endif; ?>
                                        </a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row d-flex justify-content-between align-items-center">
                                                        <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                                <h2 class="title">
                                                                    <a
                                                                        href="<?php echo e(route('subcategory.products', ['id' => $subcategory->id, 'slug' => $subcategory->subcategory_slug_en])); ?>">
                                                                        <?php if(session()->get('language') == 'bangla'): ?>
                                                                            <?php echo e($subcategory->subcategory_name_bn); ?>

                                                                        <?php else: ?>
                                                                            <?php echo e($subcategory->subcategory_name_en); ?>

                                                                        <?php endif; ?>
                                                                    </a>
                                                                </h2>
                                                                <ul class="links">
                                                                    <?php $__currentLoopData = $subcategory->subsubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li><a
                                                                                href="<?php echo e(route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_en])); ?>">
                                                                                <?php if(session()->get('language') == 'bangla'): ?>
                                                                                    <?php echo e($subsubcategory->subsubcategory_name_bn); ?>

                                                                                <?php else: ?>
                                                                                    <?php echo e($subsubcategory->subsubcategory_name_en); ?>

                                                                                <?php endif; ?>
                                                                            </a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                            <!-- /.col -->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!--  NAVBAR : END  -->

</header>
<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/body/header.blade.php ENDPATH**/ ?>