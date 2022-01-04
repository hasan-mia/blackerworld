@php
$services = DB::table('services')->orderBy('id', 'desc')->limit(3)->get();
@endphp
<section class="feature-area feature-area-four pb-70">
    <div class="container">
        <div class="row">

            @foreach ($services as $service)
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature overly-one">
                    <div class="overly-two">
                        <div class="title">
                            <i class="{{$service->icon}}"></i>
                            <h3>{{$service->title}}</h3>
                        </div>
                        <p>{{ strip_tags($service->paragraph)}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
