@extends('front.layout.master')

@section('title','Order Details')

@section('body')

<main>
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Order Details</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                </ul>
            </div>
        </div>
    </div>
</main>

<div class="my-account-section section-padding-2">
    <div class="container-fluid custom-container">
        <!-- My Account Tabs Start -->
        <div class="my-account-tab">
            <!-- My Account Tabs Menu Start -->
            <div class="my-account-tab__menu">
                <ul class="nav justify-content-center">

                    <li>
                        <button class="account-btn" data-bs-toggle="tab" data-bs-target="#orders" type="button">
                          OrderDetails
                        </button>
                    </li>

                </ul>
            </div>
            <!-- My Account Tabs Menu End -->

            <div class="tab-content">


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
                                    <span>Images</span>
                                </th>
                                <th>
                                    <span>Product</span>
                                </th>
                                <th>
                                    <span>Total</span>
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($order->orderDetails as $detail)
                                    <tr>
                                        <td class="first-row">#{{ $order->id }}</td>
                                        <td class="cart-pic first-row">
                                            <img style="height: 100px;"
                                                 src="front/images/products/{{ $detail->product->productImages[0]->path }}"
                                                 alt="{{ $detail->product->name }}">
                                        </td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $detail->product->name }} x {{ $detail->qty }}</h5>
                                        </td>
                                        <td class="total-price first-row">
                                            ${{ $detail->total }}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- My Account Orders End -->
            </div>


        </div>
    </div>
    <!-- My Account Tabs End -->
</div>
</div>

@endsection

