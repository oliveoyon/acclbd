@extends('web.layouts.weblayout')
@section('title', 'Match Results')
@section('content')
<style>
    /* Main card styling */
    .match-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease-in-out;
    margin-bottom: 20px; /* Space between cards */
    }
    .match-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25); /* Slightly stronger shadow on hover */
    }

    /* Teams container */
    .teams {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    }

    /* Team styling */
    .team {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    }

    /* Logo container for consistent sizing */
    .team-logo-container {
    width: 80px;
    height: 80px;
    background: #f5f5f5;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for logo container */
    }
    .team-logo {
    max-width: 60px;
    max-height: 60px;
    }

    /* Team name and score */
    .team-name {
    font-size: 1rem;
    font-weight: 600;
    color: #333;
    margin-top: 10px;
    }
    .team-score {
    font-size: 1.25rem;
    font-weight: 700;
    color: #007bff;
    }

    /* VS divider */
    .vs-divider {
    font-size: 1.5rem;
    font-weight: 700;
    color: #666;
    }

    /* Match result styling */
    .match-result {
    margin-top: 15px;
    font-size: 1rem;
    font-weight: 600;
    color: #444;
    text-align: center;
    }


    </style>
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
                            <div class="col-12 col-md-6"> <!-- Use col-12 for mobile and col-md-6 for larger screens -->
                                <div class="match-card">
                                    <div class="teams">
                                        <!-- Team 1 -->
                                        <div class="team">
                                            <div class="team-logo-container">
                                                <img src="{{ asset('storage/' . $game->team1->logo) }}" alt="{{ $game->team1->full_name }}" class="team-logo">
                                            </div>
                                            <h5 class="team-name">{{ $game->team1->short_name }}</h5>
                                            <p class="team-score">{{ $game->score_team_1 ?? 'N/A' }}</p>
                                        </div>

                                        <!-- Versus Divider -->
                                        <div class="vs-divider">
                                            <span>VS</span>
                                        </div>

                                        <!-- Team 2 -->
                                        <div class="team">
                                            <div class="team-logo-container">
                                                <img src="{{ asset('storage/' . $game->team2->logo) }}" alt="{{ $game->team2->full_name }}" class="team-logo">
                                            </div>
                                            <h5 class="team-name">{{ $game->team2->short_name }}</h5>
                                            <p class="team-score">{{ $game->score_team_2 ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                    <div class="match-result">
                                        <p>{{ $game->result ?? 'Result Pending' }}</p>
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
