<html lang="en" dir="rtl">

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>CurOne_IIIGrp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">

    <!-- Favicon -->
    <link href="..\assets\images\favicon.png" rel="icon" type="image/png">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets\css\style-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\night-mode.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\framework-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\bootstrap.css')}}">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets\css\icons.css')}}">


</head>

<body>

    <div id="wrapper" class="admin-panel">

        <!-- menu -->
        <div class="page-menu">
            <!-- btn close on small devices -->
            <span class="btn-menu-close" uk-toggle="target: #wrapper ; cls: mobile-active"></span>
            <!-- traiger btn -->
            <span class="btn-menu-trigger" uk-toggle="target: .page-menu ; cls: menu-large"></span>

            <!-- logo -->
            <div class="logo uk-visible@s">
                <a href="/"> <i class=" uil-graduation-hat"></i> <span> CurOne_IIIGrp</span> </a>
            </div>
            <div class="page-menu-inner" data-simplebar="">
                <ul class="mt-0">
                    <li><a href="/"><i class="uil-home-alt"></i> <span> Painel</span></a> </li>
                    <li><a href="{{route('curso')}}"><i class="uil-youtube-alt"></i> <span> Cursos</span></a> </li>
                    <li><a href="{{route('student')}}"><i class="uil-users-alt"></i> <span> Alunos</span></a> </li>
                    <li><a href="{{route('instrutor')}}"><i class="uil-graduation-hat"></i> <span> Instrutores</span></a>
                    </li>
                    <li><a href="{{route('categoria')}}"><i class="uil-tag-alt"></i> <span> Categorias</span></a> </li>
                    <li><a href=""><i class="uil-question-circle"></i> <span> Ajuda</span></a> </li>
                </ul>

            </div>
        </div>

        <!-- Header Container
        ================================================== -->
        <header class="header uk-light">

            <div class="container">
                <nav uk-navbar="">

                    <!-- left Side Content -->
                    <div class="uk-navbar-left">

                        <!-- menu icon -->
                        <span class="mmenu-trigger" uk-toggle="target: #wrapper ; cls: mobile-active">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </span>


                        <!-- logo -->
                        <a href="dashboard.html" class="logo">
                            <img src="{{asset('assets\images\logo-dark.svg')}}" alt="">
                            <span> CurOne_IIIGrp</span>
                        </a>

                        <div class="searchbox uk-visible@s">

                            <input class="uk-search-input" type="search" placeholder="Search...">
                            <button class="btn-searchbox"> </button>

                        </div>
                        <!-- Search box dropdown -->
                        <div uk-dropdown="pos: top;mode:click;animation: uk-animation-slide-bottom-small" class="dropdown-search">
                            <div class="erh BR9 MIw" style="top: -26px;position: absolute ; left: 24px;fill: currentColor;height: 24px;pointer-events: none;color: #f5f5f5;">
                                <svg width="22" height="22">
                                    <path d="M0 24 L12 12 L24 24"></path>
                                </svg></div>
                            <!-- User menu -->

                            <ul class="dropdown-search-list">
                                <li class="list-title">
                                    Recent Searches
                                </li>
                                <li>
                                    <a href="course-intro.html">
                                        Ultimate Web Designer And Developer Course</a>
                                </li>
                                <li><a href="course-intro.html">
                                        The Complete Ruby on Rails Developer Course </a>
                                </li>
                                <li><a href="course-intro.html">
                                        Bootstrap 4 From Scratch With 5 Real Projects </a>
                                </li>
                                <li> <a href="course-intro.html">
                                        The Complete 2020 Web Development Bootcamp </a>
                                </li>
                                <li class="menu-divider">
                                <li><a href="course-intro.html">
                                        Bootstrap 4 From Scratch With 5 Real Projects </a>
                                </li>
                                <li> <a href="course-intro.html">
                                        The Complete 2020 Web Development Bootcamp </a>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <!--  Right Side Content   -->

                    <div class="uk-navbar-right">



                        <div class="header-widget">

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
                                                    <img src="{{asset('assets\images\avatars\avatar-2.jpeg')}}" alt="">
                                                </span>
                                                <div class="notification-text notification-msg-text">
                                                    <strong>Jonathan Madano</strong>
                                                    <p>Okay.. Thanks for The Answer I will be waiting for your...
                                                    </p>
                                                    <span class="time-ago"> 2 hours ago </span>
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

                            <div class="dropdown-user-details">
                                <div class="dropdown-user-avatar">
                                    <img src="{{asset('assets\images\avatars\avatar-2.jpeg')}}" alt="">
                                </div>
                                <div class="dropdown-user-name">
                                    Richard Ali <span>Adminstrator</span>
                                </div>
                            </div>


                            <div uk-dropdown="pos: top-right ;mode:click" class="dropdown-notifications small">

                                <!-- User menu -->

                                <ul class="dropdown-user-menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-material-outline-dashboard"></i> Dashboard</a>
                                    </li>

                                    <li><a href="profile-edit.html">
                                            <i class="icon-feather-settings"></i> Account Settings</a>
                                    </li>

                                    <ul class="menu-divider">
                                        <li><a href="#">
                                                <i class="icon-feather-help-circle"></i> Help</a>
                                        </li>
                                        <li><a href="page-login.html">
                                                <i class="icon-feather-log-out"></i> Sing Out</a>
                                        </li>
                                    </ul>


                            </ul></div>


                        </div>



                        <!-- icon search-->
                        <a class="uk-navbar-toggle uk-hidden@s" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#">
                            <i class="uil-search icon-small"></i>
                        </a>
                        <!-- User icons -->
                        <span class="uil-user icon-small uk-hidden@s" uk-toggle="target: .header-widget ; cls: is-active">


                    </span></div>
                    <!-- End Right Side Content / End -->


                </nav>

            </div>
            <!-- container  / End -->
</header>
