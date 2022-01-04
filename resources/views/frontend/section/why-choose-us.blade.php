@php
$whychoseuses = DB::table('whychoseuses')->orderby('id','DESC')->limit(4)->get();;
@endphp
<section class="counter-area pt-100 pb-70 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container">
        <div class="counter-max-wide">
            <div class="section-title white-title">
                <span>Why Choose Us</span>
                @php
                $i=1;
                @endphp
                @foreach ($whychoseuses as $whychoseus)
                @if ($i > 0)
                <h2>{!! $whychoseus->description !!}</h2>
                @endif
                @php $i-- @endphp
                @endforeach

            </div>
            <div class="row">
                @foreach ($whychoseuses as $whychoseus)
                <div class="col-lg-6 col-sm-6">
                    <div class="single-counter overly-one">
                        <div class="overly-two">
                            <i class="{{$whychoseus->icon}}"></i>
                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="{{$whychoseus->number}}">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">3</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">6</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">5</span></span></span></span></span>
                                    </div>
                                </span>
                            </h2>
                            <h3>{{$whychoseus->title}}</h3>
                        </div>
                    </div>
                </div>
                @endforeach


                {{--
                <div class="col-lg-6 col-sm-6">
                    <div class="single-counter overly-one">
                        <div class="overly-two">
                            <i class="flaticon-reliability"></i>
                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="1000">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-formatting-mark">,</span><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span>
                                    </div>
                                </span>
                            </h2>
                            <h3>Trusted Organizations</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single-counter overly-one">
                        <div class="overly-two">
                            <i class="flaticon-web-protection"></i>
                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="567">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">5</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">6</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">7</span></span></span></span></span>
                                    </div>
                                </span>
                            </h2>
                            <h3>Website Protection</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="single-counter overly-one">
                        <div class="overly-two">
                            <i class="flaticon-innovation"></i>
                            <h2>
                                <span class="odometer odometer-auto-theme" data-count="100">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">1</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">0</span></span></span></span></span>
                                    </div>
                                </span>
                                <span class="target">%</span>
                            </h2>
                            <h3>Innovative Technology</h3>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <div id="jarallax-container-1"
        style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100;">
        <div
            style="background-position: 50% 50%; background-size: cover; background-repeat: no-repeat; background-image: url(&quot;file:///E:/html/seqty/templates.envytheme.com/seqty/default/assets/img/counter-bg.jpg&quot;); position: fixed; top: 0px; left: 0px; width: 1349px; height: 520.812px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; will-change: transform, opacity; margin-top: -123.906px; transform: translate3d(0px, 100.141px, 0px);">
        </div>
    </div>
</section>
