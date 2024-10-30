<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Striker HTML5 Template">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/media/favicon.png') }}">

    <!-- All CSS files -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/aksVideoPlayer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <!-- Preloader-->
    <div id="preloader">
        <div class="loader">
            <!-- Replace SVG with an image -->
            <img src="{{ asset('assets/media/vector/logo.png') }}" alt="" id="bat">
        </div>
    </div>
    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top"><i class="fas fa-angle-up"></i></a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper overflow-hidden">

        <!-- Header Area Start -->
        <header class="large-screens">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <div class="col-lg-8">
                            <div class="left-nav">
                                <a href="{{ url('/') }}" class="navbar-brand m-0 p-0">
                                    <img src="{{ asset('assets/media/vector/logo.png') }}" style="height: 80px;" alt="">
                                </a>
                                <ul class="navbar-nav m-0">
                                    <li class="menu-item"><a href="{{ url('/') }}" class="active">Home</a></li>
                                    <li class="menu-item"><a href="{{ url('/about-us') }}">ABOUT US</a></li>
                                    <li class="has-children">
                                        <a href="javascript:void(0);">Info Hub</a>
                                        <ul class="submenu">
                                            
                                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                            <li><a href="{{ url('/teams') }}">Teams</a></li>
                                            <li><a href="{{ url('/match-result') }}">Match Result</a></li>
                                            <li><a href="{{ url('/match-result') }}">Match Schedule</a></li>
                                            <li><a href="{{ url('/faq') }}">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="{{ url('/match-schedule') }}">TOURNAMENTS</a></li>
                                    <li class="menu-item"><a href="{{ url('/contact-us') }}">CONTACT US</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <form action="{{ url('/search') }}" class="input-group search-bar">
                                <input type="text" placeholder="Search..." required>
                                <button class="search" type="submit"><i class="far fa-search search-icon"></i></button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Header Area end -->

        @yield('content')

        <!-- Footer Area Start  -->
        <footer>
            <div class="newslatter p-40 bg-green">
                <div class="container">
                    <div class="content">
                        <h4 class="color-white">Subscribe to our Newsletter!</h4>
                        <form action="{{ url('/subscribe') }}">
                            <div class="search">
                                <input name="Email" placeholder="Your Email" type="text">
                                <button type="submit" class="cus-btn dark">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-main mb-64">
                    <div class="footer-info">
                        <div class="footer-about">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/media/logo.png') }}" alt="" style="height: 100px">
                                </a>
                            </div>
                            <p class="dark-gray">Thank you for visiting the Amateur Corporate Cricket League!<br>Stay connected with us for updates, match schedules, and more.<br>Together, let's celebrate the spirit of corporate cricket! </p>
                        </div>
                        <div class="menu">
                            <h5 class="light-black">MENU</h5>
                            <ul class="link unstyled">
                                <li class="mb-16">
                                    <a href="{{ url('/') }}"><p class="dark-gray">Home</p></a>
                                </li>
                                <li class="mb-16">
                                    <a href="{{ url('/about') }}"><p class="dark-gray">About us</p></a>
                                </li>
                                <li class="">
                                    <a href="{{ url('/tournaments') }}"><p class="dark-gray">Tournaments</p></a>
                                </li>
                            </ul>
                        </div>
                        <div class="contact">
                            <h5 class="light-black">CONTACT US</h5>
                            <ul class="contact-list unstyled">
                                <li class="mb-16"><i class="fal fa-map-marker-alt"></i> <h6>1 Kazi Alauddin Road, Bongshal, Dhaka</h6></li>
                                <li class="mb-16">
                                    <a href="tel:+8801716552497"><i class="fal fa-phone-alt"></i> <span>+88 01716 552497</span></a>
                                </li>
                                <li>
                                    <a href="mailto:cricket@acclbd.xyz"><i class="fal fa-envelope"></i> <span>cricket@acclbd.xyz</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="social">
                            <h5 class="light-black">FOLLOW US!</h5>
                            <ul class="unstyled social-icons">
                                <li><a target="_blank" href="https://www.facebook.com/acclbd.xyz/"><img src="{{ asset('assets/media/icons/Facebook.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="dark-gray text-center mb-16">©2024 ACCLBD All Rights Reserved | Developed By <a href="https://iconbangla.net" target="_blank" rel="noopener noreferrer">IconBangla</a></p>
            </div>
        </footer>
        <!-- Footer Area End  -->

        <!-- modal-popup area start  -->
        <div class="modal fade" id="videoModal" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EzDC8aAJln0" id="video"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal-popup area end  -->

    </div>

    <!-- Jquery Js -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-validator.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
