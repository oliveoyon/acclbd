@extends('web.layouts.weblayout')
@section('title', 'Contact Us')
@section('content')

<!-- Page Start Banner Area Start -->
<div class="page-title-banner">
                <div class="container">
                    <div class="content">
                        <h1 class="mb-16 light-black">Contact us</h1>
                        <p class="light-black">Your feedback, inquiries, and suggestions are important to us. <br> Contact us anytime, and we’ll make sure to <br> get back to you as soon as possible.</p>
                    </div>
                </div>
            </div>
            <!-- Page Start Banner Area End -->
            <!-- Main Content Start -->
            <div class="page-content">

                <!-- Contact Start -->
                <section class="contact p-60">
                    <div class="container">
                        <div class="row mb-24">
                            <div class="col-xl-4 mb-xl-0 mb-24">
                                <h3 class="light-black mb-32">Get in Touch with Us</h3>
                                <form method="post" action="#" class="contact-form form-validator">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="inputGroup white-bg mb-16">
                                                <input type="text" name="name" id="name" required="" autocomplete="off">
                                                <label for="name" >Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputGroup white-bg mb-16">
                                                <input type="email" name="email" id="email" required="" autocomplete="off">
                                                    <label for="email" >Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputGroup white-bg mb-16">
                                                <input type="text" id="subject" name="subject" required="" autocomplete="off">
                                                <label for="subject" >Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="inputGroup white-bg mb-24">
                                                <textarea required="" id="comments" name="comments" autocomplete="off"></textarea>
                                                <label for="comments">Write your comments here</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="cus-btn primary w-100">Send Message</button>
                                    <!-- Alert Message -->
                                    <div id="message" class="alert-msg"></div>
                                </form>
                            </div>
                            <div class="col-xl-8">
                                <img src="{{asset('assets/media/map/map.png')}}" class="br-20 w-100 shadow" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center row-gap-4">
                            <div class="col-xl-4 col-md-6">
                                <div class="contact-info-blog shadow">
                                    <i class="fal fa-map-marker-alt"></i>
                                    <h6 class="light-black">1 Kazi Alauddin Road, Bongshal, Dhaka</h6>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="tel:0123456789" class="contact-info-blog shadow">
                                    <i class="fal fa-phone-alt"></i>
                                    <span>+88 01716 552497</span>
                                </a>

                            </div>
                            <div class="col-xl-4 col-md-6">
                                <a href="mailto:info@example.com" class="contact-info-blog shadow">
                                    <i class="fal fa-envelope"></i>
                                    <span>cricket@acclbd.xyz</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- Contact End -->

@endsection
