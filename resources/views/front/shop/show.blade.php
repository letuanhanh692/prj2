@extends('front.layout.master')


@section('tittle','Product ')


@section('body')


    <main>
        <!-- Breadcrumbs Start -->
        <div class="single-breadcrumbs">
            <div class="container-fluid custom-container">
                <ul class="single-breadcrumbs-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><span>Product Details</span></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!--  Start -->
        <div class="product-single-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Wrapper Start -->
                <div class="product-single-wrapper">
                    <div class="product-single-col-1">
                        <!-- Product Single image Start -->
                        <div class="product-single-image">
                            <div class="product-single-slide navigation-arrows-style-2">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/{{ $product->productImages[0]->path}}" alt="product4" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/{{ $product->productImages[1]->path}}" alt="product1" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/{{ $product->productImages[2]->path}}" alt="product2" width="694" height="728" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/{{ $product->productImages[3]->path}}" alt="product3" width="694" height="728" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="product-single-thumb">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($product->productImages as $productImage)

                                            <div class="product-single-thumb-item swiper-slide" data-imgbigurl="front/images/products/{{$productImage->path}}">
                                                <img src="front/images/products/{{ $productImage->path}}" alt="product" width="144" height="155" />
                                            </div>
                                        @endforeach
{{--                                        <div class="product-single-thumb-item swiper-slide">--}}
{{--                                            <img src="front/images/products/product-01.jpg" alt="product" width="144" height="155" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product-single-thumb-item swiper-slide">--}}
{{--                                            <img src="front/images/products/product-02.jpg" alt="product" width="144" height="155" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product-single-thumb-item swiper-slide">--}}
{{--                                            <img src="front/images/products/product-03.jpg" alt="product" width="144" height="155" />--}}
{{--                                        </div>--}}
{{--                                        <div class="product-single-thumb-item swiper-slide">--}}
{{--                                            <img src="front/images/products/product-04.jpg" alt="product" width="144" height="155" />--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Single image End -->
                    </div>

                    <div class="product-single-col-2">
                        <!-- Product Single content Start -->
                        <div class="product-single-content">
                            <h2 class="product-single-content__title">
                             {{$product->name}}
                            </h2>
                            <div class="product-single-content__price-stock">
                                <div class="product-single-content__price">
                                    <ins>${{$product->price}}</ins>
                                </div>
                                <div class="product-single-content__stock">
                                    <span class="stock-icon">
                                            <i
                                                class="dlicon ui-1_check-circle-08"
                                            ></i>
                                        </span>
                                    <span class="stock-text">
                                           {{ $product->qty }} in stock
                                        </span>
                                </div>
                            </div>
                            <div class="product-single-content__short-description">
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                            <div class="product-single-content__add-to-cart-wrapper">
                                <div class="product-single-content__quantity-add-to-cart">
                                    <div class="product-single-content__quantity product-quantity">
                                        <button type="button" class="decrease" aria-label="delete">
                                            <i class="lastudioicon-i-delete-2"></i>
                                        </button>
                                        <input id="quantity_{{ $product->id }}" class="quantity-input" type="number" min="1" value="1" aria-label="quantity" />
                                        <button type="button" class="increase" aria-label="add">
                                            <i class="lastudioicon-i-add-2"></i>
                                        </button>
                                    </div>
                                    <button onclick="addCart({{ $product->id }})" class="product-single-content__add-to-cart btn">
                                        Add to cart
                                    </button>
                                </div>
                            </div>


                            {{--                                <a href="wishlist.html" class="product-add-wishlist">--}}
{{--                                    Add to Wishlist--}}
{{--                                </a>--}}
                            </div>
                            <div class="product-single-content__meta">
                                <div class="product-single-content__meta--item">
                                    <div class="label">Sku:{{$product->sku}}</div>
                                    <div class="label">Weight:{{$product->weight}}</div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Categories:</div>
                                    <div class="content">
                                        <span>{{$product->productCategory->name}}</span>
                                    </div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Tag:</div>
                                    <div class="content">
                                     <span>{{$product->tag}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single-content__social">
                                <div class="label">Share</div>
                                <ul class="socail-icon">
                                    <li>
                                        <a href="#" aria-label="facebook">
                                            <i
                                                    class="lastudioicon-b-facebook"
                                                ></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="twitter">
                                            <i
                                                    class="lastudioicon-b-twitter"
                                                ></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="linkedin">
                                            <i
                                                    class="lastudioicon-b-linkedin"
                                                ></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Single content End -->
                    </div>
                </div>
                <!-- Product Single Wrapper End -->
            </div>
        </div>
        <!-- Product Single End -->

        <!-- Product Single Tabs Start -->
        <div class="product-single-tabs-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Product Single Tabs Start -->
                <div class="product-single-tabs">
                    <ul class="nav justify-content-center" role="tablist">
                        <li role="presentation">
                            <button class="active" data-bs-toggle="pill" data-bs-target="#description" type="button" role="tab" aria-controls="description">
                                Description
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="pill" data-bs-target="#additionalInformation " type="button" role="tab" aria-controls="additionalInformation">
                                Additional information
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="pill" data-bs-target="#reviews" type="button" role="tab" aria-controls="description">
                                Reviews
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-6">
                                    <!-- Product Single Tab Description Start -->
                                    <div class="product-single-tab-description">
                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h3 class="product-single-tab-description-item__title">
                                                +  INFORMATION
                                            </h3>
                                            <p>
                                                {!! $product->description !!}
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->

                                        <!-- Product Single Tab Description Item Start -->
                                        <div class="product-single-tab-description-item">
                                            <h3 class="product-single-tab-description-item__title">
                                                + Content
                                            </h3>
                                            <p>
                                              {{$product->content}}
                                            </p>
                                            <p>
                                                <img src="front/images/content-single-product-image-2.png" alt="Product Icon" width="150" height="33" loading="lazy" />
                                            </p>
                                        </div>
                                        <!-- Product Single Tab Description Item End -->
                                    </div>
                                    <!-- Product Single Tab Description End -->
                                </div>
                                <div class="col-lg-5">
                                    <!-- Product Single Tab Image Start -->
                                    <div class="product-single-tab-image">
                                        <h3 class="product-single-tab-image__title">
                                            Video review product
                                        </h3>
                                        <div class="product-single-tab-image__image">
                                            <a class="glightbox" href="https://www.youtube.com/watch?v=HwMWVTX4nYw&ab_channel=RivalProduction" aria-label="Video"></a>
                                            <img src="front/images/products/product-01.jpg" alt="product-image" width="350" height="108" loading="lazy" />
                                        </div>
                                    </div>
                                    <!-- Product Single Tab Image End -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additionalInformation">
                            <!-- Product Single Table Start -->
                            <div class="product-single-table">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <tbody>
                                            <tr>

                                                <td>
                                                    <p>Discount</p>
                                                    <p>Sku</p>
                                                    <p>Weight</p>
                                                </td>

                                                <td>
                                                    <p>{{$product->discount}}</p>
                                                    <p>{{$product->sku}}</p>
                                                    <p>{{$product->weight}}</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Product Single Table End -->
                        </div>
                        <div class="tab-pane fade" id="reviews">
                            <!-- Product Single Review Start -->
                            <div class="product-single-review">
                                <!-- Product Comment Start -->
                                <div class="product-comment">
                                    <h3 class="comment-title">
                                         Review for Product
                                    </h3>

                                    <!-- Comment Items Start -->
                                    @foreach ($product_comment as $product_comment)
                                    <ul class="comment-items">
                                        <!-- Comment Item Start -->
                                        <li class="comment-item" >
                                            <div class="comment-item__author">
                                                <img src="front/images/user/{{ $productComment->user->avatar ?? 'user-1.jpg'}}" alt="Author" width="90" height="90" loading="lazy" />
                                            </div>
                                            <div class="comment-item__content">


                                                    <div>
                                                        <h3>{{ $product_comment->name }}</h3>
                                                        <span>{{ $product_comment->email }}</span>
                                                    </div>

                                                <p class="comment-item__meta">
                                                <p>{{ $product_comment->messages }}</p>
                                                </p>
                                            </div>
                                        </li>
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
{{--                                        <li class="comment-item">--}}
{{--                                            <div class="comment-item__author">--}}
{{--                                                <img src="front/images/user/user-2.jpg" alt="Author" width="90" height="90" loading="lazy" />--}}
{{--                                            </div>--}}
{{--                                            <div class="comment-item__content">--}}
{{--                                                <div class="comment-item__rating">--}}

{{--                                                </div>--}}
{{--                                                <p class="comment-item__description">--}}
{{--                                                    Fringed jacquard--}}
{{--                                                    cardigan--}}
{{--                                                </p>--}}
{{--                                                <p class="comment-item__meta">--}}
{{--                                                    <strong--}}
{{--                                                            >HasTheme</strong>--}}
{{--                                                    - June 3, 2024--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
                                        <!-- Comment Item End -->

                                        <!-- Comment Item Start -->
{{--                                        <li class="comment-item">--}}
{{--                                            <div class="comment-item__author">--}}
{{--                                                <img src="front/images/user/user-3.jpg" alt="Author" width="90" height="90" loading="lazy" />--}}
{{--                                            </div>--}}
{{--                                            <div class="comment-item__content">--}}
{{--                                                <div class="comment-item__rating">--}}
{{--                                                    <span--}}
{{--                                                            class="star-rating"--}}
{{--                                                        >--}}
{{--                                                            <span--}}
{{--                                                                style="--}}
{{--                                                                    width: 80%;--}}
{{--                                                                "--}}
{{--                                                            ></span>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                                <p class="comment-item__description">--}}
{{--                                                    Fringed jacquard--}}
{{--                                                    cardigan--}}
{{--                                                </p>--}}
{{--                                                <p class="comment-item__meta">--}}
{{--                                                    <strong--}}
{{--                                                            >HasTheme</strong>--}}
{{--                                                    - June 3, 2024--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
                                        <!-- Comment Item End -->
                                    </ul>
                                    @endforeach
                                    <!-- Comment Items End -->
                                </div>
                                <!-- Product Comment End -->

                                <!-- Product Comment Form Start -->
                                <div class="product-comment-form">
                                    <h3 class="comment-title">
                                        Add a review
                                    </h3>

                                    <form action="" method="post">
                                        @csrf

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <input type="hidden" name="user_id"
                                        <!-- comment Form Start -->
                                        <div class="comment-form">

                                                <span class="star-rating">
                                                        <span
                                                            style="width: 80%"
                                                        ></span>
                                                </span>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Name *
                                                        </label>
                                                        <input type="text" class="single-form__input" name="name" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Single Form Start -->
                                                    <div class="single-form">
                                                        <label class="single-form__label">Email *</label>
                                                        <input type="email" class="single-form__input" name="email" />
                                                    </div>
                                                    <!-- Single Form Start -->
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Your review *</label>
                                                <textarea class="single-form__input" name="messages"></textarea>
                                            </div>
                                            <!-- Single Form Start -->



                                            <!-- Single Form Start -->

                                            <!-- Single Form Start -->

                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <button class="single-form__btn btn" type="submit">
                                                    Submit
                                                </button>
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <!-- comment Form End -->
                                    </form>
                                </div>
                                <!-- Product Comment Form End -->
                            </div>
                            <!-- Product Single Review End -->
                        </div>
                    </div>
                </div>
                <!-- Product Single Tabs End -->
            </div>
        </div>

        <!-- Related Product Start -->
        <div class="related-product-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Related Title Start -->
                <div class="related-title text-center">
                    <h2 class="related-title__title">Related Products</h2>
                </div>
                <!-- Related Title End -->

                <!-- Related Product Start -->
                <div class="related-product-active swiper-dot-style-1">
                    <div class="swiper">
                        <div class="swiper-wrapper">

                            @foreach($relatedProducts as $product)
                                <div class="swiper-slide">
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="Add to wishlist"><i class="lastudioicon-heart-2"></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="{{ url('show') }}">
                                                <img src="front/images/products/{{ $product->productImages[0]->path}}" alt="Product" width="344" height="371" loading="lazy" />
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
                                                <span>{{$product->name}}</span>
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price"
                                            <ins>${{$product->price}} </ins>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            @endforeach



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Related Product End -->
            </div>
        </div>

        <!-- Related Product End -->

        <!-- Newsletter Start -->
        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="background-image: url('front/images/newsletter-bg-1.jpg')">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h3 class="newsletter-wrapper__title">Follow us on</h3>
                    <p>
                        {{ $product->description }}
                    </p>

                    <div class="newsletter-social">
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
                <!-- Newsletter Wrapper End -->
            </div>
            <div class="newsletter-right" style="background-image: url('front/images/newsletter-bg-2.jpg')">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title">10% off when you sign up</h4>
                    <p>
                        {{ $product->description }}
                    </p>
                    <form action="#">
                        <div class="newsletter-form-style-1">
                            <input type="text" placeholder="Enter your email address..." />
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Newsletter End -->
    </main>
@endsection

