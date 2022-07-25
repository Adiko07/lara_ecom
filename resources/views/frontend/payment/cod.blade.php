@extends('frontend.frontend_master')

@section('title')
    SODIB-CI || Page de paiement en espèces
@endsection

@section('frontend_style')

@endsection

@section('frontend_content')
    <div class="checkout-box ">
        <div class="row">
            <div class="col-md-6">
                <!-- checkout-progress-sidebar -->
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">Votre montant d'achat</h4>
                            </div>
                            <div class="">
                                <ul class="nav nav-checkout-progress list-unstyled">
                                    <hr>
                                    <li>
                                        @if (Session::has('coupon'))
                                            <strong>Sous-Total: </strong>{{ $cart_total }} FCFA
                                            <hr>
                                            <strong>Coupon: </strong> {{ session()->get('coupon')['coupon_name'] }}
                                            ( {{ session()->get('coupon')['coupon_discount'] }} %)
                                            <hr>
                                            <strong>Bon de réduction:
                                            </strong>(-){{ session()->get('coupon')['discount_amount'] }} FCFA
                                            <hr>
                                            <strong>Total: </strong>{{ session()->get('coupon')['total_amount'] }} FCFA
                                            <hr>
                                        @else
                                            <strong>Sous-Total: </strong> {{ $cart_total }} FCFA
                                            <hr>
                                            <strong>Total: </strong> {{ $cart_total }} FCFA
                                            <hr>
                                        @endif

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- checkout-progress-sidebar -->
            </div>
            <div class="col-md-6">
                <div class="checkout-progress-sidebar ">
                    <div class="panel-group">
                        <form action="{{ route('cod.order') }}" method="post" id="payment-form">
                            @csrf
                            <div class="form-row">
                                <img src="{{ asset('frontend/assets/images/payments/cashOnDelivery.png') }}" class="img-fluid" alt="">
                              <label for="card-element">

                            <input type="hidden" name="shipping_name" value="{{ $data['shipping_name'] }}">
                            <input type="hidden" name="shipping_email" value="{{ $data['shipping_email'] }}">
                            <input type="hidden" name="shipping_phone" value="{{ $data['shipping_phone'] }}">
                            <input type="hidden" name="shipping_phone2" value="{{ $data['shipping_phone2'] }}">
                            {{--<input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                            <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                            <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">--}}
                            <input type="hidden" name="shipping_address" value="{{ $data['shipping_address'] }}">
                            <input type="hidden" name="shipping_notes" value="{{ $data['shipping_notes'] }}">

                              </label>
                            </div>
                            <br>
                            <button class="btn btn-primary">Confirmer la commande</button>
                          </form>
                    </div>
                </div>
            </div>
            </div><!-- /.row -->
            <hr>
        </div>
    </div>
@endsection
@section('frontend_script')

@endsection

