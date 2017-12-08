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


                         <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> School <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                                <li><a href="/schools">All Schools</a></li>
                      
                                </ul>
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
    <div class="page-content">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
                   


 <div class="row">
                  <div class="col-md-12">



                    <div class="panel panel-default">
                      <div class="panel-heading"><h3><a href="/schools/create" class="btn btn-default btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Create Sub School Portal  </a>  </h3></div>
  <div class="panel-heading"><h3><a href="/schools" class="btn btn-default btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i>
School Portal  </a>  </h3></div>
                    
                    </div>
                    
                  </div>
  </div>



                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Our List of Schools</div>
                      <div class="panel-body">

                        
                        
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-university" aria-hidden="true"></i> Nursery School
                                        
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                       <i class="fa fa-university" aria-hidden="true"></i> Primary School
                                        
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                       <i class="fa fa-university" aria-hidden="true"></i> Secondary School
                                        
                                    </div>
                                </a>
                            </li>
                        </ul>


                      </div>
                    </div>
                    
                  </div>

                  <div class="col-md-6">
                    
                     <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-bell" aria-hidden="true"></i> Notifications Panel</div>
                      <div class="panel-body">

                        
                        
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="list-group-item">
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>


                      </div>
                    </div>


                  </div>
                 
                </div>


               


                 
          </div>
          
        </div>
        
    </div>
</div>

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