<!doctype html>
<html lang="en">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Cursos Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="{{asset('assets\images\favicon.png')}}" rel="icon" type="image/png">

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

        <!-- overlay seach on mobile-->
        <div class="nav-overlay uk-navbar-left uk-position-relative uk-flex-1 bg-grey uk-light p-2" hidden="" style="z-index: 10000;">
            <div class="uk-navbar-item uk-width-expand" style="min-height: 60px;">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus="">
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close="" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>

        <!-- menu -->
        <div class="page-menu">
            <!-- btn close on small devices -->
            <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
            <!-- traiger btn -->
            <span class="btn-menu-trigger" uk-toggle="target: .page-menu ; cls: menu-large"></span>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="dashboard.html"> <i class=" uil-graduation-hat"></i> <span> CurOne</span> </a>
            </div>
            <div class="page-menu-inner" data-simplebar="">
                <ul data-submenu-title="Browse">
                    <li><a href="{{route('category.index')}}"><i class="uil-play-circle"></i> <span> Categorias</span></a> </li>

                    <li><a href="{{route('inscription.index')}}"><i class="uil-rss-interface"></i> <span> Inscrições</span></a> </li>
                    <li class="active" <i class="icon-line-awesome-gg" ></i>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Curso</span></a>
                        <ul class="submenu-angle" aria-expanded="false">

                            <li><a href="{{route('course.index')}}"><i class="icon-feather-folder-plus"></i> <span> Cursos</span></a> </li>
                            <li><a href="{{route('highlighted-courses')}}"><i class="icon-feather-edit-2"></i> <span> Cursos em Destaque</span></a> </li>
                        </ul>
                    </li>
                    <li><a href="{{route('payment.index')}}"><i class="uil-rss-interface"></i> <span> Pagamentos</span></a> </li>
                </ul>

            </div>
        </div>


        <!-- content -->
        <div class="page-content">

         <!-- Header Container
        ================================================== -->
        <header class="header" uk-sticky="top:20 ; cls-active:header-sticky">

            <div class="container">
                <nav uk-navbar="">

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: mobile-active"></span>



                        <!-- logo -->
                        <a href="dashboard.html" class="logo">
                            <img src="..\assets\images\logo-dark.svg" alt="">
                            <span> Courseplus</span>
                        </a>

                        <!-- breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#"> Dashboard </a></li>
                                <li><a href="#">Profile</a></li>
                                <li>Elie Daniels</li>
                            </ul>
                        </nav>


                    </div>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">

                        <div class="header-widget">
                            <!-- User icons close mobile-->
                            <span class="icon-feather-x icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active"> </span>


                            <a href="#" class="header-widget-icon" uk-tooltip="title: My Courses ; pos: bottom ;offset:21">
                                <i class="uil-youtube-alt"></i>
                            </a>

                            <!-- courses dropdown List -->
                            <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small" class="dropdown-notifications my-courses-dropdown">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Your Courses</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\assets\images\course\1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\assets\images\course\3.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">The Complete JavaScript Course Build Real
                                                        Projects !</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\assets\images\course\2.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Learn Angular Fundamentals From The
                                                        Beginning</span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: bottom-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="course-intro.html">
                                                <span class="notification-image">
                                                    <img src="..\assets\images\course\1.png" alt=""> </span>
                                                <span class="notification-text">
                                                    <span class="course-title">Ultimate Web Designer & Web Developer
                                                    </span>
                                                    <span class="course-number">6/35 </span>
                                                    <span class="course-progressbar">
                                                        <span class="course-progressbar-filler" style="width:95%"></span>
                                                    </span>
                                                </span>

                                                <!-- option menu -->
                                                <span class="btn-option">
                                                    <i class="icon-feather-more-vertical"></i>
                                                </span>
                                                <div class="dropdown-option-nav" uk-dropdown="pos: top-right ;mode : hover">
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <i class="icon-material-outline-dashboard"></i>
                                                                Course Dashboard</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-video"></i>
                                                                Resume Course</span>
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <i class="icon-feather-x"></i>
                                                                Remove Course</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all</a>
                                </div>
                            </div>

                            <!-- notificiation icon  -->

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Notificiation ; pos: bottom ;offset:21">
                                <i class="uil-bell"></i>
                                <span>4</span>
                            </a>

                            <!-- notificiation dropdown -->
                            <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small" class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Notifications </h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Notifications settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-thumbs-up"></i></span>
                                                <span class="notification-text">
                                                    <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                    <span class="text-primary">Javascript Introduction </span>
                                                    <br> <span class="time-ago"> 9 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-primary disabled">
                                                    <i class="icon-feather-message-circle"></i></span>
                                                <span class="notification-text">
                                                    <strong>Stella Johnson</strong> Replay Your Comments in
                                                    <span class="text-primary">Programming for Games</span>
                                                    <br> <span class="time-ago"> 12 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-success disabled">
                                                    <i class="icon-feather-star"></i></span>
                                                <span class="notification-text">
                                                    <strong>Alex Dolgove</strong> Added New Review In Course
                                                    <span class="text-primary">Full Stack PHP Developer</span>
                                                    <br> <span class="time-ago"> 19 hours ago </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-icon btn btn-soft-danger disabled">
                                                    <i class="icon-feather-share-2"></i></span>
                                                <span class="notification-text">
                                                    <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                    <span class="text-primary">Css Flex Box </span>
                                                    <br> <span class="time-ago"> Yesterday </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>


                            </div>


                            <!-- Message  -->

                            <a href="#" class="header-widget-icon" uk-tooltip="title: Message ; pos: bottom ;offset:21">
                                <i class="uil-envelope-alt"></i>
                                <span>1</span>
                            </a>

                            <!-- Message  notificiation dropdown -->
                            <div uk-dropdown=" pos: top-right;mode:click" class="dropdown-notifications">

                                <!-- notivication header -->
                                <div class="dropdown-notifications-headline">
                                    <h4>Messages</h4>
                                    <a href="#">
                                        <i class="icon-feather-settings" uk-tooltip="title: Message settings ; pos: left"></i>
                                    </a>
                                </div>

                                <!-- notification contents -->
                                <div class="dropdown-notifications-content" data-simplebar="">

                                    <!-- notiviation list -->
                                    <ul>
                                        <li class="notifications-not-read">
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\assets\images\avatars\avatar-2.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\assets\images\avatars\avatar-3.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Stella Johnson</strong>
                                                    <p> Alex will explain you how to keep the HTML structure and all
                                                        that...</p>
                                                    <span class="time-ago"> 7 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\assets\images\avatars\avatar-1.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Alex Dolgove</strong>
                                                    <p> Alia Joseph just joined Messenger! Be the first to send a
                                                        welcome message..</p>
                                                    <span class="time-ago"> 19 hours ago </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-avatar">
                                                    <img src="..\assets\images\avatars\avatar-4.jpeg" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Adrian Mohani</strong>
                                                    <p> Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> Yesterday </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="dropdown-notifications-footer">
                                    <a href="#"> sell all <i class="icon-line-awesome-long-arrow-right"></i> </a>
                                </div>
                            </div>


                            <!-- profile-icon-->

                            <a href="#" class="header-widget-icon profile-icon">
                                <img src="..\assets\images\avatars\avatar-2.jpeg" alt="" class="header-profile-icon">
                            </a>

                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                                <!-- User Name / Avatar -->
                                <a href="profile-1.html">

                                    <div class="dropdown-user-details">
                                        <div class="dropdown-user-avatar">
                                            <img src="..\assets\images\avatars\avatar-2.jpeg" alt="">
                                        </div>
                                        <div class="dropdown-user-name">
                                            Richard Ali <span>Students</span>
                                        </div>
                                    </div>

                                </a>

                                <!-- User menu -->

                                <ul class="dropdown-user-menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>
                                    <li><a href="#">
                                            <i class="icon-feather-bookmark"></i> Bookmark </a>
                                    </li>
                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Account Settings</a>
                                    </li>
                                    <li><a href="#" style="color:#62d76b">
                                            <i class="icon-feather-star"></i> Upgrade To Premium</a>
                                    </li>
                                    <li>
                                        <a href="#" id="night-mode" class="btn-night-mode">
                                            <i class="icon-feather-moon"></i> Night mode
                                            <span class="btn-night-mode-switch">
                                                <span class="uk-switch-button"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="menu-divider">
                                    <li><a href="#">
                                            <i class="icon-feather-help-circle"></i> Help</a>
                                    </li>
                                    <li><a href="/logout">
                                            <i class="icon-feather-log-out"></i> Sing Out</a>
                                    </li>
                                </ul>


                            </div>


                        </div>



                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>

                        <!-- User icons -->
                            <a href="#" class="uil-user icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active">
                            </a>

                    </div>
                    <!-- End Right Side Content / End -->


                </nav>

            </div>
            <!-- container  / End -->

        </header>
