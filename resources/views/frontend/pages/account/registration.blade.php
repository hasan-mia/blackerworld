@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
<div class="container">
<div class="page-title-content">
<h2>Registration</h2>
<ul>
<li>
<a href="index.html">
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
<div class="col-lg-6 col-sm-6 text-right">
<input id="remember-1" type="checkbox">
<label>Show password ?</label>
</div>
</div>
</div>
<div class="col-12">
<p>Have an account? <a href="log-in.html">Login now!</a></p>
</div>
</div>
</form>
</div>
</div>
</section>

@endsection