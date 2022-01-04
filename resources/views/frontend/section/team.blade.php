@php
$teams = DB::table('teams')->orderBy('id', 'DESC')->limit(3)->get();
@endphp
<section class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Professionals</span>
            <h2>Meet Our Skilled Team</h2>
        </div>
        <div class="row">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <img src="{{ asset('images/'.$team->avatar) }}" alt="Image">
                    <div class="team-content">
                        <h3>{{ $team->name }}</h3>
                        <span>{{ strip_tags($team->department) }}</span>
                        <ul>
                            <li>
                                <a href="{{ $team->facebook_link }}" target="_blank">
                                    <i class="{{ $team->facebook }}"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ $team->twitter_link }}" target="_blank">
                                    <i class="{{ $team->twitter }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $team->linkedin_link }}" target="_blank">
                                    <i class="{{ $team->linkedin }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $team->instagram_link }}" target="_blank">
                                    <i class="{{ $team->instagram }}"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $team->github_link }}" target="_blank">
                                    <i class="{{ $team->github }}"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

            <li> <i class="fab fa-facebook-f"></i> </li>

            {{-- <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <img src="{{asset('frontend/assets/img/team/team-img-2.jpg')}}" alt="Image">
                    <div class="team-content">
                        <h3>Jendoubi Bayer</h3>
                        <span>Financial Officer</span>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team">
                    <img src="{{asset('frontend/assets/img/team/team-img-3.jpg')}}" alt="Image">
                    <div class="team-content">
                        <h3>Andrew Gleeson</h3>
                        <span>Chief Executive Officer</span>
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
