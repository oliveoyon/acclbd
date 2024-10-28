@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'Create Game')

@push('admincss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Create Game') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.games.index') }}">{{ __('Games List') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Create Game') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ __('Create New Game') }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.games.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="team_1_id">Team 1</label>
                                    <select name="team_1_id" id="team_1_id" class="form-control" required>
                                        <option value="">Select Team 1</option>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->full_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_1_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="team_2_id">Team 2</label>
                                    <select name="team_2_id" id="team_2_id" class="form-control" required>
                                        <option value="">Select Team 2</option>
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->full_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('team_2_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="stadium">Stadium</label>
                                    <input type="text" name="stadium" id="stadium" class="form-control" placeholder="Enter Stadium Name" required>
                                    @error('stadium')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="match_type">Match Type</label>
                                    <input type="text" name="match_type" id="match_type" class="form-control" placeholder="Enter Match Type" required>
                                    @error('match_type')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="scheduled_datetime">Scheduled Date and Time</label>
                                    <input type="datetime-local" name="scheduled_datetime" id="scheduled_datetime" class="form-control" required>
                                    @error('scheduled_datetime')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="score_team_1">Score Team 1</label>
                                    <input type="number" name="score_team_1" id="score_team_1" class="form-control" placeholder="Enter Score for Team 1" value="0">
                                </div>

                                <div class="form-group">
                                    <label for="score_team_2">Score Team 2</label>
                                    <input type="number" name="score_team_2" id="score_team_2" class="form-control" placeholder="Enter Score for Team 2" value="0">
                                </div>

                                <div class="form-group">
                                    <label for="match_details">Match Details</label>
                                    <textarea name="match_details" id="match_details" class="form-control" rows="3" placeholder="Enter Match Details"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Pending</option>
                                        <option value="2">Completed</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Create Game</button>
                                <a href="{{ route('admin.games.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
