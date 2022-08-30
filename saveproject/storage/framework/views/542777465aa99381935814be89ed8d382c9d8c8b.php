<div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
    <!--  TOP NAVIGATION  -->
    <?php echo $__env->make('frontend.frontend_layout.body.side-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  TOP NAVIGATION : END  --> 


<?php if(request()->routeIs('home')): ?>
    <!--  HOT DEALS  -->    
    <?php echo $__env->make('frontend.frontend_layout.widgets.hot-deals-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  HOT DEALS: END  --> 
    <!--  SPECIAL OFFER  -->
    <?php echo $__env->make('frontend.frontend_layout.widgets.special-offer-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  SPECIAL OFFER : END  --> 
    <!--  PRODUCT TAGS  -->
    <?php echo $__env->make('frontend.frontend_layout.widgets.product-tags-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  PRODUCT TAGS : END  -->   
    <!--  SPECIAL DEALS  -->
    <?php echo $__env->make('frontend.frontend_layout.widgets.special-deals-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  SPECIAL DEALS : END  --> 
    <!--  NEWSLETTER  -->
    <?php echo $__env->make('frontend.frontend_layout.widgets.newsletter-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  NEWSLETTER: END  --> 
    <!--  Testimonials -->
    <?php echo $__env->make('frontend.frontend_layout.widgets.testimonial-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  Testimonials: END  -->
    <div class="home-banner"> <img src="<?php echo e(asset('frontend')); ?>/assets/images/banners/LHS-banner.jpg" alt="Image">
    </div>
<?php elseif(request()->routeIs('category')): ?>
    <!--  SHOP BY START  -->
    <?php echo $__env->make('frontend.frontend_layout.category_page.shop-by-widget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--  SHOP BY END  -->
<?php endif; ?>
<!-- /.sidebar-widget --> 
</div>
<!-- /.sidemenu-holder --> <?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\frontend_layout\body\sidebar.blade.php ENDPATH**/ ?>