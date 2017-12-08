@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content">
        <div class="row">
          

          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-12">

                    <div class="panel panel-default">
                                <div class="panel-heading text-center"> 

                                     <h1>{{ $subschool->name }}</h1>
              
                                </div>
                     </div>

                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Edit School Details
                      </div>
                      <div class="panel-body">

                        <form method="post" action="{{ route('subschools.update',[$subschool->id]) }}">
                            {{ csrf_field() }}
       
                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                              <label for="school-name">School Name<span class="required">*</span></label>
                              <input placeholder="ECR Nursery Academy" id="school-name" required name="name" spellcheck="false" class="form-control" value="{{ $subschool->name }}">

                            </div>


                             <div class="form-group">
                              <label for="school-name">School Head<span class="required">*</span></label>
                              <input placeholder="Mr James John" id="school-name" required name="school_head" spellcheck="false" class="form-control" value="{{ $subschool->school_head }}">

                            </div>


                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Update">
                            </div>
                        </form>
                              


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
                    <li><a href="/subschools/{{$subschool->id}}/edit"> <i class="fa fa-shield"></i> Update Sub School </a></li>

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