@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>404 Error</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">404 Error</li>
            </ul>
        </div>
    </div>
</div>


<div class="error-area ptb-100">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="error-content">
                <h1><span class="a">4</span> <span class="red">0</span> <span class="b">4</span> </h1>
                <h3>Oops! Page Not Found</h3>
                <p>The page you were looking for could not be found.</p>
                <a href="{{ route('index') }}" class="default-btn two">
                    <span>Return to home page</span>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
