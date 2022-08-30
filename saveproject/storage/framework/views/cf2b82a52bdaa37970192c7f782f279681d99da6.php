<div class="sidebar-module-container">

    <div class="sidebar-filter">

        <!--  SIDEBAR CATEGORY  -->

        <div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

            <h3 class="section-title">Achétez par</h3>

            <div class="widget-header">

                <h4 class="widget-title">Catégorie</h4>

            </div>

            <div class="sidebar-widget-body">

                <div class="accordion">

                    <?php

                        $categories = \App\Models\Category::with(['subcategory'])->orderBy('category_name_en', 'ASC')->get();

                    ?>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="accordion-group">

                        <div class="accordion-heading"> <a href="#collapse<?php echo e($category->id); ?>" data-toggle="collapse"

                                class="accordion-toggle collapsed">

                                <?php if(session()->get('langiage') == 'bangla'): ?>

                                    <?php echo e($category->category_name_bn); ?>


                                <?php else: ?>

                                    <?php echo e($category->category_name_en); ?>


                                <?php endif; ?>

                            </a> </div>

                        <!-- /.accordion-heading -->

                        <div class="accordion-body collapse" id="collapse<?php echo e($category->id); ?>" style="height: 0px;">

                            <div class="accordion-inner">

                                <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <ul>

                                    <li><a href="<?php echo e(route('subcategory.products',['id' => $subcategory->id, 'slug' => $subcategory->subcategory_slug_en])); ?>">

                                        <?php if(session()->get('language') == 'bangla'): ?>

                                        <?php echo e($subcategory->subcategory_name_bn); ?>


                                        <?php else: ?>

                                        <?php echo e($subcategory->subcategory_name_en); ?>


                                        <?php endif; ?>

                                    </a></li>

                                </ul>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                            <!-- /.accordion-inner -->

                        </div>

                        <!-- /.accordion-body -->

                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- /.accordion-group -->

                </div>

                <!-- /.accordion -->

            </div>

            <!-- /.sidebar-widget-body -->

        </div>

        <!-- /.sidebar-widget -->

        <!--  SIDEBAR CATEGORY : END  -->



        <!--  PRICE SILDER -->

        

        <!-- /.sidebar-widget -->

        <!--  COMPARE: END  -->

        <!--  PRODUCT TAGS  -->

        <?php echo $__env->make('frontend.frontend_layout.widgets.product-tags-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- /.sidebar-widget -->

        <!----------- Testimonials------------->

        

        <!--  Testimonials: END  -->

    </div>

    <!-- /.sidebar-filter -->

</div>

<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_layout/category_page/shop-by-widget.blade.php ENDPATH**/ ?>