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


            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address')
                        }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button class="default-btn" type="submit">
                            <span>{{ __('Send Password Reset Link') }}</span>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</section>
@endsection
