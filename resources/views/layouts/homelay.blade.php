@include('flash-message')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIDAX-Sistem Deteksi Hoax</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Lato:400,400i,700,700i" rel="stylesheet">

  <!-- Any Chart -->
  <script src="https://cdn.anychart.com/samples/tag-cloud/the-old-man-and-the-sea/ignore-items.js"></script>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/modal-video/css/modal-video.min.css') }}" rel="stylesheet}" type="text/css">
  <link href="{{ asset ('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset ('assets/vendor/aos/aos.css') }}" rel="stylesheet" type="text/css">
   <!-- Favicon-->
   <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
   <!-- <link href="{{asset ('css/styles.css')}}" rel="stylesheet" /> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('DataTables/datatables.min.css')}}">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <!-- <link rel="icon" href="{{ asset ('assets/img/favicon.ico') }}" type="image/x-icon"/> -->

  <!-- Template Main CSS File -->
  <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet" type="text/css">

  <!-- Chart JS -->


  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
@yield('content')
  <!-- Vendor JS Files -->
  <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset ('assets/vendor/modal-video/js/modal-video.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset ('assets/vendor/hoverIntent/hoverIntent.js') }}"></script>
  <script src="{{ asset ('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{   asset ('assets/js/main.js')  }}"></script>
  <!-- DataTables -->
  <script src="{{asset('DataTables/datatables.min.js')}}"></script>
 
</body>

</html>

