@php
$abouts = DB::table('abouts')->orderby('id','DESC')->limit(1)->get();
@endphp
<section class="about-us-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    @foreach ($abouts as $about)
                    <img src="{{ asset('images/'.$about->image) }}" alt="Image">
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                @php
                $i=1;
                @endphp
                @foreach ($abouts as $about)
                @if ($i > 0)
                <div class="about-content">
                    <div class="about-title">
                        <span>About Us</span>
                        <h2>{!! $about->description !!}</h2>
                    </div>
                    <div class="tab">
                        <ul class="tabs active">
                            <li class="current">
                                Our Experience
                            </li>
                            <li class="">
                                Why Us?
                            </li>
                            <li class="">
                                Our Approach
                            </li>
                        </ul>
                        <div class="tab_content">
                            <div class="tabs_item" style="display: block;">
                                {!! $about->experience!!}
                                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque
                                    quibusdam
                                    fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint
                                    dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>
                                <ul>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Trusted Partner
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Product Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        System Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Operational Security
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="tabs_item" style="display: none;">
                                {!! $about->whyus!!}

                                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque
                                    quibusdam
                                    fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint
                                    dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>
                                <ul>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Trusted Partner
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Product Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        System Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Operational Security
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="tabs_item" style="display: none;">
                                {!! $about->approach!!}
                                {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat atque
                                    quibusdam
                                    fuga natus non necessitatibus eveniet maiores nostrum esse ut voluptates sint
                                    dolores, voluptatum consequatur ad est enim perferendis reprehenderit.</p>
                                <ul>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Trusted Partner
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Product Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        System Security
                                    </li>
                                    <li>
                                        <i class="bx bx-check-circle"></i>
                                        Operational Security
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @php
                $i--
                @endphp
                @endforeach
            </div>
        </div>
    </div>
</section>
