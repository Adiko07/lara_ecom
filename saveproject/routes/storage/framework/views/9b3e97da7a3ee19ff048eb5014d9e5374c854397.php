<header class="header-style-1">
    <!--  TOP MENU  -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <?php if(session()->get('language') == 'bangla'): ?>
                            <li><a href="<?php echo e(route('dashboard')); ?>"><i class="icon fa fa-user"></i>আমার অ্যাকাউন্ট</a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('dashboard')); ?>"><i class="icon fa fa-user"></i>My Account</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo e(route('listWishlist')); ?>"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="<?php echo e(route('myCartView')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <?php if(auth()->guard()->check()): ?>
                            <li><a href="<?php echo e(route('checkout-page')); ?>"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <?php endif; ?>

                        <li>
                            <?php if(auth()->guard()->check()): ?>
                                <a href="<?php echo e(route('user.logout')); ?>"><i class="icon fa fa-user"></i>User Logout</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('login')); ?>"><i class="icon fa fa-lock"></i>Login/Register</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                data-toggle="dropdown"><span class="value">
                                    <?php if(session()->get('language') == 'bangla'): ?>
                                        ভাষা:বাংলা
                                    <?php else: ?>
                                        Lang: English
                                    <?php endif; ?>
                                </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <?php if(session()->get('language') == 'bangla'): ?>
                                    <li><a href="<?php echo e(route('english.language')); ?>">English</a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('bangla.language')); ?>">বাংলা</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
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
                    <div class="logo"> <a href="<?php echo e(route('home')); ?>"> <img
                                src="<?php echo e(asset('frontend')); ?>/assets/images/logo.png" alt="logo"> </a> </div>
                    <!-- /.logo -->
                    <!--  LOGO : END  -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!--  SEARCH AREA  -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#"></a>
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
                                <div class="total-price-basket"> <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">$</span>
                                        <span class="value" id="cartSubTotal"></span>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                

                                
                                <div id="miniCart">

                                </div>
                                

                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total :</span class="sign">$<span
                                            class='price' id="cartSubTotal"></span> </div>
                                    <div class="clearfix"></div>

                                    <a href="<?php echo e(route('checkout-page')); ?>" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>

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
                                <li class="active dropdown yamm-fw"> <a href="<?php echo e(route('home')); ?>"
                                        data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
                                        <?php if(session()->get('language') == 'bangla'): ?>
                                            হোম
                                        <?php else: ?>
                                            Home
                                        <?php endif; ?>
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
                                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                            <img class="img-responsive"
                                                                src="<?php echo e(asset($category->category_image)); ?>"
                                                                 alt="">
                                                        </div>
                                                        <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
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
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\body\header.blade.php ENDPATH**/ ?>