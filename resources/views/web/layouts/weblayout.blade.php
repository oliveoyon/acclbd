<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Striker HTML5 Template">

        <title>@yield('title')</title>


        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon"
            href="assets/media/favicon.png">

        <!-- All CSS files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
        <link rel="stylesheet" href="assets/css/vendor/slick.css">
        <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
        <link rel="stylesheet" href="assets/css/vendor/aksVideoPlayer.css">
        <link rel="stylesheet" href="assets/css/app.css">
    </head>

    <body>
        <!-- Preloader-->
        <div id="preloader">
            <div class="loader">
                <!--cricket ball svg-->
                {{-- <img src="assets/media/vector/boll.png" id="ball" alt="ball"> --}}

                <!--cricket bat svg-->
                {{-- <svg id="bat" viewBox="0 0 460.84737 460.84737" xmlns="http://www.w3.org/2000/svg">
                    <path d="m460.847656 31.75-25.070312 25.078125-31.761719-31.757813 25.082031-25.070312zm0 0" fill="#a85d5d" />
                    <path d="m378.945312 50.140625 25.070313-25.070313 31.761719 31.757813-25.070313 25.070313zm0 0" fill="#7f4545" />
                    <path d="m353.878906 75.210938 25.066406-25.070313 31.761719 31.757813-25.070312 25.070312zm0 0" fill="#a85d5d" />
                    <path d="m328.808594 100.28125 25.066406-25.070312 31.761719 31.757812-25.070313 25.070312zm0 0" fill="#7f4545" />
                    <path d="m360.566406 132.039062-25.078125 25.070313-31.75-31.75 25.070313-25.078125zm0 0" fill="#a85d5d" />
                    <path d="m352.425781 190.320312-260.136719 260.140626c-13.847656 13.847656-36.296874 13.847656-50.140624 0l-31.761719-31.761719c-13.847657-13.84375-13.847657-36.296875 0-50.140625l260.140625-260.136719 25.070312 25.066406-.21875.222657-76.050781 107.808593 107.808594-76.050781.21875-.21875zm0 0" fill="#ffd2a6" />
                    <path d="m327.355469 165.25-.21875.21875-107.808594 76.050781 76.050781-107.808593.21875-.222657zm0 0" fill="#7f4545" />
                </svg> --}}
                <img src="assets/media/vector/logo.png" alt="" id="bat">
            </div>
        </div>
        <!-- Back To Top Start -->
        <a href="#main-wrapper" id="backto-top" class="back-to-top"><i
                class="fas fa-angle-up"></i></a>
        <!-- Main Wrapper Start -->
        <div id="main-wrapper" class="main-wrapper overflow-hidden">

            <!-- Header Area Start -->
            <header class="large-screens">
                <div class="container">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="collapse navbar-collapse" id="mynavbar">
                            <div class="col-lg-8">
                                <div class="left-nav">
                                    <a href="index.html"
                                        class="navbar-brand m-0 p-0"><img src="assets/media/vector/logo.png" style="height: 80px;" alt=""></a>
                                    <ul class="navbar-nav m-0">
                                        <li class="menu-item"><a
                                                href="index.html" class="active">Home</a></li>
                                        <li class="menu-item"><a
                                                href="about.html">ABOUT US</a></li>
                                        <li class="has-children">
                                            <a href="javascript:void(0);">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-detail.html">blog
                                                        detail </a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="team.html">Team
                                                    </a></li>
                                                <li><a href="player-detail.html">Player
                                                        Detail</a></li>
                                                <li><a href="match-result.html">Match
                                                        Result</a></li>
                                                <li><a
                                                        href="match-schedule.html">Match
                                                        Schedule</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="match-schedule.html">TOURNAMENTS</a></li>
                                        <li class="menu-item"><a
                                                href="contact.html">CONTACT US</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <form action="https://uiparadox.co.uk/templates/cricket-pulse/v2/index.html"
                                    class="input-group search-bar">
                                    <input type="text" placeholder="Search..." required >
                                    <button class="search" type="submit"><i
                                            class="far fa-search search-icon"></i></button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <header class="small-screen">
                <div class="container-fluid">
                    <div class="mobile-menu">
                        <div>
                            <a class="navbar-brand" href="index.html"><img alt
                                    src="assets/media/logo.png"></a>
                        </div>
                        <div class="hamburger-menu">
                            <div class="bar"></div>
                        </div>
                    </div>
                    <nav class="mobile-navar d-xl-none">
                        <ul>
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="about.html">ABOUT US</a></li>
                            <li class="has-children">Pages <span
                                    class="icon-arrow"></span>
                                <ul class="children">
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-detail.html">blog detail
                                        </a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="team.html">Team </a></li>
                                    <li><a href="player-detail.html">Player
                                            Detail</a></li>
                                    <li><a href="match-result.html">Match Result</a></li>
                                    <li><a href="match-schedule.html">Match
                                            Schedule</a></li>
                                    <li><a href="faq.html">FAQ's</a></li>
                                </ul>
                            </li>
                            <li><a href="match-schedule.html">TOURNAMENTS</a></li>
                            <li><a href="contact.html">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- Header Area end -->

            @yield('content')

            <!-- Main Content End -->

            <!-- Footer Area Start  -->
                <footer >
                    <div class="newslatter p-40 bg-green">
                        <div class="container">
                            <div class="content">
                                <h4 class="color-white">Subscribe to our Newslatter!</h4>
                                <form action="https://uiparadox.co.uk/templates/cricket-pulse/v2/index.html">
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
                                        <a href="index.html">
                                            <img src="assets/media/logo.png" alt="" style="height: 100px">
                                        </a>
                                    </div>
                                    <p class="dark-gray">Thank you for visiting the Amateur Corporate Cricket League!<br>Stay connected with us for updates, match schedules, and more.<br>Together, let's celebrate the spirit of corporate cricket! </p>
                                </div>
                                <div class="menu">
                                    <h5 class="light-black">MENU</h5>
                                    <ul class="link unstyled">
                                        <li class="mb-16">
                                            <a href="index.html"><p class="dark-gray">Home</p></a>
                                        </li>
                                        <li class="mb-16">
                                            <a href="about.html"><p class="dark-gray">About us</p></a>
                                        </li>
                                        <li class="">
                                            <a href="tournaments.html"><p class="dark-gray">Tournaments</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact">
                                    <h5 class="light-black">CONTACT US</h5>
                                    <ul class="contact-list unstyled">
                                        <li class="mb-16"> <i class="fal fa-map-marker-alt"></i> <h6>1 Kazi Alauddin Road, Bongshal</h6>
                                        </li>
                                        <li class="mb-16">
                                            <a href="tel:0123456789"> <i class="fal fa-phone-alt"></i> <span>+88 01716 552497</span></a>
                                        </li>
                                        <li class="">
                                            <a href="mailto:info@example.com"><i class="fal fa-envelope"></i>  <span>cricket@acclbd.xyz</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <h5 class="light-black ">FOLLOW US!</h5>
                                    <ul class="unstyled social-icons">
                                        <li><a target="_blank" href="https://www.facebook.com/acclbd.xyz/"><img src="assets/media/icons/Facebook.png" alt=""></a></li>
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
                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close">
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
        <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery-appear.js"></script>
        <script src="assets/js/vendor/jquery-validator.js"></script>
        <script src="assets/js/vendor/aksVideoPlayer.js"></script>

        <!-- Site Scripts -->
        <script src="assets/js/app.js"></script>
    </body>

</html>
