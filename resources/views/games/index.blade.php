@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'Games List')

@push('admincss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Games List') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Games List') }}</li>
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

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Games List</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.games.create') }}" class="btn btn-primary">Add New Game</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Team 1</th>
                                        <th>Team 2</th>
                                        <th>Stadium</th>
                                        <th>Match Type</th>
                                        <th>Scheduled Datetime</th>
                                        <th>Score</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)
                                        <tr>
                                            <td>{{ $game->id }}</td>
                                            <td>{{ $game->team1->full_name }}</td>
                                            <td>{{ $game->team2->full_name }}</td>
                                            <td>{{ $game->stadium }}</td>
                                            <td>{{ $game->match_type }}</td>
                                            <td>{{ \Carbon\Carbon::parse($game->scheduled_datetime)->format('Y-m-d H:i') }}</td>

                                            <td>{{ $game->score_team_1 }} - {{ $game->score_team_2 }}</td>
                                            <td>
                                                @if($game->status == 1) Pending
                                                @elseif($game->status == 2) Completed
                                                @else Inactive
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this game?');">Delete</button>
                                                </form>
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
