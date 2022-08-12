<!doctype html>
<html lang="en">



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | Academy Admin Panel</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">

    <!-- Fav Icon  -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}assets/images/illustration/student/128/black.svg" >

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">


    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">


    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">






</head>

<body class="bg-dark">


    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <div class="pt-32pt pt-sm-64pt pb-32pt">

                <div class="container page__container ">

                    <div class="col-md-5 p-2 m-2 mx-auto">
                        <img src="{{asset('/')}}assets/images/illustration/student/128/white.svg" height="150"  width="150" alt="logo"  class="bg-primary p-2 rounded-circle d-block mx-auto" />

                    </div>


                    <form class="col-md-5 p-0 mx-auto" action="{{route('login')}}" method="POST">
                        @csrf
                        <h2 class="text-white text-center">Admin Login</h2>

                        <div class="form-group ">
                            <label class="form-label text-white" for="email">Email:</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Your email address ...">
                        </div>
                        <div class="form-group ">
                            <label class="form-label text-white" for="password">Password:</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter Your Password ...">
                            <p class="text-right"><a href="" class="small text-white">Forgot your password?</a></p>
                        </div>
                        <div class="text-center">
                            <button class="btn-lg btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div>




    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>


</body>


</html>

