 
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">
           ECR-SMS
           <!--<img src="{{ asset ('img/logo.png') }}" alt="logo" class="img-responsive" width="120px" height="35px" />-->
        </a>
       
        </div>
        
         @if (Route::has('login'))
        <div class="collapse navbar-collapse" id="myNavbar">

        @auth

        <ul class="nav navbar-nav navbar-right">
          <li><a href="/#feature">Features</a></li>
          <li><a href="/#organisations">Systems</a></li>
         <li><a href="/#client">Our Client</a></li>
           <li><a href="/#courses">Life Courses</a></li>
          <li><a href="/pricing_plan">Pricing</a></li>

        <li class="btn-post"><a href="/home">Dashboard</a></li>
        </ul>  


       @else
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/#feature">Features</a></li>
          <li><a href="/#organisations">Systems</a></li>
         <li><a href="/#client">Our Client</a></li>
           <li><a href="/#courses">Life Courses</a></li>
          <li><a href="/pricing_plan">Pricing</a></li>
          <!--<li><a href="/#" data-target="#login" data-toggle="modal">Sign in</a></li>-->
          <li class="btn-trial"><a href="{{ route('register') }}">Start Free</a></li>
          <li class="btn-post"><a href="{{ route('login') }}">Demo</a></li>
        </ul>  
        @endauth
      </div>
      @endif

      </div>
    </nav>