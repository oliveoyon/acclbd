@extends('web.layouts.weblayout')
@section('title', 'About Us')
@section('content')
<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-16 light-black">{{$team->short_name}}</h1>
            <p class="light-black">{{$team->full_name}}</p>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">
    <!-- Team Start -->
    <section class="team p-40">
        <div class="container">
            <div class="row mb-32">
                @forelse ($players as $player)
                <div class="col-xl-4 col-md-6">
                    <div class="team-member mb-24">
                        <div class="content">
                            <div class="info">
                                <div class="left-stroke bg-green"></div>
                                <h3 class="light-black mb-1">{{ $player->player_name }}</h3>
                                <h6 class="dark-gray mb-12">{{ $player->player_type }} @if ($player->special_type)
                                   / {{ $player->special_type }}
                                @endif</h6>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <img src="{{ asset('storage/' . $player->player_image) }}" alt>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse




            </div>
            <ul class="pagination">
                <li>
                    <a href="team.html"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li>
                    <a href="team.html" class="active">01</a>
                </li>
                <li>
                    <a href="team.html">02</a>
                </li>
                <li>
                    <a href="team.html">03</a>
                </li>
                <li>
                    <a href="team.html"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team End -->
</div>
<!-- Main Content End -->


@endsection
