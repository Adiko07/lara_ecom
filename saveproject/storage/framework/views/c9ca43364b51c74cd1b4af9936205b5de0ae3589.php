<?php $__env->startSection('frontend_style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('userdashboard_content'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Les détails d'expédition</h4>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
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
                            <th> Téléphone d'expédition 2: </th>
                            <th> <?php echo e($order->phone2); ?> </th>
                        </tr>

                        <tr>
                            <th> E-mail d'expédition : </th>
                            <th> <?php echo e($order->email); ?> </th>
                        </tr>

                        <tr>
                            <th> département: </th>
                            <th> <?php echo e($order->division->division_name); ?> </th>
                        </tr>

                        <tr>
                            <th> District : </th>
                            <th> <?php echo e($order->district->district_name); ?> </th>
                        </tr>

                        <tr>
                            <th> État :</th>
                            <th><?php echo e($order->state->state_name); ?> </th>
                        </tr>

                        <tr>
                            <th> Code Postal : </th>
                            <th> <?php echo e($order->post_code); ?> </th>
                        </tr>

                        <tr>
                            <th> Date de commande : </th>
                            <th> <?php echo e($order->order_date); ?> </th>
                        </tr>

                    </table>
                </div>

            </div>

        </div> <!-- // end col md -6 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Détails de la commande
                        <span class="text-danger"> Facture d'achat : <?php echo e($order->invoice_number); ?></span>
                    </h4>
                    <?php if($order->status == 'En attente'): ?>

                    <?php else: ?>
                    <ul>
                        <li> Date confirmée : <?php echo e($order->confirmed_date); ?></li>
                        <li> Date de traitement: <?php echo e($order->processing_date); ?></li>
                        <li> Date Ramassage: <?php echo e($order->picked_date); ?></li>
                        <li> Date d'envoi: <?php echo e($order->shipped_date); ?></li>
                        <li> Date de livraison : <?php echo e($order->delivered_date); ?></li>
                        <li> Date d'annulation : <?php echo e($order->cancel_date); ?></li>
                        <li> Date de retour: <?php echo e($order->return_date); ?></li>
                    </ul>
                    <?php endif; ?>
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                    <table class="table">
                        <tr>
                            <th> Nom & Prénoms: </th>
                            <th> <?php echo e($order->user->name); ?> </th>
                        </tr>

                        <tr>
                            <th> Téléphone : </th>
                            <th> <?php echo e($order->user->phone); ?> </th>
                        </tr>

                        <tr>
                            <th> Type de paiement : </th>
                            <th> <?php echo e($order->payment_method); ?> </th>
                        </tr>

                        <tr>
                            <th> ID Transaction : </th>
                            <th> <?php echo e($order->transaction_id); ?> </th>
                        </tr>

                        <tr>
                            <th> Facture : </th>
                            <th class="text-danger"> <?php echo e($order->invoice_number); ?> </th>
                        </tr>

                        <tr>
                            <th> Total de la commande: </th>
                            <th><?php echo e($order->amount); ?> FCFA</th>
                        </tr>

                        <tr>
                            <th> Statut de la commande : </th>
                            <th>
                                <span class="badge badge-pill badge-warning"
                                    style="background: #418DB9;"><?php echo e($order->status); ?> </span>
                            </th>
                        </tr>

                    </table>
                </div>
            </div>
        </div> <!-- // 2ND end col md -5 -->
    </div>

    <div class="row">
        <div class="2">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr style="background: #e2e2e2;">
                            <td class="col-md-2">
                                <label for=""> Image</label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Nom du produit </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Code produit</label>
                            </td>
                            
                            <td class="col-md-2">
                                <label for=""> Quantité </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Prix </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Action </label>
                            </td>
                        </tr>
                        <?php $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="col-md-2">
                                    <label for=""><img src="<?php echo e(asset( $item->product->product_thumbnail )); ?>"
                                            height="50px;" width="50px;"> </label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->product->product_name_en); ?></label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->product->product_code); ?></label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->qty); ?></label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> <?php echo e($item->unit_price); ?> FCFA (  <?php echo e($item->unit_price * $item->qty); ?> FCFA) </label>
                                </td>
                                <?php
                                    $file = App\Models\Product::where('id', $item->product_id)->first();
                                ?>

                                <td class="col-md-2">
                                    <?php if($order->status == 'En attente'): ?>
                                        <strong>
                                            <span class="badge badge-pill badge-success" style="background: #418DB9;"> Aucun fichier</span>
                                        </strong>

                                    <?php elseif($order->status != 'En attente'): ?>

                                        <a target="_blank" class="btn btn-danger" href="<?php echo e(asset('upload/pdf/' . $file->digital_file)); ?>">
                                            <i class="fa fa-download"></i>Facture
                                        </a>
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
        </div> <!-- / end col md 8 -->
    </div> <!-- // END ORDER ITEM ROW -->
    <?php if($order->status == 'delivered'): ?>
    Delivered
    <?php else: ?>
        <?php
            $order = App\Models\Order::where('id', $order->id)
                ->where('return_reason', '=', null)
                ->first();
        ?>
        <?php if($order): ?>
            <form action="<?php echo e(route('return.order', $order->id)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="label"> Raison du retour de la commande:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>
                </div>
                <button type="submit" class="btn btn-danger">Retour de commande</button>
            </form>
        <?php else: ?>
            <span class="badge badge-pill badge-warning" style="background: red">Vous avez envoyé une demande de retour pour ce produit</span>
        <?php endif; ?>
    <?php endif; ?>
    <br><br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('frontend_script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sodiicmc/public_html/resources/views/frontend/order/order-details.blade.php ENDPATH**/ ?>