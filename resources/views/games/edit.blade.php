@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'Edit Game')

@push('admincss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Game') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.games.index') }}">{{ __('Games List') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Edit Game') }}</li>
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
                            <h3 class="card-title">{{ __('Edit Game Details') }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.games.update', $game->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="team_1_id">Team 1</label>
                                            <select name="team_1_id" id="team_1_id" class="form-control" required>
                                                <option value="">Select Team 1</option>
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}" {{ $team->id == $game->team_1_id ? 'selected' : '' }}>
                                                        {{ $team->full_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('team_1_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="stadium">Stadium</label>
                                            <input type="text" name="stadium" id="stadium" class="form-control" placeholder="Enter Stadium Name" value="{{ $game->stadium }}" required>
                                            @error('stadium')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="match_type">Match Type</label>
                                            <input type="text" name="match_type" id="match_type" class="form-control" placeholder="Enter Match Type" value="{{ $game->match_type }}" required>
                                            @error('match_type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="scheduled_datetime">Scheduled Date and Time</label>
                                            <input type="datetime-local" name="scheduled_datetime" id="scheduled_datetime" class="form-control" value="{{ \Carbon\Carbon::parse($game->scheduled_datetime)->format('Y-m-d\TH:i') }}" required>
                                            @error('scheduled_datetime')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="score_team_1">Score Team 1</label>
                                            <input type="text" name="score_team_1" id="score_team_1" class="form-control" placeholder="Enter Score for Team 1" value="{{ $game->score_team_1 }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="result">Result</label>
                                            <input type="text" name="result" id="result" class="form-control" placeholder="Enter Result" value="{{ $game->result }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="team_2_id">Team 2</label>
                                            <select name="team_2_id" id="team_2_id" class="form-control" required>
                                                <option value="">Select Team 2</option>
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}" {{ $team->id == $game->team_2_id ? 'selected' : '' }}>
                                                        {{ $team->full_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('team_2_id')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="score_team_2">Score Team 2</label>
                                            <input type="text" name="score_team_2" id="score_team_2" class="form-control" placeholder="Enter Score for Team 2" value="{{ $game->score_team_2 }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{ $game->status == 1 ? 'selected' : '' }}>Pending</option>
                                                <option value="2" {{ $game->status == 2 ? 'selected' : '' }}>Completed</option>
                                                <option value="0" {{ $game->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="match_details">Match Details</label>
                                            <textarea name="match_details" id="match_details" class="form-control summernote" rows="3" placeholder="Enter Match Details">{{ $game->match_details }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Game</button>
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
@push('adminjs')
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js"></script>

        <script>
            $(document).ready(function() {
                $('.summernote').summernote({
                    height: 100, // set the height of the editor
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            });
        </script>



@endpush

