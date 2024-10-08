@extends('front.layout.master')


@section('tittle','Shop ')


@section('body')


    <main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Shop Details</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="./">Home</a></li>
                        <li><a href="./shop">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Shop Start -->
        <div class="shop-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Shop Wrapper Start -->
                <div class="shop-wrapper">
                    <div class="row gy-5">
                        <div class="col-lg-3">
                            <!-- Sidebar Shop Filter widget Start -->
                            <div class="sidebar-shop-filter-widget">
                                <!-- Sidebar widget Item Start -->
                                <div class="sidebar-widget-item">
                                    <h4 class="sidebar-widget-item__title">
                                        Category
                                    </h4>

                                        <div class="sidebar-widget-item__filter category-filter">
                                            <ul class="sidebar-widget-item__list category">

                                                @foreach ($categories as $category)
                                                    <li><a href="shop/{{ $category->name }}">{{ $category->name }}</a></li>
                                                @endforeach

                                            </ul>
                                        </div>


                                </div>
                                <!-- Sidebar widget Item End -->

                                <!-- Sidebar widget Item Start -->
                                <form>
                                    <div class="sidebar-widget-item">
                                        <h4 class="sidebar-widget-item__title">
                                            Price
                                        </h4>
                                        <div class="sidebar-widget-item__filter price-range-filter">
                                            <form action="#">
                                                <div class="filter-slider">
                                                    <div class="filter-range-input">
                                                        <input type="range"  name="price_min" id="minamount" class="range-min" min="0" max="500" value="10" step="10" aria-label="range" />
                                                        <input type="range"   name="price_max" id="maxamount" class="range-max" min="0" max="500" value="90" step="10" aria-label="range" />
                                                    </div>
                                                </div>

                                                <p class="filter-price-value"  data-min-value="{{ str_replace('$','', request('price_min'))}}"
                                                   data-max-value="{{ str_replace('$','', request('price_max'))}}">
                                                    Price:
                                                    <input type="text" class="input-min" value="$10" aria-label="Price" />
                                                    <span>—</span>
                                                    <input type="text" class="input-max" value="$90" aria-label="Price" />
                                                </p>
                                                <button type="submit" class="filter-price-btn">
                                                    Filter
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </form>

                                <!-- Sidebar widget Item End -->



                                <!-- Sidebar widget Banner Start -->

                                <!-- Sidebar widget Banner End -->
                            </div>
                            <!-- Sidebar Shop Filter widget End -->
                        </div>
                        <div class="col-lg-9">
                            <!-- Shop Filter Start -->
                            <div class="shop-filter">
                                <!-- Shop Filter Default Start -->
                                <div class="shop-filter-default justify-content-between align-items-center">
                                    <!-- Shop Filter Count Start -->
                                    <div class="shop-filter-count d-none d-sm-block">
                                        Showing 1–8 of 24 results
                                    </div>
                                    <!-- Shop Filter Count End -->

                                    <!-- Shop Filter Sort By Start -->
                                    <div class="product-show-option">
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7">
                                                <form action="">
                                                    <div class="select-option">
                                                        <select name="sort_by" class="sorting" onchange="this.form.submit();">
                                                            <option {{ request('sort_by') == 'latest' ? 'selected' : '' }} value="latest">
                                                                Sorting: Latest</option>
                                                            <option {{ request('sort_by') == 'oldest' ? 'selected' : '' }} value="oldest">
                                                                Sorting: Oldest</option>
                                                            <option {{ request('sort_by') == 'name-ascending' ? 'selected' : '' }}
                                                                    value="name-ascending">Sorting: Name A-Z</option>
                                                            <option {{ request('sort_by') == 'name-descending' ? 'selected' : '' }}
                                                                    value="name-descending">Sorting: Name Z-A</option>
                                                            <option {{ request('sort_by') == 'price-ascending' ? 'selected' : '' }}
                                                                    value="price-ascending">Sorting: Price Ascending</option>
                                                            <option {{ request('sort_by') == 'price-descending' ? 'selected' : '' }}
                                                                    value="price-descending">Sorting: Price Descending</option>

                                                        </select>
                                                        <select name="show" class="p-show" onchange="this.form.submit();">
                                                            <option {{ request('show') == '3' ? 'selected' : '' }} value="3">Show: 3
                                                            </option>
                                                            <option {{ request('show') == '9' ? 'selected' : '' }} value="9">Show: 9
                                                            </option>
                                                            <option {{ request('show') == '15' ? 'selected' : '' }} value="15">Show: 15
                                                            </option>

                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Shop Filter Sort By End -->







                                </div>
                                <!-- Shop Filter Default End -->
                            </div>
                            <!-- Shop Filter End -->

                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                            </div>
                                            @if($product->discount != null)
                                                <div class="single-product__thumbnail--badge onsale">
                                                    Sale
                                                </div>
                                            @endif

                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="front/images/products/{{ $product->productImages[0]->path}}" alt="Product" width="252" height="272" />
                                                </a>
                                            </div>
                                                <div class="single-product__thumbnail--meta-2">
                                                    <a href="cart/add/{{$product->id}}" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="Add to cart"><i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i></a>
                                                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="Add to compare"><i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i></a>
                                                    <a href="shop/product/{{$product->id}}" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="QuickView" data-bs-custom-class="p-meta-tooltip" aria-label="QuickView"><i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i></a>
                                                </div>
                                        </div>
                                        <div class="single-product__info text-center">
                                            <div class="single-product__info--tags">
                                                <a href="#">Cosmetic</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="shop/product/{{$product->id}}">
                                                   {{$product->name}}
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
{{--                                                @if($product->discount !=null)--}}
{{--                                                   <del>${{$product->discount}}</del>--}}
{{--                                                   <ins>${{$product->price}}</ins>--}}
{{--                                                @else--}}
                                                    <ins>${{$product->price }}</ins>

