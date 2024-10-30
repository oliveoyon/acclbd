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



</div>
<!-- Main Content End -->

@endsection
