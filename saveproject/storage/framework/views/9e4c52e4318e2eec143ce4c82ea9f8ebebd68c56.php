<?php $__env->startSection('dashboard_content'); ?>
    <?php echo $__env->make('admin.dashboard_layout.breadcrumb', [
    'name' => 'Détails de la commande',
    'url' => "orders.index",
    'section_name' => 'View Order'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Les détails d'expédition</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> Nom pour la livraison : </th>
                                <th> <?php echo e($order->name); ?> </th>
                            </tr>
                            <tr>
                                <th> Téléphone d'expédition : </th>
                                <th> <?php echo e($order->phone); ?> </th>
                            </tr>
                            <tr>
                                <th> E-mail d'expédition : </th>
                                <th> <?php echo e($order->email); ?> </th>
                            </tr>
                            
                            <tr>
                                <th> Date de commande : </th>
                                <th> <?php echo e($order->order_date); ?> </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-6 col-lg-6">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Détails de la commande</h3>
                        <span class="text-danger"> Facture d'achat : <?php echo e($order->invoice_number); ?></span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> Nom & Prénoms : </th>
                                <th> <?php echo e($order->user->name); ?> </th>
                            </tr>
                            <tr>
                                <th> Téléphone : </th>
                                <th> <?php echo e($order->user->phone); ?> </th>
                            </tr>
                            <tr>
                                <th translate="no"> Méthode de paiement : </th>
                                <th translate="no"> <?php echo e($order->payment_method); ?> </th>
                            </tr>
                            <tr>
                                <th> ID de transaction: </th>
                                <th> <?php echo e($order->transaction_id); ?> </th>
                            </tr>
                            <tr>
                                <th> Facture d'achat : </th>
                                <th class="text-danger"> <?php echo e($order->invoice_number); ?> </th>
                            </tr>
                            <tr>
                                <th> Total de la commande : </th>
                                <th><?php echo e($order->amount); ?> FCFA</th>
                            </tr>
                            <tr>
                                <th> Statut : </th>
                                <th translate="no">
                                    <span class="badge badge-success"><?php echo e($order->status); ?>

                                    </span>
                                </th>
                            </tr>
                            <tr>
                                <th>Raison du retour: <p><?php echo e($order->return_reason); ?></p></th>
                                <th translate="no">
                                    <?php if($order->status == 'En attente'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'confirmée'
                                    ])); ?>" class="btn btn-block btn-success">Confirmer commande</a>
                                    <?php elseif($order->status == 'confirmée'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'En traitement'
                                    ])); ?>" class="btn btn-block btn-success">Traiter la commande</a>
                                    <?php elseif($order->status == 'En traitement'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'Sélectionnée'
                                    ])); ?>" class="btn btn-block btn-success">Sélectionner la commande</a>
                                    <?php elseif($order->status == 'Sélectionnée'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'Expédiée'
                                    ])); ?>" class="btn btn-block btn-success">Expédier la commande</a>
                                    <?php elseif($order->status == 'Expédiée'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'livrée'
                                    ])); ?>" class="btn btn-block btn-success">Marquer comme Livrée</a>
                                    <?php elseif($order->status == 'cancel'): ?>
                                    <a href="<?php echo e(route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'retournée'
                                    ])); ?>" class="btn btn-block btn-danger">Retourner la commande</a>
                                    <?php endif; ?>
                                </th>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-12 col-lg-12">
                <div class="box box-bordered border-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Resumé de la commande</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr style="background: #e3e3e3;">
                                        <td class="text-dark">
                                            <label for=""> Image</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Produit</label>
                                        </td>
                                        <td class="text-dark">
                                            <label for="">Code Porduit</label>
                                        </td>
                                        
                                        <td class="text-dark">
                                            <label for=""> Quantité </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Prix </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Téléchargement </label>
                                        </td>
                                    </tr>
                                    <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="col-md-1">
                                                <label for=""><img src="<?php echo e(asset( $item->product->product_thumbnail )); ?>"
                                                        height="50px;" width="50px;"> </label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> <?php echo e($item->product->product_name_en); ?></label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> <?php echo e($item->product->product_code); ?></label>
                                            </td>
                                            
                                            <td class="col-md-2">
                                                <label for=""> <?php echo e($item->qty); ?></label>
                                            </td>

                                            <td class="col-md-3">
                                                <label for=""> <?php echo e($item->unit_price); ?> FCFA ( <?php echo e($item->unit_price * $item->qty); ?> FCFA) </label>
                                            </td>
                                            <?php
                                                $file = App\Models\Product::where('id', $item->product_id)->first();
                                            ?>

                                            <td class="col-md-1">
                                                <?php if($order->status == 'En attente'): ?>
                                                    <strong>
                                                        <span class="badge badge-pill badge-success" style="background: #418DB9;"> No
                                                            File</span> </strong>

                                                <?php elseif($order->status == 'confirm'): ?>

                                                    <a target="_blank" href="<?php echo e(asset('upload/pdf/' . $file->digital_file)); ?>">
                                                        <strong>
                                                            <span class="badge badge-pill badge-success" style="background: #FF0000;">
                                                                Download Ready</span> </strong> </a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr style="background-color:  rgb(31, 34, 31); color: #fff;">
                                            <td class="col-md-2">
                                                <label for="">OPTION DU PRODUIT:</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Couleur : <?php echo e($item->color); ?></label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Taille : <?php echo e($item->size); ?></label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Longueur : <?php echo e($item->longueur); ?></label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Largeur : <?php echo e($item->largeur); ?></label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Epaisseur : <?php echo e($item->epaisseur); ?></label>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\lara_ecom\resources\views/admin/Orders/show.blade.php ENDPATH**/ ?>