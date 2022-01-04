@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
<div class="container">
<div class="page-title-content">
<h2>Recover Password!</h2>
<ul>
<li>
<a href="index.html">
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
<p class="reset-desc">Enter the email of your account to reset the password. Then you will receive a link to email to reset the password. If you have any issue about reset password <a href="contact.html">contact us.</a></p>
</div>
<form method="post">
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
</section>

@endsection