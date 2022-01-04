@extends('frontend.layout.main')

@section('content')


{{--======================== --}}
<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Registration</h2>
            <ul>
                <li>
                    <a href=" {{route('index')}} ">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Registration</li>
            </ul>
        </div>
    </div>
</div>
<section class="user-area-style ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="contact-form-action">
                <div class="account-title">
                    <h2>Registration</h2>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address')
                            }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

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
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="default-btn register" type="submit">
                                <span>Register now</span>
                            </button>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            <p>Have an account? <a href=" {{route('login')}} ">Login now!</a></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="contact-form-action">
            <div class="account-title">
                <h2>Registration</h2>
            </div>
            <form method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Full name</label>
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email address</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Mobile no.</label>
                            <input class="form-control" type="text" name="Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <button class="default-btn register" type="submit">
                                    <span>Register now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Have an account? <a href="log-in.html">Login now!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
</section>
@endsection
