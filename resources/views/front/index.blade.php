@extends('front.layout.master')

@section('title','Home')

@section('body')

    <main>
        <!-- Slider Start -->
        <div class="slider-section home-2-slider-navigation">
            <!-- Slider Item Start -->
            <div class="slider-item home-2-slider-style-1" style="
                        background-image: url('front/images/slider/slider-2-1.jpg');

                    ">
                <div class="container-fluid custom-container">
                    <!-- Slider Content Start -->
                    <div class="home-2-slider-content-style-1">
                        <h2 class="home-2-slider-content-style-1__title">
                            Be New Flower Today
                        </h2>
                        <ul class="home-2-slider-content-style-1__btns">
                            <li class="button-01">
                                <a class="home-2-slider-content-style-1__btn" href="shop-sidebar.html">
                                    Discover now
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Slider Content End -->
                </div>
            </div>
            <!-- Slider Item End -->
        </div>
        <!-- Slider End -->

        <!-- About Start -->
        <div class="about-section section-padding">
            <div class="container-fluid about-container">
                <div class="about-row justify-content-between align-items-center">
                    <!-- About Image Start -->
                    <div class="about-image js-scroll ShortFadeInUp">
                        <img src="front/images/about-1.jpg" alt="About" width="804" height="749" loading="lazy" />
                        <div class="about-bg"></div>
                    </div>
                    <!-- About Image End -->

                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title js-scroll ShortFadeInUp">
                            <h3 class="section-title__sub-title">
                                WELCOME TO COSMETIC STORE
                            </h3>
                            <h2 class="section-title__title">
                                QUAM PELLENTESQUE NEC NAM ALIQUAM SEM ET.
                                ENIM DIAM VULPUTATE UT PHARETRA
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <a href="about.blade.php" class="about-content__btn js-scroll ShortFadeInUp">
                            Learn now
                        </a>
                    </div>
                    <!-- About Content End -->
                </div>

                <!-- About Feature Start -->
                <div class="about-feature">
                    <div class="row justify-content-center justify-content-md-between">
                        <!-- About Feature Item Start -->
                        <div class="about-feature-item text-center js-scroll ShortFadeInUp">
                            <div class="about-feature-item__icon">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="142" height="142"
                                        viewBox="0 0 142 142">
                                        <circle cx="71" cy="71" r="70.5" fill="none" stroke="#707070"
                                            stroke-dasharray="10"></circle>
                                        <path
                                            d="M44.822 107.2a3.767 3.767 0 0 0 2.454.9c.1 0 .206 0 .311-.012a3.769 3.769 0 0 0 2.586-1.323l16.167-19 15.728-18.476c.009 0 .016.01.026.01a.716.716 0 0 0 .232-.039l17.688-5.992a7.415 7.415 0 0 0 5.056-7.633c-.611-7.319-3.5-13.23-8.36-17.1s-11.268-5.358-18.538-4.318a7.416 7.416 0 0 0-6.307 6.637l-1.77 17.521a.745.745 0 0 0-.19.149L37.802 96.248a3.8 3.8 0 0 0 .432 5.347Zm28.485-66.205a5.965 5.965 0 0 1 5.07-5.344c6.859-.985 12.89.4 17.426 4.018s7.24 9.174 7.82 16.083a5.968 5.968 0 0 1-4.075 6.143l-17.313 5.864-3.076-2.451 11.443-6.12a.726.726 0 1 0-.686-1.278l-11.994 6.415-.8-.636 6.315-7.421a.725.725 0 1 0-1.1-.94l-6.335 7.435-1.11-.945L79.324 48.9a.725.725 0 1 0-1.371-.469l-4.244 12.378-2.207-1.883ZM70.54 60.018l10.162 8.643-10.429 12.248-10.081-8.732ZM59.252 73.281l10.081 8.733-3.621 4.253-10.079-8.733Zm-4.559 5.359 10.079 8.733-7.334 8.622-10.079-8.737ZM38.909 97.186l7.509-8.824 10.084 8.733-7.431 8.733a2.343 2.343 0 0 1-3.3.266l-6.595-5.605a2.346 2.346 0 0 1-.267-3.3m11.647-56.261h1.856v1.859a.726.726 0 0 0 1.451 0v-1.859h1.858a.726.726 0 0 0 0-1.451h-1.858v-1.854a.726.726 0 0 0-1.451 0v1.856h-1.856a.726.726 0 0 0 0 1.451m19.9 60.899a.726.726 0 0 0 .726-.726v-2.606h2.606a.726.726 0 1 0 0-1.451h-2.607v-2.607a.726.726 0 1 0-1.451 0v2.608h-2.607a.726.726 0 1 0 0 1.451h2.608v2.606a.726.726 0 0 0 .726.726m-27.76-33.421h1.854v1.856a.726.726 0 0 0 1.451 0v-1.856h1.858a.726.726 0 0 0 0-1.451h-1.858v-1.856a.726.726 0 1 0-1.451 0v1.856h-1.854a.726.726 0 1 0 0 1.451m44.841 15.832a.726.726 0 0 0 .726-.726V81.29h2.226a.726.726 0 1 0 0-1.451h-2.226v-2.226a.726.726 0 0 0-1.451 0v2.226h-2.226a.726.726 0 1 0 0 1.451h2.226v2.226a.726.726 0 0 0 .726.726"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="about-feature-item__content">
                                <h3 class="about-feature-item__title">
                                    Vestibulum lorem
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod
                                </p>
                            </div>
                        </div>
                        <!-- About Feature Item End -->

                        <!-- About Feature Item Start -->
                        <div class="about-feature-item text-center js-scroll ShortFadeInUp">
                            <div class="about-feature-item__icon">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="142" height="142"
                                        viewBox="0 0 142 142">
                                        <circle cx="71" cy="71" r="70.5" fill="none" stroke="#707070"
                                            stroke-dasharray="10"></circle>
                                        <g fill="currentColor">
                                            <path
                                                d="M49.419 105.831a2.277 2.277 0 0 0 2.275 2.275h19.024a2.277 2.277 0 0 0 2.275-2.275V93.595h.958a.713.713 0 0 0 .711-.649l4.627-52.443a.588.588 0 0 0 .046-.519l.47-5.313a.714.714 0 0 0-.711-.776H43.617a.723.723 0 0 0-.527.231.718.718 0 0 0-.184.544l5.142 58.277a.714.714 0 0 0 .712.649h.659v12.235Zm22.146 0a.85.85 0 0 1-.848.848H51.694a.85.85 0 0 1-.848-.848v-3.612h6.772a.715.715 0 0 0 .559-.268.7.7 0 0 0 .137-.445.761.761 0 0 0 0-.161 1.736 1.736 0 0 1-.046-.388c0-1.239 1.317-2.245 2.937-2.245s2.937 1.006 2.937 2.245a1.725 1.725 0 0 1-.044.385.632.632 0 0 0 0 .164.7.7 0 0 0 .136.444.712.712 0 0 0 .559.27h6.774Zm6.749-70.509-.365 4.144H44.761l-.365-4.144Zm-28.9 56.847-4.527-51.274h32.935l-4.525 51.274Zm22.153 1.426v7.2h-6c-.1-1.948-2.018-3.508-4.36-3.508s-4.257 1.56-4.36 3.508h-6v-7.2ZM98.565 70.511c-3.364-3.555-3.76-4.019-3.806-4.076l-.217.16.191-.2c-1.026-1.214.064-2.646 1.717-4.535.888-1.016 1.59-1.818 1.633-2.616a2.022 2.022 0 0 0-1-1.888c-1.473-.916-4.366-.558-6.876.849a10.314 10.314 0 0 0-5.453 9.264c-.255 4.19 3.875 8.533 5.64 10.385l.932.949c5.507 5.536 5.507 5.536 2.781 11.189a1.757 1.757 0 0 0-.123 1.185 1.616 1.616 0 0 0 1.146 1.219 2.169 2.169 0 0 0 .605.08c1.947 0 4.9-2.055 5.967-3.073 3.662-3.977 3.815-8.947.437-14.377a32.321 32.321 0 0 0-3.575-4.518m2.125 17.898c-1.416 1.35-4.219 2.9-5.155 2.623-.076-.021-.126-.046-.16-.188a.322.322 0 0 1 .023-.224c3.164-6.563 2.694-7.036-3.055-12.817l-.911-.925c-1.5-1.571-5.466-5.744-5.246-9.365a9.009 9.009 0 0 1 4.724-8.056 8.65 8.65 0 0 1 4.032-1.187 2.7 2.7 0 0 1 1.389.3.6.6 0 0 1 .327.6 6.556 6.556 0 0 1-1.282 1.751c-1.446 1.654-3.631 4.153-1.733 6.4l.049-.04c.023.034.049.07.077.106l-.026.033.029-.029c.475.635 1.56 1.78 3.746 4.092a30.93 30.93 0 0 1 3.414 4.307c3.043 4.891 2.948 9.146-.245 12.617">
                                            </path>
                                            <path
                                                d="M70.899 49.355H51.871a.714.714 0 1 0 0 1.427h19.028a.714.714 0 0 0 0-1.427M67.997 58.275a.714.714 0 0 0 0-1.427H54.774a.714.714 0 1 0 0 1.427ZM67.997 82.774H54.774a.714.714 0 1 0 0 1.427h13.223a.714.714 0 1 0 0-1.427M61.385 64.34a7.374 7.374 0 1 0 7.373 7.374 7.383 7.383 0 0 0-7.373-7.374m0 13.321a5.947 5.947 0 1 1 5.945-5.947 5.954 5.954 0 0 1-5.945 5.947M93.609 42.799a.714.714 0 0 0-.714.714v1.858h-1.86a.714.714 0 0 0 0 1.427h1.86v1.862a.714.714 0 0 0 1.427 0V46.8h1.858a.714.714 0 0 0 0-1.427h-1.858v-1.86a.714.714 0 0 0-.714-.714M85.474 101.973a.714.714 0 0 0 .714-.714v-3.452h3.454a.714.714 0 0 0 0-1.427h-3.454v-3.453a.714.714 0 0 0-1.427 0v3.454h-3.452a.714.714 0 0 0 0 1.427h3.452v3.452a.714.714 0 0 0 .714.714M37.714 71.717h1.86v1.86a.714.714 0 1 0 1.427 0v-1.86h1.857a.714.714 0 1 0 0-1.427H41v-1.86a.714.714 0 0 0-1.427 0v1.86h-1.859a.714.714 0 1 0 0 1.427">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="about-feature-item__content">
                                <h3 class="about-feature-item__title">
                                    Ullamcorper malesuada
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod
                                </p>
                            </div>
                        </div>
                        <!-- About Feature Item End -->

                        <!-- About Feature Item Start -->
                        <div class="about-feature-item text-center js-scroll ShortFadeInUp">
                            <div class="about-feature-item__icon">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="142" height="142"
                                        viewBox="0 0 142 142">
                                        <circle cx="71" cy="71" r="70.5" fill="none" stroke="#707070"
                                            stroke-dasharray="10"></circle>
                                        <g fill="currentColor">
                                            <path
                                                d="M75.713 108.107h27.677a2.274 2.274 0 0 0 2.271-2.273V55.459a7.958 7.958 0 0 0-7.95-7.95h-3.042v-4.594a.724.724 0 0 0-.725-.725h-.58v-7.569a.725.725 0 0 0-.724-.725h-7.032a.725.725 0 0 0-.725.725v7.57h-.575a.724.724 0 0 0-.725.725v4.594H81.39a7.957 7.957 0 0 0-7.948 7.95v50.374a2.274 2.274 0 0 0 2.271 2.273m10.624-72.762h5.579v6.846h-5.579Zm6.3 8.295h.58v3.87h-8.183v-3.87h7.606ZM74.891 55.459a6.507 6.507 0 0 1 6.5-6.5h16.317a6.506 6.506 0 0 1 6.5 6.5v50.375a.824.824 0 0 1-.822.823H75.713a.824.824 0 0 1-.822-.823v-6.638h14.765a5.018 5.018 0 0 0 5.013-5.012V66.458a5.018 5.018 0 0 0-5.013-5.012H74.891Zm0 7.437h14.765a3.568 3.568 0 0 1 3.564 3.562v27.729a3.567 3.567 0 0 1-3.564 3.562H74.891ZM36.725 108.106h31.161a.725.725 0 0 0 .725-.725V91.265a.725.725 0 0 0-.725-.725H66.8v-5.072a.725.725 0 0 0-.725-.725h-.23c1.167-7.273-2.612-10.885-2.78-11.04a.726.726 0 0 0-1.216.5c-.1 2.575-6.832 5.177-14.409 5.567-3.177.162-5.374 1.03-6.534 2.575a4.184 4.184 0 0 0-.839 2.393h-1.531a.725.725 0 0 0-.725.725v5.073h-1.086a.725.725 0 0 0-.725.729v16.113a.725.725 0 0 0 .725.725m5.339-24.883c.877-1.17 2.76-1.86 5.447-2 6.637-.342 13.538-2.431 15.337-5.5a12.163 12.163 0 0 1 1.519 9.018H41.512a2.773 2.773 0 0 1 .552-1.523m-2.8 2.973h26.085v4.348H39.261Zm-1.812 5.8h29.709v14.669H37.449v-2.407h14.856a.725.725 0 0 0 .725-.725v-7.79a.724.724 0 0 0-.725-.725H37.449Zm0 4.47H51.58v6.341H37.449ZM62.777 58.777h1.852v1.854a.725.725 0 1 0 1.449 0v-1.854h1.855a.725.725 0 1 0 0-1.449h-1.856v-1.854a.725.725 0 0 0-1.449 0v1.854h-1.851a.725.725 0 0 0 0 1.449M52.305 43.721h1.854v1.853a.725.725 0 0 0 1.449 0v-1.853h1.854a.725.725 0 0 0 0-1.449h-1.854v-1.854a.725.725 0 1 0-1.449 0v1.853h-1.854a.725.725 0 0 0 0 1.449M43.213 69.875h2.721v2.718a.725.725 0 0 0 1.449 0v-2.718h2.718a.725.725 0 0 0 0-1.449h-2.717v-2.718a.725.725 0 0 0-1.449 0v2.718h-2.722a.725.725 0 1 0 0 1.449">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                            <div class="about-feature-item__content">
                                <h3 class="about-feature-item__title">
                                    Mattis nunc sed
                                </h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod
                                </p>
                            </div>
                        </div>
                        <!-- About Feature Item End -->
                    </div>
                </div>
                <!-- About Feature End -->
            </div>
        </div>
        <!-- About End -->

        <!-- Product Discount Start -->
        <div class="product-discount-section">
            <!-- Product Discount Start -->
            <div class="product-discount">
                <!-- Product Discount Start -->
                <div class="product-discount-content js-scroll ShortFadeInUp">
                    <div class="product-discount-content__wrapper">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="section-title__sub-title">
                                NEW PRODUCTS
                            </h3>
                            <h2 class="section-title__title">
                                Benefit Clean Gentle Facial Cleanser
                            </h2>
                        </div>
                        <!-- Section Title End -->
                        <p class="product-discount-content__sale">
                            Sale 30%
                        </p>
                        <p class="product-discount-content__price">
                            <span>Only from $29.99</span>
                        </p>
                        <a class="product-discount-content__btn" href="shop-fullwidth.html">
                            Shop Now
                        </a>
                    </div>
                </div>
                <!-- Product Discount End -->

                <!-- Product Discount Image Start -->
                <div class="product-discount-image js-scroll ShortFadeInUp" style="
                            background-image: url('front/images/product-discount-bg-1.jpg');
                        "></div>
                <!-- Product Discount Image End -->
            </div>
            <!-- Product Discount End -->

            <!-- Product Discount Start -->
            <div class="product-discount flex-row-reverse">
                <!-- Product Discount Start -->
                <div class="product-discount-content js-scroll ShortFadeInUp">
                    <div class="product-discount-content__wrapper">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="section-title__sub-title">
                                HOT DEAL TODAY
                            </h3>
                            <h2 class="section-title__title">
                                Anti-Aging Daily Skincare System
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <div class="product-discount-content__countdown">
                            <!-- Countdown Content Start -->
                            <div class="countdown-content countdown" data-countdown="2023/11/20 23:59:59">
                                <div class="countdown-content__timer-item">
                                    <div class="countdown-content__timer-item--value days">
                                        05
                                    </div>
                                    <div class="countdown-content__timer-item--label">
                                        days
                                    </div>
                                </div>
                                <div class="countdown-content__timer-item">
                                    <div class="countdown-content__timer-item--value hours">
                                        06
                                    </div>
                                    <div class="countdown-content__timer-item--label">
                                        hours
                                    </div>
                                </div>
                                <div class="countdown-content__timer-item">
                                    <div class="countdown-content__timer-item--value minutes">
                                        38
                                    </div>
                                    <div class="countdown-content__timer-item--label">
                                        minutes
                                    </div>
                                </div>
                                <div class="countdown-content__timer-item">
                                    <div class="countdown-content__timer-item--value seconds">
                                        48
                                    </div>
                                    <div class="countdown-content__timer-item--label">
                                        seconds
                                    </div>
                                </div>
                            </div>
                            <!-- Countdown Content End -->
                        </div>

                        <div class="product-discount-content__bar">
                            <div class="product-discount-content__text">
                                76/ 95 Item Sold
                            </div>
                            <div class="product-discount-content__bar-progress">
                                <div class="product-discount-content__bar-value" style="width: 66%">
                                    <span>66%</span>
                                </div>
                            </div>
                        </div>

                        <a class="product-discount-content__btn" href="shop-fullwidth.html">
                            Shop Now
                        </a>

                        <div class="product-discount-content__social">
                            <span class="label">Share now on:</span>
                            <ul class="social">
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
                                    <a href="#" aria-label="pinterest">
                                        <i class="lastudioicon-b-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="whatsapp">
                                        <i class="lastudioicon-b-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Product Discount End -->

                <!-- Product Discount Image Start -->
                <div class="product-discount-image js-scroll ShortFadeInUp" style="
                            background-image: url('front/images/product-discount-bg-1.jpg');
                        "></div>
                <!-- Product Discount Image End -->
            </div>
            <!-- Product Discount End -->
        </div>
        <!-- Product Discount End -->

        <!-- Hot Category Start -->
        <div class="hot-category-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h2 class="section-title__title">HOT CATEGORY</h2>
                </div>
                <!-- Section Title End -->

                <div class="category-wrapper">
                    <div class="row">
                        <div class="category-col-1">
                            <!-- Hot Category Banner Start -->
                            <div class="hot-category-banner js-scroll ShortFadeInUp" style="
                                        background-image: url('front/images/category-bg-1.jpg');
                                    ">
                                <div class="hot-category-banner__wrapper">
                                    <h3 class="hot-category-banner__title">
                                        OLAY Simply Ageless Instant
                                        Wrinkle-Defying Foundation
                                    </h3>
                                    <span class="hot-category-banner__sale">
                                        Sale 30%
                                    </span>
                                    <div class="hot-category-banner__price">
                                        <span class="">
                                            Only from $29.99
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Hot Category Banner End -->
                        </div>
                        <div class="category-col-2">
                            <div class="row g-4">
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="65.069" height="73.002"
                                                    viewBox="0 0 65.069 73.002">
                                                    <path
                                                        d="m65.027 66.33-1.812-14.975A8.816 8.816 0 0 0 54.47 43.6a.459.459 0 0 1-.46-.46V41.9a2.356 2.356 0 0 0-.049-.456h1.607a1.106 1.106 0 0 0 1.1-1.108v-7.213a1.108 1.108 0 0 0-1.1-1.1H36.415l2.011-23.344c0-.016-.007-.029-.007-.046l.013-.046V1.1a1.106 1.106 0 0 0-1.1-1.1H1.1A1.106 1.106 0 0 0 0 1.1v7.488l.01.046-.01.045 4.38 50.768a1.107 1.107 0 0 0 1.1 1.014h3.893v3.259H7.046a1.109 1.109 0 0 0-1.108 1.108V71.9A1.109 1.109 0 0 0 7.046 73h52.065a5.965 5.965 0 0 0 5.915-6.672M50.69 34.231h3.771v4.993H50.69Zm-5.984 0h3.771v4.993h-3.771Zm-5.984 0h3.771v4.993h-3.771Zm-2.213 0v4.993h-3.771v-4.993ZM2.213 2.21h34.006v5.27H2.213Zm5.938 68.582v-4.859h14.073l-.049.4a5.956 5.956 0 0 0 1.291 4.462Zm3.435-7.072v-3.259h11.3l-.394 3.259Zm11.564-5.476H6.5L2.311 9.693h33.81L34.2 32.018h-2.57a1.108 1.108 0 0 0-1.1 1.1v7.209a1.106 1.106 0 0 0 1.1 1.108h1.6a2.642 2.642 0 0 0-.049.456v1.248a.456.456 0 0 1-.456.46 8.813 8.813 0 0 0-8.744 7.75Zm38.761 11.287a3.755 3.755 0 0 1-2.8 1.261H28.087a3.751 3.751 0 0 1-3.718-4.192l1.812-14.976a6.6 6.6 0 0 1 6.548-5.8 2.678 2.678 0 0 0 2.671-2.679V41.9a.458.458 0 0 1 .46-.456h15.478a.458.458 0 0 1 .46.456v1.248a2.681 2.681 0 0 0 2.673 2.676 6.6 6.6 0 0 1 6.548 5.8L62.827 66.6a3.752 3.752 0 0 1-.916 2.933"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shopsidebar.html">
                                                SKIN CARE
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="79.591" height="79.024"
                                                    viewBox="0 0 79.591 79.024">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M64.579 53.018a1.204 1.204 0 1 0-.657 2.317c8.3 2.352 13.253 5.774 13.253 9.157 0 5.852-15.019 12.12-37.383 12.12S2.409 70.344 2.409 64.492c0-3.383 4.957-6.8 13.26-9.16a1.204 1.204 0 1 0-.657-2.317C5.33 55.761 0 59.83 0 64.492c0 8.144 17.478 14.532 39.792 14.532s39.8-6.389 39.8-14.532c0-4.658-5.333-8.734-15.012-11.473">
                                                        </path>
                                                        <path
                                                            d="M21.078 61.024a1.207 1.207 0 1 0-1.315-2.025c-2.562 1.67-3.1 3.4-3.1 4.566 0 5.7 11.917 8.78 23.135 8.78s23.131-3.084 23.131-8.78c0-1.165-.54-2.9-3.1-4.562a1.206 1.206 0 1 0-1.315 2.022c.913.593 2 1.514 2 2.541 0 2.658-7.881 6.364-20.719 6.364s-20.723-3.708-20.723-6.366c0-1.023 1.091-1.947 2-2.541">
                                                        </path>
                                                        <path
                                                            d="M39.796 64.125c13.918 0 25.242-10.187 25.242-22.7C65.037 23.992 41.629 1.3 40.631.335a1.206 1.206 0 0 0-1.67 0c-1.003.965-24.403 23.657-24.403 41.089 0 12.514 11.32 22.7 25.242 22.7m0-61.218C44.003 7.157 62.625 26.8 62.625 41.424c0 11.185-10.24 20.289-22.829 20.289S16.963 52.61 16.963 41.424c0-14.624 18.626-34.267 22.833-38.516">
                                                        </path>
                                                        <path
                                                            d="M34.189 55.42c.235.011.48.018.725.018a12.045 12.045 0 0 0 1.841-.135 1.207 1.207 0 0 0 .821-1.869c-9.641-14.181.017-36.292.116-36.512a1.207 1.207 0 0 0-1.968-1.329c-.544.561-13.271 13.843-13.936 24.641-.487 7.924 5.077 14.731 12.4 15.186m-9.991-15.037c.38-6.136 5.326-13.495 9.071-18.231-2.246 7.55-4.608 20.534 1.215 30.866-.05 0-.1 0-.149-.007-5.994-.369-10.549-6.037-10.137-12.628">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shop-fullwidth.html">
                                                NAIR CARE
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="64.664" height="79.024"
                                                    viewBox="0 0 64.664 79.024">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M27.538 44.575h-2.565V28.146a1.2 1.2 0 0 0-1.2-1.2H22V4.814c0-.039-.018-.071-.021-.109.007-.106.021-.215.021-.325a4.155 4.155 0 0 0-1.44-3.232c-2.381-2.028-6.967-1.3-10.439 1.658a8.8 8.8 0 0 0-3.366 5.9c0 .042-.021.081-.021.12v18.117H4.96a1.2 1.2 0 0 0-1.2 1.2v16.432H1.2a1.2 1.2 0 0 0-1.2 1.2v26.063a7.192 7.192 0 0 0 7.183 7.186h14.368a7.192 7.192 0 0 0 7.183-7.186V45.775a1.2 1.2 0 0 0-1.2-1.2M11.673 4.63a8.73 8.73 0 0 1 5.387-2.229 3.027 3.027 0 0 1 1.947.568 1.765 1.765 0 0 1 .6 1.411 6.4 6.4 0 0 1-2.547 4.339c-2.73 2.325-6.06 2.737-7.334 1.654a1.752 1.752 0 0 1-.593-1.4 6.365 6.365 0 0 1 2.54-4.339m-2.54 8.163a5.8 5.8 0 0 0 2.551.55 11.131 11.131 0 0 0 6.929-2.8 11.674 11.674 0 0 0 .991-.963v17.359H9.133ZM6.156 29.342h16.422v15.233H6.156ZM4.96 46.971h21.378v3.214H2.392v-3.214Zm16.591 29.658H7.183a4.8 4.8 0 0 1-4.791-4.791V52.583h23.946v19.255a4.792 4.792 0 0 1-4.787 4.791M63.465 15.838H37.123a1.192 1.192 0 0 0-1.2 1.192v38.5a7.189 7.189 0 0 0 7.183 7.183h14.372a7.192 7.192 0 0 0 7.186-7.183v-38.5a1.2 1.2 0 0 0-1.2-1.192m-1.2 5.606H38.315V18.23h23.95ZM57.478 60.32H43.11a4.8 4.8 0 0 1-4.791-4.787V23.839h23.946v31.694a4.792 4.792 0 0 1-4.787 4.787">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shop-fullwidth.html">
                                                MAKEUP
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="85.092" height="85.092"
                                                    viewBox="0 0 85.092 85.092">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="m62.269 38.356-.009-.011a89.315 89.315 0 0 0-1.58-2.883c-8.16-14.238-1.592-33.554-1.527-33.748a1.287 1.287 0 1 0-2.43-.848c-.293.832-7.031 20.6 1.725 35.875.33.577.642 1.151.953 1.728-9.592 4.969-24.118 4.969-33.714 0 .315-.577.627-1.151.957-1.728C35.4 21.471 28.66 1.7 28.373.866a1.291 1.291 0 0 0-2.439.847c.068.194 6.636 19.51-1.523 33.748a85.094 85.094 0 0 0-1.58 2.879l-.008.015-.011.027c-6.675 12.718-9.129 25.825-1.258 45.894a1.283 1.283 0 0 0 1.2.817 1.359 1.359 0 0 0 .471-.093 1.3 1.3 0 0 0 .733-1.671c-5.842-14.88-5.85-25.5-2.557-35.271 3.157.482 13.3 2.655 19.852 11.153V83.8a1.29 1.29 0 0 0 2.579 0V59.215c6.538-8.475 16.7-10.663 19.856-11.153 3.294 9.774 3.282 20.392-2.553 35.271A1.286 1.286 0 0 0 61.866 85a1.338 1.338 0 0 0 .467.087 1.283 1.283 0 0 0 1.2-.817c7.875-20.073 5.417-33.178-1.257-45.9l-.008-.019M42.546 56.7c-6.819-8.122-16.4-10.477-20.24-11.115a60.737 60.737 0 0 1 2.188-4.836 39.725 39.725 0 0 0 18.052 4.08 39.775 39.775 0 0 0 18.055-4.08 61.063 61.063 0 0 1 2.18 4.836c-3.841.638-13.421 2.99-20.236 11.115">
                                                        </path>
                                                        <path
                                                            d="M42.801 33.661a1.292 1.292 0 1 0-1.292-1.292 1.29 1.29 0 0 0 1.292 1.292M23.457 17.953l-9.781-9.782a1.287 1.287 0 0 0-2.2.908v4.376H1.292A1.292 1.292 0 0 0 0 14.741v8.239a1.293 1.293 0 0 0 1.292 1.292h10.184v4.372a1.292 1.292 0 0 0 .794 1.197 1.312 1.312 0 0 0 .494.095 1.288 1.288 0 0 0 .912-.376l9.782-9.786a1.282 1.282 0 0 0 0-1.82m-9.406 7.582v-2.554a1.286 1.286 0 0 0-1.288-1.288H2.579v-5.66h10.185a1.287 1.287 0 0 0 1.288-1.293v-2.547l6.671 6.667ZM83.801 13.455H73.62V9.079a1.292 1.292 0 0 0-2.2-.912l-9.787 9.786a1.289 1.289 0 0 0 0 1.82l9.782 9.782a1.276 1.276 0 0 0 .912.38 1.312 1.312 0 0 0 .494-.095 1.3 1.3 0 0 0 .8-1.193v-4.373h10.18a1.293 1.293 0 0 0 1.292-1.292v-8.241a1.29 1.29 0 0 0-1.292-1.288m-1.288 8.242h-10.18a1.287 1.287 0 0 0-1.3 1.287v2.553l-6.663-6.674 6.663-6.667v2.547a1.29 1.29 0 0 0 1.3 1.294h10.18Z">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shop-fullwidth.html">
                                                BODY CARE
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="61.026" height="74.096"
                                                    viewBox="0 0 61.026 74.096">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M47.2 25.712a7.705 7.705 0 0 0-7.522-6.129h-.182v-3.444A4.5 4.5 0 0 0 35 11.647h-2.17v-9.4h5.336l16.6 6.242a1.091 1.091 0 0 0 .394.073 1.122 1.122 0 0 0 .394-2.173L38.764.069A1.217 1.217 0 0 0 38.37 0H17.038a1.123 1.123 0 0 0 0 2.246h5.544v9.4h-2.173a4.5 4.5 0 0 0-4.492 4.492v3.443h-.182a7.705 7.705 0 0 0-7.522 6.129L4.035 46.026v.013L.158 64.867A7.683 7.683 0 0 0 7.683 74.1h40.045a7.683 7.683 0 0 0 7.522-9.229Zm-2.2.453 3.86 18.775a6.267 6.267 0 0 0-7.33 1.1 4.053 4.053 0 0 1-5.719 0 6.247 6.247 0 0 0-6.98-1.3V27.5h5.964a1.122 1.122 0 0 0 1.125-1.125v-4.553h3.758A5.457 5.457 0 0 1 45 26.165m-23.258-4.343H33.67v3.437H21.742Zm3.086-19.576h5.756v9.4h-5.756Zm-6.665 13.893a2.248 2.248 0 0 1 2.246-2.246H35a2.249 2.249 0 0 1 2.249 2.246v3.443H18.163Zm-7.75 10.026a5.46 5.46 0 0 1 5.322-4.343H19.5v4.558a1.121 1.121 0 0 0 1.117 1.12h5.964v18.81a4.143 4.143 0 0 1-5.389-.265 6.281 6.281 0 0 0-8.895 0 4.14 4.14 0 0 1-5.719 0c-.066-.069-.146-.122-.215-.189Zm41.526 43.687a5.413 5.413 0 0 1-4.211 2H7.683a5.437 5.437 0 0 1-5.325-6.532l3.493-16.982a6.256 6.256 0 0 0 8.035-.708 4.14 4.14 0 0 1 5.719 0 6.284 6.284 0 0 0 6.976 1.3v16.324a1.123 1.123 0 1 0 2.246 0V47.365a4.147 4.147 0 0 1 5.392.265 6.3 6.3 0 0 0 8.892 0 4.145 4.145 0 0 1 5.723 0 6.086 6.086 0 0 0 .7.6l3.52 17.092a5.428 5.428 0 0 1-1.115 4.532">
                                                        </path>
                                                        <path
                                                            d="M55.938 12.56a1.121 1.121 0 0 0-1.558 0c-.519.5-5.081 4.995-5.081 8.743a5.635 5.635 0 0 0 5.862 5.362 5.64 5.64 0 0 0 5.864-5.362c0-3.748-4.568-8.243-5.088-8.743m-.777 11.855a3.4 3.4 0 0 1-3.619-3.113c0-1.965 2.177-4.75 3.619-6.321 1.442 1.571 3.619 4.356 3.619 6.321a3.4 3.4 0 0 1-3.619 3.113">
                                                        </path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shop-fullwidth.html">
                                                HAIR CARE
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- Hot Category Item Start -->
                                    <div class="hot-category-item text-center js-scroll ShortFadeInUp">
                                        <div class="hot-category-item__icon">
                                            <a href="shop-fullwidth.html" aria-label="category">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="76.822" height="80.378"
                                                    viewBox="0 0 76.822 80.378">
                                                    <path
                                                        d="M0 47.529v28.44a4.414 4.414 0 0 0 4.409 4.409h28.682a4.414 4.414 0 0 0 4.409-4.409V40.875a4.412 4.412 0 0 0-1.106-2.922l-4.006-4.526-.834-2.588a.865.865 0 0 0 .265.089.783.783 0 0 0 .112-.007.874.874 0 0 0 .579-.331L34 28.661l21.44 16.557a14.824 14.824 0 0 0 6.96 2.936l2.451 1.892a4.209 4.209 0 0 0 2.573.879 3.814 3.814 0 0 0 2.62-1 3.924 3.924 0 0 0-.267-5.988l-2.58-1.992a14.819 14.819 0 0 0-4.6-5.986l-21.451-16.56 1.488-1.927a.872.872 0 0 0-.155-1.223L23.753 1.788a8.626 8.626 0 0 0-12.08 1.554l-.665.863a8.625 8.625 0 0 0 1.552 12.083l2.812 2.17h-4.58a.872.872 0 0 0-.872.872v4.768a1.886 1.886 0 0 1-1.1 1.713A3.627 3.627 0 0 0 6.866 28l-1.752 5.426-4.008 4.528A4.412 4.412 0 0 0 0 40.875Zm35.756 28.44a2.669 2.669 0 0 1-2.665 2.665H4.409a2.669 2.669 0 0 1-2.665-2.665v-4.67h34.012Zm0-6.413H1.744V48.401h34.012Zm25.767-32.22a13.074 13.074 0 0 1 4.142 5.477.85.85 0 0 0 .276.365l2.765 2.137a2.18 2.18 0 0 1 .141 3.333 2.29 2.29 0 0 1-2.935.017l-2.637-2.035a.87.87 0 0 0-.424-.174 13.084 13.084 0 0 1-6.345-2.618L35.062 27.281l5.018-6.5Zm-47.9-22.429a6.877 6.877 0 0 1-1.238-9.633l.665-.862a6.877 6.877 0 0 1 9.635-1.24l18.037 13.924-1.484 1.924h-.005l-6.084 7.88-1.486 1.924Zm-5.1 13.627a1.887 1.887 0 0 1 1.013-1.135 3.634 3.634 0 0 0 2.128-3.3v-3.896h5.966l11.533 8.9 1.254 3.886H7.083ZM1.744 40.875a2.667 2.667 0 0 1 .668-1.767l3.867-4.371h24.942l3.867 4.371a2.667 2.667 0 0 1 .668 1.767v5.782H1.744ZM69.709 53.362c-.581.841-5.677 8.313-5.677 11.541a6.4 6.4 0 1 0 12.79 0c0-3.229-5.1-10.7-5.679-11.541a.9.9 0 0 0-1.434 0m.717 16.193a4.656 4.656 0 0 1-4.65-4.652c0-1.969 2.9-6.811 4.65-9.482 1.749 2.67 4.652 7.511 4.652 9.482a4.656 4.656 0 0 1-4.652 4.652"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M18.75 67.356a8.377 8.377 0 1 0-8.377-8.378 8.388 8.388 0 0 0 8.377 8.377m0-15.011a6.633 6.633 0 1 1-6.633 6.634 6.641 6.641 0 0 1 6.633-6.633"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="hot-category-item__title">
                                            <a href="shop-fullwidth.html">
                                                FRAGRANCE
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Hot Category Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View More Start -->
                <div class="view-more text-center js-scroll ShortFadeInUp">
                    <a class="view-more__btn" href="shop-fullwidth.html">
                        VIEW MORE CATEGORY
                    </a>
                </div>
                <!-- View More End -->
            </div>
        </div>
        <!-- Hot Category End -->

        <!-- Slider Start -->
        <div class="slider-section slider-active js-scroll ShortFadeInUp">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slider Item Start -->
                    <div class="swiper-slide slider-item home-2-slider-style-2" style="
                                background-image: url('front/images/slider-1/slider-1.jpg');
                            ">
                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-2-slider-content-style-2">
                                <h2 class="home-2-slider-content-style-2__title">
                                    Love yourself more
                                </h2>
                                <ul class="home-2-slider-content-style-2__btns">
                                    <li class="button-01">
                                        <a class="home-2-slider-content-style-2__btn" href="shop-fullwidth.html">
                                            Discover now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->

                    <!-- Slider Item Start -->
                    <div class="swiper-slide slider-item home-2-slider-style-2" style="
                                background-image: url('front/images/slider-1/slider-2.jpg');
                            ">
                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-2-slider-content-style-2">
                                <h2 class="home-2-slider-content-style-2__title">
                                    You are a New Beauty
                                </h2>
                                <ul class="home-2-slider-content-style-2__btns">
                                    <li class="button-01">
                                        <a class="home-2-slider-content-style-2__btn" href="shop-fullwidth.html">
                                            Discover now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->
                </div>

                <!-- Slider Arrow Start -->
                <div class="home-2-slider-arrow"
                >
                    <div class="container-fluid custom-container">
                        <div class="d-flex">
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79"
                                    viewBox="0 0 12.624 30.79">
                                    <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor"
                                        stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79"
                                    viewBox="0 0 12.624 30.79">
                                    <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor"
                                        stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Arrow End -->
            </div>
        </div>
        <!-- Slider End -->

        <!-- Product Start -->
        <div class="product-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h2 class="section-title__title">POUPLAR PRODUCTS</h2>
                </div>
                <!-- Section Title End -->

                <!-- Product Active Start -->

                    <div class="product-active product-wrapper navigation-arrows-style-3">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($featuredProducts['makeup'] as $makeupProduct)
                                <div class="swiper-slide">
                                    <!-- Single product Start -->

                                    <div class="single-product js-scroll ShortFadeInUp">

                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--holder">
                                                <a href="show.blade.php">
                                                    <img src="front/images/products/{{ $makeupProduct->productImages[0]->path}}" alt="Product"
                                                         width="339" height="366" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top"
                                                   data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip"
                                                   aria-label="Add to cart">
                                                    <i class="lastudioicon-shopping-cart-3"></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top"
                                                   data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip"
                                                   aria-label="Add to wishlist">
                                                    <i class="lastudioicon-heart-2"></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top"
                                                   data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip"
                                                   aria-label="Add to compare">
                                                    <i class="lastudioicon-ic_compare_arrows_24px"></i>
                                                </a>
                                                <a href="shop/product/{{$makeupProduct->id}}" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" aria-label="QuickView"><i
                                                        class="lastudioicon-search-zoom-in"
                                                    ></i></a>
                                            </div>
                                        </div>
                                        <div class="single-product__info text-center">
                                            <div class="single-product__info--tags">
                                                <a href="#">Cosmetic</a>
                                            </div>
                                            <h3 class="single-product__info--title text-uppercase">
                                                <a href="shop/product/{{$makeupProduct->id}}">
                                                    {{$makeupProduct->name}}
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">

                                                <ins>${{$makeupProduct->price}}</ins>
                                            </div>
                                            <div class="single-product__info--rating">
                                            <span class="star-rating">
                                                <span style="width: 80%">
                                                </span>
                                            </span>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Slider Arrow Start -->
                        <div class="product-arrow d-flex justify-content-center">
                            <div class="swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79"
                                     viewBox="0 0 12.624 30.79">
                                    <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor"
                                          stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79"
                                     viewBox="0 0 12.624 30.79">
                                    <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor"
                                          stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                                </svg>
                            </div>
                        </div>
                        <!-- Slider Arrow End -->
                    </div>


                <!-- Product Active End -->
            </div>
        </div>
        <!-- Product End -->

        <!-- Video Promotion Start -->
        <div class="video-promotion-section" style="background-image: url('front/images/video-bg-1.jpg')">
            <div class="container-fluid custom-container">
                <!-- Video Promotion Content Start -->
                <div class="video-promotion-content text-center js-scroll ShortFadeInUp">
                    <a href="https://player.vimeo.com/video/508091739?title=0&portrait=0&byline=0&autoplay=1&muted=true"
                        class="video-promotion-content__play glightbox" aria-label="video">
                        <svg enable-background="new 0 0 320.001 320.001" viewBox="0 0 320.001 320.001"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m295.84 146.049-256-144c-4.96-2.784-11.008-2.72-15.904.128-4.928 2.88-7.936 8.128-7.936 13.824v288c0 5.696 3.008 10.944 7.936 13.824 2.496 1.44 5.28 2.176 8.064 2.176 2.688 0 5.408-.672 7.84-2.048l256-144c5.024-2.848 8.16-8.16 8.16-13.952s-3.136-11.104-8.16-13.952z" />
                        </svg>
                    </a>
                    <h3 class="video-promotion-content__title">
                        <a class="glightbox"
                            href="https://player.vimeo.com/video/508091739?title=0&portrait=0&byline=0&autoplay=1&muted=true">
                            VIDEO PROMOTION
                        </a>
                    </h3>
                </div>
                <!-- Video Promotion Content End -->
            </div>
        </div>
        <!-- Video Promotion End -->
    </main>


@endsection
