<!-- For demo purposes – can be removed on production -->

<!-- For demo purposes – can be removed on production : End -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/echo.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/jquery.easing-1.3.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/bootstrap-slider.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/jquery.rateit.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('frontend')); ?>/assets/js/lightbox.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo e(asset('frontend')); ?>/assets/js/scripts.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>


<script>
<?php if(Session::has('message')): ?>
    let type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
    switch (type) {
        case 'info':
            toastr.info("<?php echo e(Session::get('message')); ?>")
            break;
        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>")
            break;
        case 'warning':
            toastr.warning("<?php echo e(Session::get('message')); ?>")
            break;
        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>")
            break;
        default:
            break;
    }
<?php endif; ?>
</script>
<?php echo $__env->yieldContent('frontend_script'); ?>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views/frontend/frontend_layout/body/script.blade.php ENDPATH**/ ?>