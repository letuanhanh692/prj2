@extends('front.layout.master')

@section('title','CheckOut')

@section('body')

    <main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Checkout</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="/">Home</a></li>
                        <li><span>Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Checkout Start -->
        <div class="checkout-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Checkout Start -->
                <form action="" method="post" class="checkout-form">
                    @csrf

                     @if(Cart::Count()>0)
                <div class="checkout-wrapper">
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <!-- Checkout Info Start -->
                            <div class="checkout-info">
                                <div class="checkout-info__title">
                                    <img src="front/images/icon/coupon.svg" alt="Coupon" width="16" height="14" />
                                    Have a coupon?
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#coupon">
                                        Click here to enter your code
                                    </button>
                                </div>
                                <div class="collapse" id="coupon">
                                    <div class="checkout-info__body">
                                        <p>
                                            If you have a coupon code,
                                            please apply it below.
                                        </p>
                                        <form action="#">
                                            <div class="checkout-coupon-form single-form">
                                                <input class="single-form__input" type="text" placeholder="Coupon code" />
                                                <button class="single-form__btn btn" class="single">
                                                    Apply coupon
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Info End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Checkout Info Start -->
                            <div class="checkout-info">
                                <div class="checkout-info__title">
                                    <i class="lastudioicon-single-01-2"></i>
                                    Returning customer?
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#login">
                                        Click here to login
                                    </button>
                                </div>
                                <div class="collapse" id="login">
                                    <div class="checkout-info__body">
                                        <p>
                                            If you have shopped with us
                                            before, please enter your
                                            details below. If you are a new
                                            customer, please proceed to the
                                            Billing section.
                                        </p>
                                        <form action="#">
                                            <!-- Login Form End -->
                                            <div class="checkout-login-form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="single-form__label">Username or
                                                                email
                                                                *</label>
                                                            <input class="single-form__input" type="text" placeholder="Coupon code" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="single-form">
                                                            <label class="single-form__label">Password
                                                                *</label>
                                                            <input class="single-form__input" type="text" placeholder="Coupon code" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <p>
                                                    Login with your Social
                                                    ID
                                                </p>
                                                <ul class="login-register__social">
                                                    <li>
                                                        <a class="social-facebook" href="#">
                                                            <span
                                                                    class="social-icon"
                                                                >
                                                                    <img
                                                                        src="front/images/facebook.svg"
                                                                        alt="Facebook"
                                                                    />
                                                                </span>
                                                            <span
                                                                    class="social-text"
                                                                    >Login with
                                                                    Facebook</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="social-google" href="#">
                                                            <span
                                                                    class="social-icon"
                                                                >
                                                                    <img
                                                                        src="front/images/google.svg"
                                                                        alt="Facebook"
                                                                    />
                                                                </span>
                                                            <span
                                                                    class="social-text"
                                                                    >Login with
                                                                    Google</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <input class="single-form__input" type="checkbox" id="remember" />
                                                    <label for="remember" class="single-form__label checkbox-label"><span></span>
                                                        Remember me</label>
                                                </div>
                                                <!-- Single Form Start -->
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <button class="single-form__btn btn">
                                                        Log In
                                                    </button>
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                            <!-- Login Form End -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Info End -->
                        </div>
                    </div>

                    <div class="checkout-row">
                        <div class="checkout-col-1">
                            <!-- Checkout Details Start -->

                                <div class="checkout-details">
                                    <h3 class="checkout-details__title">
                                        Billing details
                                    </h3>

                                    <!-- Checkout Details Billing Start -->
                                    <div class="checkout-details__billing">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->

                                                <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}">

                                                <div class="single-form">
                                                    <label class="single-form__label">First name *</label>
                                                    <input class="single-form__input" type="text" name="first_name" value="{{ Auth::user()->name ??''}}" />
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Last name *</label>
                                                    <input class="single-form__input" type="text" name="last_name"  />
                                                </div>
                                                <!-- Single Form End -->
                                            </div>
                                        </div>
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Company name (optional)</label>
                                            <input class="single-form__input" type="text" name="company_name" value="{{ Auth::user()->company_name ??''}}" />
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Country / Region *</label>
                                            <input class="single-form__input" type="text" name="country" value="{{ Auth::user()->country ??''}}" />
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Street address *</label>
                                            <input class="single-form__input" type="text" name="street_address" value="{{ Auth::user()->street_address ??''}}" />
{{--                                            <input class="single-form__input" type="text" placeholder="Apartment, suite, unit, etc. (optional)" />--}}
                                        </div>
                                        <!-- Single Form End -->
                                        <div class="single-form">
                                            <label class="single-form__label">Town / City</label>
                                            <input class="single-form__input" type="text" name="town_city" value="{{ Auth::user()->town_city ??''}}" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Postcode / ZIP *</label>
                                            <input class="single-form__input" type="text" name="postcode_zip" value="{{ Auth::user()->postcode_zip ??''}}" />
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Phone *</label>
                                            <input class="single-form__input" type="text" name="phone"value="{{ Auth::user()->phone ??''}}"/>
                                        </div>
                                        <!-- Single Form End -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Email address *</label>
                                            <input class="single-form__input" type="email" name="email" value="{{ Auth::user()->email ??''}}"/>
                                        </div>
                                        <!-- Single Form End -->
                                    </div>
                                    <!-- Checkout Details Billing End -->

                                    <!-- Checkout Details Account Start -->
                                    <div class="checkout-details__account">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="checkbox" id="account" class="account" />

                                            <label for="account" class="single-form__label checkbox-label"><span></span> Create an
                                                account?</label>
                                        </div>
                                        <!-- Single Form End -->

                                        <div class="checkout-account">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Create account password
                                                    *</label>
                                                <input class="single-form__input" type="password" placeholder="Password" />
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                    </div>
                                </div>



                            <!-- Checkout Details End -->
                        </div>
                        <div class="checkout-col-2">
                            <!-- Checkout Details Start -->
                            <div class="checkout-details">
                                <h3 class="checkout-details__title">
                                    Your order
                                </h3>

                                <div class="checkout-details__order-review">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">
                                                    Product
                                                </th>
                                                <th class="product-total">
                                                    Subtotal
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($carts as $cart)
                                            <tr class="cart-item">
                                            <td class="product-name">
                                               {{$cart->name}}
                                                <strong
                                                >×{{$cart->qty}}</strong>
                                            </td>
                                            <td class="product-total">
                                                <span>${{$cart->price * $cart->qty}} </span>
                                            </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td>
                                                    <span> ${{$subtotal}}</span>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td>
                                                    <strong
                                                            ><span>
                                                                ${{$total}}
                                                            </span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="checkout-details__payment-method">
                                        <div class="accordion" id="payment-method">
                                            <div class="accordion-item">
                                                <div class="single-form" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                                    <input type="radio" name="payment_type" id="bank-transfer" value="pay_later" checked />
                                                    <label for="bank-transfer" class="single-form__label radio-label">
                                                        <span></span> Pay Later
                                                       </label>
                                                </div>

                                            </div>
                                            <div class="accordion-item">
                                                <div class="single-form collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                                    <input type="radio" name="payment_type" id="check-payment" value="online_paymet" />
                                                    <label for="check-payment" class="single-form__label radio-label">
                                                        <span></span> Online Paymet</label>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="checkout-details__privacy-policy">
                                        <p>
                                            Your personal data will be used
                                            to process your order, support
                                            your experience throughout this
                                            website, and for other purposes
                                            described in our privacy policy.
                                        </p>
                                    </div>

                                    <div class="checkout-details__btn">
                                        <button class="btn" id="placeOrderBtn">Place Order</button>
                                    </div>

                                </div>
                            </div>
                            <!-- Checkout Details End -->
                        </div>
                    </div>
                </div>
                     @else
                           <div class="col-lg-12">
                                     <h4>Your cart is empty</h4>
                           </div>

                    @endif

                </form>
                <!-- Checkout End -->
            </div>
        </div>
        <!-- Checkout End -->

        <!-- Newsletter Start -->
        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="background-image: url('front/images/newsletter-bg-1.jpg')">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h3 class="newsletter-wrapper__title">Follow us on</h3>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
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
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
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
