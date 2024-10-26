@extends('dashboard.admin.layouts.admin-layout-with-cdn')
@section('title', 'Edit Player for ' . $team->full_name)
@push('admincss')
   <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Player for {{ $team->full_name }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.viewPlayers', $team->id) }}">Players</a></li>
                            <li class="breadcrumb-item active">Edit Player</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.updatePlayer', ['teamId' => $team->id, 'player' => $player->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Player Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="player_name">Player Name</label>
                                                <input type="text" class="form-control" id="player_name" name="player_name" value="{{ $player->player_name }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nick_name">Nickname</label>
                                                <input type="text" class="form-control" id="nick_name" name="nick_name" value="{{ $player->nick_name }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jersey_no">Jersey No</label>
                                                <input type="text" class="form-control" id="jersey_no" name="jersey_no" value="{{ $player->jersey_no }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="player_type">Player Type</label>
                                                <select class="form-control" id="player_type" name="player_type" required>
                                                    <option value="Batsman" {{ $player->player_type == 'Batsman' ? 'selected' : '' }}>Batsman</option>
                                                    <option value="Bowler" {{ $player->player_type == 'Bowler' ? 'selected' : '' }}>Bowler</option>
                                                    <option value="All Rounder" {{ $player->player_type == 'All Rounder' ? 'selected' : '' }}>All Rounder</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="special_type">Special Role</label>
                                                <select class="form-control" id="special_type" name="special_type">
                                                    <option value="">Select Special Role</option>
                                                    <option value="Captain" {{ $player->special_type == 'Captain' ? 'selected' : '' }}>Captain</option>
                                                    <option value="Vice Captain" {{ $player->special_type == 'Vice Captain' ? 'selected' : '' }}>Vice Captain</option>
                                                    <option value="Wicket Keeper" {{ $player->special_type == 'Wicket Keeper' ? 'selected' : '' }}>Wicket Keeper</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="1" {{ $player->status ? 'selected' : '' }}>Active</option>
                                                    <option value="0" {{ !$player->status ? 'selected' : '' }}>Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="year">Year</label>
                                                <input type="number" class="form-control" id="year" name="year" value="{{ $player->year }}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="player_image">Player Image</label>
                                                <input type="file" class="form-control" id="player_image" name="player_image" onchange="previewImage(event)">
                                            </div>
                                            <div class="form-group">
                                                <label>Preview Image</label>
                                                <img id="image_preview" src="{{ $player->player_image ? asset('storage/' . $player->player_image) : '' }}" alt="Image Preview" class="img-fluid" style="display: {{ $player->player_image ? 'block' : 'none' }}; max-width: 100%;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="biography">Biography</label>
                                        <textarea class="form-control summernote" id="biography" name="biography">{{ $player->biography }}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Player</button>
                                    <a href="{{ route('admin.viewPlayers', $team->id) }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const imagePreview = document.getElementById('image_preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = 'block';
        }
    </script>
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
