<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LaraPi | MyBack</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- BEGIN::Wrapper -->
<div class="wrapper" id="app">
    <!-- BEGIN::Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- BEGIN::Left Navbar Link -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        </ul>
        <!-- END::Left Navbar Link -->
        <!-- BEGIN::SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
        </form>
        <!-- END::SEARCH FORM -->
    </nav>
    <!-- END::Navbar -->

    <!-- BEGIN::Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- BEGIN::Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="./img/logo.png" alt="LaraPi Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">LaraPi</span>
        </a>
        <!-- END::Brand Logo -->

        <!-- BEGIN::Sidebar -->
        <div class="sidebar">
            <!-- BEGIN::Sidebar User Panel -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Pedro Iriano</a>
                </div>
            </div>
            <!-- END::Sidebar User Panel -->

            <!-- BEGIN::Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <router-link to="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt blue"></i>
                    <p>Dashboard</p>
                    </router-link>
                </li>
                <li class="nav-item has-treeview">
                    <router-link to="#" class="nav-link">
                    <i class="nav-icon fas fa-cog green"></i>
                    <p>
                        Management
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </router-link>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <router-link to="/users" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Users</p>
                        </router-link>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <p>Profile</p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off red"></i>
                        <p>{{ __('Logout') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                </ul>
            </nav>
            <!-- END::Sidebar Menu -->
        </div>
        <!-- END::Sidebar -->
    </aside>
    <!-- END::Main Sidebar Container -->

    <!-- BEGIN::Content Wrapper -->
    <div class="content-wrapper">
        <!-- BEGIN::Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Starter Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- END::Content Header -->

        <!-- BEGIN::Main Content -->
        <div class="content">
        <div class="container-fluid">
            <!-- SET::Router View -->
            <router-view></router-view>
            <!-- SET::Progress Bar -->
            <vue-progress-bar></vue-progress-bar>
        </div>
        </div>
        <!-- END::Main Content -->
    </div>
    <!-- END::Content Wrapper -->

    <!-- BEGIN::Main Footer -->
    <footer class="main-footer">
        <!-- BEGIN::To the right -->
        <div class="float-right d-none d-sm-inline">
            LaraPi
        </div>
        <!-- END::To the right -->
        <!-- BEGIN::Default to the left -->
        <strong>Copyright &copy; 2020 <a href="http://pepeve-group.com">PPV</a>.</strong> All rights reserved.
        <!-- END::Default to the left -->
    </footer>
    <!-- END::Main Footer -->
</div>
<!-- END::Wrapper -->

<!-- BEGIN::REQUIRED SCRIPTS -->
<script src="/js/app.js"></script>
<!-- <script src="./node_modules/datatables.net-dt/js/dataTables.dataTables.js"></script>
<script src="./node_modules/datatables.net/js/jquery.dataTables.js"></script> -->
<!-- END::REQUIRED SCRIPTS -->
</body>
</html>
