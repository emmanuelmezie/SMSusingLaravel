@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content">
        <div class="row">
          

          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add New Sub School Details
                      </div>
                      <div class="panel-body">

                        <form method="post" action="{{ route('subschools.store')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                              <label for="subschool-name">Sub School Name<span class="required">*</span></label>
                              <input placeholder="ECR Nursery Academy" id="subschool-name" required name="name" spellcheck="false" class="form-control" >

                            </div>

                            <div class="form-group">
                              <label for="subschool_head">school head/Director/Head Master's Name <span class="required">*</span></label>
                              <input placeholder="Mr John Okafor" id="subschool_head" required name="school_head" spellcheck="false" class="form-control" >

                            </div>

                             <div class="form-group">
                              <input type="hidden" name="school_id" value="{{$school_id}}" />

                            </div>

                              
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary" value="Create">
                            </div>
                        </form>
                              


                      </div>                                 
                  </div>
            </div>
      </div>
  </div>

      <div class="col-md-4">
          
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