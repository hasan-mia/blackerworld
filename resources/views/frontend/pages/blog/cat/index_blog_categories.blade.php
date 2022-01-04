{{-- @php
$solutions = DB::table('solutions')->orderBy('id', 'desc')->limit(3)->get();
// $relateds =solutions::orderby('id', 'desc')->skip($id)->limit(5)->get();
@endphp --}}
@extends('frontend.layout.main')

@section('title')
All Blog Category | Blacker World
@endsection

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>All Categories</h2>
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Categoryes</li>
            </ul>
        </div>
    </div>
</div>

<section class="solution-details-area">
    <div class="container">
        <div class="row">
            @foreach ($BlogCategories as $BlogCategory)
            <div class="col-md-2 col-sm-4">
                <a href="{{route('show.blog-categories', $BlogCategory->id)}}">
                    <div class="single-safety overly-one">
                        <div class="overly-two">
                            <img src="{{asset('frontend/assets/img/safety-icon/icon-1.png')}}" alt="Image">
                            <h3>{{$BlogCategory->name}}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
