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
            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search mt-0">
                        <form class="search-form" action="{{route('blogsearch')}}" method="GET">
                            <input class="form-control" name="blogsearch" placeholder="Search here" type="text">
                            <button class="search-button" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    {{-- end search --}}
                    <div class="sidebar-widget recent-post">
                        <h3 class="widget-title">Recent Post</h3>
                        <ul>
                            @foreach($recent_posts as $recent_post)
                            <li>
                                <a href="{{route('show.blog', $recent_post->slug)}}">
                                    {{$recent_post->title}}

                                    <div class="recent">
                                        <img src="{{ asset('images/'.$recent_post->image)}}" alt="Image">
                                    </div>
                                </a>
                                <span>{{ ($recent_post->created_at)->isoFormat('MMM Do YYYY') }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- end recent post --}}
                    <div class="sidebar-widget categories">
                        <h3><a href="{{route('show.blog-categories')}}">Categories</a></h3>
                        <ul>
                            @foreach ($BlogCategories as $BlogCategory)
                            <li>
                                <a
                                    href="{{route('show.blog-categories', $BlogCategory->id)}}">{{$BlogCategory->name}}</a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    {{-- end category --}}
                    <div class="sidebar-widget categories">
                        <h3>Archives</h3>
                        <ul>
                            @foreach($archives as $archive)
                            <li>
                                <a href="/blog/?month={{$archive['month']}}&year={{$archive['year']}}">{{
                                    $archive['month']
                                    }} {{ $archive['year'] }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    {{-- end archive --}}
                    {{-- <div class="sidebar-widget tags">
                        <h3>Tags</h3>
                        <ul>
                            <li>
                                <a href="#">Cyber</a>
                            </li>
                            <li>
                                <a href="#">Security</a>
                            </li>
                            <li>
                                <a href="#">Network</a>
                            </li>
                            <li>
                                <a href="#">Responder</a>
                            </li>
                            <li>
                                <a href="#">Secure</a>
                            </li>
                            <li>
                                <a href="#">Monitoring</a>
                            </li>
                            <li>
                                <a href="#">Penetration</a>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- end tags --}}
                </div>
            </div>
            {{-- End Left Sidebar --}}

            <div class="col-lg-8">
                <div class="row">
                    @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                    <div class="col-lg-6 col-md-6">
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

                    @else

                    <div class="page-title-area page-title-style-two">
                        <div class="container">
                            <div class="page-title-content">
                                <h2>No Post Found</h2>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}">
                                            <i class="bx bx-home"></i>
                                            Back Home
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="col-lg-12">
                        <div class="pagination-area">
                            {{ $blogs->onEachSide(4)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
