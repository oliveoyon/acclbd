@extends('web.layouts.weblayout')
@section('title', 'Gallery')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-8 light-black">Gallery</h1>
            <div class="col-md-6"><p class="light-black">The moment we've captured!</p></div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">

    <section class="gallery p-40" aria-labelledby="gallery-heading">
        <div class="container">
            <div class="heading">
                <div class="left">
                    <h2 class="light-black" id="gallery-heading">Awesome Moments!</h2>
                </div>

            </div>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4 mb-4">
                        <div class="img-block br-20 shadow">
                            <img src="{{ asset('storage/' . $image->image_path) }}" alt class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



</div>
<!-- Main Content End -->

@endsection
