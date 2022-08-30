@extends('dashboard')

@section('frontend_style')

@endsection

@section('userdashboard_content')
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
                            <th> {{ $order->name }} </th>
                        </tr>

                        <tr>
                            <th> Téléphone d'expédition : </th>
                            <th> {{ $order->phone }} </th>
                        </tr>

                        <tr>
                            <th> Téléphone d'expédition 2: </th>
                            <th> {{ $order->phone2 }} </th>
                        </tr>

                        <tr>
                            <th> E-mail d'expédition : </th>
                            <th> {{ $order->email }} </th>
                        </tr>

                        <tr>
                            <th> département: </th>
                            <th> {{ $order->division->division_name }} </th>
                        </tr>

                        <tr>
                            <th> District : </th>
                            <th> {{ $order->district->district_name }} </th>
                        </tr>

                        <tr>
                            <th> État :</th>
                            <th>{{ $order->state->state_name }} </th>
                        </tr>

                        <tr>
                            <th> Code Postal : </th>
                            <th> {{ $order->post_code }} </th>
                        </tr>

                        <tr>
                            <th> Date de commande : </th>
                            <th> {{ $order->order_date }} </th>
                        </tr>

                    </table>
                </div>

            </div>

        </div> <!-- // end col md -6 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Détails de la commande
                        <span class="text-danger"> Facture d'achat : {{ $order->invoice_number }}</span>
                    </h4>
                    @if ($order->status == 'En attente')

                    @else
                    <ul>
                        <li> Date confirmée : {{ $order->confirmed_date }}</li>
                        <li> Date de traitement: {{ $order->processing_date }}</li>
                        <li> Date Ramassage: {{ $order->picked_date }}</li>
                        <li> Date d'envoi: {{ $order->shipped_date }}</li>
                        <li> Date de livraison : {{ $order->delivered_date }}</li>
                        <li> Date d'annulation : {{ $order->cancel_date }}</li>
                        <li> Date de retour: {{ $order->return_date }}</li>
                    </ul>
                    @endif
                </div>
                <hr>
                <div class="card-body" style="background: #E9EBEC;">
                    <table class="table">
                        <tr>
                            <th> Nom & Prénoms: </th>
                            <th> {{ $order->user->name }} </th>
                        </tr>

                        <tr>
                            <th> Téléphone : </th>
                            <th> {{ $order->user->phone }} </th>
                        </tr>

                        <tr>
                            <th> Type de paiement : </th>
                            <th> {{ $order->payment_method }} </th>
                        </tr>

                        <tr>
                            <th> ID Transaction : </th>
                            <th> {{ $order->transaction_id }} </th>
                        </tr>

                        <tr>
                            <th> Facture : </th>
                            <th class="text-danger"> {{ $order->invoice_number }} </th>
                        </tr>

                        <tr>
                            <th> Total de la commande: </th>
                            <th>{{ $order->amount }} FCFA</th>
                        </tr>

                        <tr>
                            <th> Statut de la commande : </th>
                            <th>
                                <span class="badge badge-pill badge-warning"
                                    style="background: #418DB9;">{{ $order->status }} </span>
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
                            {{--<td class="col-md-2">
                                <label for=""> Couleur </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Taille </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Longueur </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Largeur </label>
                            </td>
                            <td class="col-md-2">
                                <label for=""> Epaisseur </label>
                            </td>--}}
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
                        @foreach ($orderItems as $item)
                            <tr>
                                <td class="col-md-2">
                                    <label for=""><img src="{{ asset( $item->product->product_thumbnail ) }}"
                                            height="50px;" width="50px;"> </label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> {{ $item->product->product_name_en }}</label>
                                </td>
                                <td class="col-md-2">
                                    <label for=""> {{ $item->product->product_code }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> {{ $item->qty }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> {{ $item->unit_price }} FCFA (  {{ $item->unit_price * $item->qty }} FCFA) </label>
                                </td>
                                @php
                                    $file = App\Models\Product::where('id', $item->product_id)->first();
                                @endphp

                                <td class="col-md-2">
                                    @if ($order->status == 'En attente')
                                        <strong>
                                            <span class="badge badge-pill badge-success" style="background: #418DB9;"> Aucun fichier</span>
                                        </strong>

                                    @elseif($order->status != 'En attente')

                                        <a target="_blank" class="btn btn-danger" href="{{ asset('upload/pdf/' . $file->digital_file) }}">
                                            <i class="fa fa-download"></i>Facture
                                        </a>
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
        </div> <!-- / end col md 8 -->
    </div> <!-- // END ORDER ITEM ROW -->
    @if ($order->status == 'delivered')
    Delivered
    @else
        @php
            $order = App\Models\Order::where('id', $order->id)
                ->where('return_reason', '=', null)
                ->first();
        @endphp
        @if ($order)
            <form action="{{ route('return.order', $order->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="label"> Raison du retour de la commande:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>
                </div>
                <button type="submit" class="btn btn-danger">Retour de commande</button>
            </form>
        @else
            <span class="badge badge-pill badge-warning" style="background: red">Vous avez envoyé une demande de retour pour ce produit</span>
        @endif
    @endif
    <br><br>
@endsection

@section('frontend_script')

@endsection
