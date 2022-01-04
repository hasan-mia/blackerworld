@extends('frontend.layout.main')

@section('content')

<section class="banner-area banner-area-four bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="banner-content">
                            <span class="top-title wow fadeInDown" data-wow-delay="1s">World Class Cyber Security</span>
                            <h1 class="wow fadeInDown" data-wow-delay="1s">Modern Information Protect From Hackers</h1>
                            <p class="wow fadeInLeft" data-wow-delay="1s">Cybersecurity is the protection from the theft
                                to protect of our computer systems and networks or being damaged of our hardware and
                                software.</p>
                            <div class="banner-btn wow fadeInUp" data-wow-delay="1s">
                                <a href="contact.html" class="default-btn">
                                    <span>Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="banner-video wow zoomIn" data-wow-delay="1s"
                            style="visibility: visible; animation-delay: 1s; animation-name: zoomIn;">
                            <a href="https://www.youtube.com/watch?v=sdpxddDzXfE" class="video-btn popup-youtube">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


<section class="feature-area feature-area-four pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature overly-one">
                    <div class="overly-two">
                        <div class="title">
                            <i class="flaticon-testing"></i>
                            <h3>Pen Testing</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature overly-one">
                    <div class="overly-two">
                        <div class="title">
                            <i class="flaticon-cybercrime"></i>
                            <h3>Cyber Threat Hunting</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-feature overly-one">
                    <div class="overly-two">
                        <div class="title">
                            <i class="flaticon-cyber-security"></i>
                            <h3>Security Center</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-approach-area our-approach-area-four pb-70">
    <div class="container">
        <div class="section-title">
            <span>Our Approach</span>
            <h2>To Enhance Your Cyber Defences Expert Will Support</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="approach-img">
                    <img src="{{asset('frontend/assets/img/approach-img-4.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="approach-content">
                    <h3>Without stopping for a moment we give you best technology experience discussing from our
                        expertise to stop threats being theft or damaged.</h3>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Trusted Partner</h3>
                                <p>sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Product Security</h3>
                                <p>sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>System Security</h3>
                                <p>sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-approach">
                                <h3>Operational Security</h3>
                                <p>sed diam nonumy eirmod tempor invidunt ut labore et.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="challenges-area pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="section-title white-title">
            <span>Our Challenges</span>
            <h2>You Can Protect Your Organization’s Cybersecurity By Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one">
                    <div class="overly-two">
                        <i class="flaticon-threat"></i>
                        <h3>Identifying Threats</h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <span class="flaticon-threat"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one">
                    <div class="overly-two">
                        <i class="flaticon-cyber"></i>
                        <h3>Cyber Risk Assessment</h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <span class="flaticon-cyber"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one">
                    <div class="overly-two">
                        <i class="flaticon-cyber-security-1"></i>
                        <h3>Testing Cyber Security</h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <span class="flaticon-cyber-security-1"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-challenges overly-one">
                    <div class="overly-two">
                        <i class="flaticon-password"></i>
                        <h3>Managing Cloud Security</h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <span class="flaticon-password"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Cybersecurity Services</span>
            <h2>You Can Protect Your Organization’s Cybersecurity By Services Us</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-services">
                    <div class="services-img">
                        <a href="services-details.html">
                            <img src="{{asset('frontend/assets/img/services/services-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="services-content">
                        <h3><a href="services-details.html">Website Scanning</a></h3>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                                <i class="flaticon-right-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services">
                    <div class="services-img">
                        <a href="services-details.html">
                            <img src="{{asset('frontend/assets/img/services/services-2.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="services-content">
                        <h3><a href="services-details.html">Malware Removal</a></h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <a href="services-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services">
                    <div class="services-img">
                        <a href="services-details.html">
                            <img src="{{asset('frontend/assets/img/services/services-3.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="services-content">
                        <h3><a href="services-details.html">Cloud Security</a></h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <a href="services-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-services">
                    <div class="services-img">
                        <a href="services-details.html">
                            <img src="{{asset('frontend/assets/img/services/services-4.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="services-content">
                        <h3><a href="services-details.html">Data Protection</a></h3>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                        <a href="services-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="solution-area pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="solution-content">
                    <div class="solution-title">
                        <span>All-in Solution</span>
                        <h2>Our experts are providing and planning 24/7 technical support services with product and
                            security consultation</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="single-solution overly-one">
                                <div class="overly-two">
                                    <h3>
                                        <a href="solution-details.html">
                                            Product Consultation
                                        </a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                    <span>01</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="single-solution overly-one">
                                <div class="overly-two">
                                    <h3>
                                        <a href="solution-details.html">
                                            Security Consultation
                                        </a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                    <span>02</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 offset-md-3 offset-lg-0">
                            <div class="single-solution overly-one">
                                <div class="overly-two">
                                    <h3>
                                        <a href="solution-details.html">
                                            24/7 Technical Support
                                        </a>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                    <span>03</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <div class="solution-img">
                    <img src="{{asset('frontend/assets/img/solution-img.png')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="get-in-touch-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="section-title white-title">
            <span>Get In Touch</span>
            <h2>Contact Us Today To Speak With An Expert About Your Specific Needs</h2>
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
</section>


