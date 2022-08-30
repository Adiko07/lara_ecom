    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Catégories</div>
        <nav class="yamm megamenu-horizontal">
            <ul class="nav">

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon <?php echo e($category->category_icon); ?>" aria-hidden="true"></i>
                            <?php if(session()->get('language') == 'bangla'): ?>
                                <?php echo e($category->category_name_bn); ?>

                            <?php else: ?>
                                <?php echo e($category->category_name_en); ?>

                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="yamm-content">
                                <div class="row">
                                    <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-sm-12 col-md-3">
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
                                            <ul class="links list-unstyled">
                                                <?php $__currentLoopData = $subcategory->subsubcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a
                                                            href="<?php echo e(route('subsubcategory.products', ['id' => $subsubcategory->id, 'slug' => $subsubcategory->subsubcategory_slug_en])); ?>">
                                                            <?php if(session()->get('language') == 'bangla'): ?>
                                                                <?php echo e($subsubcategory->subsubcategory_name_bn); ?>

                                                            <?php else: ?>
                                                                <?php echo e($subsubcategory->subsubcategory_name_en); ?>

                                                            <?php endif; ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- /.yamm-content -->
                        </ul>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.menu-item -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <!-- /.nav -->
        </nav>
        <!-- /.megamenu-horizontal -->
    </div>
    <!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/frontend_layout/body/side-menu.blade.php ENDPATH**/ ?>