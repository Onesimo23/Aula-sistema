﻿
@extends('main')

@section('content')

<!-- content -->
<div class="page-content">


<div class="container">

    <h1>Courses</h1>

    <h4> Browse Web Development <a href="#">Courses</a> </h4>

    <nav class="responsive-tab style-2">
        <ul>
            <li class="uk-active"><a href="#">Most popular</a></li>
            <li><a href="#">New</a></li>
            <li><a href="#">Intermediate </a></li>
            <li><a href="#">advanced</a></li>
        </ul>
    </nav>

    <div class="section-small">
        <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid" uk-grid="">
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">Angular</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>Learn Angular Fundamentals </h4>
                            <p> Learn how to build launch React web applications using .. </p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\3.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">JavaScript</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>The Complete JavaScript </h4>
                            <p> JavaScript is how you build interactivity on the web.. </p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 14 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 55 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\1.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Ultimate Web Developer Course </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\5.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Ultimate Web Developer Course </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="section-header pb-0 mt-5">
        <div class="section-header-left">
            <h4> Most popular <a href="courses.html">Courses</a> </h4>
        </div>
        <div class="section-header-right">

            <a href="#" class="btn-filter" uk-tooltip="title: Course Filter ; pos:  top-right" uk-toggle="target: #course-filter">
                <i class="icon-feather-filter"></i>
            </a>
            <div class="display-as">
                <a href="courses-list.html" uk-tooltip="title: Course list; pos: top-right">
                    <i class="icon-feather-grid"></i></a>
                <a href="#" class="active" uk-tooltip="title: Course Grid; pos: top-right">
                    <i class="icon-feather-list"></i></a>
            </div>

            <select class="selectpicker ml-3">
                <option value=""> Newest </option>
                <option value="1">Popular</option>
                <option value="2">Free</option>
                <option value="3">Premium</option>
            </select>

        </div>
    </div>

    <div class="section-small">

        <div class="uk-child-width-1-4@m uk-child-width-1-3@s course-card-grid uk-grid-match" uk-grid="">

            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\1.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Ultimate Web Developer Course </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\3.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">JavaScript</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>The Complete JavaScript From </h4>
                            <p> JavaScript is how you build interactivity on the web...
                                learn </p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 25 Hours </h5>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\2.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">Angular</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Learn Angular Fundamentals </h4>
                            <p> Learn how to build and launch React web applications using .. </p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 14 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 55 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\6.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>Learn Modern HTML & CSS </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 16 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 52 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\5.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Ultimate Web Developer Course </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 34 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 54 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\4.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">Angular</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>Learn Angular Fundamentals </h4>
                            <p> Learn how to build and launch React web applications using .. </p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 12 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 64 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\7.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>
                            <h4>Bootstrap Introduction</h4>
                            <p> Learn how to build your website using latest Bootstrap Modern ..</p>
                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
            <div>
                <a href="course-intro.html">
                    <div class="course-card">
                        <div class="course-card-thumbnail ">
                            <img src="assets\images\course\1.png">
                            <span class="play-button-trigger"></span>
                        </div>
                        <div class="course-card-body">
                            <div class="course-card-info">
                                <div>
                                    <span class="catagroy">HTML</span>
                                </div>
                                <div>
                                    <i class="icon-feather-bookmark icon-small"></i>
                                </div>
                            </div>

                            <h4>Ultimate Web Developer Course </h4>
                            <p> HTML is the building blocks of the web. It gives pages structure</p>

                            <div class="course-card-footer">
                                <h5> <i class="icon-feather-film"></i> 33 Lectures </h5>
                                <h5> <i class="icon-feather-clock"></i> 26 Hours </h5>
                            </div>
                        </div>

                    </div>
                </a>
            </div>
        </div>

    </div>


    

    <div id="course-filter" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <!-- close button -->
            <button class="uk-offcanvas-close" type="button" uk-close=""></button>

            <div class="sidebar-filter">

                <div class="sidebar-filter-contents">


                    <h4> Filter By </h4>

                    <ul class="sidebar-filter-list" uk-accordion="multiple: true">

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Skill Levels </a>
                            <div class="uk-accordion-content">
                                <div class="uk-form-controls">
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio1">
                                        <span class="test"> Beginner <span> (25) </span> </span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio1">
                                        <span class="test"> Entermidate<span> (32) </span></span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio1">
                                        <span class="test"> Expert <span> (12) </span></span>
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Course type </a>
                            <div class="uk-accordion-content">
                                <div class="uk-form-controls">
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio2">
                                        <span class="test"> Free (42) </span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio2">
                                        <span class="test"> Paid </span>
                                    </label>
                                </div>
                            </div>
                        </li>

                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"> Duration time </a>
                            <div class="uk-accordion-content">
                                <div class="uk-form-controls">
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio3">
                                        <span class="test"> +5 Hourse (23) </span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio3">
                                        <span class="test"> +10 Hourse (12)</span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio3">
                                        <span class="test"> +20 Hourse (5)</span>
                                    </label>
                                    <label>
                                        <input class="uk-radio" type="radio" name="radio3">
                                        <span class="test"> +30 Hourse (2)</span>
                                    </label>
                                </div>
                            </div>
                        </li>


                    </ul>



                </div>

            </div>

        </div>
    </div>
    
 @endsection