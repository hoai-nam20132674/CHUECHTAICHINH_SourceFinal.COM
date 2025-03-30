
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://rainbowit.net/html/histudy/assets/images/favicon.png">

    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendor/slick.css">
    <link rel="stylesheet" href="css/vendor/slick-theme.css">
    <link rel="stylesheet" href="css/plugins/sal.css">
    <link rel="stylesheet" href="css/plugins/feather.css">
    <link rel="stylesheet" href="css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="css/plugins/swiper.css">
    <link rel="stylesheet" href="css/plugins/odometer.css">
    <link rel="stylesheet" href="css/plugins/animation.css">
    <link rel="stylesheet" href="css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="css/plugins/plyr.css">
    <link rel="stylesheet" href="css/style.css">
    @yield('head')
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    @include('front-end.layout.header')

    <!-- Mobile Menu Section -->
    @include('front-end.layout.mobile_menu')
    <!-- Start Side Vav -->
    @include('front-end.layout.cart_sidebar')
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
    
   
    @yield('content');

    
    @include('front-end.layout.footer')
        
        

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="js/vendor/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="js/vendor/js.cookie.js"></script>
    <script src="js/vendor/jquery.style.switcher.js"></script>
    <script src="js/vendor/swiper.js"></script>
    <script src="js/vendor/jquery-appear.js"></script>
    <script src="js/vendor/odometer.js"></script>
    <script src="js/vendor/backtotop.js"></script>
    <script src="js/vendor/isotop.js"></script>
    <script src="js/vendor/imageloaded.js"></script>

    <script src="js/vendor/wow.js"></script>
    <script src="js/vendor/waypoint.min.js"></script>
    <script src="js/vendor/easypie.js"></script>
    <script src="js/vendor/text-type.js"></script>
    <script src="js/vendor/jquery-one-page-nav.js"></script>
    <script src="js/vendor/bootstrap-select.min.js"></script>
    <script src="js/vendor/jquery-ui.js"></script>
    <script src="js/vendor/magnify-popup.min.js"></script>
    <script src="js/vendor/paralax-scroll.js"></script>
    <script src="js/vendor/paralax.min.js"></script>
    <script src="js/vendor/countdown.js"></script>
    <script src="js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    @yield('js')
</body>

</html>