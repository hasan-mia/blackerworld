@extends('frontend.layout.main')

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Shopping Cart</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>


<section class="shopping-cart-area ptb-100">
    <div class="container">
        <form class="cart-controller">
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('show.product')}}">
                                    <img src="{{asset('frontend/assets/img/shopping-cart/shopping-cart-1.jpg')}}"
                                        alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="{{route('show.product')}}">Wireless security camera</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$190.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$190.00</span>
                                <a href="#" class="remove">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('show.product')}}">
                                    <img src="{{asset('frontend/assets/img/shopping-cart/shopping-cart-2.jpg')}}"
                                        alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="single-product.html">White cctv camera</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$90.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$90.00</span>
                                <a href="#" class="remove">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('show.product')}}">
                                    <img src="{{asset('frontend/assets/img/shopping-cart/shopping-cart-3.jpg')}}"
                                        alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="{{route('show.product')}}">Ip camera security</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$120.0</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$120.0</span>
                                <a href="#" class="remove">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('show.product')}}">
                                    <img src="{{asset('frontend/assets/img/shopping-cart/shopping-cart-4.jpg')}}"
                                        alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="{{route('show.product')}}">Round cctv camera</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$50.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$50.00</span>
                                <a href="#" class="remove">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('show.product')}}">
                                    <img src="{{asset('frontend/assets/img/shopping-cart/shopping-cart-5.jpg')}}"
                                        alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="{{route('show.product')}}">Surveillance camera</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">$100.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">$100.00</span>
                                <a href="#" class="remove">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="coupon-cart">
                <div class="row">
                    <div class="col-lg-8 col-sm-7">
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" placeholder="Coupon code">
                            <a href="#" class="default-btn">
                                Apply coupon
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-5 text-right">
                        <a href="#" class="default-btn">
                            <span>Update cart</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
        <div class="cart-totals">
            <h3 class="cart-checkout-title">Checkout summary</h3>
            <ul>
                <li>Subtotal <span>$530.00</span></li>
                <li>Shipping <span>$00.00</span></li>
                <li>Total <span>$530.00</span></li>
                <li><b>Payable Total</b> <span><b>$530.00</b></span></li>
            </ul>
            <a href="{{route('checkout.product')}}" class="default-btn">
                <span>Proceed to checkout</span>
            </a>
        </div>
    </div>
</section>

@endsection
