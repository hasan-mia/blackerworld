@php
$solutions = DB::table('solutions')->orderBy('id', 'desc')->limit(3)->get();
@endphp
<section class="solution-area pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="solution-content">
                    <div class="solution-title">
                        <span>All-in Solution</span>
                        <h2>Our experts are providing and planning 24/7 technical support services with product and
                            security consultation</h2>
                    </div>
                    <div class="row">
                        @foreach ($solutions as $solution)
                        <div class="col-lg-12 col-md-6">
                            <div class="single-solution overly-one">
                                <div class="overly-two">
                                    <h3>
                                        <a href="{!! route('show.solution', $solution->slug) !!}">
                                            {{$solution->title}}
                                        </a>
                                    </h3>
                                    <p>{{ str_limit(strip_tags($solution->description), 150)}}</p>
                                    {{-- <span>
                                        @php
                                        for ($i=0; $i <= 3; $i++) { echo $i. "<br>" ; } @endphp </span> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <div class="solution-img">
                    <img src="{{asset('frontend/assets/img/solution-img.png')}}" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>
