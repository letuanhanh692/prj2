
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ asset('/') }}">

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title') | Glamx</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Glamx - Cosmetic Website Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="front/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />


    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link href=”https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css” rel=”stylesheet”>
    <link rel="stylesheet" href="front/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/css/lastudioicon.css" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="front/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="front/css/glightbox.min.css" />
    <link rel="stylesheet" href="front/css/nice-select2.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="front/css/style.css" />




</head>


<body>
<!-- Header Start -->
<header class="header bg-white header-height">
    <!-- Header Top Start -->
    <div class="header__top">
        <div class="container-fluid custom-container">
            <div class="header__top--wrapper">
                <div class="header__top--left d-none d-md-block">
                    <ul class="header__top--items">
                        <li>
                            <a href="mailto:info.expmale@mail.com">
                                <i class="lastudioicon-mail-2"></i>
                                <span>glamx@mail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+(867)195-6696">
                                <i class="lastudioicon-phone-call"></i>
                                <span>0123456789</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="lastudioicon-pin-3-1"></i>
                                <span>8A-Tôn Thất Thuyết</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header__top--right">
                    <ul class="header__top--items">

                        @if (Auth::check())
                            <a href="./account/logout" class="login-panel">
                                <i class="fa fa-user"></i>
                                {{ Auth::user()->name }} -Logout
                            </a>
                        @else
                            <a href="./account/login">
                                <i class="lastudioicon-single-01-1"></i>
                                <span>Login</span>
                            </a>
                        @endif







                        <li>
                            <a href="termofuse.html">
                                <i class="lastudioicon-b-meeting-2"></i>
                                <span>Help Center</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!-- Header Main Start -->
    <div class="header__main header-shadow d-flex align-items-center">
        <div class="container-fluid custom-container">
            <div class="row align-items-center position-relative">
                <div class="col-md-4 col-3 d-xl-none">
                    <button class="header__main--toggle header__main--toggle-dark" data-bs-toggle="offcanvas"
                            data-bs-target="#mobileMenu" aria-label="menu">
                        <i class="lastudioicon-menu-8-1"></i>
                    </button>
                </div>
                <div class="col-xl-3 col-md-4 col-6">
                    <div class="header__main--logo text-center text-xl-start">
                        <a href="./index.html">
                            <img src="front/images/logo.png" alt="Logo" width="150" height="35" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="header__main--menu">
                        <nav class="navbar-menu">
                            <!-- Menu Item List Start -->
                            <ul class="menu-items-list menu-items-list--dark d-flex justify-content-center">
                                <li class="{{ request()->segment(1) == '' ? 'active' : '' }}">
                                    <a  href="./">
                                        <span>Home</span>
                                    </a>

                                </li>

                                <li class="{{ request()->segment(1) == 'shop' ? 'active' : '' }}">
                                    <a href="./shop">
                                        <span>Shop</span>
                                        <i class="lastudioicon-down-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="./account/my-order"><span>My Order</span></a>
                                        </li>
                                        <li>
                                            <a href="./cart"><span>Cart</span></a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="ordertracking.html"><span>Order Tracking</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="wishlist.html"><span>Wishlist</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="compare.html"><span>Compare</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="emptycart.html"><span>Cart Empty</span></a>--}}
{{--                                        </li>--}}

                                        <li>
                                            <a href="/checkout"><span>Check Out</span></a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="thankyou.html"><span>Thank You</span></a>--}}
{{--                                        </li>--}}
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">
                                        <span>Pages</span>
                                        <i class="lastudioicon-down-arrow"></i>
                                    </a>
                                    <ul class="sub-menu">
{{--                                        <li>--}}
{{--                                            <a href="show.blade.php"><span>About us</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="comingsoon.html"><span>Coming Soon</span></a>--}}
{{--                                        </li>--}}
                                        <li>
                                            <a href="./introduce/team"><span> Team</span></a>
                                        </li>
                                        <li>
                                            <a href="./introduce/contact"><span>Contact Us</span></a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="faqs.html"><span>FAQ's</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="termofuse.html"><span>term of use</span></a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="404.html"><span>404 Page</span></a>--}}
{{--                                        </li>--}}
                                        <li>
                                            <a href="./account/login"><span>Login & Register</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="position-static">
                                    <a href="#">
                                        <span>Collections</span>
                                        <i class="lastudioicon-down-arrow"></i>
                                    </a>
                                    <div class="mega-menu mega-menu--wrapper d-flex flex-wrap">
                                        <div class="mega-menu__banner">
                                            <a href="#">
                                                <div class="mega-menu__banner--image">
                                                    <img src="front/images/megamenu-fashion-01.jpg"
                                                         alt="Fashion Banner" />
                                                </div>
                                                <div class="mega-menu__banner--caption">
                                                    <h4 class="caption-title">New Arrival</h4>
                                                    <p class="caption-desc">Non curabitur gravida</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mega-menu__content">
                                            <h4 class="mega-menu__content--title">Summer Collection 2023</h4>
                                            <div class="d-flex flex-wrap">
                                                <ul class="mega-menu__content--list">
                                                    <li><a href="#">Dresses and jumpsuits</a></li>
                                                    <li><a href="#">Shirts</a></li>
                                                    <li><a href="#">T-shirts and tops</a></li>
                                                    <li><a href="#">Jackets and Suit Jackets</a></li>
                                                    <li><a href="#">Cardigans and sweaters</a></li>
                                                    <li><a href="#">Sweatshirts</a></li>
                                                    <li><a href="#">Coats</a></li>
                                                </ul>
                                                <ul class="mega-menu__content--list">
                                                    <li><a href="#">Trousers</a></li>
                                                    <li><a href="#">Jeans</a></li>
                                                    <li><a href="#">Skirts</a></li>
                                                    <li><a href="#">Shorts</a></li>
                                                    <li><a href="#">Bikinis and swimsuits</a></li>
                                                    <li><a href="#">Sportswear</a></li>
                                                    <li><a href="#">Underwear and lingerie</a></li>
                                                    <li><a href="#">Pyjamas</a></li>
                                                </ul>
                                            </div>
                                            <div class="mt-auto">
                                                <ul class="mega-menu__info">
                                                    <li><a href="#">info@exmple.com</a></li>
                                                    <li><a href="#">(626)997-4298</a></li>
                                                </ul>
                                                <div class="mega-menu__social">
                                                    <div class="mega-menu__social--lable">Connect with us</div>
                                                    <ul class="mega-menu__social--social">
                                                        <li>
                                                            <a href="#"><i class="lastudioicon-b-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="lastudioicon-b-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="lastudioicon-b-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="./introduce/blog">
                                        <span>Blog</span>

                                    </a>

                                </li>

                            </ul>
                            <!-- Menu Item List End -->
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-3">
                    <div
                        class="header__main--meta header__main--dark d-flex justify-content-end align-items-center">
                        <!-- Meta Item List Start -->
                        <ul
                            class="meta-items-list meta-items-list--dark d-flex justify-content-end align-items-center">


                            <form action="shop">
                                <li class="search d-none d-lg-block">
                                    <form action="#">
                                        <div class="meta-search meta-search--dark">
                                            <input name="search" value="{{request('search') }}" type="text" placeholder="Search products…" />
                                            <button type="submit" aria-label="search">
                                                <i class="lastudioicon-zoom-1"></i>
                                            </button>
                                        </div>
                                    </form>
                                </li>
                            </form>




                            <li class="wishlist">
                                <a href="./wishlist.html">
                                    <i class="lastudioicon lastudioicon-heart-1"></i>
                                    <span class="badge"></span>
                                </a>
                            </li>
                            <li class="cart">

                                    <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                                        <i class="lastudioicon-shopping-cart-1"></i><span class="badge">{{Cart::count()}}</span>
                                    </button>



                            </li>
                        </ul>
                        <button class="toggle-icon d-none d-xl-block" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSidebar" aria-label="menu">
                            <span class="bar-icon"><i class="lastudioicon-menu-8-1"></i></span>
                        </button>
                        <!-- Meta Item List Start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Main End -->