<section class="protect-area protect-area-four pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="protect-img">
                    <img src="{{asset('frontend/assets/img/protect-img.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="protect-content">
                    <div class="protect-title">
                        <span>Cybersecurity Protect</span>
                        <h2>Protect your website, web server, and web application for helping you being threats from the
                            hacker</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-challenges overly-one">
                                <div class="overly-two">
                                    <i class="flaticon-database"></i>
                                    <h3>Database Security</h3>
                                    <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                    <span class="flaticon-database"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-challenges overly-one">
                                <div class="overly-two">
                                    <i class="flaticon-application"></i>
                                    <h3>Database Security</h3>
                                    <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                    <span class="flaticon-application"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-challenges overly-one">
                                <div class="overly-two">
                                    <i class="flaticon-security"></i>
                                    <h3>Web Security</h3>
                                    <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                    <span class="flaticon-security"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-challenges overly-one">
                                <div class="overly-two">
                                    <i class="flaticon-security-1"></i>
                                    <h3>Server Security</h3>
                                    <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit sed do.</p>
                                    <span class="flaticon-security-1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-area ptb-100 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="testimonials">
            <span>What Our Customers Say</span>
            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonials-item">
                    <i class="flaticon-quote"></i>
                    <p>“Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                        placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <h3>Jastin Anderson</h3>
                    <span>CEO</span>
                </div>
                <div class="testimonials-item">
                    <i class="flaticon-quote"></i>
                    <p>“Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                        placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>
                    <ul>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                    </ul>
                    <h3>Juhon Anderson</h3>
                    <span>Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="partner-area ptb-100">
    <div class="container">
        <div class="partner-slider owl-theme owl-carousel">
            <div class="partner-item">
                <a href="#">
                    <img src="{{asset('frontend/assets/img/partner/partner-1.png')}}" alt="Image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{asset('frontend/assets/img/partner/partner-2.png')}}" alt="Image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{asset('frontend/assets/img/partner/partner-3.png')}}" alt="Image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{asset('frontend/assets/img/partner/partner-4.png')}}" alt="Image">
                </a>
            </div>
            <div class="partner-item">
                <a href="#">
                    <img src="{{asset('frontend/assets/img/partner/partner-5.png')}}" alt="Image">
                </a>
            </div>
        </div>
    </div>
</div>


<section class="blog-area blog-area-four pb-70">
    <div class="container">
        <div class="section-title">
            <span>Latest News</span>
            <h2>Read The Latest Articles Fromus</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog/blog-1.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <span>January 20, 2021</span>
                        <h3><a href="blog-details.html">Secure The Network</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog/blog-2.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <span>January 19, 2021</span>
                        <h3><a href="blog-details.html">Secure Security Advisory</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="{{asset('frontend/assets/img/blog/blog-3.jpg')}}" alt="Image">
                        </a>
                    </div>
                    <div class="blog-content">
                        <span>January 18, 2021</span>
                        <h3><a href="blog-details.html">Cyber Threat Actors</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <a href="blog-details.html" class="read-more">
                            Read More
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe-area pb-100">
    <div class="container">
        <div class="subscribe-bg">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <div class="subscribe-content">
                        <img src="{{asset('frontend/assets/img/subscribe-img.png')}}" alt="Image">
                        <h3>Sing up for newsletter</h3>
                        <span>Subscribe to the newsletter for all the latest updates</span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required
                            autocomplete="off">
                        <button class="default-btn" type="submit">
                            Subscribe
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Security Packages</span>
            <h2>We Have Different Types Of Pricing Plans</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-pricing overly-one">
                    <div class="overly-two">
                        <div class="pricing-title">
                            <h3>Basic</h3>
                            <h2>Free</h2>
                            <span>Per Month</span>
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
                            <h2><sub>$</sub>29</h2>
                            <span>Per Month</span>
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
                            <h2><sub>$</sub>59</h2>
                            <span>Per Month</span>
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

@endsection