{{--                                                @endif--}}

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                @endforeach


                            </div>

                            <!-- Pagination Start -->
                            <div class="paginations">
                                <ul class="paginations-list">
                                    @if ($products->onFirstPage())
                                        <li>
                <span aria-label="arrow left">
                    <i class="lastudioicon-arrow-left"></i>
                </span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $products->previousPageUrl() }}" aria-label="arrow left">
                                                <i class="lastudioicon-arrow-left"></i>
                                            </a>
                                        </li>
                                    @endif

                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        @if ($page == $products->currentPage())
                                            <li><a class="active" href="">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    @if ($products->hasMorePages())
                                        <li>
                                            <a href="{{ $products->nextPageUrl() }}" aria-label="arrow right">
                                                <i class="lastudioicon-arrow-right"></i>
                                            </a>
                                        </li>
                                    @else
                                        <li>
                <span aria-label="arrow right">
                    <i class="lastudioicon-arrow-right"></i>
                </span>
                                        </li>
                                    @endif
                                </ul>
                            </div>


                            <!-- Pagination End -->
                        </div>

                    </div>
                </div>
                <!-- Shop Wrapper End -->
            </div>
        </div>
        <!-- Shop End -->

        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="
                        background-image: url('front/images/products/newsletter-bg-1.jpg');
                    ">
                <div class="newsletter-social">
                    <h4 class="newsletter-social__label">Follow us on</h4>
                    <ul class="newsletter-social__list">
                        <li>
                            <a href="#" aria-label="facebook">
                                <i class="lastudioicon-b-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="twitter">
                                <i class="lastudioicon-b-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="instagram">
                                <i class="lastudioicon-b-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="vimeo">
                                <i class="lastudioicon-b-vimeo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="envato">
                                <i class="lastudioicon-envato"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="newsletter-right" style="
                        background-image: url('front/images/products/newsletter-bg-2.jpg');
                    ">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title-2">
                        10% off when you sign up
                    </h4>
                    <form action="#">
                        <div class="newsletter-form-style-1">
                            <input type="text" placeholder="Enter your email address..." />
                            <button type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>
        <!-- Newsletter End -->
    </main>

@endsection
