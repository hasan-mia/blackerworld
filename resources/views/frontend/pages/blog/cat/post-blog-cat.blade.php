@extends('frontend.layout.main')

@section('content')


<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Left Sidebar</h2>
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">All BLOGS</li>
            </ul>
        </div>
    </div>
</div>


<section class="blog-column-three-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-blog-posts">
                    <a href="{!! route('show.blog', $blog->slug) !!}">
                        <img src="{{ asset('images/'.$blog->image) }}" alt="{{ $blog->title }}">
                    </a>
                    <div class="single-blog-content">
                        <span>
                            <a href="{{route('show.blog-categories', $blog->BlogCategory->id)}}">{{
                                $blog->BlogCategory->name}}</a>
                        </span>
                        <h3>
                            <a href="{!! route('show.blog', $blog->slug) !!}">
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <p>{!! str_limit($blog->description, 100 ) !!} </p>
                        <ul class="admin">
                            <li>
                                <a href="#">
                                    <i class="bx bx-user-circle"></i>
                                    Carl Bradshaw
                                </a>
                            </li>
                            <li class="float">
                                <i class="bx bx-calendar-alt"></i>
                                {{ ($blog->created_at)->format('d/m/Y') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12">
                <div class="pagination-area">
                    {{ $blogs->onEachSide(4)->links() }}
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
