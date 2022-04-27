<!doctype html>
<html lang="en">
<head>
    {{-- <base href="{{ asset('/') }}"> --}}
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Ecology Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online-Complain-System | {{ $title }}</title>
    <link rel="shortcut icon" href="asset/frontend/images/favicon.ico" type="image/x-icon">
    <!-- Goole Font -->
    

       @include('frontend.include.styles')



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>        

       @include('frontend.include.header')
 @include('frontend.include.login-signup-option')


   @yield('content')












 




















 @include('frontend.include.footer')

<section id="scroll-top" class="scroll-top">
    <h2 class="disabled">Scroll to top</h2>
    <div class="to-top pos-rtive">
        <a href="#"><i class = "flaticon-right-arrow"></i></a>
    </div>
</section> 

    
 @include('frontend.include.scripts')

  
  
</body>

</html>
