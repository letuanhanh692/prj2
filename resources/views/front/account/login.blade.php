
@extends('front.layout.master')

@section('title','login')

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
                            <h3 class="login-register__title">Log In</h3>

                                <form action="" method="post">
                                    @csrf

                                    @if (session('notification'))
                                        <div class="alert alert-warning" role="alert">
                                            {{ session('notification') }}
                                        </div>
                                    @endif


                                    <div class="login-register__form">
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="single-form__input" name="email" type="email" id="email"  placeholder="Username or email address *" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input class="single-form__input" name="password" type="password" id="pass" placeholder="Password *" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                             <input class="single-form__input" type="checkbox" id="remember" name="remember" />
                                            <label for="remember" class="single-form__label checkbox-label"><span></span>
                                                  Save Password</label>

                                        </div>
                                        <!-- Single Form Start -->

                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button type="submit" class="single-form__btn btn">
                                                Log In
                                            </button>

                                        </div>
                                        <div class="register2">

                                            Don't have an account?<a href="./account/register">Register</a>
                                        </div>

                                        <!-- Single Form Start -->
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
            <div class="newsletter-left" style="background-image: url(./assets/images/newsletter-bg-1.jpg)">
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
            <div class="newsletter-right" style="background-image: url(./assets/images/newsletter-bg-2.jpg)">
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
