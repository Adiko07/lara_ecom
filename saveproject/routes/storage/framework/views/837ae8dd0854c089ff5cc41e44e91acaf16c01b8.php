<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
          <!--  -->
          <h2 style="color: green; font-size: 26px;"><strong><?php echo e(env('APP_NAME')); ?></strong></h2>
        </td>
        <td align="right">
            <pre class="font" >
               <?php echo e(env('APP_NAME')); ?>

               Email:<?php echo e(env('MAIL_FROM_ADDRESS')); ?>

               Mob: <?php echo e(env('MOBILE_NUMBER')); ?>

               <?php echo e(env('BUSINESS_ADDRESS')); ?>


            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;""></table>

  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
           <strong>Name:</strong> <?php echo e($order->name); ?> <br>
           <strong>Email:</strong> <?php echo e($order->email); ?> <br>
           <strong>Phone:</strong> <?php echo e($order->phone); ?> <br>

           <strong>Address:</strong> <?php echo e($order->address); ?> <br>
           <strong>Location:</strong>
           <?php echo e($order->state->state_name); ?>,
           <?php echo e($order->district->district_name); ?>,
           <?php echo e($order->division->division_name); ?> <br>
           <strong>Post Code:</strong> <?php echo e($order->post_code); ?>

         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Invoice:</span> #<?php echo e($order->invoice_number); ?></h3>
            Order Date: <?php echo e($order->created_at); ?> <br>
            Delivery Date: <?php echo e($order->delivered_date); ?> <br>
            Payment Type : <?php echo e($order->payment_type); ?> <br>
            Payment Method: <?php echo e($order->payment_method); ?>

        </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Products</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
        <tr class="font">
        
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="font">
        
        <td align="center"><?php echo e($item->product->product_name); ?></td>
        <td align="center"><?php echo e($item->size); ?></td>
        <td align="center"><?php echo e($item->color); ?></td>
        <td align="center"><?php echo e($item->product->product_code); ?></td>
        <td align="center"><?php echo e($item->qty); ?></td>
        <td align="center"><?php echo e($item->unit_price); ?></td>
        <td align="center"><?php echo e($order->amount); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Subtotal:</span>$ <?php echo e($order->amount); ?></h2>
            <h2><span style="color: green;">Total:</span> $ <?php echo e($order->amount); ?></h2>
            
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Buying Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html>
<?php /**PATH C:\wamp64\www\lara_ecom\resources\views\frontend\order\invoice-download.blade.php ENDPATH**/ ?>