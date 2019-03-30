<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 3/3/19
 * Time: 3:41 PM
 */
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <!-- template -->

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

    <!-- End template -->


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} -  @yield('title')</title>

    <!--      Notifications       -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- Scripts -->


    <!-- Fonts -->


    <!-- Styles -->

    @stack('css')

</head>
<body>

    <!-- header -->
    @include('layouts.frontend.partial.header')
    <!-- End header -->


    @yield('content')

    <!-- footer -->
    @include('layouts.frontend.partial.footer')
    <!-- End footer -->









    <!-- Script -->

    <script src="{{ asset('assets/frontend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/frontend/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <!--      Notifications       -->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    @stack('js')

</body>
</html>

