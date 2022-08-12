<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('/')}}assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fav Icon  -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}assets/images/illustration/student/128/black.svg" >

    <!-- Fix Footer CSS -->
    <link type="text/css" href="{{asset('/')}}assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{asset('/')}}assets/css/material-icons.css" rel="stylesheet">


    <!-- Font Awesome Icons -->
    <link type="text/css" href="{{asset('/')}}assets/css/fontawesome.css" rel="stylesheet">


    <!-- Preloader -->
    <link type="text/css" href="{{asset('/')}}assets/css/preloader.css" rel="stylesheet">


    <!-- App CSS -->
    <link type="text/css" href="{{asset('/')}}assets/css/app.css" rel="stylesheet">

</head>




<body class="layout-sticky-subnav layout-default ">

<div class="preloader">
    <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
    </div>
</div>

<!-- Header Layout -->
<div class="mdk-header-layout js-mdk-header-layout">

    <!-- Header -->
    <div  class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0" data-effects="parallax-background waterfall" data-fixed data-condenses>

        <div class="mdk-header__content justify-content-center">

            <div class="navbar navbar-expand navbar-dark-dodger-blue bg-transparent will-fade-background"  data-primary>

                <!-- Navbar toggler -->
                <button class="navbar-toggler w-auto mr-16pt d-block rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <!-- Navbar Brand -->

                <span class="d-none d-md-flex align-items-center mr-16pt">

                    <span class="avatar avatar-sm mr-12pt">

                        <span class="avatar-title rounded navbar-avatar"><i class="material-icons">opacity</i></span>

                    </span>

                    <small class="flex d-flex flex-column">
                        <strong class="navbar-text-100">Experience IQ</strong>
                        <span class="navbar-text-50">2,300 points</span>
                    </small>
                </span>

                <a href="index.html" class="navbar-brand mr-16pt ">

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                        <span class="avatar-title rounded bg-primary"><img src="{{asset('/')}}assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                    </span>

                    <span class="d-none d-lg-block">Academy</span>
                </a>


                <div class="flex"></div>

                <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">


                    <!-- Notifications dropdown -->
                    <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Messages" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons icon-24pt">mail_outline</i>
                        </button>
                    </div>
                    <!-- // END Notifications dropdown -->

                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons">notifications_none</i>
                            <span class="badge badge-notifications badge-accent">2</span>
                        </button>

                    </div>
                    <!-- // END Notifications dropdown -->


                    <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-placement="bottom" >

                        <span class="text-white font-size-16pt">{{Auth::user()->name}}</span>

                    </div>

                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">

                            <span class="avatar avatar-sm mr-8pt2">

{{--                                <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>--}}
                                <img src="{{Auth::user()->image}}" alt="" class= "avatar-title rounded-circle">

                            </span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header"><strong>Account</strong></div>
                            <a class="dropdown-item" href="edit-account.html">Edit Account</a>
                            <a class="dropdown-item" href="billing.html">Billing</a>
                            <a class="dropdown-item" href="billing-history.html">Payments</a>
                            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();  ">Logout</a>
                            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- // END Header -->



    <div class="mdk-header-layout__content page-content ">

        @yield('body')

    </div>




    <div class="js-fix-footer2 bg-white border-top-2">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-24pt">
                <img class="brand-icon" src="{{asset('/')}}assets/images/logo/black-70@2x.png" width="30" alt="Luma"> Academy
            </p>
            <p class="measure-lead-max text-50 small mr-8pt">Academy is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
            <p class="mb-8pt d-flex">
                <a href="" class="text-70 text-underline mr-8pt small">Terms</a>
                <a href="" class="text-70 text-underline small">Privacy policy</a>
            </p>
            <p class="text-50 small mt-n1 mb-0">Copyright {{date('Y')}} &copy; All rights reserved by Shykot</p>
        </div>
    </div>


</div>
<!-- // END Header Layout -->




<!-- drawer -->
<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


            <div class="d-flex align-items-center navbar-height">
                <form action="fixed-index.html" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                    <input type="text" class="form-control pl-0" placeholder="Search">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                </form>
            </div>


            <a href="fixed-index.html" class="sidebar-brand ">
            <!-- <img class="sidebar-brand-icon" src="{{asset('/')}}assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                        <span class="avatar-title rounded bg-primary"><img src="{{asset('/')}}assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                    </span>

                <span>Academy</span>
            </a>



            <div class="sidebar-heading">ADMIN</div>
            <ul class="sidebar-menu">

                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button " href="{{route('dashboard')}}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                        <span class="sidebar-menu-text">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#admin_module">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                        Admin Module
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>

                    @if(Auth::user()->id == 2)
                    <ul class="sidebar-submenu collapse sm-indent" id="admin_module">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('add-administrator')}}">
                                <span class="sidebar-menu-text">ADD Administrator</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('manage-administrator')}}">
                                <span class="sidebar-menu-text">Manage Administrator</span>
                            </a>
                        </li>

                    </ul>
                    @endif

                </li>


                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#teacher_module">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                        Teacher Module
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="teacher_module">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('add-teacher')}}">
                                <span class="sidebar-menu-text">ADD Teacher</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{route('manage-teacher')}}">
                                <span class="sidebar-menu-text">Manage Teacher</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="sidebar-menu-item ">
                    <a class="sidebar-menu-button" href="{{route('manage-course')}}">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                        <span class="sidebar-menu-text">Manage Courses</span>
                    </a>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#student_module">
                        <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                        Student Module
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse sm-indent" id="student_module">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-projects.html">
                                <span class="sidebar-menu-text">Manage Student</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="fixed-tasks-board.html">
                                <span class="sidebar-menu-text">Manage Students Course</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- // END drawer -->


<!-- jQuery -->
<script src="{{asset('/')}}assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="{{asset('/')}}assets/vendor/popper.min.js"></script>
<script src="{{asset('/')}}assets/vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="{{asset('/')}}assets/vendor/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="{{asset('/')}}assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="{{asset('/')}}assets/vendor/material-design-kit.js"></script>

<!-- Fix Footer -->
<script src="{{asset('/')}}assets/vendor/fix-footer.js"></script>

<!-- App JS -->
<script src="{{asset('/')}}assets/js/app.js"></script>


<!-- Global Settings -->
<script src="{{asset('/')}}assets/js/settings.js"></script>

<!-- Flatpickr -->
<script src="{{asset('/')}}assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('/')}}assets/js/flatpickr.js"></script>

<!-- Moment.js -->
<script src="{{asset('/')}}assets/vendor/moment.min.js"></script>
<script src="{{asset('/')}}assets/vendor/moment-range.min.js"></script>

<!-- Chart.js -->
<script src="{{asset('/')}}assets/vendor/Chart.min.js"></script>
<script src="{{asset('/')}}assets/js/chartjs.js"></script>

<!-- Chart.js Samples -->
<script src="{{asset('/')}}assets/js/page.student-dashboard.js"></script>

<!-- List.js -->
<script src="{{asset('/')}}assets/vendor/list.min.js"></script>
<script src="{{asset('/')}}assets/js/list.js"></script>

<!-- Tables -->
<script src="{{asset('/')}}assets/js/toggle-check-all.js"></script>
<script src="{{asset('/')}}assets/js/check-selected-row.js"></script>

</body>

</html>
