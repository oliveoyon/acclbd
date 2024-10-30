@extends('web.layouts.weblayout')
@section('title', 'All teams')
@section('content')

<style>
    .team-item {
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-item:hover {
        transform: translateY(-5px);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .team-logo {
        flex-shrink: 0;
        height: 80px;
        /* width: 50%; */
        /* border-radius: 50%; */
        overflow: hidden;
        border: 2px solid #6c757d;
        margin-right: 15px;
    }

    .team-logo img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    .team-info h5 {
        font-size: 1.25rem;
        font-weight: 600;
        color: #343a40;
        margin: 0;
    }

    .team-info h6 {
        font-size: 1rem;
        color: #6c757d;
        margin: 0;
    }

    .team-info p {
        font-size: 0.875rem;
        color: #495057;
        margin-top: 5px;
    }

    .team-link {
        color: #007bff;
        text-decoration: none;
        font-size: 0.875rem;
        margin-top: 8px;
        display: inline-block;
        font-weight: 600;
    }

    .team-link:hover {
        color: #0056b3;
        text-decoration: underline;
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
            <div class="row">
                <!-- Example of a single team item -->
                @forelse ($teams as $team)
                <div class="col-md-6">
                    <div class="team-item">
                        <div class="team-logo">
                            <img src="{{ asset('storage/' . $team->logo) }}" alt="Team Logo">
                        </div>
                        <div class="team-info">
                            <h5>{{ $team->short_name }}</h5>
                            <h6>{{ $team->full_name }}</h6>
                            <a href="team-details/{{ $team->team_slug }}" class="team-link">View Team Details</a>
                        </div>
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