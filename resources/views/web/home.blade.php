        @extends('web.layouts.weblayout')
        @section('title', 'Amateur Corporate Cricket League')
        @section('content')
            <!-- Hero Banner start -->
            <div class="hero-banner-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="content">
                                <h1 class="mb-12 light-black">{{ $info->home_title }}</h1>
                                <p class="mb-32 light-black">{!! $info->home_title_short_description !!}</p>
                                <div class="btn-block">
                                    <a href="contact.html" class="cus-btn primary">Join Now
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <g clip-path="url(#clip0_925_427)">
                                                <path
                                                    d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                                    fill="#F8F8FF" />
                                            </g>
                                            <defs>
                                                <clippath id="clip0_925_427">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0 0.5)" />
                                                </clippath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <div class="overlay d-md-inline-block" data-bs-toggle="modal"
                                        data-bs-target="#videoModal">
                                        <a href="#" class="play-button fw-600 fs-25"
                                            data-src="https://www.youtube.com/embed/EzDC8aAJln0">
                                            <div class="icon"><i class="fas fa-play"></i></div>
                                            Watch Video
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <img src="{{ asset('assets/media/banner/side-image.png') }}" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Banner End -->
            <!-- Brands Start -->
            <div class="brands p-40">
                <div class="container">
                    <div class="brands-logo">
                        @foreach ($teams as $team)
                        <a href="team-details/{{ $team->team_slug }}">
                            <div class="logo">
                                <img src="{{ asset('storage/' . $team->logo) }}" alt="{{ $team->short_name }}" style="height:80px;">
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Brands End -->

            <!-- Main Content Start -->
            <div class="page-content">

                <!-- Match Results Start -->
                <section class="match-results p-40">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black">{{ $info->last_match_result }}</h2>
                                <p class="light-black">{!! $info->last_match_result_short_desc !!}</p>
                            </div>
                            <a href="match-result.html" class="cus-btn primary">See All
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                                    fill="none">
                                    <g clip-path="url(#clip0_925_428)">
                                        <path
                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                            fill="#F8F8FF" />
                                    </g>
                                    <defs>
                                        <clippath id="clip0_925_428">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="result-slider">
                            <div class="result-block">
                                <div class="item">
                                    <div class="teams">
                                        <div class="team">
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/southafrica_cricket_logo.png"
                                                    alt="South Africa Cricket Logo">
                                                <h5 class="light-black">SA Cricket</h5>
                                            </div>
                                            <h5 class="light-black">270 <span class="dark-gray">(48)</span></h5>
                                        </div>
                                        <div class="team">
                                            <h5 class="light-black">271/3 <span class="dark-gray">(39)</span></h5>
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/action_cricket_logo.png"
                                                    alt="Action Cricket Logo">
                                                <h5 class="light-black">Action Cricket</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center dark-gray">Action Cricket won by 7 wickets (63 balls left)</h5>
                                </div>
                            </div>
                            <div class="result-block">
                                <div class="item">
                                    <div class="teams">
                                        <div class="team">
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/logo.png" alt="Derbyshire Logo">
                                                <h5 class="light-black">Derbyshire</h5>
                                            </div>
                                            <h5 class="light-black">164 <span class="dark-gray">(42)</span></h5>
                                        </div>
                                        <div class="team">
                                            <h5 class="light-black">165/5 <span class="dark-gray">(39)</span></h5>
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/knights_Cricket_logo.png" alt="Knights Logo">
                                                <h5 class="light-black">Knights</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center dark-gray">Knights won by 5 wickets (66 balls left)</h5>
                                </div>
                            </div>
                            <div class="result-block">
                                <div class="item">
                                    <div class="teams">
                                        <div class="team">
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/action_cricket_logo.png"
                                                    alt="Action Cricket Logo">
                                                <h5 class="light-black">Action Cricket</h5>
                                            </div>
                                            <h5 class="light-black">184/6 <span class="dark-gray">(42)</span></h5>
                                        </div>
                                        <div class="team">
                                            <h5 class="light-black">180/5 <span class="dark-gray">(39)</span></h5>
                                            <div class="team-logo-name">
                                                <img src="assets/media/brands/knights_Cricket_logo.png"
                                                    alt="Knights Logo">
                                                <h5 class="light-black">Knights</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center dark-gray">Action Cricket won by 4 wickets (48 balls left)</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Achievements Start -->
                <section class="achievement">
                    <div class="celebrattion-image">
                        <img src="assets/media/achievement/celebration-image.png" alt="Celebration Image">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-6">
                                <div class="p-40">
                                    <h3 class="light-black mb-24">The Cricket Pulse Story, Beyond the Boundary</h3>
                                    <span class="dark-gray mb-16">{!! $info->about_main !!}</span>
                                    <a href="player-detail.html" class="cus-btn primary">Read More <i
                                            class="fal fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="achievement-content">
                            <div class="title light-black">ACHIEVEMENTS</div>
                            <div class="achievements">
                                <div class="content text-center">
                                    <h2>100+</h2>
                                    <h6 class="lightest-gray">Team Members</h6>
                                </div>
                                <div class="content text-center">
                                    <h2>120+</h2>
                                    <h6 class="lightest-gray">Tournament Victories</h6>
                                </div>
                                <div class="content text-center">
                                    <h2>20+</h2>
                                    <h6 class="lightest-gray">Hosting Major Events</h6>
                                </div>
                                <div class="content text-center">
                                    <h2>100%</h2>
                                    <h6 class="lightest-gray">Satisfaction Rate</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Achievements End -->

                <!-- Match list Start -->
                <section class="match-list p-40">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black">{{ $info->upcoming_match }}</h2>
                                <p class="light-black">{!! $info->upcoming_match_short_desc !!}</p>
                            </div>
                            <a href="match-schedule.html" class="cus-btn primary">See All
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_925_429)">
                                        <path
                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                            fill="#F8F8FF" />
                                    </g>
                                    <defs>
                                        <clippath id="clip0_925_429">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="list-block">
                            <div class="list-item">
                                <div class="teams-location">
                                    <div class="teams">
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/southafrica_cricket_logo.png"
                                                alt="South Africa Cricket Logo">
                                            <h5 class="light-black">SA Cricket</h5>
                                        </div>
                                        <h5 class="light-black">Vs</h5>
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/action_cricket_logo.png"
                                                alt="Action Cricket Logo">
                                            <h5 class="light-black">Action Cricket</h5>
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <h6 class="light-black">Oceanfront Cricket Arena</h6>
                                    </div>
                                </div>
                                <div class="timing">
                                    <h6 class="light-black">ONE DAY MATCH</h6>
                                    <a href="match-schedule.html" class="cus-btn primary">1:30PM <i
                                            class="fal fa-clock"></i></a>
                                    <h6 class="light-black">20 Oct, 2023</h6>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="teams-location">
                                    <div class="teams">
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/logo.png" alt="Derbyshire Logo">
                                            <h5 class="light-black">Derbyshire</h5>
                                        </div>
                                        <h5 class="light-black">Vs</h5>
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/knights_Cricket_logo.png" alt="Knights Logo">
                                            <h5 class="light-black">Knights</h5>
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <h6 class="light-black">Oceanfront Cricket Arena</h6>
                                    </div>
                                </div>
                                <div class="timing">
                                    <h6 class="light-black">ONE DAY MATCH</h6>
                                    <a href="match-schedule.html" class="cus-btn primary">1:30PM <i
                                            class="fal fa-clock"></i></a>
                                    <h6 class="light-black">22 Oct, 2023</h6>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="teams-location">
                                    <div class="teams">
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/canada_cricket_logo.png"
                                                alt="Canada Cricket Logo">
                                            <h5 class="light-black">Canada Cricket</h5>
                                        </div>
                                        <h5 class="light-black">Vs</h5>
                                        <div class="team-logo-name">
                                            <img src="assets/media/brands/west_indies_cricket_logo.png"
                                                alt="West Indies Cricket Logo">
                                            <h5 class="light-black">West Indies</h5>
                                        </div>
                                    </div>
                                    <div class="location">
                                        <i class="fal fa-map-marker-alt"></i>
                                        <h6 class="light-black">Oceanfront Cricket Arena</h6>
                                    </div>
                                </div>
                                <div class="timing">
                                    <h6 class="light-black">ONE DAY MATCH</h6>
                                    <a href="match-schedule.html" class="cus-btn primary">1:30PM <i
                                            class="fal fa-clock"></i></a>
                                    <h6 class="light-black">24 Oct, 2023</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Match list End -->


                <!-- Big match Start -->
                <section class="big-match ">
                    <div class="match-name">
                        <div class="container">
                            <div class="vector">
                                <img src="assets/media/vs.png" alt>
                            </div>
                            <div class="content">
                                <span>Bold Eagles</span>
                                <span>Lone Wolfs</span>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="match-detail">
                            <img src="assets/media/brands/eagle.png" alt>
                            <div class="detail">
                                <h3 class="text-center color-white mb-24">15
                                    December 2023</h3>
                                <h4 class="text-center color-white">123 Main
                                    Street, Anytown, USA.</h4>
                            </div>
                            <img src="assets/media/brands/wolves.png" alt>
                        </div>
                    </div>
                </section>
                <!-- Big match Start -->
                <section class="big-match">
                    <div class="match-name">
                        <div class="container">
                            <div class="vector">
                                <img src="assets/media/vs.png" alt="Match vs graphic">
                            </div>
                            <div class="content">
                                <span>Bold Eagles</span>
                                <span>Lone Wolves</span>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="match-detail">
                            <img src="assets/media/brands/eagle.png" alt="Bold Eagles logo">
                            <div class="detail">
                                <h3 class="text-center color-white mb-24">15 December 2023</h3>
                                <h4 class="text-center color-white">123 Main Street, Anytown, USA.</h4>
                            </div>
                            <img src="assets/media/brands/wolves.png" alt="Lone Wolves logo">
                        </div>
                    </div>
                </section>
                <!-- Big match End -->

                <!-- Gallery Start -->
                <section class="gallery p-40" aria-labelledby="gallery-heading">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black" id="gallery-heading">{{ $info->gallery }}</h2>
                                <p class="light-black">{!! $info->gallery_short_desc !!}</p>
                            </div>
                            <a href="gallery.html" class="cus-btn primary">See All
                                <!-- SVG icon -->
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-24">
                                <div class="img-block br-20 shadow">
                                    <img src="assets/media/gallery/img-1.png" alt="Gallery image 1">
                                </div>
                            </div>
                            <!-- Additional gallery images here -->
                        </div>
                    </div>
                </section>
                <!-- Gallery End -->

                <!-- Join Start -->
                <section class="join m-40" aria-labelledby="join-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12 offset-lg-6">
                                <div class="content">
                                    <h2 class="color-white text-xl-center" id="join-heading">{{ $info->ready_to_play }}
                                    </h2>
                                    <h5 class="color-white text-xl-center">{!! $info->ready_to_play_short_desc !!}</h5>
                                    <a href="contact.html" class="cus-btn sec">Join Now
                                        <!-- SVG icon -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Join End -->


                <!-- Team Start -->
                <section class="team p-40">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black">{{ $info->meet_the_teams }}</h2>
                                <p class="light-black">{!! $info->meet_the_team_short_desc !!}</p>
                            </div>
                            <a href="team.html" class="cus-btn primary">See All
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_925_431)">
                                        <path
                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                            fill="#F8F8FF" />
                                    </g>
                                    <defs>
                                        <clippath id="clip0_925_431">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="team-slider">
                            <a href="team.html" class="team-member">
                                <div class="content">
                                    <div class="info">
                                        <div class="left-stroke bg-green"></div>
                                        <h3 class="light-black mb-1">Mason Brown</h3>
                                        <h6 class="dark-gray mb-12">BATSMAN</h6>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/media/cricketer/img-1.png') }}" alt="Mason Brown, BATSMAN">
                                </div>
                            </a>
                            <a href="team.html" class="team-member">
                                <div class="content">
                                    <div class="info">
                                        <div class="left-stroke bg-purple"></div>
                                        <h3 class="light-black mb-1">Liam Johnson</h3>
                                        <h6 class="dark-gray mb-12">BATSMAN / CAPTAIN</h6>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/media/cricketer/new-img-2.png') }}"
                                        alt="Liam Johnson, BATSMAN / CAPTAIN">
                                </div>
                            </a>
                            <a href="team.html" class="team-member">
                                <div class="content">
                                    <div class="info">
                                        <div class="left-stroke bg-blue"></div>
                                        <h3 class="light-black mb-1">Samuel Davis</h3>
                                        <h6 class="dark-gray mb-12">BATSMAN / Keeper</h6>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/media/cricketer/new-img-3.png') }}"
                                        alt="Samuel Davis, BATSMAN / Keeper">
                                </div>
                            </a>
                            <a href="team.html" class="team-member">
                                <div class="content">
                                    <div class="info">
                                        <div class="left-stroke bg-blue"></div>
                                        <h3 class="light-black mb-1">Caleb Wilson</h3>
                                        <h6 class="dark-gray mb-12">BATSMAN</h6>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/media/cricketer/new-img-4.png') }}"
                                        alt="Caleb Wilson, BATSMAN">
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Team End -->

                <!-- testimonials Start -->
                <section class="testimonials p-40">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black">{{ $info->testimonial }}</h2>
                                <p class="light-black">{!! $info->testimonial_short_desc !!}</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-10">
                                <div class="testimonials-slider">
                                    <div class="testimonials-item">
                                        <img src="assets/media/testimonial/img-1.png" alt="">
                                        <div class="content">
                                            <h4 class="light-black">Ethan Williams</h4>
                                            <p class="dark-gray">Lorem ipsum dolor sit amet consectetur. Sed <br> nam nec
                                                luctus enim orci pellentesque sed <br> varius. Nulla nam amet dignissim.</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="33"
                                                viewBox="0 0 37 33" fill="none">
                                                <path
                                                    d="M36.9918 23.7826C36.9918 23.7866 36.9922 23.7906 36.9922 23.7945C36.9922 28.6026 33.0946 32.5002 28.2865 32.5002C23.4785 32.5002 19.5809 28.6027 19.5809 23.7945C19.5809 18.9864 23.4789 15.0888 28.2866 15.0888C29.2747 15.0888 30.2206 15.2611 31.1057 15.5646C29.147 4.32847 20.385 -2.91767 28.5073 3.04606C37.5138 9.65915 37.0019 23.5289 36.9918 23.7826Z"
                                                    fill="#9EA2A8" />
                                                <path
                                                    d="M9.13427 15.0889C10.1224 15.0889 11.0683 15.2611 11.9538 15.5646C9.99463 4.32854 1.23257 -2.9176 9.35497 3.04613C18.3615 9.65915 17.8496 23.5289 17.8395 23.7826C17.8395 23.7866 17.8399 23.7906 17.8399 23.7945C17.8399 28.6026 13.9423 32.5002 9.13426 32.5002C4.32611 32.5002 0.42857 28.6027 0.42857 23.7945C0.42857 18.9864 4.32655 15.0889 9.13427 15.0889Z"
                                                    fill="#9EA2A8" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="testimonials-item">
                                        <img src="assets/media/testimonial/img-2.png" alt="">
                                        <div class="content">
                                            <h4 class="light-black">Sophia Johnson</h4>
                                            <p class="dark-gray">Lorem ipsum dolor sit amet consectetur. Sed <br> nam nec
                                                luctus enim orci pellentesque sed <br> varius. Nulla nam amet dignissim.</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="33"
                                                viewBox="0 0 37 33" fill="none">
                                                <path
                                                    d="M36.9918 23.7826C36.9918 23.7866 36.9922 23.7906 36.9922 23.7945C36.9922 28.6026 33.0946 32.5002 28.2865 32.5002C23.4785 32.5002 19.5809 28.6027 19.5809 23.7945C19.5809 18.9864 23.4789 15.0888 28.2866 15.0888C29.2747 15.0888 30.2206 15.2611 31.1057 15.5646C29.147 4.32847 20.385 -2.91767 28.5073 3.04606C37.5138 9.65915 37.0019 23.5289 36.9918 23.7826Z"
                                                    fill="#9EA2A8" />
                                                <path
                                                    d="M9.13427 15.0889C10.1224 15.0889 11.0683 15.2611 11.9538 15.5646C9.99463 4.32854 1.23257 -2.9176 9.35497 3.04613C18.3615 9.65915 17.8496 23.5289 17.8395 23.7826C17.8395 23.7866 17.8399 23.7906 17.8399 23.7945C17.8399 28.6026 13.9423 32.5002 9.13426 32.5002C4.32611 32.5002 0.42857 28.6027 0.42857 23.7945C0.42857 18.9864 4.32655 15.0889 9.13427 15.0889Z"
                                                    fill="#9EA2A8" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="testimonials-item">
                                        <img src="assets/media/testimonial/img-3.png" alt="">
                                        <div class="content">
                                            <h4 class="light-black">Michael Brown</h4>
                                            <p class="dark-gray">Lorem ipsum dolor sit amet consectetur. Sed <br> nam nec
                                                luctus enim orci pellentesque sed <br> varius. Nulla nam amet dignissim.</p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="33"
                                                viewBox="0 0 37 33" fill="none">
                                                <path
                                                    d="M36.9918 23.7826C36.9918 23.7866 36.9922 23.7906 36.9922 23.7945C36.9922 28.6026 33.0946 32.5002 28.2865 32.5002C23.4785 32.5002 19.5809 28.6027 19.5809 23.7945C19.5809 18.9864 23.4789 15.0888 28.2866 15.0888C29.2747 15.0888 30.2206 15.2611 31.1057 15.5646C29.147 4.32847 20.385 -2.91767 28.5073 3.04606C37.5138 9.65915 37.0019 23.5289 36.9918 23.7826Z"
                                                    fill="#9EA2A8" />
                                                <path
                                                    d="M9.13427 15.0889C10.1224 15.0889 11.0683 15.2611 11.9538 15.5646C9.99463 4.32854 1.23257 -2.9176 9.35497 3.04613C18.3615 9.65915 17.8496 23.5289 17.8395 23.7826C17.8395 23.7866 17.8399 23.7906 17.8399 23.7945C17.8399 28.6026 13.9423 32.5002 9.13426 32.5002C4.32611 32.5002 0.42857 28.6027 0.42857 23.7945C0.42857 18.9864 4.32655 15.0889 9.13427 15.0889Z"
                                                    fill="#9EA2A8" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Add more testimonials as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- testimonials End -->


                <!-- Blogs Start -->
                <section class="blog p-40">
                    <div class="container">
                        <div class="heading">
                            <div class="left">
                                <h2 class="light-black">Our Latest Blogs</h2>
                                <p class="light-black">Lorem ipsum dolor sit
                                    amet consectetur. Quis <br> aliquam cursus
                                    blandit nulla vitae. Eu imperdiet.
                                </p>
                            </div>
                            <a href="blog-detail.html" class="cus-btn primary">See All
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                    viewBox="0 0 24 25" fill="none">
                                    <g clip-path="url(#clip0_925_432)">
                                        <path
                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                            fill="#F8F8FF" />
                                    </g>
                                    <defs>
                                        <clippath id="clip0_925_432">
                                            <rect width="24" height="24" fill="white"
                                                transform="translate(0 0.5)" />
                                        </clippath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog-card mb-lg-0 mb-24">
                                    <img src="{{ asset('assets/media/blog/img-1.png') }}" class="w-100" alt="">
                                    <div class="info">
                                        <div class="date-author mb-12">
                                            <div class="date">
                                                <h4 class="light-black">12</h4>
                                                <h6 class="light-black">October, 2023</h6>
                                            </div>
                                            <div class="author">
                                                <div class="text">
                                                    <h6 class="">
                                                        Noah Smith
                                                    </h6>
                                                </div>
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">

                                            </div>
                                        </div>
                                        <h4 class="light-black mb-12">Mastering the Cricket Basics: A Beginner's Guide</h4>
                                        <div class="reader-button">
                                            <div class="reader">
                                                <img src="assets/media/blog/reader.png" alt="">
                                                <h6 class="light-black">20+ Reading</h6>
                                            </div>
                                            <a href="blog.html" class="cus-btn primary">Read more
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_925_433)">
                                                        <path
                                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                                            fill="#F8F8FF" />
                                                    </g>
                                                    <defs>
                                                        <clippath id="clip0_925_433">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-card shadow mb-24">
                                    <div class="info">
                                        <div class="date-author mb-12">
                                            <div class="date">
                                                <h4 class="light-black">12</h4>
                                                <h6 class="light-black">October, 2023</h6>
                                            </div>
                                            <div class="author">
                                                <div class="text">
                                                    <h6 class="">
                                                        Noah Smith
                                                    </h6>
                                                </div>
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">
                                            </div>
                                        </div>
                                        <h4 class="light-black mb-12">Mastering the Cricket Basics: A Beginner's Guide</h4>
                                        <div class="reader-button">
                                            <div class="reader">
                                                <img src="assets/media/blog/reader.png" alt="">
                                                <h6 class="light-black">20+ Reading</h6>
                                            </div>
                                            <a href="blog.html" class="cus-btn primary">Read more
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_925_434)">
                                                        <path
                                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                                            fill="#F8F8FF" />
                                                    </g>
                                                    <defs>
                                                        <clippath id="clip0_925_434">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-card shadow mb-24 d-lg-block d-none">
                                    <div class="info">
                                        <div class="date-author mb-12">
                                            <div class="date">
                                                <h4 class="light-black">12</h4>
                                                <h6 class="light-black">October, 2023</h6>
                                            </div>
                                            <div class="author">
                                                <div class="text">
                                                    <h6 class="">
                                                        Noah Smith
                                                    </h6>
                                                </div>
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">
                                            </div>
                                        </div>
                                        <h4 class="light-black mb-12">Mastering the Cricket Basics: A Beginner's Guide</h4>
                                        <div class="reader-button">
                                            <div class="reader">
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">
                                                <h6 class="light-black">20+ Reading</h6>
                                            </div>
                                            <a href="blog.html" class="cus-btn primary">Read more
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_925_435)">
                                                        <path
                                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                                            fill="#F8F8FF" />
                                                    </g>
                                                    <defs>
                                                        <clippath id="clip0_925_435">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-card shadow d-xl-block d-none">
                                    <div class="info">
                                        <div class="date-author mb-12">
                                            <div class="date">
                                                <h4 class="light-black">12</h4>
                                                <h6 class="light-black">October, 2023</h6>
                                            </div>
                                            <div class="author">
                                                <div class="text">
                                                    <h6 class="">
                                                        Noah Smith
                                                    </h6>
                                                </div>
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">
                                            </div>
                                        </div>
                                        <h4 class="light-black mb-12">Mastering the Cricket Basics: A Beginner's Guide</h4>
                                        <div class="reader-button">
                                            <div class="reader">
                                                <img src="{{ asset('assets/media/blog/author.png') }}" alt="">
                                                <h6 class="light-black">20+ Reading</h6>
                                            </div>
                                            <a href="blog.html" class="cus-btn primary">Read more
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none">
                                                    <g clip-path="url(#clip0_925_436)">
                                                        <path
                                                            d="M19.8739 8.48103C19.5301 8.48103 19.2038 8.55711 18.9102 8.69234C18.675 7.66583 17.7549 6.8975 16.658 6.8975C16.3065 6.8975 15.9733 6.97667 15.6748 7.11762C15.4113 6.13128 14.5103 5.40252 13.442 5.40252C13.121 5.40252 12.8152 5.46842 12.5371 5.5872V2.81113C12.5372 1.53673 11.5004 0.5 10.226 0.5C8.95165 0.5 7.91486 1.53673 7.91486 2.81113V13.8079L6.72321 12.0389L6.70455 12.0157C5.81233 10.9066 4.24263 10.6601 3.05346 11.4425C2.43161 11.8516 2.01035 12.4791 1.86719 13.2095C1.72493 13.9354 1.87544 14.671 2.29099 15.2823L6.54391 21.9861L6.55807 22.0076C7.63001 23.5682 9.40033 24.5 11.2937 24.5H16.0657C19.4399 24.5 22.1851 21.7549 22.1851 18.3807V10.7921C22.1851 9.51777 21.1483 8.48103 19.8739 8.48103ZM20.7788 18.3807C20.7788 20.9795 18.6646 23.0938 16.0657 23.0938H11.2937C9.86786 23.0938 8.53451 22.3941 7.72432 21.2216L3.47201 14.5188L3.45785 14.4974C3.25211 14.1978 3.17735 13.8365 3.24719 13.4799C3.31708 13.1234 3.52277 12.817 3.82633 12.6173C4.39938 12.2403 5.15351 12.3527 5.59183 12.8765L9.32111 18.4123V2.81113C9.32111 2.31214 9.72705 1.90625 10.226 1.90625C10.725 1.90625 11.1309 2.31214 11.1309 2.81113V11.1528H12.5372V7.71369C12.5372 7.2147 12.9431 6.80881 13.442 6.80881C13.941 6.80881 14.3469 7.2147 14.3469 7.71369V11.1528H15.7532V9.20862C15.7532 8.70964 16.1591 8.30375 16.658 8.30375C17.157 8.30375 17.5629 8.70964 17.5629 9.20862V11.1528H18.9692V10.7922C18.9692 10.2932 19.3751 9.88728 19.874 9.88728C20.373 9.88728 20.7789 10.2932 20.7789 10.7922V18.3807H20.7788Z"
                                                            fill="#F8F8FF" />
                                                    </g>
                                                    <defs>
                                                        <clippath id="clip0_925_436">
                                                            <rect width="24" height="24" fill="white"
                                                                transform="translate(0 0.5)" />
                                                        </clippath>
                                                    </defs>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Blogs End -->

            </div>

        @endsection
