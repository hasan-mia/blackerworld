@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Pricing</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Pricing</li>
            </ul>
        </div>
    </div>
</div>


<section class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Security Packages</span>
            <h2>We have different types of pricing plans</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-pricing overly-one">
                    <div class="overly-two">
                        <div class="pricing-title">
                            <h3>Basic</h3>
                            <h2>Free</h2>
                            <span>Per month</span>
                            <h4>Features</h4>
                        </div>
                        <ul>
                            <li>30 Days Product Testing</li>
                            <li>Upgrade Anytime Protection</li>
                            <li>Unlimited Malware Removal</li>
                            <li>24/7 Live Assistance</li>
                            <li>Scan Every 12 Hrs</li>
                            <li>Configure Software</li>
                        </ul>
                        <a href="#" class="default-btn">
                            <span>Read More</span>
                        </a>
                        <div class="pricing-shape">
                            <img src="assets/img/pricing-shape.png" alt="Image">
                        </div>
                        <div class="pricing-shape-2">
                            <img src="assets/img/pricing-shape-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-pricing overly-one active">
                    <div class="overly-two">
                        <div class="pricing-title">
                            <h3>Popular</h3>
                            <h2><Sub>$</Sub>29</h2>
                            <span>Per month</span>
                            <h4>Features</h4>
                        </div>
                        <ul>
                            <li>40 Days Product Testing</li>
                            <li>Upgrade Anytime Protection</li>
                            <li>Unlimited Malware Removal</li>
                            <li>24/7 Live Assistance</li>
                            <li>Scan Every 13 Hrs</li>
                            <li>Configure Software</li>
                        </ul>
                        <a href="#" class="default-btn">
                            <span>Read More</span>
                        </a>
                        <div class="pricing-shape">
                            <img src="assets/img/pricing-shape.png" alt="Image">
                        </div>
                        <div class="pricing-shape-2">
                            <img src="assets/img/pricing-shape-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-pricing overly-one">
                    <div class="overly-two">
                        <div class="pricing-title">
                            <h3>Basic</h3>
                            <h2><Sub>$</Sub>59</h2>
                            <span>Per month</span>
                            <h4>Features</h4>
                        </div>
                        <ul>
                            <li>50 Days Product Testing</li>
                            <li>Upgrade Anytime Protection</li>
                            <li>Unlimited Malware Removal</li>
                            <li>24/7 Live Assistance</li>
                            <li>Scan Every 14 Hrs</li>
                            <li>Configure Software</li>
                        </ul>
                        <a href="#" class="default-btn">
                            <span>Read More</span>
                        </a>
                        <div class="pricing-shape">
                            <img src="assets/img/pricing-shape.png" alt="Image">
                        </div>
                        <div class="pricing-shape-2">
                            <img src="assets/img/pricing-shape-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="get-in-touch-area get-in-touch-area-two bg-color ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Get in touch</span>
            <h2>Contact us today to speak with an expert about your specific needs</h2>
        </div>
        <form class="get-in-touch-form">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="First-Name">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="Email">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" id="Number">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" class="form-control" id="Company">
                    </div>
                </div>
            </div>
            <button type="submit" class="default-btn">
                <span>Consultation</span>
            </button>
        </form>
    </div>
    <div class="get-in-touch-shape">
        <img src="assets/img/get-in-touch-shape.png" alt="Image">
    </div>
</section>

@endsection
