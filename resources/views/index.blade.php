<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{setting('site.title')}}</title>
    <link href="{{asset('assets/error/assets/img/1favicon.png')}}" rel="icon">
    <link href="{{asset('assets/error/assets/img/1apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
@include('header')
    <!-- ################# Slider Starts Here#######################--->
 @yield('content')

  	<!-- ################# Testimonial Starts Here#######################--->


      <!-- ################# Footer Starts Here#######################--->

      @include('footer')



    </body>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>


</html>
