@extends('dashboard.admin.layouts.admin-layout-with-cdn')
@section('title', 'Bulk Student Admission')
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
        font-family: 'Lucida Sans', 'SolaimanLipi'
    }


</style>

@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('language.bulk_student_admission') }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('language.dashboard') }}</a></li>
                        <li class="breadcrumb-item">{{ __('language.bulk_student_admission') }}</li>
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

                <form action="{{ route('admin.infoupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header bg-gray">
                            <h3 class="card-title">Information Details</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Hidden ID Field -->
                            <input type="hidden" name="id" id="id" value="{{ old('id', $information->id ?? '') }}">

                            <div class="row">
                                <!-- Title -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" value="{{ old('title', $information->title ?? '') }}">
                                    </div>
                                </div>

                                <!-- Home Title -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="home_title">Home Title</label>
                                        <input type="text" name="home_title" id="home_title" class="form-control" placeholder="Enter Home Title" value="{{ old('home_title', $information->home_title ?? '') }}">
                                    </div>
                                </div>

                                <!-- Home Title Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="home_title_short_description">Home Title Short Description</label>
                                        <textarea name="home_title_short_description" id="home_title_short_description" class="form-control summernote">{{ old('home_title_short_description', $information->home_title_short_description ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Last Match Result -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_match_result">Last Match Result</label>
                                        <input type="text" name="last_match_result" id="last_match_result" class="form-control" placeholder="Enter Last Match Result" value="{{ old('last_match_result', $information->last_match_result ?? '') }}">
                                    </div>
                                </div>

                                <!-- Last Match Result Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="last_match_result_short_desc">Last Match Result Short Description</label>
                                        <textarea name="last_match_result_short_desc" id="last_match_result_short_desc" class="form-control summernote">{{ old('last_match_result_short_desc', $information->last_match_result_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- About Main (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="about_main">About Main</label>
                                        <textarea name="about_main" id="about_main" class="form-control summernote">{{ old('about_main', $information->about_main ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Mission (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="mission">Mission</label>
                                        <textarea name="mission" id="mission" class="form-control summernote">{{ old('mission', $information->mission ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Vision (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="vision">Vision</label>
                                        <textarea name="vision" id="vision" class="form-control summernote">{{ old('vision', $information->vision ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Values (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="values">Values</label>
                                        <textarea name="values" id="values" class="form-control summernote">{{ old('values', $information->values ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Upcoming Match -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="upcoming_match">Upcoming Match</label>
                                        <input type="text" name="upcoming_match" id="upcoming_match" class="form-control" placeholder="Enter Upcoming Match" value="{{ old('upcoming_match', $information->upcoming_match ?? '') }}">
                                    </div>
                                </div>

                                <!-- Upcoming Match Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="upcoming_match_short_desc">Upcoming Match Short Description</label>
                                        <textarea name="upcoming_match_short_desc" id="upcoming_match_short_desc" class="form-control summernote">{{ old('upcoming_match_short_desc', $information->upcoming_match_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Gallery -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gallery">Gallery</label>
                                        <input type="text" name="gallery" id="gallery" class="form-control" placeholder="Enter Gallery" value="{{ old('gallery', $information->gallery ?? '') }}">
                                    </div>
                                </div>

                                <!-- Gallery Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="gallery_short_desc">Gallery Short Description</label>
                                        <textarea name="gallery_short_desc" id="gallery_short_desc" class="form-control summernote">{{ old('gallery_short_desc', $information->gallery_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Ready to Play -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ready_to_play">Ready to Play</label>
                                        <input type="text" name="ready_to_play" id="ready_to_play" class="form-control" placeholder="Enter Ready to Play" value="{{ old('ready_to_play', $information->ready_to_play ?? '') }}">
                                    </div>
                                </div>

                                <!-- Ready to Play Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="ready_to_play_short_desc">Ready to Play Short Description</label>
                                        <textarea name="ready_to_play_short_desc" id="ready_to_play_short_desc" class="form-control summernote">{{ old('ready_to_play_short_desc', $information->ready_to_play_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Meet the Teams -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="meet_the_teams">Meet the Teams</label>
                                        <input type="text" name="meet_the_teams" id="meet_the_teams" class="form-control" placeholder="Enter Meet the Teams" value="{{ old('meet_the_teams', $information->meet_the_teams ?? '') }}">
                                    </div>
                                </div>

                                <!-- Meet the Team Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="meet_the_team_short_desc">Meet the Team Short Description</label>
                                        <textarea name="meet_the_team_short_desc" id="meet_the_team_short_desc" class="form-control summernote">{{ old('meet_the_team_short_desc', $information->meet_the_team_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Testimonial (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="testimonial">Testimonial</label>
                                        <textarea name="testimonial" id="testimonial" class="form-control summernote">{{ old('testimonial', $information->testimonial ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Testimonial Short Description (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="testimonial_short_desc">Testimonial Short Description</label>
                                        <textarea name="testimonial_short_desc" id="testimonial_short_desc" class="form-control summernote">{{ old('testimonial_short_desc', $information->testimonial_short_desc ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" value="{{ old('address', $information->address ?? '') }}">
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone" value="{{ old('phone', $information->phone ?? '') }}">
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ old('email', $information->email ?? '') }}">
                                    </div>
                                </div>

                                <!-- Footer (Summernote) -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="footer">Footer</label>
                                        <textarea name="footer" id="footer" class="form-control summernote">{{ old('footer', $information->footer ?? '') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
