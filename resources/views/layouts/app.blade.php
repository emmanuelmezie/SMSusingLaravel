    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ECR SMS Platform</title>

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <!--
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/imagehover.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/dashboard_style.css') }}">
-->

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/dashboard_style.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset ('css/calender.css') }}">

</head>
<body>
    <div id="app">
        
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header" style="color: #ffffff !important;">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ECR-SMS
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                       




                             <li class="dropdown current">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-shield"></i> Administrator <span class="caret"></span>    
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Manage Classes</a></li>
                                    <li><a href="#">Manage Staff</a></li>
                                    <li><a href="#">Manage Students</a></li>
                                    <li><a href="#">Assign Roles</a></li>
                                    <li><a href="#">Manage TimeTable</a></li>
                                    <li><a href="#">Manage Holidays</a></li>
                                </ul>
                            </li>

          <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-users"></i> Form Teachers <span class="caret"></span> 
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Manage Profile</a></li>
                        <li><a href="#">Class Attendance</a></li>
                        <li><a href="#">Deactivate</a></li>
                    </ul>
                </li>

              <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-users"></i> Students <span class="caret"></span> 
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Check Result</a></li>
                        <li><a href="#">View Profile</a></li>
                    </ul>
                </li>


                         <li>
                                <a href="{{ route('schools.index') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> School </a>
                        
                         </li>



                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <i class="fa fa-sign-out" aria-hidden="true"></i>  Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                     <li><a href="#"><i class="fa fa-signal"></i> Reporting </a> </li>
                                     <li><a href="#"><i class="fa fa-cubes"></i> Integrations</a></li>
                                     <li><a href="#"><i class="fa fa-gear"></i> Preferences </a></li>
                                     <li><a href="#"><i class="fa fa-credit-card"></i> Payment Information</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            @include('partials.errors')
            @include('partials.success')
            </div>
        </div>
    </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="js/custom.js"></script>
</body>
</html>
