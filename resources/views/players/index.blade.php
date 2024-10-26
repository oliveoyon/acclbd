
@extends('dashboard.admin.layouts.admin-layout-with-cdn')
@section('title', 'Players for ' . $team->full_name)

@section('content')
<style>
    .btn-group {
    display: flex;
    gap: 5px; /* Adjust the gap between buttons */
}

</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Players for {{ $team->full_name }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Players</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('admin.addPlayer', $team->id) }}" class="btn btn-primary mb-3">Add Player</a>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Player List</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Player Name</th>
                                        <th>Nickname</th>
                                        <th>Jersey No</th>
                                        <th>Type</th>
                                        <th>Special Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players as $player)
                                        <tr>
                                            <td>{{ $player->player_name }}</td>
                                            <td>{{ $player->nick_name }}</td>
                                            <td>{{ $player->jersey_no }}</td>
                                            <td>{{ $player->player_type }}</td>
                                            <td>{{ $player->special_type }}</td>
                                            <td>{{ $player->status }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.editPlayer', ['teamId' => $team->id, 'player' => $player->id]) }}" class="btn btn-warning">
                                                        Edit
                                                    </a>

                                                    <form action="{{ route('admin.deletePlayer', ['teamId' => $team->id, 'playerId' => $player->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this player?');" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
