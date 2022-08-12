<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">
        @if (session()->get('language') == 'bangla')
            বৈশিষ্ট্যযুক্ত পণ্য
        @else
        Produits populaires
        @endif
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 1)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 2)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 29)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 4)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 3)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 30)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 31)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 32)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
        @php
            $featured_products = App\Models\Product::where('featured', 1)
                ->where('subcategory_id', 33)
                ->latest()
                ->limit(6)
                ->get();
        @endphp
        @foreach ($featured_products as $product)
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image"> <a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}"><img
                                        src="{{ asset($product->product_thumbnail) }}" alt=""></a> </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a
                                    href="{{ route('frontend-product-details', ['id' => $product->id, 'slug' => $product->product_slug_en]) }}">
                                    @if (session()->get('language') == 'bangla')
                                        {{ $product->product_name_bn }}
                                    @else
                                        {{ $product->product_name_en }}
                                    @endif
                                </a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            @if ($product->discount_price == null)
                                <div class="product-price"><span class="price">{{ $product->selling_price }} FCFA</span>
                                </div>
                            @else
                                <div class="product-price"> <span class="price">
                                        {{ $product->discount_price }} FCFA</span> <span
                                        class="price-before-discount">{{ $product->selling_price }} FCFA </span> </div>
                            @endif
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">

                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        @endforeach
        <!-- /.item -->
    </div>
    <!-- /.home-owl-carousel -->
</section>
