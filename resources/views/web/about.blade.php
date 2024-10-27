@extends('web.layouts.weblayout')
@section('title', 'About Us')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-8 light-black">About us</h1>
            <div class="col-md-6"><p class="light-black">{!! $info->home_title_short_description !!}</p></div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">

    <!-- About Start -->
    <section class="about p-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-lg-0 mb-24">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" data-bs-tabs="tabs">
                                <li class="nav-item">
                                    <a href="#mission" class="active" aria-current="true" data-bs-toggle="tab">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#Vision" class="" aria-current="false" data-bs-toggle="tab">Vision</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#values" class="" aria-current="false" data-bs-toggle="tab">Values</a>
                                </li>
                            </ul>
                        </div>
                        <form class="card-body tab-content">
                            <div class="tab-pane active" id="mission">
                                <span class="dark-gray mb-16">{!! $info->mission !!}</span>
                            </div>
                            <div class="tab-pane" id="Vision">
                                <span class="dark-gray mb-16">{!! $info->vision !!}</span>
                            </div>
                            <div class="tab-pane" id="values">
                                <span class="dark-gray mb-16">{!! $info->values !!}</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-block">
                        <div class="members">
                            <img src="{{ asset('assets/media/blog/reader-2.png') }}" alt="">
                            <div class="">
                                <h3 class="green">100+</h3>
                                <h4 class="light-black">Members</h4>
                            </div>
                        </div>
                        <img src="{{ asset('assets/media/about/img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Achievements Start -->
    <section class="achievement">
        <div class="celebrattion-image">
            <img src="{{ asset('assets/media/achievement/celebration-image.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6">
                    <div class="p-40">
                        <h3 class="light-black mb-24">The Cricket Pulse Story, Beyond the Boundary</h3>
                        <span class="dark-gray mb-16">{!! $info->about_main !!}</span>
                    </div>
                </div>
            </div>
            <div class="achievement-content ">
                <div class="title light-black">ACHIEVEMENTS</div>
                <div class="achievements">
                    <div class="content text-center">
                        <h2>20+</h2>
                        <h6 class="lightest-gray">Teams Participated</h6>
                    </div>
                    <div class="content text-center">
                        <h2>3+</h2>
                        <h6 class="lightest-gray">Tournament Arranged</h6>
                    </div>
                    <div class="content text-center">
                        <h2>10+</h2>
                        <h6 class="lightest-gray">Years of Experience</h6>
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

    <!-- Testimonials Start -->
    <section class="testimonials">
        <div class="container">
            <div class="heading">
                <div class="left">
                    <h2 class="light-black">Player Testimonials</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="testimonials-slider">
                        <!-- Testimonial Item 1 -->
                        <div class="testimonials-item">
                            <img src="{{ asset('assets/media/testimonial/img-1.png') }}" alt="Ethan Williams">
                            <div class="content">
                                <h4 class="light-black">Ethan Williams</h4>
                                <p class="dark-gray">Lorem ipsum dolor sit amet consectetur. Sed <br> nam nec luctus enim orci pellentesque sed <br> varius. Nulla nam amet dignissim.</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="33" viewBox="0 0 37 33" fill="none">
                                    <path d="M36.9918 23.7826C36.9918 23.7866 36.9922 23.7906 36.9922 23.7945C36.9922 28.6026 33.0946 32.5002 28.2865 32.5002C23.4785 32.5002 19.5809 28.6027 19.5809 23.7945C19.5809 18.9864 23.4789 15.0888 28.2866 15.0888C29.2747 15.0888 30.2206 15.2611 31.1057 15.5646C29.147 4.32847 20.385 -2.91767 28.5073 3.04606C37.5138 9.65915 37.0019 23.5289 36.9918 23.7826Z" fill="#9EA2A8"/>
                                    <path d="M9.13427 15.0889C10.1224 15.0889 11.0683 15.2611 11.9538 15.5646C9.99463 4.32854 1.23257 -2.9176 9.35497 3.04613C18.3615 9.65915 17.8496 23.5289 17.8395 23.7826C17.8395 23.7866 17.8399 23.7906 17.8399 23.7945C17.8399 28.6026 13.9423 32.5002 9.13426 32.5002C4.32611 32.5002 0.42857 28.6027 0.42857 23.7945C0.42857 18.9864 4.32655 15.0889 9.13427 15.0889Z" fill="#9EA2A8"/>
                                </svg>
                            </div>
                        </div>
                        <!-- Testimonial Item 2 -->
                        <div class="testimonials-item">
                            <img src="{{ asset('assets/media/testimonial/img-2.png') }}" alt="Sophia Brown">
                            <div class="content">
                                <h4 class="light-black">Sophia Brown</h4>
                                <p class="dark-gray">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae.</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="33" viewBox="0 0 37 33" fill="none">
                                    <path d="M36.9918 23.7826C36.9918 23.7866 36.9922 23.7906 36.9922 23.7945C36.9922 28.6026 33.0946 32.5002 28.2865 32.5002C23.4785 32.5002 19.5809 28.6027 19.5809 23.7945C19.5809 18.9864 23.4789 15.0888 28.2866 15.0888C29.2747 15.0888 30.2206 15.2611 31.1057 15.5646C29.147 4.32847 20.385 -2.91767 28.5073 3.04606C37.5138 9.65915 37.0019 23.5289 36.9918 23.7826Z" fill="#9EA2A8"/>
                                    <path d="M9.13427 15.0889C10.1224 15.0889 11.0683 15.2611 11.9538 15.5646C9.99463 4.32854 1.23257 -2.9176 9.35497 3.04613C18.3615 9.65915 17.8496 23.5289 17.8395 23.7826C17.8395 23.7866 17.8399 23.7906 17.8399 23.7945C17.8399 28.6026 13.9423 32.5002 9.13426 32.5002C4.32611 32.5002 0.42857 28.6027 0.42857 23.7945C0.42857 18.9864 4.32655 15.0889 9.13427 15.0889Z" fill="#9EA2A8"/>
                                </svg>
                            </div>
                        </div>
                        <!-- Add more testimonials as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials End -->

</div>
<!-- Main Content End -->

@endsection
