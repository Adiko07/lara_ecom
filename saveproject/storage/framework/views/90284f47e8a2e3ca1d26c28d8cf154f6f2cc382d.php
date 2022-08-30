<!-- Vendor JS -->
<script src="<?php echo e(asset('backend')); ?>/js/vendors.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="<?php echo e(asset('')); ?>assets/icons/feather-icons/feather.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
<script src="<?php echo e(asset('')); ?>assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
<script src="<?php echo e(asset('')); ?>assets/vendor_components/sweetalert/sweetalert.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e(asset('')); ?>assets/vendor_components/apexcharts-bundle/irregular-data-series.js"></script>

<script src="<?php echo e(asset('backend')); ?>/js/pages/steps.js"></script>
<script src="<?php echo e(asset('')); ?>assets/vendor_components/datatable/datatables.min.js"></script>
<script src="<?php echo e(asset('backend')); ?>/js/pages/data-table.js"></script>
<?php echo $__env->yieldContent('dashboard_script'); ?>

<!-- Sunny Admin App -->
<script src="<?php echo e(asset('backend')); ?>/js/template.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script type="text/javascript">
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
<script type="text/javascript">

  $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
                  Swal.fire({
                    title: 'Confirmation de requête ?',
                    text: "Voulez-vous vraiment effectuer une suppression ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OUI, proceder à la suppression!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Supprimé !',
                        'Suppression effectuer avec succès.',
                        'success'
                      )
                    }
                  })
    });
  });
</script>
<?php /**PATH /home/sodiicmc/public_html/resources/views/admin/dashboard_layout/script.blade.php ENDPATH**/ ?>