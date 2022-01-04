@extends('frontend.layout.main')

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Wishlist</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Wishlist</li>
            </ul>
        </div>
    </div>
</div>


<div class="shopping-cart-area ptb-100">
    <div class="container">
        <form class="wishlist">
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Trash</th>
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
        </form>
    </div>
</div>


@endsection
