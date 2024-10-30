
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">

@stack('admincss')

<!-- Your custom CSS -->


  <style>
    [class*="sidebar-dark-"] .nav-sidebar > .nav-item > .nav-treeview {
    background-color: rgb(6 59 229 / 5%);
    }
  </style>
</head>
{{-- <body class="hold-transition sidebar-mini"> --}}
  {{-- <body class="sidebar-mini skin-green-light" data-gr-c-s-loaded="true" style="height: auto; min-height: 100%;"> --}}
  <body class="sidebar-mini skin-blue-light text-sm" data-gr-c-s-loaded="true" style="height: auto; min-height: 100%;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Config::get('languages')[App::getLocale()] }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
            @endif
        @endforeach
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"  id="tags">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  {{-- <aside class="main-sidebar sidebar-dark-success elevation-4"> --}}
    <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dashboard/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold">IconBangla</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dashboard/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="অনুসন্ধান করুন" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar text-sm flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a href="{{ route('admin.basicInfo') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Home Page Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.teams.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Team Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.games.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Game Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.galleryIndex') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Gallery Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.faqs.faq-list') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>FAQ Management</p>
            </a>
        </li>



          <li class="nav-item">
            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>{{ __('language.logout') }}</p>
              <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Developed By: IconBangla
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="">BizTrack</a></strong> All Right Reserved
  </footer>
</div>
<!-- ./wrapper -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>



@stack('adminjs')

<script type="text/javascript">

// AdminLTe 3.0.x
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
  $('ul.nav-sidebar a').filter(function() {
    return this.href == url;
  }).addClass('active');

// for treeview
  $('ul.nav-treeview a').filter(function() {
    return this.href == url;
  }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

  $('.select2bs4').select2({
      theme: 'bootstrap4'
    });


</script>




</body>
</html>
