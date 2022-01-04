@extends('frontend.layout.main')

@section('title')
{{$solution->title }} | Blacker World
@endsection

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Solution Details</h2>
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Solution Details</li>
            </ul>
        </div>
    </div>
</div>

<section class="solution-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="solutions-content">
                    <h3>{{$solution->title ?? 'No Title Found'}}</h3>
                    {!! $solution->short_description !!}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="solution-details-one">
                    <img src="{{asset('images/'.$solution->image)}}" alt="{{$solution->title}}">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="solutions-content">
                    {!! $solution->description !!}
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
