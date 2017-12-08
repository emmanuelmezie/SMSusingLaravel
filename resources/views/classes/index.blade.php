@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content">
        <div class="row">
          

          <div class="col-md-8">
                   @include('layouts.statistics')


 <div class="row">
       <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading text-center"> 

           @foreach ($schools->slice(0, 1) as $school)
             <h1> {{ Auth::user()->schoolname }}</h1>

            @endforeach

                </div>
                      
            </div>



                    <div class="panel panel-default">
                      <div class="panel-heading"><i class="fa fa-calendar" aria-hidden="true"></i>
 Events and Calender Management</div>
                      <div class="panel-body">

                        
                        
                         <div class="month">
  <ul>
    <li class="prev">❮</li>
    <li class="next">❯</li>
    <li>
      August 
      <span style="font-size:18px">2016</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  ...etc
</ul>


                      </div>
                    </div>
                    
                  </div>
              </div>



                <div class="row">

                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Sub Schools

                         <a href="#" class="pull-right btn btn-default btn-sm">Add Sub Schools</a> 
                      </div>
                      <div class="panel-body">

                        
                        
                        <ul class="list-group">
                            @foreach($school->StudClasses as $classes)

                          <li class="list-group-item">
                            <a href="/schools/{{ $school->id}}">{{ $classes->class_name }}</a></li>
                          @endforeach

                           
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


          <div class="col-md-4 ">
            @include('layouts.sidebar')
          </div>
          
        </div>
        
    </div>
</div>
@endsection