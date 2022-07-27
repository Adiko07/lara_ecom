@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'Détails de la commande',
    'url' => "orders.index",
    'section_name' => 'View Order'
    ])
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
                                <th> {{ $order->name }} </th>
                            </tr>
                            <tr>
                                <th> Téléphone d'expédition : </th>
                                <th> {{ $order->phone }} </th>
                            </tr>
                            <tr>
                                <th> E-mail d'expédition : </th>
                                <th> {{ $order->email }} </th>
                            </tr>
                            {{--<tr>
                                <th> Division : </th>
                                <th> {{ $order->division->division_name }} </th>
                            </tr>
                            <tr>
                                <th> District : </th>
                                <th> {{ $order->district->district_name }} </th>
                            </tr>
                            <tr>
                                <th> State : </th>
                                <th>{{ $order->state->state_name }} </th>
                            </tr>
                            <tr>
                                <th> Post Code : </th>
                                <th> {{ $order->post_code }} </th>
                            </tr>--}}
                            <tr>
                                <th> Date de commande : </th>
                                <th> {{ $order->order_date }} </th>
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
                        <span class="text-danger"> Facture d'achat : {{ $order->invoice_number }}</span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table">
                            <tr>
                                <th> Nom & Prénoms : </th>
                                <th> {{ $order->user->name }} </th>
                            </tr>
                            <tr>
                                <th> Téléphone : </th>
                                <th> {{ $order->user->phone }} </th>
                            </tr>
                            <tr>
                                <th translate="no"> Méthode de paiement : </th>
                                <th translate="no"> {{ $order->payment_method }} </th>
                            </tr>
                            <tr>
                                <th> ID de transaction: </th>
                                <th> {{ $order->transaction_id }} </th>
                            </tr>
                            <tr>
                                <th> Facture d'achat : </th>
                                <th class="text-danger"> {{ $order->invoice_number }} </th>
                            </tr>
                            <tr>
                                <th> Total de la commande : </th>
                                <th>{{ $order->amount }} FCFA</th>
                            </tr>
                            <tr>
                                <th> Statut : </th>
                                <th translate="no">
                                    <span class="badge badge-success">{{ $order->status }}
                                    </span>
                                </th>
                            </tr>
                            <tr>
                                <th>Raison du retour: <p>{{ $order->return_reason }}</p></th>
                                <th translate="no">
                                    @if ($order->status == 'En attente')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'confirmée'
                                    ]) }}" class="btn btn-block btn-success">Confirmer commande</a>
                                    @elseif ($order->status == 'confirmée')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'En traitement'
                                    ]) }}" class="btn btn-block btn-success">Traiter la commande</a>
                                    @elseif ($order->status == 'En traitement')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'Sélectionnée'
                                    ]) }}" class="btn btn-block btn-success">Sélectionner la commande</a>
                                    @elseif ($order->status == 'Sélectionnée')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'Expédiée'
                                    ]) }}" class="btn btn-block btn-success">Expédier la commande</a>
                                    @elseif ($order->status == 'Expédiée')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'livrée'
                                    ]) }}" class="btn btn-block btn-success">Marquer comme Livrée</a>
                                    @elseif ($order->status == 'cancel')
                                    <a href="{{ route('order-status.update', [
                                        'order_id' => $order->id,
                                        'status' => 'retournée'
                                    ]) }}" class="btn btn-block btn-danger">Retourner la commande</a>
                                    @endif
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
                                        {{--<td class="text-dark">
                                            <label for=""> Couleur </label>
                                        </td>
                                        <td class="text-dark">
                                            <label for=""> Taille </label>
                                        </td>--}}
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
                                    @foreach ($orderItems as $item)
                                        <tr>
                                            <td class="col-md-1">
                                                <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                                        height="50px;" width="50px;"> </label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> {{ $item->product->product_name_en }}</label>
                                            </td>
                                            <td class="col-md-3">
                                                <label for=""> {{ $item->product->product_code }}</label>
                                            </td>
                                            {{--<td class="col-md-2">
                                                <label for=""> {{ $item->color }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for=""> {{ $item->size }}</label>
                                                <label for=""> {{ $item->longueur }}</label>
                                            </td>--}}
                                            <td class="col-md-2">
                                                <label for=""> {{ $item->qty }}</label>
                                            </td>

                                            <td class="col-md-3">
                                                <label for=""> {{ $item->unit_price }} FCFA ( {{ $item->unit_price * $item->qty }} FCFA) </label>
                                            </td>
                                            @php
                                                $file = App\Models\Product::where('id', $item->product_id)->first();
                                            @endphp

                                            <td class="col-md-1">
                                                @if ($order->status == 'En attente')
                                                    <strong>
                                                        <span class="badge badge-pill badge-success" style="background: #418DB9;"> No
                                                            File</span> </strong>

                                                @elseif($order->status == 'confirm')

                                                    <a target="_blank" href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                                        <strong>
                                                            <span class="badge badge-pill badge-success" style="background: #FF0000;">
                                                                Download Ready</span> </strong> </a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr style="background-color:  rgb(31, 34, 31); color: #fff;">
                                            <td class="col-md-2">
                                                <label for="">OPTION DU PRODUIT:</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Couleur : {{ $item->color }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Taille : {{ $item->size }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Longueur : {{ $item->longueur }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Largeur : {{ $item->largeur }}</label>
                                            </td>
                                            <td class="col-md-2">
                                                <label for="">Epaisseur : {{ $item->epaisseur }}</label>
                                            </td>
                                        </tr>
                                    @endforeach
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
@endsection
