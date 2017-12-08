@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content">
        <div class="row">
         

          <div class="col-md-8">

 <div class="row">
       

           <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="row">
                        <!-- Jumbotron -->
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center"> 

                                     <h1>{{ $school->name }}</h1>
                                     <p class="lead">Slogan: {{ $school->slogan }}</p>
              
                                </div>

                                <div class="panel-body">
                                    <p>{{ $school->description }}</p>


                                </div>
                                      
                            </div>
                         </div>
                    </div>

              <!--
                    <div class="row" style="background-color:#ffffff; margin:10px; ">
                      <a href="#" class="pull-right btn btn-default btn-sm">Add Project</a> 
                       
                        <div class="col-lg-4">
                          <h2></h2>
                          <p class="text-danger"></p>
                          
                          <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
                        </div>

                  </div>
                -->

                </div>

</div>



                <div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Classes

                         <a href="#" class="pull-right btn btn-default btn-sm">Add Class</a> 
                      </div>
                      <div class="panel-body">

                        <ul class="list-group">
                          @foreach($school->StudClasses as $classes)

                          <li class="list-group-item">
                            <a href="#">{{ $classes->class_name }}</a></li>
                          @endforeach

                        </ul>


                      </div>
                    </div>
                    
                  </div>

                  <div class="col-md-6">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-users" aria-hidden="true"></i> Teachers / Staff

                         <a href="#" class="pull-right btn btn-default btn-sm">Add Staff/Teacher</a> 
                      </div>
                      <div class="panel-body">
                          


                      </div>
                    </div>
                    
                  </div>

                
                 
                </div>


               


                 
          </div>

           <div class="col-md-4">
            @include('layouts.sidebar')
          </div>
          
        </div>
        
    </div>
</div>
@endsection