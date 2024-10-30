@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'Gallery Management')

@push('admincss')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.0/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                    <h1 class="m-0">Gallery Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item">Gallery</li>
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
                        <div class="card-header bg-gray">
                            <h3 class="card-title">Gallery Images</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image_path">Image</label>
                                            <input type="file" class="form-control" id="image_path" name="image_path" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="orientation">Orientation</label>
                                            <select class="form-control" id="orientation" name="orientation" required>
                                                <option value="landscape">Landscape</option>
                                                <option value="portrait">Portrait</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Image</button>
                            </div>
                        </form>
                    </div>

                    <div class="card">
                        <div class="card-header bg-gray">
                            <h3 class="card-title">Existing Images</h3>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($images as $image)
                                    <tr>
                                        <td>{{ $image->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image" width="100">
                                        </td>
                                        <td>{{ $image->title ?? 'N/A' }}</td>

                                        <td>
                                            <form action="{{ route('admin.gallery.destroy', $image->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
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
@endsection
