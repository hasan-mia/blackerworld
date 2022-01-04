@php
$banners = DB::table('banners')->orderby('id','DESC')->get();
@endphp
<section class="banner-area banner-area-four bg-4 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                @php
                $i=1;
                @endphp
                @foreach ($banners as $banner)
                @if ($i > 0)
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="banner-content">
                            <span class="top-title wow fadeInDown" data-wow-delay="1s">{{ $banner->meta}}</span>
                            <h1 class="wow fadeInDown" data-wow-delay="1s">{{ strip_tags($banner->title) }}</h1>
                            <p class="wow fadeInLeft" data-wow-delay="1s">{{ strip_tags($banner->paragraph) }}</p>
                            <div class="banner-btn wow fadeInUp" data-wow-delay="1s">
                                <a href="{{ $banner->link}}" class="default-btn">
                                    <span>Contact Us</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="banner-video wow zoomIn" data-wow-delay="1s"
                            style="visibility: visible; animation-delay: 1s; animation-name: zoomIn;">
                            <a href="{{ $banner->youtubelink}}" class="video-btn popup-youtube">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @endif
                @php $i-- @endphp
                @endforeach

            </div>
        </div>
    </div>
</section>
