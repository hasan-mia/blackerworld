@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Products</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Products</li>
            </ul>
        </div>
    </div>
</div>


<div class="product-area ptb-100">
    <div class="container">
        <div class="showing-result">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="showing-result-count">
                        <p>Showing 1-8 of 14 results</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="showing-top-bar-ordering">
                        <select>
                            <option value="1">Default sorting</option>
                            <option value="2">Education</option>
                            <option value="0">Accounting</option>
                            <option value="3">Language</option>
                            <option value="4">Teaching</option>
                            <option value="5">Research</option>
                            <option value="5">Assessment</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-1.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>Wireless security camera</h3>
                    </a>
                    <span>$190.00</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-2.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>White cctv camera</h3>
                    </a>
                    <span>$90.00</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-3.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>Ip camera security</h3>
                    </a>
                    <span>$120.0</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-4.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>Round cctv camera</h3>
                    </a>
                    <span>$50.00</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-5.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>Surveillance camera</h3>
                    </a>
                    <span>$100.00</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-product">
                    <div class="product-img">
                        <img src="{{asset('frontend/assets/img/product/product-6.jpg')}}" alt="Image">
                        <ul>
                            <li>
                                <a href="#product-view-one" data-bs-toggle="modal">
                                    <i class="bx bx-show-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bx-heart"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('show.product')}}">
                        <h3>Black web camera isolated</h3>
                    </a>
                    <span>$130.00</span>
                    <a href="{{route('cart.product')}}" class="default-btn">
                        <span>Add to cart</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="pagination-area">

                    <span class="page-numbers current" aria-current="page">1</span>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="next page-numbers">
                        <i class="bx bx-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade product-view-one" id="product-view-one">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal">
                <span aria-hidden="true">
                    <i class="bx bx-x"></i>
                </span>
            </button>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="product-view-one-image">
                        <div id="big" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-1.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-2.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-3.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-4.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-5.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-6.jpg')}}" alt="Image">
                            </div>
                        </div>
                        <div id="thumbs" class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-1.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-2.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-3.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-4.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-5.jpg')}}" alt="Image">
                            </div>
                            <div class="item">
                                <img src="{{asset('frontend/assets/img/product/product-6.jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product-content">
                        <h3>
                            <a href="#">Wireless security camera</a>
                        </h3>
                        <div class="price">
                            <span class="new-price">$190.00</span>
                        </div>
                        <div class="product-review">
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                            <a href="#" class="rating-count">3 reviews</a>
                        </div>
                        <ul class="product-info">
                            <li>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At magnam ad reprehenderit
                                    fuga nam, non odit necessitatibus facilis beatae temporibus</p>
                            </li>
                            <li>
                                <span>Availability:</span> <a href="#">In stock (7 items)</a>
                            </li>
                            <li>
                                <span>Product Type:</span> <a href="#">Electric</a>
                            </li>
                        </ul>
                        <div class="product-color-switch">
                            <h4>Color:</h4>
                            <ul>
                                <li>
                                    <a href="#" title="Black" class="color-black"></a>
                                </li>
                                <li>
                                    <a href="#" title="White" class="color-white"></a>
                                </li>
                                <li class="active">
                                    <a href="#" title="Green" class="color-green"></a>
                                </li>
                                <li>
                                    <a href="#" title="Yellow Green" class="color-yellowgreen"></a>
                                </li>
                                <li>
                                    <a href="#" title="Teal" class="color-teal"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-add-to-cart">
                            <div class="input-counter">
                                <span class="minus-btn">
                                    <i class="bx bx-minus"></i>
                                </span>
                                <input type="text" min="1" value="1">
                                <span class="plus-btn">
                                    <i class="bx bx-plus"></i>
                                </span>
                            </div>
                            <button type="submit" class="default-btn">
                                Add to Cart
                                <i class="flaticon-right"></i>
                            </button>
                        </div>
                        <div class="share-this-product">
                            <h3>Share this product</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
