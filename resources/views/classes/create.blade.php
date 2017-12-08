@extends('layouts.app')

@section('content')

<div class="container">
    <div class="page-content">
        <div class="row">
          

          <div class="col-md-8">
              <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Add New School Details
                      </div>
                      <div class="panel-body">

                        <form method="post" action="{{ route('schools.create')}}">
                            {{ csrf_field() }}
       
                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                              <label for="school-name">School Name<span class="required">*</span></label>
                              <input placeholder="ECR Nursery Academy" id="school-name" required name="name" spellcheck="false" class="form-control" >

                            </div>



                            <div class="form-group">
                              <label for="school-name">School Slogan<span class="required">*</span></label>
                              <input placeholder="ECR Nursery Academy" id="school-slogan" required name="slogan" spellcheck="false" class="form-control" >

                            </div>


                             <div class="form-group">
                              <label for="school-name">School Head<span class="required">*</span></label>
                              <input placeholder="Principal/Head Master's Name" id="school-name" required name="schoolhead" spellcheck="false" class="form-control">

                            </div>

                            <div class="form-group">
                              <label for="school-content">Description</label>
                              <textarea placeholder="About School" 
                                    style="resize:vertical;" 
                                    id="school-content" 
                                    name="description" 
                                    rows="5" spellcheck="false" 
                                    class="form-control autosize-target text-left">
                              </textarea>
                              
                            </div>

                             <div class="form-group">
                              <label for="school-content">Address</label>
                              <textarea placeholder="School Address" 
                                    style="resize:vertical;" 
                                    id="school-content" 
                                    name="address" 
                                    rows="5" spellcheck="false" 
                                    class="form-control autosize-target text-left">
                              </textarea>
                              
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