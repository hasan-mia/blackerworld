@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>FAQ's</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">FAQ's</li>
            </ul>
        </div>
    </div>
</div>


<section class="faq-area white-bg ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="faq-img">
                    <img src="assets/img/faq-img.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <div class="faq-title">
                        <h2>Frequently asked questions</h2>
                        <span>Just find your answers below</span>
                    </div>
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                What is a managed security service?
                            </a>
                            <div class="accordion-content show">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                Why do we need cybersecurity?
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                What is theaa best way to learn cybersecurity?
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                How do i secure my computer?
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                What are theaa costs of a cyber attack?
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                How can i safely browse the internet?
                            </a>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis
                                    quisquam quam asperiores veritatis, earum quibusdam laudantium distinctio dolore
                                    placeat recusandae ratione maxime odit delectus nobis doloribus quia Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Qui in, illo blanditiis</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-right-shape shape-three">
        <img src="assets/img/faq-right-shape.png" alt="Image">
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
                <div class="col-12">
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" id="message" rows="8"></textarea>
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
