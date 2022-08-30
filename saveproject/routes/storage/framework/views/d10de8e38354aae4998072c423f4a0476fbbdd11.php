<div id="hero">
<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="item" style="background-image: url(<?php echo e(asset($slider->slider_image)); ?>);">
        <div class="container-fluid">
            <div class="caption bg-color vertical-center text-left">
            
            <div class="big-text fadeInDown-1"><?php echo e($slider->slider_title); ?></div>
            <div class="excerpt fadeInDown-2 hidden-xs"> <span><?php echo $slider->slider_description; ?></span> </div>
            <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
            </div>
            <!-- /.caption -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- /.item -->
</div>
<!-- /.owl-carousel -->
</div>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/frontend_layout/home_page/hero-section.blade.php ENDPATH**/ ?>