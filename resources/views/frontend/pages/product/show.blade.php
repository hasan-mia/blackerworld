@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Single Product</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Single Product</li>
            </ul>
        </div>
    </div>
</div>


<section class="product-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="product-details-image">
                    <img src="{{asset('frontend/assets/img/product-details/product-details-1.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="product-details-desc">
                    <h3>Wireless security camera</h3>
                    <div class="product-review">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <a href="#" class="rating-count">(3 Customer reviews)</a>
                    </div>
                    <div class="price">
                        <span class="new-price"> <del>$00.00</del> $190.00</span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren at vero eos et accusam amet, consetetur
                        sadipscing elitr.</p>
                    <div class="product-add-to-cart">
                        <h3>Quantities:</h3>
                        <div class="input-counter">
                            <span class="minus-btn">
                                <i class="bx bx-minus"></i>
                            </span>
                            <input type="text" min="1" value="1">
                            <span class="plus-btn">
                                <i class="bx bx-plus"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="default-btn">
                        <span>Add to Cart</span>
                    </button>
                    <ul class="social-wrap">
                        <li>
                            <span>Share:</span>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="category">Category: <span>Camera</span></p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="tab products-details-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li>
                                    <a href="#">
                                        Description
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Additional information
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Reviews(2)
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="tab_content">
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <h3 class="mb-2">Description</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis
                                            quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero
                                            iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi
                                            exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga
                                            quos. Autem quasi error quisquam architecto fuga suscipit atque voluptatibus
                                            nobis impedit nulla. Officia exercitationem nesciunt ad.</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat
                                            tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde
                                            ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur
                                            laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit
                                            magnam, eius unde ullam.</p>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <ul class="additional-information">
                                            <li><span>Brand:</span> ThemeForest</li>
                                            <li><span>Color:</span> Brown</li>
                                            <li><span>Size:</span> Large, Medium</li>
                                            <li><span>Weight:</span> 27 kg</li>
                                            <li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabs_item">
                                    <div class="products-details-tab-content">
                                        <div class="product-review-form">
                                            <h3>Customer reviews</h3>
                                            <div class="review-title">
                                                <div class="rating">
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                    <i class="bx bxs-star"></i>
                                                </div>
                                                <p>Based on 2 reviews</p>
                                            </div>
                                            <div class="review-comments">
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>July 21,
                                                            2020</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation.</p>
                                                    <a href="#" class="review-report-link">Reply</a>
                                                </div>
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                        <i class="bx bxs-star"></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>July 21,
                                                            2020</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation.</p>
                                                    <a href="#" class="review-report-link">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <h3>Write a Review</h3>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Name</label>
                                                                <input type="text" id="name" name="name"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" id="email" name="email"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Review title</label>
                                                                <input type="text" id="review-title" name="review-title"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Body of review (1500)</label>
                                                                <textarea name="review-body" id="review-body" cols="30"
                                                                    rows="8" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <button type="submit" class="btn default-btn two">Submit
                                                                Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="product-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Related products</h2>
        </div>
        <div class="related-product owl-theme owl-carousel">
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
                <a href="single-product.html">
                    <h3>Wireless security camera</h3>
                </a>
                <span>$190.00</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
            </div>
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
                <a href="single-product.html">
                    <h3>White cctv camera</h3>
                </a>
                <span>$90.00</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
            </div>
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
                <a href="single-product.html">
                    <h3>Ip camera security</h3>
                </a>
                <span>$120.0</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
            </div>
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
                <a href="single-product.html">
                    <h3>Round cctv camera</h3>
                </a>
                <span>$50.00</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
            </div>
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
                <a href="single-product.html">
                    <h3>Surveillance camera</h3>
                </a>
                <span>$100.00</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
            </div>
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
                <a href="single-product.html">
                    <h3>Black web camera isolated</h3>
                </a>
                <span>$130.00</span>
                <a href="{{route('cart.product')}}" class="default-btn">
                    <span>Add to cart</span>
                </a>
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
