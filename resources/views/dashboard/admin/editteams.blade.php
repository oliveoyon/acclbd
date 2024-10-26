@extends('dashboard.admin.layouts.admin-layout-with-cdn')
@section('title', 'Edit a Team')
@push('admincss')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">

<!-- Add your custom CSS here -->
<style>
    .required:after {
        content: " *";
        color: red;
    }

    .card-title {
        font-size: 20px;
        color: white;
        font-family: 'Lucida Sans', 'SolaimanLipi';
    }
</style>

@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit a Team') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item">{{ __('Edit a Team') }}</li>
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
                            <h3 class="card-title">Edit Team</h3>
                        </div>
                        <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="full_name">Team Full Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $team->full_name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_name">Short Name</label>
                                            <input type="text" class="form-control" id="short_name" name="short_name" value="{{ $team->short_name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="group_name">Group Name</label>
                                            <select class="form-control" id="group_name" name="group_name" required>
                                                <option value="Group A" {{ $team->group_name == 'Group A' ? 'selected' : '' }}>Group A</option>
                                                <option value="Group B" {{ $team->group_name == 'Group B' ? 'selected' : '' }}>Group B</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="0" {{ $team->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                <option value="1" {{ $team->status == 1 ? 'selected' : '' }}>Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="logo">Logo</label>
                                            <input type="file" class="form-control" id="logo" name="logo">
                                            @if($team->logo)
                                                <img src="{{ asset('storage/' . $team->logo) }}" alt="Logo" style="width:100px;">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="team_image">Team Image</label>
                                            <input type="file" class="form-control" id="team_image" name="team_image">
                                            @if($team->team_image)
                                                <img src="{{ asset('storage/' . $team->team_image) }}" alt="Team Image" style="width:100px;">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description">{{ $team->description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="year">Year</label>
                                            <input type="text" class="form-control" id="year" name="year" value="{{ $team->year }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Team</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
