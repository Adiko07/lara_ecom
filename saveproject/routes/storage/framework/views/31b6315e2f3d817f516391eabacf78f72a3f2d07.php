<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Facture</title>

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

               Téléphone: <?php echo e(env('MOBILE_NUMBER')); ?>

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
           <strong>Nom & prénoms:</strong> <?php echo e($order->name); ?> <br>
           <strong>Email:</strong> <?php echo e($order->email); ?> <br>
           <strong>Téléphone:</strong> <?php echo e($order->phone); ?> <br>

           <strong>Adresse:</strong> <?php echo e($order->address); ?> <br>
           
         </p>
        </td>
        <td>
          <p class="font">
            <h3><span style="color: green;">Facture N°:</span> #<?php echo e($order->invoice_number); ?></h3>
            Date de commande: <?php echo e($order->created_at); ?> <br>
            Date de livraison: <?php echo e($order->delivered_date); ?> <br>
            Type de paiement : <?php echo e($order->payment_type); ?> <br>
            Mode de paiement: <?php echo e($order->payment_method); ?>

        </span>
         </p>
        </td>
    </tr>
  </table>
  <br/>
<h3>Des produits</h3>


  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
        <tr class="font">
        
        <th>Nom du produit</th>
        <th>Taille</th>
        <th>Couleur</th>
        <th>Longueur</th>
        <th>Largeur</th>
        <th>Epaisseur</th>
        <th>Code</th>
        <th>Quantité</th>
        <th>Prix unitaire</th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>

        <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="font">
        
        <td align="center"><?php echo e($item->product->product_name); ?></td>
        <td align="center"><?php echo e($item->product->product_code); ?></td>
        <td align="center"><?php echo e($item->size); ?></td>
        <td align="center"><?php echo e($item->color); ?></td>
        <td align="center"><?php echo e($item->longueur); ?></td>
        <td align="center"><?php echo e($item->largeur); ?></td>
        <td align="center"><?php echo e($item->epaisseur); ?></td>
        <td align="center"><?php echo e($item->qty); ?></td>
        <td align="center"><?php echo e($item->unit_price); ?> FCFA</td>
        <td align="center"><?php echo e($order->amount); ?> FCFA</td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
            <h2><span style="color: green;">Sous-total:</span><?php echo e($order->amount); ?> FCFA</h2>
            <h2><span style="color: green;">Total:</span> <?php echo e($order->amount); ?> FCFA</h2>
            
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Merci d'avoir acheté nos produits..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Signature de l'autorité :</h5>
    </div>
</body>
</html>
<?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/order/invoice-download.blade.php ENDPATH**/ ?>