@extends('frontend.layout.main')

@section('content')

<div class="preloader">
    <div class="loader">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="indicator">
            <svg width="16px" height="12px">
                <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
            </svg>
        </div>
    </div>
</div>


<div class="coming-soon-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="coming-soon-content">
                <a href="{{ route('index') }}" class="logo">
                    <img src="assets/img/black-logo.png" alt="image">
                </a>
                <h2>We are launching soon</h2>
                <div id="timer" class="flex-wrap d-flex justify-content-center">
                    <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
                    <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
                </div>
                <form class="newsletter-form" data-toggle="validator">
                    <div class="form-group">
                        <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                            required autocomplete="off">
                        <span class="label-title"><i class='bx bx-envelope'></i></span>
                    </div>
                    <button type="submit" class="default-btn">
                        <span>Subscribe</span>
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                    <p>If you would like to be notified when your app is live, Please subscribe to our mailing list.</p>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
