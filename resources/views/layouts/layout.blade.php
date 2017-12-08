<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      @yield('title')
    </title>
    <meta name="description" content="School Management System for Nursery, Primary & Secondary Schools">
    
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/imagehover.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css') }}">

        
   
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Navigation bar-->
       @include('layouts.nav')
    <!--/ Navigation bar-->
       @yield('body')
    <!--Footer-->
       @include('layouts.foot')
    <!--/ Footer-->
    
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/custom.js') }}"></script>
    <script src="{{ asset ('contactform/contactform.js') }}"></script>
    
  </body>
</html>