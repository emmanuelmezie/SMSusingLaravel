@extends('layouts.layout')
@section('title')
ECR-SMS
@stop

@section('body')  
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
      
        <!-- Modal content no 1-->
    
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="on" /> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <div class="text-border">
                <h2 class="text-dec">Simplicity & Flexibility Defined </h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">All-in- One School Management System</p>
                <p class="small-text">Learning Today... Leading Tomorrow.</p>
                <a href="#footer" class="btn get-quote">GET A QUOTE</a>
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>School Management System Features</h2>
            <p>Everything your Institute will ever need, yet Simple</p>
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-6">
                <div class="heading pull-right">
                  <h4>Student, Employee and Parent Records</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-users"></i>
                </div>

                 <div class="heading pull-right">
                  <h4>Attendance Register/Reports</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-calendar-check-o"></i>
                </div>

                 <div class="heading pull-right">
                  <h4>Student & Parent Portal</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-laptop"></i>
                </div>

                <div class="heading pull-right">
                  <h4>Events and Calender Management</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-calendar"></i>
                </div>


                <div class="heading pull-right">
                  <h4>Assignment/Homework Management</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-book"></i>
                </div>


                <div class="heading pull-right">
                  <h4>SMS Integration</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-envelope-o"></i>
                </div>


                <div class="heading pull-right">
                  <h4>Report Cards</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-vcard-o"></i>
                </div>


                <div class="heading pull-right">
                  <h4>Timetable</h4>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-file-text"></i>
                </div>

              </div>


              <div class="col-md-6">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgStyle">
                  <i style="align-content: center;" class="fa fa-shield fa-flip-vertical"></i>
                  <h4 style="text-align: center;">Simple & easy to use for your teachers</h4>
                   <p>Designed to engage teachers and parents. No expertise required to quickly accomplish a task.</p>
                  </div>
                 
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgStyle">
                  <i class="fa fa-plane"></i>
                 <h4 style="text-align: center;"> Powerful features for your institution</h4>
                    <p>All our plans are affordable and comes with no limits on the number of student, teacher and parent logins.</p>
                  </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 imgStyle">
                         <i class="fa fa-tablet"></i>
                     <h4 style="text-align: center;"> SMS Integration</h4>
                    <p>All our plans are affordable and comes with no limits on the number of student, teacher and parent logins.</p>
                  </div>

                </div>
              </div>

               
            </div>
            
      
        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
    <section id ="organisations" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>200</h3>
                <p>Schools</p>
                <i class="fa fa-shield fa-flip-vertical"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>19550</h3>
                <p>Pupils</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>10</h3>
                <p>Countries</p>
                <i class="fa fa-shield fa-rotate-180"></i>
              </div>  
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-info">
              <hgroup>
                <h3 class="det-txt"> WE BELIEVE IN BRANDING YOUR SCHOOL</h3>
                <h4 class="sm-txt">(ECRSMS version 1.1.0 is Available)</h4>
              </hgroup>
             <p class="det-p">At ECRSMS we work to make sure we automate all activities in your Institution, from students daily roll calls to End of Term Report cards.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Organisations-->
    <!--Cta-->
    <!--
    <section id="cta-2">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Subscribe Now</h2>
              <p class="cta-2-txt">Sign up for our free weekly NewsLetter Today, Stay in Touch.</p>
             <div class="cta-2-form text-center">
              <form action="#" method="post" id="workshop-newsletter-form">
                    <input name="" placeholder="Enter Your Email Address" type="email">
                    <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                </form>
             </div>   
            </div>
        </div>
      </div>
    </section>
  -->
    <!--/ Cta-->

    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2 class="white">See What Our Customer Are Saying?</h2>
            <hr class="bottom-line bg-white">
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
              <img src="img/mentor.jpg" class="tesImg img-responsive img-circle" align="right" />
              <p class="text-par">"ECRSMS has been of great help to our school, the software has made the school administration work very easy for me"</p>
              <p class="text-name">Mrs. Gina Abraham - Prinicipal (Graceland Academy)</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
             <img src="img/mentor.jpg" class="tesImg img-responsive img-circle" align="right" />
              <p class="text-par">"I never thought running a school could be this easy, till i started using ECRSMS to run  my school"</p>
              <p class="text-name">Emma Adimora - Director (Vantage Academy)</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Testimonial-->

<!--Courses-->

    <section id ="client" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Meet Our Clients</h2>
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course01.jpg" class="img-responsive">
              <figcaption>
                  <h3>Vantage Academy</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course02.jpg" class="img-responsive">
              <figcaption>
                  <h3>School Name</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course03.jpg" class="img-responsive">
            <figcaption>
                  <h3>School Name</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course04.jpg" class="img-responsive">
             <figcaption>
                  <h3>School Name</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course05.jpg" class="img-responsive">
            <figcaption>
                  <h3>School Name</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/course06.jpg" class="img-responsive">
              <figcaption>
                  <h3>School Name</h3>
                  <p>School Address</p>
              </figcaption>
              <a href="#"></a>
            </figure>
          </div>
        </div>
      </div>
    </section>
    
    <!--/ Courses-->

    <!--work-shop-->
    <section id="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Life Learning Course for Kids From ECR </h2>
            <p>Teach your puplis IT education that will empower them for life,<br> with life learning institute scheme for schools.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-television color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Basic Introduction to Computing for Kids</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-css3 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Computer Appreciation for kids </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-html5 color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Basic Introduction to HTML</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ work-shop-->
    <!--Faculity member-->
    <!--
    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Meet Our Faculty Member</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Bryan Johnson</p>
                <p class="pm-staff-profile-title">Lead Software Engineer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>

     <div id="sendmessage">Your message has been sent. Thank you!</div>
    -->
    <!--/ Faculity member-->

  <!--Contact-->
   
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Get In Touch</h2>
            <h3></h3>
            <p>We'd like to know what you think, please leave us a message</p>
            <hr class="bottom-line">
          </div>
        
            <div class="col-md-6 col-sm-6 col-xs-12 left">
              <form action="" method="post" role="form" class="contactForm">
             
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
            
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
            
             </form>
          
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 right">

           

            </div>       
          

       

          <!--
          <form action="" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
            
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
              </div>
          </form>

          -->
          
      
      </div>
   </div>
</section>   
  @stop
    