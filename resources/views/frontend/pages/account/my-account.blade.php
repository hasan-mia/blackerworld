@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
<div class="container">
<div class="page-title-content">
<h2>My Account</h2>
<ul>
<li>
<a href="index.html">
<i class="bx bx-home"></i>
Home
</a>
</li>
<li class="active">My Account</li>
</ul>
</div>
</div>
</div>


<section class="user-area-style ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contact-form-action mb-50">
<div class="account-title">
<h2>Log in</h2>
</div>
<form method="post">
<div class="row">
<div class="col-12">
<div class="form-group">
<label>Email or Phone</label>
<input class="form-control" type="text" name="name">
</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Password</label>
<input class="form-control" type="password" name="password">
</div>
</div>
<div class="col-12">
<div class="login-action">
<span class="log-rem">
<input id="remember" type="checkbox">
<label for="remember">Remember me!</label>
</span>
<span class="forgot-login">
<a href="recover-password.html">Forgot your password?</a>
</span>
</div>
</div>
<div class="col-12">
<button class="default-btn" type="submit">
<span>Log in now</span>
</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
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
<div class="col-lg-6 col-sm-6">
<div class="right">
<input id="remember-1" type="checkbox">
<label for="remember">Show password ?</label>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


@endsection