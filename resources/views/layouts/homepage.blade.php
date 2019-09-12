<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img//apple-icon.png"> -->
  <link rel="icon" type="image/png" href="">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>
    @yield('title')
  </title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <link href="../assets/css/login-register.css" rel="stylesheet" />

  <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="../assets/js/login-register.js" type="text/javascript"></script>
</head>

<body class="landing-page sidebar-collapse">
 <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
   <div class="container">
       <a class="navbar-brand" href="{{ url('/') }}" rel="tooltip" data-placement="bottom">
         <img src="../assets/img/lovebuglogo.png">
       </a>
   </div>
 </nav>

  <div class="page-header" data-parallax="true" style="background-image: url('../assets/img/hands1.jpg');">
    <div class="filter"></div>
    <div class="container">
      @yield('content')
    </div>
  </div>

  <div class="footer copyright-footer text-center" style="display: block;">
    <h6>©
      <script>
        document.write(new Date().getFullYear())
      </script>, Copyright by LoveBug<i class="fa fa-heart heart"></i> </h6>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>

  <script type="text/javascript">
      $(document).ready(function(){
          openLoginModal();
      });
  </script>

</body>
</html>
