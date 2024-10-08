@extends('front.layout.master')

@section('title','My Order')

@section('body')



    <main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">My Account</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="./">Home</a></li>
                        <li><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- My Account Start -->
        <div class="my-account-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- My Account Tabs Start -->
                <div class="my-account-tab">
                    <!-- My Account Tabs Menu Start -->
                    <div class="my-account-tab__menu">
                        <ul class="nav justify-content-center">
{{--                            <li>--}}
{{--                                <button class="account-btn active" data-bs-toggle="tab" data-bs-target="#dashboard" type="button">--}}
{{--                                    Dashboard--}}
{{--                                </button>--}}
{{--                            </li>--}}
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#orders" type="button">
                                  Account Orders
                                </button>
                            </li>
{{--                            <li>--}}
{{--                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#download" type="button">--}}
{{--                                    Download--}}
{{--                                </button>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#address" type="button">--}}
{{--                                    Address--}}
{{--                                </button>--}}
{{--                            </li>--}}
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#account-detail" type="button">
                                    Account Detail
                                </button>
                            </li>
{{--                            <li>--}}
{{--                                <a class="account-btn" href="login-register.html">Logout</a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                    <!-- My Account Tabs Menu End -->

                    <div class="tab-content">

{{--                        <div class="tab-pane fade show active" id="dashboard">--}}
{{--                            <!-- My Account Dashboard Start -->--}}
{{--                            <div class="my-account-dashboard">--}}
{{--                                <p>--}}
{{--                                    Hello <strong>diyetox631</strong> (not--}}
{{--                                    <strong>diyetox631</strong>?--}}
{{--                                    <a href="#">Log out</a>)--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    From your account dashboard you can view--}}
{{--                                    your <a href="#">recent orders</a>,--}}
{{--                                    manage your--}}
{{--                                    <a href="#">shipping and billing addresses</a>, and--}}
{{--                                    <a href="#">edit your password and account--}}
{{--                                        details</a>.--}}
{{--                                </p>--}}
{{--                            </div>--}}
                            <!-- My Account Dashboard End -->
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <!-- My Account Orders Start -->
                            <div class="my-account-orders">
                                <div class="my-account-table table-responsive">
                                    <table class="table">
                                        <thead>

                                            <tr>
                                                <th>
                                                    <span>Id</span>
                                                </th>
                                                <th>
                                                    <span>Date</span>
                                                </th>
                                                <th>
                                                    <span>Address</span>
                                                </th>
                                                <th>
                                                    <span>Email</span>
                                                </th>
                                                <th>
                                                    <span>Order Details</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>
                                                    <span>{{ $order->user_id }}</span>
                                                </td>
                                                <td>
                                                    <time>{{ $order->created_at }}</time>
                                                </td>
                                                <td> {{ $order->street_address }}</td>
                                                <td>
                                                    <span>{{ $order->email }}</span>

                                                </td>
                                                <td>
                                                    <a class="btn" href="./account/my-order/{{ $order->id }}">View</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- My Account Orders End -->
                        </div>

                        <div class="tab-pane fade" id="address">
                            <!-- My Account Address Start -->

                            <!-- My Account Address End -->
                        </div>
                        <div class="tab-pane fade" id="account-detail">
                            <!-- My Account Account Detail Start -->
                            <div class="my-account-detail">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label"> Name *</label>
                                                <input class="single-form__input" type="text" name="name" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Email*</label>
                                                <input class="single-form__input" type="text" name="email" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                    </div>
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Phone *</label>
                                        <input class="single-form__input" type="text" name="phone"/>
                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label"> Address *</label>
                                        <input class="single-form__input" type="email" name="email"/>
                                    </div>
                                    <!-- Single Form Start -->

                                    <p class="my-account-detail__legend">
                                        Password change
                                    </p>

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Current password (leave blank
                                            to leave unchanged)</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">New password (leave blank to
                                            leave unchanged)</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Confirm new password</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="single-form__btn btn">
                                            Save Change
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                </form>
                            </div>
                            <!-- My Account Account Detail End -->
                        </div>
                    </div>
                </div>
                <!-- My Account Tabs End -->
            </div>
        </div>
        <!-- My Account End -->

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
