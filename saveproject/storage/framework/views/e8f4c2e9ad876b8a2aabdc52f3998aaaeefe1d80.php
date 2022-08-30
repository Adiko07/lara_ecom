
<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<meta name="author" content="">
<meta name="keywords" content="">
<meta name="robots" content="all">
<title><?php echo $__env->yieldContent('title'); ?></title>

<?php echo $__env->make('frontend.frontend_layout.body.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body class="cnt-home" translate="no">
<!--  HEADER  -->
<?php echo $__env->make('frontend.frontend_layout.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--  HEADER : END  -->
<?php if(request()->routeIs('home')): ?>
<?php else: ?>
  <?php echo $__env->make('frontend.frontend_layout.body.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php echo $__env->yieldContent('frontend_content'); ?>

<!--  FOOTER  -->
<?php echo $__env->make('frontend.frontend_layout.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!--  FOOTER : END -->

<?php echo $__env->make('frontend.frontend_layout.body.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Add to Cart Product Modal -->

<!-- Add to Cart Product Modal END-->

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    // start product view with Modal
    /*function productView(id){
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType: 'json',
            success: function(data){
                $('#pname').text(data.product.product_name_en);
                $('#pcode').text(data.product.product_code);
                $('#category').text(data.product.category.category_name_en);
                $('#brand').text(data.product.brand.brand_name_en);
                $('#pimage').attr('src', '/'+data.product.product_thumbnail);

                $('#product_id').val(id);
                $('#product_qty').val(1);

                //product price
                if(data.product.discount_price == null){
                    $('#price').text(data.product.selling_price);
                    $('#oldprice').text('');
                }else{
                    $('#price').text(data.product.discount_price);
                    $('#oldprice').text(data.product.selling_price);
                }

                // product stock
                if(data.product.product_qty > 0)
                {
                    $('#Outofstock').text('');
                    $('#Instock').text('En Stock');
                }else{
                    $('#Instock').text('');
                    $('#Outofstock').text('Indisponible');
                }

                // items
                $('select[name="color"]').empty();
                $.each(data.colors_en, function(key,value){
                    $('select[name="color"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.colors_en == ""){
                        $('#colorArea').hide()
                    }else{
                        $('#colorArea').show()
                    }
                })

                $('select[name="longueur"]').empty();
                $.each(data.longueur, function(key,value){
                    $('select[name="longueur"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.longueur == ""){
                        $('#longueurArea').hide()
                    }else{
                        $('#longueurArea').show()
                    }
                })
                $('select[name="largeur"]').empty();
                $.each(data.largeur, function(key,value){
                    $('select[name="largeur"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.largeur == ""){
                        $('#largeurArea').hide()
                    }else{
                        $('#largeurArea').show()
                    }
                })
                $('select[name="epaisseur"]').empty();
                $.each(data.epaisseur, function(key,value){
                    $('select[name="epaisseur"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.epaisseur == ""){
                        $('#epaisseurArea').hide()
                    }else{
                        $('#epaisseurArea').show()
                    }
                })
                $('select[name="size"]').empty();
                $.each(data.size_en, function(key,value){
                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+'</option>')
                    if(data.size_en == ""){
                        $('#sizeArea').hide()
                    }else{
                        $('#sizeArea').show()
                    }
                })
            }
        })
    }*/
    //add to cart
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var longueur = $('#longueur option:selected').text();
        var largeur = $('#largeur option:selected').text();
        var epaisseur = $('#epaisseur option:selected').text();
        var qty = $('#product_qty').val();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            data:{
                color: color,
                size:size,
                qty: qty,
                product_name: product_name,
                longueur: longueur,
                largeur: largeur,
                epaisseur: epaisseur,
            },
            url: '/cart/data/store/'+id,
            success: function(data){
                miniCart()
                $('#closeModal').click();
                // console.log(data)

                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
            }
        })
    }
    // End to Cart Product
</script>
<script type="text/javascript">
    function miniCart(){
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/product/mini/cart',
            success: function(response){
                $('span[id="cartSubTotal"]').text(response.cart_total);
                $('span[id="cartQty"]').text(response.cart_qty);
                var miniCart = "";
                $.each(response.carts, function(key,value){
                    miniCart += `
                    <div class="cart-item product-summary">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="image">
                                    <a href="#"><img src="/${value.options.image}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xs-7">
                                <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                                <div class="price">${value.price} FCFA X ${value.qty}</div>
                            </div>
                            <div class="col-xs-1 action"> <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
                        </div>
                    </div>
                    <!-- /.cart-item -->
                    <div class="clearfix"></div>
                    <hr>
                    `;
                });
                $('#miniCart').html(miniCart);
            }
        })
    }
    miniCart();

    // mini cart remove start
    function miniCartRemove(rowId){
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/minicart/product-remove/'+rowId,
            success: function(data){
                miniCart();
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // mini cart remove end
</script>
<script type="text/javascript">
    // Start Add to Wishlist
    function addToWishlist(id){
        $.ajax({
            type:'POST',
            dataType: 'json',
            url:'/user/add/product/to-wishlist/'+id,
            success: function(data){
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        icon: 'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // End Add to Wishlist
    // Start remove from wishlist
    function removeWishlist(wish_id){
        $.ajax({
            type:'GET',
            dataType: 'json',
            url:'/user/remove/from-wishlist/'+wish_id,
            success: function(data){
                //location.reload();
                //start message
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                })
                if($.isEmptyObject(data.error)){
                    Toast.fire({
                        type:'success',
                        title: data.success,
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title:data.error,
                    })
                }
                //end message
            }
        });
    }
    // End remove from wishlist
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#name').on('keyup',function () {
            var query = $(this).val();
            $.ajax({
                url:'<?php echo e(route('search')); ?>',
                type:'GET',
                data:{'name':query},
                success:function (data) {
                    $('#product_list').html(data);
                }
            })
        });
        $(document).on('click', 'li', function(){
            var value = $(this).text();
            $('#name').val(value);
            $('#product_list').html("");
        });
    });
</script>
</body>
</html>
<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/frontend_master.blade.php ENDPATH**/ ?>