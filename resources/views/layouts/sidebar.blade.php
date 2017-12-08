  
            <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                <li class="current submenu">
                   <h4> 
                      <i class="fa fa-shield"></i> School Options     
                    </h4>

                    <li><a href="/schools/{{$school->id}}"> <i class="fa fa-shield"></i>About School</a></li>
                    <li><a href="/schools/{{$school->id}}/edit"> <i class="fa fa-shield"></i> Update School Info</a></li>

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

              <form id="delete-form" action="{{ route('schools.destroy',[$school->id]) }}" 
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