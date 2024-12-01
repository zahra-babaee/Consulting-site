<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Saliz Psychology </title>

    <link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawsom-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
</head>

<header id="menu-jk">
    <nav  class="">
        <div class="container">
            <div class="row nav-ro">
               <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="/" class="logo d-flex align-items-center w-auto">
                   <img src="{{asset('assets/images/saliz-high-resolution-logo.jpg')}}" alt="">
                   <a data-toggle="collapse" data-target="#menu" href="/home"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
               </div>
               <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                   <ul>
                        {{-- <li><a href="/">Home</a></li> --}}
                        <li><a href="about">AboutUs</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="ourteam">OurTeam</a></li>
                        <li><a href="contact">ContactUs</a></li>
                        <li><a href="dashboard">Dashboard</a></li>
                        <li><a href="auth/register">Signup</a></li>
                    </ul>
               </div>
               <div class="col-sm-2 d-none d-lg-block">
                <a href="{{route('appointment')}}"> <button class="btn btn-success"><li>Book an Appointment</li></button></a>
               </div>
            </div>
        </div>
    </nav>
</header>
