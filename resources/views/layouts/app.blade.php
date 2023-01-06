<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ariel - App Landing Page Template + RTL </title>
    <meta name="description" content="App Landing page, RTL Version, Marwa El-Manawy, Application">
    <meta name="author" content="Marwa El-Manawy - https://elmanawy.info" />
    <link rel="icon" href="favicon.png">
    <!-- Font Icons -->
    <link rel="stylesheet" href="public/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <link rel="stylesheet" href="public/css/flaticon.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="public/css/animate.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!-- Light Case -->
    <link rel="stylesheet" href="public/css/lightcase.min.css" type="text/css">
    <!-- Template style -->
    <link rel="stylesheet" href="public/css/style.css">
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="preloader-circle">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /preloader -->

    <!--Start Header Area-->
    @include('partials.header')
    <!-- //End Header Area-->

    @yield('content')

    <!-- Start Footer Area -->
    @include('sections.footer')
    <!-- End Footer Area -->

    <!-- Start To Top Button -->
    <div id="back-to-top">
        <a class="top" id="top" href="#header-area"> <i class="ti-angle-up"></i> </a>
    </div>
    <!-- End To Top Button -->

    <!-- Start JS FILES -->
    <!-- JQuery -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- Wow Animation -->
    <script src="public/js/wow.min.js"></script>
    <!-- Owl Coursel -->
    <script src="public/js/owl.carousel.min.js"></script>
    <!-- Images LightCase -->
    <script src="public/js/lightcase.min.js"></script>
    <!-- scrollIt -->
    <script src="public/js/scrollIt.min.js"></script>
    <!-- Main Script -->
    <script src="public/js/script.js"></script>
</body>

</html>