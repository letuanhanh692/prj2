@extends('front.layout.master')

@section('title','Register')

@section('body')

    <main>
        <!-- Breadcrumb Start -->
        <!-- <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">
                        Log In & Register
                    </h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Log In & Register</span></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- Breadcrumb End -->

        <!-- Log In & Register Start -->
        <div class="login-register-section section-padding-2">
            <div class="container-fluid custom-container" style="padding: 0 30%; margin-top:15%;">
                <div class="" style="text-align: center;">

                        <!-- Log In & Register Box Start -->
                        <div class="login-register" >
                            <h3 class="login-register__title">Register</h3>

                            @if (session('notification'))
                                <div class="alert alert-warning" role="alert">
                                    {{ session('notification') }}
                                </div>
                            @endif

                            <form action="" method="post">
                                @csrf
                                <div class="login-register__form">
                                    <div class="single-form">
                                        <input class="single-form__input" type="text" id="name" name="name" placeholder=" Name" />
                                    </div>

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="single-form__input" type="email" id="email" name="email" placeholder="Email address *" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="single-form__input" type="password" id="pass" name="password" placeholder="Password *" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="single-form__input" type="password" name="password_confirmation" placeholder="Repassword *" />
                                    </div>
                                    <!-- Single Form Start -->


                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="single-form__btn btn">
                                            Register
                                        </button>

                                    </div>
                                    <div class="register2">

                                        Have already an account?<a href="./account/login"> Login here</a>
                                    </div>


                            </form>


                        </div>
                        <!-- Log In & Register Box End -->

                </div>
            </div>
        </div>
        <!-- Log In & Register End -->

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
