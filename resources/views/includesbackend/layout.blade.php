<!DOCTYPE html>
<html>

<head>
    @include('includesbackend.head')
    <!-- Favicon -->
    @include('includesbackend.style')

</head>

<body>
    <!-- Sidenav -->
    @include('includesbackend.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('includesbackend.navbar')
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i
                                                class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#"></a>@yield('title') </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            @yield('btn-right')
                        </div>
                    </div>
                    <!-- Card stats -->
                    @yield('header')
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('content')
            <!-- Footer -->
            @include('includesbackend.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->

    @include('includesbackend.script')
    @yield('script')
</body>

</html>
