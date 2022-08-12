<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Fav Icon  -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}assets/images/illustration/student/128/black.svg" >

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{asset('/')}}assets/vendor/perfect-scrollbar.css" rel="stylesheet">

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

    <div id="header" class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0" data-effects="parallax-background waterfall" data-fixed data-condenses>
{{--        <div class="mdk-header__bg">--}}
{{--            <div class="mdk-header__bg-front" style="background-image: url({{asset('/')}}assets/images/photodune-4161018-group-of-students-m.jpg);"></div>--}}
{{--        </div>--}}
        <div class="mdk-header__content justify-content-center">



            <div class="navbar navbar-expand navbar-dark-dodger-blue bg-transparent will-fade-background mx-2" id="default-navbar" data-primary>



                <!-- Navbar Brand -->
                <a href="{{route('home')}}" class="navbar-brand mr-16pt ml-3">
                    <!-- <img class="navbar-brand-icon" src="{{asset('/')}}assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary "><img src="{{asset('/')}}assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                        </span>

                    <span class="d-none d-lg-block">Academy</span>
                </a>

                <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                    <li class="nav-item active">
                        <a href="fixed-index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">All Courses</a>

                    </li>

                    <li class="nav-item">
                        <a href="fixed-pricing.html" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Teachers</a>

                    </li>

                </ul>








                <ul class="nav navbar-nav ml-auto mr-3">
                    <li class="nav-item">
                        <a href="{{route('user-login')}}" class="btn btn-outline-white" ><i class="material-icons mr-2">lock_open</i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="fixed-signup.html" class="btn btn-outline-white"> Get Started</a>
                    </li>
                </ul>
            </div>

{{--            <div class="hero container page__container text-center text-md-left py-112pt">--}}
{{--                <h1 class="text-white text-shadow">Learn to Academy</h1>--}}
{{--                <p class="lead measure-hero-lead mx-auto mx-md-0 text-white text-shadow mb-48pt">Business, Technology and Creative Skills taught by industry experts. Explore a wide range of skills with our professional tutorials.</p>--}}


{{--                <a href="fixed-courses.html" class="btn btn-lg btn-outline-white btn--raised mb-16pt">Browse Courses</a>--}}




{{--            </div>--}}
        </div>
    </div>

    <!-- // END Header -->





    <div class="mdk-header-layout__content page-content ">

        @yield('body')

    </div>


    <div class="js-fix-footer2 bg-white border-top-2">
        <div class="container page__container page-section d-flex flex-column">
            <p class="text-70 brand mb-24pt">
                <img class="brand-icon" src="assets/images/logo/black-70@2x.png" width="30" alt="Luma"> Academy
            </p>
            <p class="measure-lead-max text-50 small mr-8pt">Academy is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
            <p class="mb-8pt d-flex">
                <a href="" class="text-70 text-underline mr-8pt small">Terms</a>
                <a href="" class="text-70 text-underline small">Privacy policy</a>
            </p>
            <p class="text-50 small mt-n1 mb-0 font-weight-bold">Copyright {{date('Y')}} &copy; All rights reserved. || Created By Shykot Hasan Shourav</p>
        </div>
    </div>







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






<script>
    (function() {
        'use strict';
        var headerNode = document.querySelector('.mdk-header')
        var layoutNode = document.querySelector('.mdk-header-layout')
        var componentNode = layoutNode ? layoutNode : headerNode

        componentNode.addEventListener('domfactory-component-upgraded', function() {
            headerNode.mdkHeader.eventTarget.addEventListener('scroll', function() {
                var progress = headerNode.mdkHeader.getScrollState().progress
                var navbarNode = headerNode.querySelector('#default-navbar')
                navbarNode.classList.toggle('bg-transparent', progress <= 0.2)
            })
        })
    })()
</script>

</body>

</html>
