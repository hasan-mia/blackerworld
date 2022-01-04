@extends('frontend.layout.main')

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Recover Password!</h2>
            <ul>
                <li>
                    <a href=" {{route('index')}} ">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Recover Password</li>
            </ul>
        </div>
    </div>
</div>

<section class="user-area-style recover-password-area ptb-100">
    <div class="container">
        <div class="contact-form-action recover">
            <div class="form-heading text-center">
                <h3 class="form-title">Reset password!</h3>
                <p class="reset-desc">Enter the email of your account to reset the password. Then you will receive a
                    link to email to reset the password. If you have any issue about reset password <a
                        href="contact.html">contact us.</a></p>
            </div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address')
                        }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password')
                        }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm
                        Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>

{{-- <section class="user-area-style recover-password-area ptb-100">
    <div class="container">
        <div class="contact-form-action recover">
            <div class="form-heading text-center">
                <h3 class="form-title">Reset password!</h3>
                <p class="reset-desc">Enter the email of your account to reset the password. Then you will receive a
                    link to email to reset the password. If you have any issue about reset password <a
                        href="contact.html">contact us.</a></p>
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="now-log-in font-q" href="log-in.html">Log in your account</a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <p class="now-register">
                            Not a member?
                            <a class="font-q" href="registration.html">Registration</a>
                        </p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="default-btn" type="submit">
                            <span>Reset password</span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section> --}}

@endsection
