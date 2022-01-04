@extends('frontend.layout.main')

@section('content')

@include('frontend.section.banner')
{{-- End Banner Section --}}

@include('frontend.section.services')
{{-- End Services Section --}}

@include('frontend.section.about-us')
{{-- End About Us Section --}}

@include('frontend.section.why-choose-us')
{{-- End Why Choose Us Section --}}

@include('frontend.section.team')
{{-- End Why Team Section --}}

@include('frontend.section.solution')
{{-- End Why Solution Section --}}

@include('frontend.section.faq')
{{-- End Why Solution Section --}}

@include('frontend.section.blog')
{{-- End Why Solution Section --}}

@include('frontend.section.pricing')
{{-- End Why Pricing Section --}}

@include('frontend.section.testimonial')
{{-- End Why Pricing Section --}}

@include('frontend.section.subscribe')
{{-- End Why Pricing Section --}}

@endsection
