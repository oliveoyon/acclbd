@extends('web.layouts.weblayout')
@section('title', 'About Us')
@section('content')
<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-16 light-black">Player Detail</h1>
            <p class="light-black">Lorem ipsum dolor sit amet consectetur. Vitae diam <br> cursus a rhoncus morbi nisi non tempus nullam.</p>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->
<!-- Main Content Start -->
<div class="page-content">
    <!-- Player info Start -->
    <section class="player-info p-40">
        <div class="container position-relative">
            <div class="vector">
                <img src="assets/media/vector/vector.png" alt="">
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="player-content">
                        <div class="info">
                            <h3 class="light-black mb-1">{{ $player->player_name }}</h3>
                                <h6 class="dark-gray mb-12">{{ $player->player_type }} @if ($player->special_type)
                                   / {{ $player->special_type }}
                                @endif</h6>
                            <div class="rating mb-24">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="light-black mb-12">Bio:</h4>
                           <span class="dark-gray">{!! $player->biography !!}</span>

                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="player-detail">
                        <div class="image">
                            <img src="{{ asset('storage/' . $player->player_image) }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Player info End -->

    <!-- About player Start -->
    <section class="about-player">
        <div class="container">
            <div class="col-lg-6 col-md-8 col-sm-12 ">
                <h3 class="mb-32">About Team</h3>
                <h5 class="mb-16">Biography</h5>
                <span>{{ $team->description }}</span>
            </div>
        </div>
    </section>
    <!-- About player End -->
</div>
<!-- Main Content End -->

@endsection