</header>
<!-- Header End -->

<!-- Cart Sidebar Start -->
<div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">My Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
            <i class="lastudioicon-e-remove"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="offcanvas-cart-list">

            @foreach(Cart::content() as $cart)
                <li data-rowId="{{$cart->rowId}}">

                <div class="offcanvas-cart-item"  >
                    <div class="offcanvas-cart-item__thumbnail">
                        <a href="#">
                            <img src="front/images/products/{{ $cart->options->images[0]->path}}" alt="product" width="70" height="84" />
                        </a>
                    </div>
                    <div class="offcanvas-cart-item__content">
                        <h4 class="offcanvas-cart-item__title">
                            <a href="#">{{$cart->name}} </a>
                        </h4>
                        <span class="offcanvas-cart-item__quantity">
                        ${{ number_format($cart->price, 2) }} x{{ $cart->qty }}
                        </span>
                    </div>
                    <a class="offcanvas-cart-item__remove" data-rowId="{{$cart->rowId}}">
                        <i  onclick="removeCart('{{$cart->rowId}}')"  class="lastudioicon-e-remove"></i>
                    </a>
                </div>

                </li>
            @endforeach


        </ul>
    </div>
{{--    <div class="offcanvas-footer">--}}
{{--        <!-- Free Shipping Goal Start-->--}}
{{--        <div class="free-shipping-goal">--}}
{{--            <div class="free-shipping-goal__label text-center">--}}
{{--                Buy $3.03 more to enjoy--}}
{{--                <strong>FREE Shipping</strong>--}}
{{--            </div>--}}
{{--            <div class="free-shipping-goal__loading-bar">--}}
{{--                <div class="load-percent" style="width: 98.49%"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Free Shipping Goal End-->--}}

        <!-- Cart Meta Start-->
{{--        <ul class="cart-meta">--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">--}}
{{--                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">--}}
{{--                            <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <span>Note</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">--}}
{{--                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">--}}
{{--                            <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>--}}
{{--                            <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <span>Shipping</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">--}}
{{--                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">--}}
{{--                            <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <span>Coupon</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
        <!-- Cart Meta End-->

        <!-- Cart Totals Table Start-->
        <div class="cart-totals-table">
            <table class="table">
                <tbody>
                <tr class="cart-subtotal">
                    <th>Total</th>
                    <td>
                        <span>${{Cart::total()}}</span>
                    </td>
                </tr>

{{--                <tr class="cart-shipping-totals">--}}
{{--                    <th>Shipping</th>--}}
{{--                    <td>--}}
{{--                        <ul class="shipping-methods">--}}
{{--                            <li class="single-form">--}}
{{--                                <input type="radio" name="shipping" id="flat-rate" />--}}
{{--                                <label for="flat-rate" class="single-form__label radio-label">--}}
{{--                                    <span></span>--}}
{{--                                    Flat rate:--}}
{{--                                    <strong class="price">$20.00</strong>--}}
{{--                                </label>--}}
{{--                            </li>--}}
{{--                            <li class="single-form">--}}
{{--                                <input type="radio" name="shipping" id="local-pickup" />--}}
{{--                                <label for="local-pickup" class="single-form__label radio-label">--}}
{{--                                    <span></span>--}}
{{--                                    Local pickup</label>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </td>--}}
{{--                </tr>--}}

                <tr class="order-total">
                    <th>Total</th>
                    <td data-title="Total">
                        <strong><span>${{Cart::total()}}</span></strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- Cart Totals Table End-->

        <!-- Cart Buttons End-->
        <div class="cart-buttons">
            <a href="./checkout" class="cart-buttons__btn-1 btn">Checkout</a>
            <a href="./cart" class="cart-buttons__btn-2 btn">View Cart</a>
        </div>
        <!-- Cart Buttons End-->
    </div>
</div>

<!-- Cart Sidebar End -->

<!-- Search Start -->
<div class="search-modal modal fade" id="SearchModal">
    <!-- Search Close Start -->
    <button class="search-modal__close" data-bs-dismiss="modal">
        <i class="lastudioicon-e-remove"></i>
    </button>
    <!-- Search Close End  -->

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Search Form Start  -->
            <div class="search-modal__form">
                <form action="#">
                    <input type="text" placeholder="Search product…" />
                    <button aria-label="search">
                        <i class="lastudioicon-zoom-1"></i>
                    </button>
                </form>
            </div>
            <!-- Search Form End  -->
        </div>
    </div>
</div>

<!-- Search End -->

<!-- Offcanvas Menu Start -->
<div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
    <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="close">
        <i class="lastudioicon-e-remove"></i>
    </button>
    <div class="offcanvas-body">
        <!-- Off Canvas Sidebar Menu Start -->
        <div class="offcanvas-sidebar__menu">
            <ul class="offcanvas-menu-list">
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="blog.html">News & Events</a></li>
                <li><a href="faqs.html">FAQs</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
        </div>
        <!-- Off Canvas Sidebar Menu End -->

        <!-- Off Canvas Sidebar Banner Start -->
        <div class="offcanvas-sidebar__banner">

            <h3 class="banner-title">NEW NOW</h3>
            <h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
            <a href="#" class="banner-btn">Discover</a>
        </div>
        <!-- Off Canvas Sidebar Banner End -->

        <!-- Off Canvas Sidebar Info Start -->
        <div class="offcanvas-sidebar__info">
            <ul class="offcanvas-info-list">
                <li><a href="tel:+61225315600">(+612) 2531 5600</a></li>
                <li><a href="mailto:info@exmple.com">info@exmple.com</a></li>
                <li>
                        <span>
                            PO Box 1622 Colins Street West Victoria 8077 Australia
                        </span>
                </li>
            </ul>
        </div>
        <!-- Off Canvas Sidebar Info End -->

        <!-- Off Canvas Sidebar Social Start -->
        <div class="offcanvas-sidebar__social">
            <ul class="offcanvas-social">
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
            </ul>
        </div>
        <!-- Off Canvas Sidebar Social End -->

        <!-- Off Canvas Sidebar Social End -->
        <div class="offcanvas-sidebar__copyright">
            <p>
                &copy;
                <span class="current-year"></span>
                <span> Glamx </span> Made with by
                <a href="https://hasthemes.com/">HasThemes</a>
            </p>
        </div>
        <!-- Off Canvas Sidebar Social End -->
    </div>
</div>

<!-- Offcanvas Menu End -->

<!-- Mobile Menu Start -->
<div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
    <!-- offcanvas-header Start -->
    <div class="offcanvas-header">
        <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="lastudioicon-e-remove"></i>
        </button>
    </div>
    <!-- offcanvas-header End -->

    <!-- offcanvas-body Start -->
    <div class="offcanvas-body">
        <nav class="navbar-mobile-menu">
            <ul class="mobile-menu-items">
                <li>
                    <a href="./">
                        Home
                        <span class="menu-expand">
                            </span>
                    </a>

                </li>

                <li>
                    <a href="./shopsidebar.html">
                        Shop
                        <span class="menu-expand">
                                <i class="lastudioicon-down-arrow"></i>
                            </span>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu-col">
                            <h5 class="mega-menu-title">Shop Details</h5>
                            <ul class="">
                                <li>
                                    <a href="myaccount.html"><span>My Account</span></a>
                                </li>
                                <li>
                                    <a href="cart.html"><span>Cart</span></a>
                                </li>
                                <li>
                                    <a href="ordertracking.html"><span>Order Tracking</span></a>
                                </li>
                                <li>
                                    <a href="wishlist.html"><span>Wishlist</span></a>
                                </li>
                                <li>
                                    <a href="compare.html"><span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="emptycart.html"><span>Cart Empty</span></a>
                                </li>

                                <li>
                                    <a href="./checkout"><span>Check Out</span></a>
                                </li>
                                <li>
                                    <a href="thankyou.html"><span>Thank You</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="#">
                        Pages
                        <span class="menu-expand">
                                <i class="lastudioicon-down-arrow"></i>
                            </span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="comingsoon.html">Coming Soon</a></li>
                        <li><a href="ourteam.html">Our Team</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="faqs.html">FAQ's</a></li>
                        <li><a href="termofuse.html">term of use</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li>
                            <a href="./account/login">Login & Register</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        Collections
                        <span class="menu-expand">
                                <i class="lastudioicon-down-arrow"></i>
                            </span>
                    </a>
                    <div class="mega-menu">
                        <div class="mega-menu__banner">
                            <a href="#">
                                <div class="mega-menu__banner--image">
                                    <img src="front/images/megamenu-fashion-01.jpg" alt="Fashion Banner"
                                         width="470" height="475" />
                                </div>
                                <div class="mega-menu__banner--caption">
                                    <h4 class="caption-title">New Arrival</h4>
                                    <p class="caption-desc">
                                        Non curabitur gravida
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="mega-menu__content">
                            <h4 class="mega-menu__content--title">
                                Summer Collection 2023
                            </h4>
                            <div class="d-flex flex-wrap">
                                <ul class="mega-menu__content--list">
                                    <li>
                                        <a href="#">Dresses and jumpsuits</a>
                                    </li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">T-shirts and tops</a></li>
                                    <li>
                                        <a href="#">Jackets and Suit Jackets</a>
                                    </li>
                                    <li>
                                        <a href="#">Cardigans and sweaters</a>
                                    </li>
                                    <li><a href="#">Sweatshirts</a></li>
                                    <li><a href="#">Coats</a></li>
                                </ul>
                                <ul class="mega-menu__content--list">
                                    <li><a href="#">Trousers</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Skirts</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li>
                                        <a href="#">Bikinis and swimsuits</a>
                                    </li>
                                    <li><a href="#">Sportswear</a></li>
                                    <li>
                                        <a href="#">Underwear and lingerie</a>
                                    </li>
                                    <li><a href="#">Pyjamas</a></li>
                                </ul>
                            </div>
                            <div class="mt-auto">
                                <ul class="mega-menu__info">
                                    <li><a href="#">info@exmple.com</a></li>
                                    <li><a href="#">(626)997-4298</a></li>
                                </ul>
                                <div class="mega-menu__social">
                                    <div class="mega-menu__social--lable">
                                        Connect with us
                                    </div>
                                    <ul class="mega-menu__social--social">
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="./blogleftsidebar.html">
                        Blog
                        <span class="menu-expand">
                            </span>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
    <!-- offcanvas-body end -->
</div>
<!-- Mobile Menu End -->

<!-- Mobile Meta Start -->
<div class="mobile-meta d-md-none">
    <ul class="mobile-meta-items">
        <li>
            <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
                <i class="lastudioicon-zoom-1"></i>
            </button>
        </li>
        <li>
            <a href="wishlist.html">
                <i class="lastudioicon-heart-1"></i>
                <span class="badge">03</span>
            </a>
        </li>
        <li>
            <a href="compare.html">
                <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                <span class="badge">03</span>
            </a>
        </li>
        <li>
            <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar">
                <i class="lastudioicon-shopping-cart-1"></i>
                <span class="badge">03</span>
            </button>
        </li>
    </ul>
</div>

<!-- Mobile Meta End -->

{{--Body here--}}
@yield('body')




<footer class="footer-section">
    <div class="container-fluid custom-container">
        <!-- Footer Main Start -->
        <div class="footer-main">
            <div class="footer-left">
                <!-- Footer Info Start -->
                <div class="footer-info">
                    <h3 class="footer-title-2">CONNECT WITH US</h3>

                    <ul class="footer-info__items">
                        <!-- Footer Info Item Start -->
                        <li class="footer-info__item">
                            <div class="footer-info__item--icon">
                                <i class="lastudioicon-pin-3-2"></i>
                            </div>
                            <div class="footer-info__item--text">
                                <p>
                                    8A - Tôn Thất Thuyết
                                </p>
                            </div>
                        </li>
                        <!-- Footer Info Item End -->
                        <!-- Footer Info Item Start -->
                        <li class="footer-info__item">
                            <a href="#">
                                <div class="footer-info__item--icon">
                                    <i class="lastudioicon-phone-call-2"></i>
                                </div>
                                <div class="footer-info__item--text">
                                    <p>012345678</p>
                                </div>
                            </a>
                        </li>
                        <!-- Footer Info Item End -->
                        <!-- Footer Info Item Start -->
                        <li class="footer-info__item">
                            <a href="#">
                                <div class="footer-info__item--icon">
                                    <i class="lastudioicon lastudioicon-pin-3-2"></i>
                                </div>
                                <div class="footer-info__item--text">
                                    <p>glamx@gmail.com</p>
                                </div>
                            </a>
                        </li>
                        <!-- Footer Info Item End -->
                    </ul>

                    <ul class="footer-info__social">
                        <li>
                            <a href="#" aria-label="facebook">
                                <i class="lastudioicon-b-facebook"></i>
                            </a>
                            <a href="#" aria-label="twitter">
                                <i class="lastudioicon-b-twitter"></i>
                            </a>
                            <a href="#" aria-label="pinterest">
                                <i class="lastudioicon-b-pinterest-circled"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Footer Info End -->
            </div>
            <div class="footer-right">
                <!-- Footer Newsletter Start -->
                <div class="footer-newsletter-2">
                    <h3 class="footer-title-2 mb-0">
                        SUBSCRIBE TO OUR NEWSLETTER
                    </h3>

                    <form action="#">
                        <div class="footer-newsletter-2__form">
                            <input class="footer-newsletter-2__input" type="email" aria-label="email" />
                            <button class="footer-newsletter-2__btn" aria-label="arrow right">
                                <i class="lastudioicon-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Footer Newsletter End -->

                <!-- Footer link Start -->
                <div class="footer-link-2">
                    <ul class="footer-link-2__list">
                        <li><a href="#">Returns And Exchanges</a></li>
                        <li><a href="#">Payment Terms</a></li>
                        <li><a href="#">Delivery Terms</a></li>
                        <li><a href="#">Store Credit Program</a></li>
                        <li><a href="term-of-use.html">Terms Of Use</a></li>
                    </ul>
                    <ul class="footer-link-2__list">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li>
                            <a href="blog-right-sidebar.html">News & Events</a>
                        </li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                    <ul class="footer-link-2__list">
                        <li><a href="shop-fullwidth.html">Body Care</a></li>
                        <li><a href="shop-fullwidth.html">Beauty Tool</a></li>
                        <li><a href="shop-fullwidth.html">Hair Care</a></li>
                        <li><a href="shop-fullwidth.html">Make Up</a></li>
                    </ul>
                </div>
                <!-- Footer link End -->
            </div>
        </div>
        <!-- Footer Main End -->
    </div>

    <!-- Footer CopyRight Start -->
    <div class="footer-copyright-2">
        <div class="container-fluid custom-container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-center text-md-start">
                        <p>
                            &copy;
                            <span class="current-year"></span>
                            <span> Glamx </span> Made with
                            <i class="lastudioicon-heart-1"></i> by
                            <a href="https://hasthemes.com/">HasThemes</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <img src="front/images/footer-payment-1.png" alt="Footer Payment" width="230" height="17"
                             loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer CopyRight End -->
</footer>

<!-- Footer End -->

<!-- Quick View Start -->
<!-- Modal Start -->
<div class="modal quickview-modal fade" id="quickView">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal Content Start -->
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close">
                <i class="lastudioicon-e-remove"></i>
            </button>
            <div class="modal-body">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- Product Single image Start -->
                        <div class="product-single-image">
                            <div class="quick-view-product-slide navigation-arrows-style-2">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/product-single-01.jpg" alt="product"
                                                 width="742" height="779" loading="lazy" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/product-single-02.jpg" alt="product"
                                                 width="742" height="779" loading="lazy" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/product-single-03.jpg" alt="product"
                                                 width="742" height="779" loading="lazy" />
                                        </div>
                                        <div class="product-single-slide-item swiper-slide">
                                            <img src="front/images/products/product-single-04.jpg" alt="product"
                                                 width="742" height="779" loading="lazy" />
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <i class="lastudioicon-arrow-right"></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i class="lastudioicon-arrow-left"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Single image End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Product Single Content Start -->
                        <div class="product-single-content quick-view-product-content">
                            <h2 class="product-single-content__title">
                                Product Simple
                            </h2>
                            <div class="product-single-content__price-stock">
                                <div class="product-single-content__price">
                                    <ins>$36.99</ins>
                                </div>
                                <div class="product-single-content__stock">
                                        <span class="stock-icon">
                                            <i class="dlicon ui-1_check-circle-08"></i>
                                        </span>
                                    <span class="stock-text">97 in stock</span>
                                </div>
                            </div>
                            <div class="product-single-content__short-description">
                                <p>
                                    Proin volutpat vitae libero at tincidunt.
                                    Maecenas sapien lectus, vehicula vel euismod
                                    sed, vulputate a lorem. Integer at tristique
                                    libero. Nullam porta eleifend metus a
                                    interdum.
                                </p>
                            </div>
                            <div class="product-single-content__add-to-cart-wrapper">
                                <div class="product-single-content__quantity-add-to-cart">
                                    <div class="product-single-content__quantity product-quantity">
                                        <button type="button" class="decrease" aria-label="delete">
                                            <i class="lastudioicon-i-delete-2"></i>
                                        </button>
                                        <input class="quantity-input" type="text" value="01" />
                                        <button type="button" class="increase" aria-label="add">
                                            <i class="lastudioicon-i-add-2"></i>
                                        </button>
                                    </div>
                                    <button class="product-single-content__add-to-cart btn">
                                        Add to cart
                                    </button>
                                </div>

                                <a href="#" class="product-add-compare">
                                    Add to Compare
                                </a>
                                <a href="#" class="product-add-wishlist">
                                    Add to Wishlist
                                </a>
                            </div>
                            <div class="product-single-content__meta">
                                <div class="product-single-content__meta--item">
                                    <div class="label">SKU:</div>
                                    <div class="content">REF. HT-5732</div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Categories:</div>
                                    <div class="content">
                                        <a href="#">Fashion</a>
                                        <a href="#">Women</a>
                                    </div>
                                </div>
                                <div class="product-single-content__meta--item">
                                    <div class="label">Tag:</div>
                                    <div class="content">
                                        <a href="#">Teen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Single Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Content End -->
    </div>
</div>
<!-- Modal End -->

<!-- Quick View End -->

<!-- Popup Modal Start -->

<!-- Popup Modal End -->

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Bootstrap JS -->
<script src="front/js/bootstrap.bundle.min.js"></script>

<!-- Plugins JS -->
<script src="front/js/swiper-bundle.min.js"></script>
<script src="front/js/masonry.pkgd.min.js"></script>
<script src="front/js/glightbox.min.js"></script>
<script src="front/js/nice-select2.js"></script>
<script src="front/js/vendor/jquery-3.4.1.min.js"></script>
<script src="front/js/jquery.magnific-popup.min.js"></script>

<script src="front/js/jquery.counterup.min.js"></script>

<script src="front/js/jquery.countdown.js"></script>

<script src="front/js/jquery.ui.js"></script>

<script src="front/js/jquery.elevatezoom.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="front/js/main.js"></script>

</body>

</html>
