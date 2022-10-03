<div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">
        @if (session()->get('language') == 'bangla')
        উষ্ণ চুক্তি
        @else
        Offres spéciales
        @endif
    </h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
        @php
                    $special_offer_products = App\Models\Product::where('special_offer', 1)->latest()->limit(3)->get();
                    @endphp
                    @foreach ($special_offer_products as $product)
                    <div class="product">
                        <div class="product-micro">
                            <div class="row product-micro-row">
                                <div class="col col-xs-5">
                                    <div class="product-image">
                                        <div class="image"> <a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}"> <img src="{{ asset($product->product_thumbnail) }}" alt=""> </a> </div>
                                        <!-- /.image -->

                                    </div>
                                    <!-- /.product-image -->
                                </div>
                                <!-- /.col -->
                                <div class="col col-xs-7">
                                    <div class="product-info">
                                        <h3 class="name"><a href="{{ route('frontend-product-details',['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                            @if (session()->get('language') == 'bangla')
                                            {{ $product->product_name_bn }}
                                            @else
                                            {{ $product->product_name_en }}
                                            @endif
                                        </a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price">
                                            @if ($product->discount_price == NULL)
                                            <span class="price">{{ $product->selling_price }} FCFA </span>
                                            @else
                                            <span class="price">{{ $product->discount_price }} FCFA </span>
                                            <span class="price">{{ $product->selling_price }} FCFA </span>
                                            @endif
                                        </div>
                                        <!-- /.product-price -->

                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                    </div>
                    @endforeach
    </div>
    <!-- /.sidebar-widget -->
</div>
