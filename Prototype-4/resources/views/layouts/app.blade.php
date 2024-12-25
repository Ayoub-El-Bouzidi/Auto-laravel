<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- AdminLTE CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('vendor/admin-lte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/admin-lte/plugins/fontawesome-free/css/all.min.css') }}"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="{{ asset('vendor/admin-lte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <!-- Dashboard Link -->
                       
                
                        <!-- Categories Section -->
                        <li class="nav-item">
                            <a href="{{ route('category.create') }}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>Create Category</p>
                            </a>
                        </li>
                        <!-- Article Section -->
                        <li class="nav-item">
                            <a href="{{ route('article.create') }}" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>Create Article</p>
                            </a>
                        </li>
                </nav>
                
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">@yield('title', 'Dashboard')</h1>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">Anything you want</div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Your Company</a>.</strong> All rights reserved.
        </footer>
    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
