@extends('dashboard.admin.layouts.admin-layout-with-cdn')

@section('title', 'FAQ Details')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">FAQ Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.faqs.faq-list') }}">FAQ List</a></li>
                        <li class="breadcrumb-item active">FAQ Details</li>
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
                            <h3 class="card-title">FAQ</h3>
                        </div>
                        <div class="card-body">
                            <h5>Question:</h5>
                            <p>{{ $faq->question }}</p>
                            <h5>Answer:</h5>
                            <p>{{ $faq->answer }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.faqs.faq-edit', $faq->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('admin.faqs.faq-list') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
