@extends('frontend.layout.main')

@section('title')
{{$blog->title }} | Blacker World
@endsection

@section('content')

<div class="page-title-area page-title-style-two">
    <div class="container">
        <div class="page-title-content">
            <h2>Blog Details</h2>
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <i class="bx bx-home"></i>
                        Home
                    </a>
                </li>
                <li class="active">Blog Details</li>
            </ul>
        </div>
    </div>
</div>


<div class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="blog-details-img">
                        <img src="{{ asset('images/'.$blog->image)}}" alt="Image">
                    </div>

                    <div class="blog-top-content">
                        <div class="news-content">

                            <ul class="admin">
                                <li>
                                    <a href="#">
                                        <i class="bx bx-user-circle"></i>
                                        Posted by: Carl Bradshaw
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bx-comment"></i>
                                        No comments
                                    </a>
                                </li>
                                <li class="float">
                                    <i class="bx bx-calendar-alt"></i>
                                    {{ ($blog->created_at)->isoformat('Do MMM YYYY') }}
                                </li>
                            </ul>
                            {{-- End top content --}}

                            <h3>{{ $blog->title}}</h3>
                            {!!$blog->description!!}
                        </div>
                        <div class="tag-list">
                            <span>Tags:</span>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        Cybersecurity
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Seaacurity
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Hackers
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        Cybercrime
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- end post tag --}}
                    </div>
                    {{-- end top content --}}
                    <div class="comments">
                        <h3>Comments (2)</h3>
                        <ul>
                            <li>
                                <img src="assets/img/blog-details/comments-img-1.jpg" alt="Image">
                                <h3>Juanita Jones</h3>
                                <span>Monday, January 20, 2021</span>
                                <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                    laboris</p>
                                <a href="#">
                                    Reply
                                </a>
                            </li>
                            <li>
                                <img src="assets/img/blog-details/comments-img-2.jpg" alt="Image">
                                <h3>Ward F. Nelson</h3>
                                <span>Monday, January 20, 2021</span>
                                <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                    incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                    laboris</p>
                                <a href="#">
                                    Reply
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- End View Comment --}}
                    <div class="leave-reply">
                        <h3>Leave a reply</h3>
                        <p>Your email address will not be published. Required fields are marked<span
                                class="star">*</span></p>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name<span class="star">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email address<span class="star">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your website</label>
                                        <input type="text" name="your-website-link" id="your-website-link"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea name="message" class="form-control" id="message" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="checkbox" id="chb2">
                                        <span>
                                            Save my name, email, and website in this browser for the next time I
                                            comment.
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn">
                                        <span>Post a comment</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- End Post comment --}}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar">
                    <div class="sidebar-widget search">
                        <form class="search-form" action="{{route('blogsearch')}}" method="GET">
                            <input class="form-control" name="blogsearch" placeholder="Search here" type="text">
                            <button class="search-button" type="submit">
                                <i class="bx bx-search"></i>
                            </button>
                        </form>
                    </div>
                    {{-- end search form --}}

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
                    {{-- end Recent Post --}}
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
                    {{-- End Categories --}}
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
                    {{-- End Archives --}}
                    <div class="sidebar-widget tags mb-0">
                        <h3>Tags</h3>
                        <ul>
                            @foreach($tags as $tag)
                            <li>
                                <a href="#">
                                    {{ $tag['tags'] }}
                                </a>
                            </li>
                            @endforeach
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
                    </div>
                    {{-- end tags --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
