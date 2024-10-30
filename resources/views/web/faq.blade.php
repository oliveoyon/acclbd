@extends('web.layouts.weblayout')
@section('title', 'FAQ')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
    <div class="container">
        <div class="content">
            <h1 class="mb-16 light-black">FAQ's</h1>
            <p class="light-black">We’re Here to Help: Your Questions, Our Answers.</p>
        </div>
    </div>
</div>
<!-- Page Start Banner Area End -->

<!-- Main Content Start -->
<div class="page-content">

    <!-- Faq Start -->
    <section class="faq p-60">
        <div class="container">
            <div class="heading">
                <div class="left">
                    <h2 class="light-black">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 mb-24 mb-xl-0">
                    <div id="faqExample">
                        <div class="accordion mb-24" id="faqExample">
                            @forelse($faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }} fw-6 fs-25 font-sec color-dark-2 lh-130" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqExample">
                                        <div class="accordion-body">
                                            <p class="dark-gray">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="accordion-item">
                                    <div class="accordion-body">
                                        <p class="dark-gray">No FAQs available at the moment.</p>
                                    </div>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-form">
                        <div class="mb-24">
                            <h3 class="light-black mb-8">Ask a different questions</h3>
                            <p class="dark-gray">Lorem ipsum dolor sit amet consectetur nunc faucibus ut ornare.</p>
                        </div>
                            <form action="https://uiparadox.co.uk/templates/cricket-pulse/v2/faq.html">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="inputGroup mb-24">
                                        <input type="text" id="name" required="" autocomplete="off">
                                        <label for="name" >Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="inputGroup mb-24">
                                        <input type="email" required="" id="email" autocomplete="off">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="inputGroup mb-24">
                                        <textarea required="" id="comments" autocomplete="off"></textarea>
                                        <label for="comments">Write your comments here</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="cus-btn primary w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq End -->

</div>
<!-- Main Content End -->


@endsection
