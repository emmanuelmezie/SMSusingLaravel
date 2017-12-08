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

                                     <h1>{{ $subschool->name }}</h1>
                                     <p>{{ $subschool->slogan }}</p>
              
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

           <div class="col-md-3">
          

            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                <li class="current submenu">
                   <h4> 
                      <i class="fa fa-shield"></i> Sub School Options     
                    </h4>
                    
                    <li><a href="/subschools/{{$subschool->id}}/edit"> <i class="fa fa-shield"></i> Update Sub School Info</a></li>

                    <li>

                  
              <a   
              href="#"
                  onclick="
                  var result = confirm('Are you sure you wish to delete this School?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                          >
                 <i class="fa fa-shield"></i> Delete
              </a>

              <form id="delete-form" action="{{ route('subschools.destroy',[$subschool->id]) }}" 
                method="POST" style="display: none;">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
              </form>

 
              
              
              </li>


               
             </div>
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                <li class="current submenu">
                   <h4>
                        <i class="fa fa-calendar" aria-hidden="true"></i> Upcoming Events   
                    </h4>
                </li>
                </ul>
             </div>

             <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                <li class="current submenu">
                   <h4>
                        <i class="fa fa-calendar-plus-o" aria-hidden="true"></i> School Calender   
                    </h4>
                </li>
                </ul>
             </div>

          </div>
          
        </div>
        
    </div>
</div>
@endsection