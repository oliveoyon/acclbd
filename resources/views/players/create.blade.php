@extends('dashboard.admin.layouts.admin-layout-with-cdn')
@section('title', 'Add Player to ' . $team->full_name)

@push('admincss')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Player for {{ $team->full_name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.viewPlayers', $team->id) }}">Players</a></li>
                        <li class="breadcrumb-item active">Add Player</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.storePlayer', $team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Player Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="player_name">Player Name</label>
                                            <input type="text" class="form-control" id="player_name" name="player_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nick_name">Nickname</label>
                                            <input type="text" class="form-control" id="nick_name" name="nick_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="jersey_no">Jersey No</label>
                                            <input type="text" class="form-control" id="jersey_no" name="jersey_no" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="player_type">Player Type</label>
                                            <select class="form-control" id="player_type" name="player_type" required>
                                                <option value="">Select Type</option>
                                                <option value="Batsman">Batsman</option>
                                                <option value="Bowler">Bowler</option>
                                                <option value="All Rounder">All Rounder</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="special_type">Special Role</label>
                                            <select class="form-control" id="special_type" name="special_type">
                                                <option value="">Select Special Role</option>
                                                <option value="Captain">Captain</option>
                                                <option value="Vice Captain">Vice Captain</option>
                                                <option value="Wicket Keeper">Wicket Keeper</option>
                                                <!-- Add more roles as needed -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="year">Year</label>
                                            <input type="number" class="form-control" id="year" name="year" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="player_image">Player Image</label>
                                            <input type="file" class="form-control" id="player_image" name="player_image" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="biography">Biography</label>
                                    <textarea class="form-control summernote" id="biography" name="biography"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Player</button>
                                <a href="{{ route('admin.viewPlayers', $team->id) }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('adminjs')
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
