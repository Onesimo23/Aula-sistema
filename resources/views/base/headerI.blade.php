<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Learning HTML Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="..\assets\images\favicon.png" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets\css\style.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\night-mode.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\framework.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\bootstrap.css')}}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets\css\icons.css')}}">


</head>

<body>

    <div id="wrapper">

        <!-- Header Container
        ================================================== -->
        <header class="header header-transparent uk-light" uk-sticky="top:20 ; cls-active:header-sticky ; cls-inactive: uk-light">

            <div class="container">
                <nav uk-navbar="">

                        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: mobile-active"></span>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">

                        <div class="header-widget">
                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active"> </span>

                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>

                    </div>
                    <!-- End Right Side Content / End -->


                </nav>

            </div>
            <!-- container  / End -->

        </header>

        <!-- overlay seach on mobile-->
        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden="" style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus="">
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close="" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>

        <!-- search overlay-->
        <div id="searchbox">

            <div class="search-overlay"></div>

            <div class="search-input-wrapper">
                <div class="search-input-container">
                    <div class="search-input-control">
                        <span class="icon-feather-x btn-close uk-animation-scale-up" uk-toggle="target: #searchbox; cls: is-active"></span>
                        <div class=" uk-animation-slide-bottom">
                            <input type="text" name="search" autofocus="" required="">
                            <p class="search-help">Type the name of the Course and book you are looking for</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
