@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Checkout</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>


<section class="checkout-area ptb-100">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Company name (Optional)
                                    </label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Email <span class="required">*</span></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Country <span class="required">*</span></label>
                                    <div class="select-box">
                                        <select class="form-control">
                                            <option value="5">United Kingdom</option>
                                            <option value="1">China</option>
                                            <option value="2">United Arab Emirates</option>
                                            <option value="0">Germany</option>
                                            <option value="3">France</option>
                                            <option value="4">Japan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Street address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>State<span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Zip <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="ship-different-address">
                                    <label class="form-check-label" for="ship-different-address">Ship to a different
                                        address?</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Order notes (Optional)</label>
                                    <textarea name="notes" id="notes" cols="30" rows="8"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="order-details">
                        <div class="cart-totals">
                            <h3>Checkout summary</h3>
                            <ul>
                                <li>Subtotal <span>$530.00</span></li>
                                <li>Shipping <span>$530.00</span></li>
                                <li>Coupon <span>$00.00</span></li>
                                <li>Total <span>$530.00</span></li>
                                <li><b>Payable Total</b> <span><b>$530.00</b></span></li>
                            </ul>
                        </div>
                        <div class="faq-accordion">
                            <h3>Payment method</h3>
                            <ul class="accordion">
                                <li class="accordion-item active">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Direct bank transfer
                                    </a>
                                    <p class="accordion-content show">
                                        Make your payment directly into our bank account. Please use your Order ID as
                                        the payment reference. Your order won’t be shipped until the funds have our
                                        account.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Cash on delivery
                                    </a>
                                    <p class="accordion-content">
                                        Please send your cheque to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Check payments
                                    </a>
                                    <p class="accordion-content">
                                        Please send your cheque to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        PayPal
                                    </a>
                                    <p class="accordion-content">
                                        Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        Credit card
                                    </a>
                                    <p class="accordion-content">
                                        Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.
                                    </p>
                                </li>
                                <li class="accordion-item">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-differents-address">
                                        <label class="form-check-label" for="ship-different-address">I’ve read and
                                            accept the <a href="terms-conditions.html">terms & conditions</a>*</label>
                                    </div>
                                </li>
                                <li class="place-order">
                                    <a href="#" class="default-btn two">
                                        <span>Place order</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection
