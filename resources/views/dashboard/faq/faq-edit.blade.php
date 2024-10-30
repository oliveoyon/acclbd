@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'Edit FAQ')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit FAQ</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.faqs.faq-list') }}">FAQ List</a></li>
                        <li class="breadcrumb-item active">Edit FAQ</li>
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
                        <div class="card-header bg-gray">
                            <h3 class="card-title">Edit FAQ</h3>
                        </div>
                        <form action="{{ route('admin.faqs.faq-update', $faq->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="question">Question</label>
                                    <input type="text" name="question" id="question" class="form-control" value="{{ $faq->question }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <textarea name="answer" id="answer" class="form-control" required>{{ $faq->answer }}</textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update FAQ</button>
                                <a href="{{ route('admin.faqs.faq-list') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
