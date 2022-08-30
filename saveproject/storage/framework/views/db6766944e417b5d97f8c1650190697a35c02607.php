

<?php $__env->startSection('title'); ?>
    SODIB-CI
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_content'); ?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!--  SIDEBAR  -->
                <?php echo $__env->make('frontend.frontend_layout.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- SECTION – HERO  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.hero-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  SECTION – HERO : END  -->

                <!--  INFO BOXES  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.info-boxes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  INFO BOXES : END  -->
                <!--  SCROLL TABS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.new-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.scroll-tabs -->
                <!--  SCROLL TABS : END  -->
                <!--  WIDE PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.two-column-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  WIDE PRODUCTS : END  -->


                <!--  FEATURED PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.featured-products', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.section -->
                <!--  FEATURED PRODUCTS : END  -->

                <!--  WIDE PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.middle-banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  WIDE PRODUCTS : END  -->

                <!--  Category wise PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.categorywise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.section -->
                <!--  Category wise PRODUCTS : END  -->

                <!--  Category wise PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.brandwise', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.section -->
                <!--  Category wise PRODUCTS : END  -->
                <!--  BEST SELLER  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.best-seller', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- /.sidebar-widget -->
                <!--  BEST SELLER : END  -->

                <!--  BLOG SLIDER  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.blog-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  BLOG SLIDER : END  -->

                <!--  FEATURED PRODUCTS  -->
                <?php echo $__env->make('frontend.frontend_layout.home_page.new-arrivals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--  FEATURED PRODUCTS : END  -->

            </div>
            <!-- /.homebanner-holder -->
            <!--  CONTENT : END  -->
        </div>
        <!-- /.row -->
        <!--  BRANDS CAROUSEL  -->
        <?php echo $__env->make('frontend.frontend_layout.home_page.brands-carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.logo-slider -->
        <!--  BRANDS CAROUSEL : END  -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>