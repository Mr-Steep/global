<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="skrollr skrollr-desktop">
<head>

{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <script async="" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script async="" src="https://cube.webuildthemes.com/assets/js/vendor.bundle.js"></script>
    <script async="" src="https://cube.webuildthemes.com/assets/js/index.bundle.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" /> -->

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cube.webuildthemes.com/assets/css/libs.bundle.css">
    <link rel="stylesheet" href="https://cube.webuildthemes.com/assets/css/index.bundle.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/index.bundle.css">

    <!-- Title -->
    <style>
        html,body{
            color: rgb(244, 244, 244) !important;
            background-color: rgb(6, 17, 33) !important;
        }
    </style>
    <title>GlobalStake</title>
</head>

<body class="headroom headroom--not-bottom headroom--pinned headroom--top" data-aos-easing="ease" data-aos-duration="800" data-aos-delay="0">


<!-- navbar -->

{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

<!-- nav -->
@include('layouts.navigation-new')
{{--@include('layouts.navigation')--}}


<!-- steps -->
@include('layouts.center')


<!-- cta -->
<section class="pb-15 pb-xl-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h5 class="fs-20">Let's build something together, <a href="" class="action underline"> get in touch
                        with us
                        <i class="bi bi-arrow-right"></i></a> </h5>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('layouts.footer')


</body>
</html>
