@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Services Details</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Services Details</li>
            </ul>
        </div>
    </div>
</div>


<section class="services-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-details-content">
                    <div class="services-content">
                        <h2>Is your information cyber secure?</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat dolor in hendrerit in vulputate feugiat.</p>
                        <div class="services-details-one">
                            <img src="assets/img/services-details/services-details-1.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="services-content">
                        <h3>What is cyber security?</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. eum iriure dolor in hendrerit in vulputate
                        </p>
                    </div>
                    <div class="services-content">
                        <h3>Why is it important?</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem
                            ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                            ut laoreet dolore magna aliquam erat volutpat. nulla facilisi. Lorem ipsum dolor sit</p>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                            illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                            blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. feugait
                            nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,</p>
                    </div>
                    <div class="related-post">
                        <div class="title">
                            <h2>Related Posts</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-services">
                                    <div class="services-img">
                                        <a href="services-details.html">
                                            <img src="assets/img/services/services-1.jpg" alt="Image">
                                        </a>
                                    </div>
                                    <div class="services-content">
                                        <h3><a href="services-details.html">Website Scanning</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-services">
                                    <div class="services-img">
                                        <a href="services-details.html">
                                            <img src="assets/img/services/services-2.jpg" alt="Image">
                                        </a>
                                    </div>
                                    <div class="services-content">
                                        <h3><a href="services-details.html">Malware Removal</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                                <div class="single-services">
                                    <div class="services-img">
                                        <a href="services-details.html">
                                            <img src="assets/img/services/services-3.jpg" alt="Image">
                                        </a>
                                    </div>
                                    <div class="services-content">
                                        <h3><a href="services-details.html">Cloud Security</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="services-sidebar">
                    <div class="services-category">
                        <ul>
                            <li>
                                <a href="#">
                                    Cyber Security
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Network Security
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Threat Hunter
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Incident Responder
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Secure Managed IT
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Server Monitoring
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Penetration Testing
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="services-pdf">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="bx bxs-file-pdf"></i>
                                    PDF Download
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxs-file-doc"></i>
                                    DOC Download
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="services-contact mb-30">
                        <h3>Contact us to do your new projects</h3>
                        <a href="contact.html" class="default-btn">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
