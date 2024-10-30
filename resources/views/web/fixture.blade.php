@extends('web.layouts.weblayout')
@section('title', 'Upcoming Game Lineup')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-16 light-black">Upcoming Game Lineup</h1>
            <p class="light-black">Stay tuned for our exciting lineup of upcoming matches!
                Check out the schedule to see when your favorite corporate teams
                are set to compete and don't miss a moment of the action!</p>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">

    <section class="match-list p-40">
        <div class="container">

            <div class="list-block">
                @php
                use Carbon\Carbon;

                // Filter for pending games where scheduled_datetime is in the future and sort by scheduled_datetime
                $pendingGames = $games->filter(function ($game) {
                return $game->status == 1 && Carbon::parse($game->scheduled_datetime)->isFuture();
                })->sortBy('scheduled_datetime'); // Get the first three
                @endphp

                @forelse ($pendingGames as $game)

                <div class="list-item">
                    <div class="teams-location">
                        <div class="teams">
                            <div class="team-logo-name">
                                <img style="height: 100px;" src="{{ asset('storage/' . $game->team1->logo) }}" alt="{{ $game->team1->full_name }}"
                                    alt="South Africa Cricket Logo">
                                <h5 class="light-black">{{ $game->team1->short_name }}</h5>
                            </div>
                            <h5 class="light-black">Vs</h5>
                            <div class="team-logo-name">
                                <img style="height: 100px;" src="{{ asset('storage/' . $game->team2->logo) }}"
                                    alt="{{ $game->team2->full_name }}">
                                <h5 class="light-black">{{ $game->team2->short_name }}</h5>
                            </div>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marker-alt"></i>
                            <h6 class="light-black">{{ $game->stadium }}</h6>
                        </div>
                    </div>
                    <div class="timing">
                        <h6 class="light-black">{{ $game->match_type }}</h6>
                        <a href="match-schedule.html" class="cus-btn primary">{{ \Carbon\Carbon::parse($game->scheduled_datetime)->format('h:i A') }} <i
                                class="fal fa-clock"></i></a>
                        <h6 class="light-black">{{ \Carbon\Carbon::parse($game->scheduled_datetime)->format('d M, Y') }}</h6>
                    </div>
                </div>

                @empty

                @endforelse

            </div>
        </div>
    </section>

</div>
<!-- Main Content End -->

@endsection