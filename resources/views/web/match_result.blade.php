@extends('web.layouts.weblayout')
@section('title', 'Match Results')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-16 light-black">Match Results</h1>
            <p class="light-black">Catch up on the latest action with our most recent game results. See how your favorite corporate teams performed and relive the key moments from the field!</p>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">

<section class="match-results p-40">
                    <div class="container">
                        
                        <div class="result-sliders">
                        <div class="row">
                            @php
                                // Filter for pending games and sort them by scheduled_datetime
                                $pendingGames = $games->filter(function ($game) {
                                    return $game->status == 1; // 1 represents 'completed'
                                })->sortBy('scheduled_datetime'); // Get the first three
                            @endphp
                            @forelse ($pendingGames as $game)
                            <div class="col-md-6">
                            <div class="result-block">
                                
                                    
                                    <div class="item">
                                    <div class="teams">
                                        <div class="team">
                                            <div class="team-logo-name">
                                                <img style="height:80px;" src="{{ asset('storage/' . $game->team1->logo) }}" alt="{{ $game->team1->full_name }} ">
                                                <h5 class="light-black">{{ $game->team1->full_name }}</h5>
                                                <h5 class="light-black">{{ $game->score_team_1 ?? 'N/A' }} </span></h5>
                                            </div>

                                        </div>
                                        <div class="team">
                                            <div class="team-logo-name">
                                                <img style="height:80px;" src="{{ asset('storage/' . $game->team2->logo) }}" alt="{{ $game->team2->full_name }} ">
                                                <h5 class="light-black">{{ $game->team2->full_name }}</h5>
                                                <h5 class="light-black">{{ $game->score_team_1 ?? 'N/A' }} </span></h5>

                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center dark-gray">{{ $game->result ?? 'N/A' }}</h5>
                                
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse

                            </div>

                        </div>
                    </div>
                </section>

</div>
<!-- Main Content End -->

@endsection