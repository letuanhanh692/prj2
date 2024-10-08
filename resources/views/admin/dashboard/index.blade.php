@extends('admin.layout.master')

@section('title', 'Home')

@section('body')

    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-ticket icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>
                        Dashboard

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12 home-admin-cs">

                <!--  người dùng -->
                <div class="card" style="width: 40%; background:#A8DF8E">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.4rem;">
                            User
                        </h5>
                        <p class="card-text">Number of users: <span style="font-size: 1.6rem; font-weight: bold;">{{ $user }}</span></p>
                        <a href="./admin/user" class="card-link">Go to user</a>
                    </div>
                </div>

                <div class="card" style="width: 40%; background:#33BBC5">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.4rem;">
                            Product
                        </h5>
                        <p class="card-text">Number of products: <span style="font-size: 1.6rem; font-weight: bold;">{{ $product }}</span></p>
                        <a href="./admin/product" class="card-link">Go to product</a>
                    </div>
                </div>

                <div class="card" style="width: 40%; background:#FFF6DC" >
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.4rem;">
                            <i class="fa-solid fa-cart-shopping" style="color: #3a465f; font-size: 2rem; margin-right: 1rem;"></i>
                            Order
                        </h5>
                        <p class="card-text">Number of orders: <span style="font-size: 1.6rem; font-weight: bold;">{{ $order }}</span></p>
                        <a href="./admin/order" class="card-link">Go to order</a>
                    </div>
                </div>

                <div class="card" style="width: 40%; background:#FFDDCC">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1.4rem;">
                            <i class="fa-solid fa-tablet-screen-button" style="color: #3a465f; font-size: 2rem; margin-right: 1rem;"></i>
                            Category
                        </h5>
                        <p class="card-text">Number of category: <span style="font-size: 1.6rem; font-weight: bold;">{{ $category }}</span></p>
                        <a href="./admin/category" class="card-link">Go to category</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Main -->


@endsection
