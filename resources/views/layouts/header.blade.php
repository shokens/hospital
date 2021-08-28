<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/')}}" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('/admin/plugins/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{ asset ('/admin/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{ asset ('/admin/css/style.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <!-- Bootstrap CSS File -->
  <link href="{{ asset ('/boot/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
 
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
     

        <main class="py-2">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset ('/boot/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('/boot/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ asset ('/boot/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset ('/boot/contactform/contactform.js')}}"></script>






   <script src="{{ asset ('/admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset ('/admin/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset ('/admin/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset ('/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset ('/admin/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset ('/admin/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset ('/admin/js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset ('/admin/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{ asset ('/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{ asset ('/admin/js/pages/dashboards/dashboard1.js')}}"></script>
</body>
</html>
