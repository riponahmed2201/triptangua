<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.layouts.css')
</head>

<body>

    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
        <div id="preloader-status">
            <div class="preloader-position loader"> <span></span> </div>
        </div>
    </div>

    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Menu -->
    <div class="main-header">
        <!-- Navbar Top -->
        @include('frontend.layouts.topnavbar')

        <!-- Navbar -->
        @include('frontend.layouts.navbar')
    </div>

    @yield('home-content')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- jQuery -->
    @include('frontend.layouts.js')
</body>

</html>
