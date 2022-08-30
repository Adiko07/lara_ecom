<div class="sidebar-module-container">
    <div class="sidebar-filter">
        <!--  SIDEBAR CATEGORY  -->
        <div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <h3 class="section-title">shop by</h3>
            <div class="widget-header">
                <h4 class="widget-title">Category</h4>
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
        <div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
            </div>
            <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$200.00</span> <span
                            class="pull-right">$800.00</span> </span>
                    <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                    <div class="slider slider-horizontal" id="">
                        <div class="slider-track">
                            <div class="slider-selection" style="left: 16.6667%; width: 26.6667%;"></div>
                            <div class="slider-handle min-slider-handle" tabindex="0" style="left: 16.6667%;"></div>
                            <div class="slider-handle max-slider-handle" tabindex="0" style="left: 43.3333%;"></div>
                        </div>
                        <div class="tooltip tooltip-main top" style="left: 30%; margin-left: -35px;">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">200 : 360</div>
                        </div>
                        <div class="tooltip tooltip-min top" style="left: 16.6667%; margin-left: -35px;">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">200</div>
                        </div>
                        <div class="tooltip tooltip-max bottom" style="top: 18px; left: 43.3333%; margin-left: -35px;">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-inner">360</div>
                        </div>
                    </div><input type="text" class="price-slider" value="200,360" data="value: '200,360'"
                        style="display: none;">
                </div>
                <!-- /.price-range-holder -->
                <a href="#" class="lnk btn btn-primary">Show Now</a>
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!--  PRICE SILDER : END  -->
        <!--  MANUFACTURES -->
        <div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="widget-header">
                <h4 class="widget-title">Manufactures</h4>
            </div>
            <div class="sidebar-widget-body">
                <ul class="list">
                    <li><a href="#">Forever 18</a></li>
                    <li><a href="#">Nike</a></li>
                    <li><a href="#">Dolce &amp; Gabbana</a></li>
                    <li><a href="#">Alluare</a></li>
                    <li><a href="#">Chanel</a></li>
                    <li><a href="#">Other Brand</a></li>
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!--  MANUFACTURES: END  -->
        <!--  COLOR -->
        <div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
            <div class="widget-header">
                <h4 class="widget-title">Colors</h4>
            </div>
            <div class="sidebar-widget-body">
                <ul class="list">
                    <li><a href="#">Red</a></li>
                    <li><a href="#">Blue</a></li>
                    <li><a href="#">Yellow</a></li>
                    <li><a href="#">Pink</a></li>
                    <li><a href="#">Brown</a></li>
                    <li><a href="#">Teal</a></li>
                </ul>
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!--  COLOR: END  -->
        <!--  COMPARE -->
        <div class="sidebar-widget wow fadeInUp outer-top-vs animated"
            style="visibility: visible; animation-name: fadeInUp;">
            <h3 class="section-title">Compare products</h3>
            <div class="sidebar-widget-body">
                <div class="compare-report">
                    <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report -->
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!--  COMPARE: END  -->
        <!--  PRODUCT TAGS  -->
        <?php echo $__env->make('frontend.frontend_layout.widgets.product-tags-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.sidebar-widget -->
        <!----------- Testimonials------------->
        <?php echo $__env->make('frontend.frontend_layout.widgets.testimonial-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--  Testimonials: END  -->
    </div>
    <!-- /.sidebar-filter -->
</div>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\category_page\shop-by-widget.blade.php ENDPATH**/ ?>