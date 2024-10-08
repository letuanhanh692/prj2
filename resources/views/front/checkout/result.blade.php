@extends('front.layout.master')

@section('title','Result')

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
                           <div class="col-lg-12">
                                     <h4>{{$notification}}</h4>
                                    <a href="./" class="primary-btn nt-5">Countinue Shopping</a>
                           </div>
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
