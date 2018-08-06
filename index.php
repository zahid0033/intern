<?php
/*
created by 
* Name :Zahid Hossain
* Date :27-july-18
*/
session_start();

include "includes/header.php";


?>

    <!-- ******* start ******* -->
    <?php include "includes/head.php" ?>
    
    <!-- *********** Navbar **************  -->
    
    <?php include "includes/navbar.php" ?>
    <!-- /.navbar-collapse -->
    <!-- *********** slider **************** 
    <section id="slider">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item show">
                <div class="slider_text">
                    <h2>Welcome to</h2>
                    <h1>WebCode Institute</h1>
                    <p>Lorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply </p> <a href="#" class="btn btn-success">Purchase Now</a> <a href="#" class="btn btn-success">View Courses</a> </div>
            </div>
            <div class="item show">
                <div class="slider_text">
                    <h2>Welcome to</h2>
                    <h1>WebCode Institute</h1>
                    <p>Lorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply </p> <a href="#" class="btn btn-success">Purchase Now</a> <a href="#" class="btn btn-success">View Courses</a> </div>
            </div>
            <div class="item show">
                <div class="slider_text">
                    <h2>Welcome to</h2>
                    <h1>WebCode Institute</h1>
                    <p>Lorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply dummyLorem Ipsum is simply </p> <a href="#" class="btn btn-success">Purchase Now</a> <a href="#" class="btn btn-success">View Courses</a> </div>
            </div>
        </div>
    </section>
    -->
    
       <!-- ************ Category ************ -->
    <section id="category">
        
            
            <div class="category ">
                  
                  <div class="col-sm-8 catgDegree">
                      <h3>Categories</h3>
                      <?php include "includes/allQuery.php"; ?>
                      
                      <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                      
                      
                      
                  </div>
                  <div class="col-sm-4 ">
                    
                    
                    <div class="location col-sm-12">
                     
                       
                          <h3 style="text-align:center; color:white; ">Divisional Job</h3>
                          
                           <?php include "includes/allQuery.php"; ?>

                           <div class="col-sm-6">
                              
                               <p><a href="jobPost.php?location=Dhaka">Dhaka(<?php echo $count1 ?>)</a></p>
                               <p><a href="jobPost.php?location=Chittagong">Chittagong(<?php echo $count7 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Rajshahi(<?php echo $count3 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Khulna(<?php echo $count3 ?>)</a></p>
                           </div>
                           <div class="col-sm-6">
                               <p><a href="jobPost.php?location=Comilla">Barishal(<?php echo $count4 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Sylhet(<?php echo $count5 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Mymensingh(<?php echo $count6 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Comilla(<?php echo $count7 ?>)</a></p>
                                
                           </div>
                           
                           <p style="color: white;margin-top: 18em;text-align: center;">Find your desirable internee from your division by just clicking in here</p>
                        
                      </div>
                       
                        
                  </div>
                   
                    
                    
            </div>
        
    </section>
    
    
    <!-- ************ Category2 ************ -->
    <section id="category2">
        <div class="col-sm-12 catgDegree">
            <h3><i class="fa fa-bars fa-1x" aria-hidden="true"></i>Categories</h3>
                      <?php include "includes/allQuery.php"; ?>
                      
                      <div class="col-sm-4">
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=NGO/Development">NGO/Development(<?php echo $catgCount2 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                      </div>
                      <div class="col-sm-4">
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                      </div>
                      <div class="col-sm-4">
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          <p><i class="fa fa-clock-o" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                      </div>
                      
                      
                      
                      
                  </div>
    </section>

    <!-- ************ About our Code ************ -->
    <section id="about_our_code">
        <div class="container">
           <div class="heading">
            <h2>About Our Code</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
        </div>
            <div class="about">
                <div class="col-sm-6 col-md-6"> <img src="images/grouppic.jpg" alt="group" class="img-responsive"> </div>
                <div class="col-sm-6 col-md-6">
                    <div class="para">
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy text of the printing and
                            <br>
                            <br>
                            <br> typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                        <button class="btn btn-success"> Meet Our Team </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
 
    
    <!-- ************ Recent course ************** -->
    <section id="recent_courses">
        <div class="container">
            <div class="heading">
                <h2>Recent course</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            
            <div class="row">
                <div class="col-sm-4 services"> 
                    <i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
                <div class="col-sm-4 services"> 
                    <i class="fa fa-wordpress fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
                <div class="col-sm-4 services">
                    <i class="fa fa-joomla fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
                <div class="col-sm-4 services">
                    <i class="fa fa-drupal fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
                <div class="col-sm-4 services">
                    <i class="fa fa-html5 fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
                <div class="col-sm-4 services">
                    <i class="fa fa-paint-brush fa-3x" aria-hidden="true"></i>
                    <h3>Web Development</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownLorem Ipsum is simply dummy</p>
                </div>
            </div>
      
            
        </div>
    </section>
    <!-- *************** Webcode Gallery ******************* -->
    <section id="webcode_gallery">
        <div class="container">
            <div class="heading">
                <h2>Web Code Gallery</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="row">
                <div data-js="hero-demo">
                    <div class="filters btn-group ">
                        <button class="btn-custom2 is-checked" data-filter="*">show all</button>
                        <button class="btn-custom2" data-filter=".wordpress">Wordpress</button>
                        <button class="btn-custom2" data-filter=".graphics">Graphics Design</button>
                        <button class="btn-custom2" data-filter=".development">Development</button>
                        <button class="btn-custom2" data-filter=".web">Web Design</button>
                        <!--                       <button class="button" data-sort-by="number">number</button> -->
                    </div>
                    <hr>
                    <div class="col-sm-12">
                        <div class="grid">
                            <div class="element-item wordpress web col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery1.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item graphics col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery2.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item development web col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery3.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item graphics wordpress web col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery4.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item wordpress col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery5.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item graphics web col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery6.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item development web col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery7.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="element-item graphics wordpress  col-sm-3">
                                <div class="isotope_img"> <img src="images/gallery8.jpg" alt="Image 3.4" class="img-responsive">
                                    <div class="isotope_overlay">
                                        <div class="icon_overlay"> <i class="fa fa-search" aria-hidden="true"></i> <i class="fa fa-paperclip" aria-hidden="true"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ************** webcode offer ***************-->
    <section id="webcode_offer">
        <div class="container">
            <div class="heading">
                <h2>Web Code Offer</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="offers">
                <div class="row">
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/creative.png" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>Creative Design</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/coding.png" alt=""></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>24/7 Online support</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/responsive.png" alt=""></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>Responsive design</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/coding.png" alt=""></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>Awsome Coding</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/cashback.png" alt=""></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>100% Cash Back</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 offers1">
                        <div class="row">
                            <div class="col-sm-3">
                                <a href="#"><img src="images/bestoffer.png" alt=""></a>
                            </div>
                            <div class="col-sm-9">
                                <h3>Best Offer</h3>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** resource person *********** -->
    <section id="resource_person">
        <div class="container">
            <div class="heading">
                <h2>RESOURCE PERSON</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="row">
                <div class="col-sm-4 info"> <img src="images/person1.jpg" alt="" class="img-responsive">
                    <div class="info_text">
                        <h3>Mazedul Islam</h3>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
                <div class="col-sm-4 info"> <img src="images/person2.jpg" alt="" class="img-responsive">
                    <div class="info_text">
                        <h3>Mazedul Islam</h3>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
                <div class="col-sm-4 info"> <img src="images/person3.jpg" alt="" class="img-responsive">
                    <div class="info_text">
                        <h3>Mazedul Islam</h3>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***************** What people say **************  -->
    <section id="what_people_say">
        <div class="container">
            <div class="heading">
                <h2>What people say</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="say">
                <div class="row">
                    <div class="col-sm-6 say1">
                        <div class="row">
                            <div class="col-sm-3"> <img src="images/say1.png" alt="" class="img-responsive"> </div>
                            <div class="col-sm-9">
                                <h3>Md. Zahid Hossain</h3> <span>Web developer</span>
                                <br>
                                <br>
                                <br>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.Holisticly impct granlar scllaboron target listic aileaership after</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 say1">
                        <div class="row">
                            <div class="col-sm-3"> <img src="images/say2.png" alt="" class="img-responsive"> </div>
                            <div class="col-sm-9">
                                <h3>Md. Zahid Hossain</h3> <span>Web developer</span>
                                <br>
                                <br>
                                <br>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.Holisticly impct granlar scllaboron target listic aileaership after</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 say1">
                        <div class="row">
                            <div class="col-sm-3"> <img src="images/say3.png" alt="" class="img-responsive"> </div>
                            <div class="col-sm-9">
                                <h3>Md. Zahid Hossain</h3> <span>Web developer</span>
                                <br>
                                <br>
                                <br>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.Holisticly impct granlar scllaboron target listic aileaership after</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 say1">
                        <div class="row">
                            <div class="col-sm-3"> <img src="images/say4.png" alt="" class="img-responsive"> </div>
                            <div class="col-sm-9">
                                <h3>Md. Zahid Hossain</h3> <span>Web developer</span>
                                <br>
                                <br>
                                <br>
                                <p>Holisticly impct granlar scllaboron target listic aileaership after state of the art process improvements.Holisticly impct granlar scllaboron target listic aileaership after</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- *************** Latest_blog **************** -->
    <section id="latest_blog">
        <div class="container">
            <div class="heading">
                <h2>our Latest blog</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="row">
                <div class="col-sm-4 blog"> <img src="images/gallery1.jpg" alt="" class="img-responsive">
                    <div class="blog1">
                        <h3>Machanically hire machine</h3> <i class="fa fa-user" aria-hidden="true"></i><span>robot</span> <i class="fa fa-comments-o" aria-hidden="true"></i><span>12 comments</span> <i class="fa fa-eye" aria-hidden="true"></i><span>120</span> </div>
                    <div class="blog2">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p> <a href="#" class="btn btn-custom1">Click here</a> </div>
                </div>
                <div class="col-sm-4 blog"> <img src="images/gallery2.jpg" alt="" class="img-responsive">
                    <div class="blog1">
                        <h3>Machanically hire machine</h3> <i class="fa fa-user" aria-hidden="true"></i><span>robot</span> <i class="fa fa-comments-o" aria-hidden="true"></i><span>12 comments</span> <i class="fa fa-eye" aria-hidden="true"></i><span>120</span> </div>
                    <div class="blog2">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p> <a href="#" class="btn btn-custom1">Click here</a> </div>
                </div>
                <div class="col-sm-4 blog"> <img src="images/gallery3.jpg" alt="" class="img-responsive">
                    <div class="blog1">
                        <h3>Machanically hire machine</h3> <i class="fa fa-user" aria-hidden="true"></i><span>robot</span> <i class="fa fa-comments-o" aria-hidden="true"></i><span>12 comments</span> <i class="fa fa-eye" aria-hidden="true"></i><span>120</span> </div>
                    <div class="blog2">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p> <a href="#" class="btn btn-custom1">Click here</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** Our client logo ************** -->
    <section id="client_logo">
        <div class="container">
            <div class="heading">
                <h2>our client logo</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-swiper-autoplay="20">
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client3.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client4.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client3.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client4.png" class="img-responsive" alt="client"> </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-autoplay="20">
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client3.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client4.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client3.png" class="img-responsive" alt="client"> </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="client"> <img src="images/client4.png" class="img-responsive" alt="client"> </div>
                        </div>
                    </div>
                </div>
                <!-- swipper wrapper end-->
            </div>
            <!-- swipper container end-->
        </div>
    </section>
    <!-- ****************** our contact us *************** -->
    <section id="contact_us">
        <div class="container">
            <div class="heading">
                <h2>our contact us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
            <div class="adress">
                <div class="row">
                    <div class="col-sm-4 adress1"> <i class="fa fa-mobile" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>+ 326 581 2547 , 021 583</span>
                            <br><span>+88 019 239 702 12, </span></span>
                        </div>
                    </div>
                    <div class="col-sm-4 adress1"> <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>Suite 02, Level 12, Sahera Tropical Center 218 </span>
                            <br><span>New Elephant Road, Dhaka - 1205 </span></span>
                        </div>
                    </div>
                    <div class="col-sm-4 adress1"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <div class="adress1_text"> <span><span>upport@gmail.com</span>
                            <br><span>Info@gmail.com </span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="adress2">
               <div class="row">
                <div class="col-sm-6">
                   <form action="">
                        <div class="form-group">
                            <input type="text" name="" class="form-control required" placeholder="Your Name *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="" class="form-control required" placeholder="Your Email *">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control" rows="6" placeholder="Your Message *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.344743300535!2d90.4240397303657!3d23.762131753335787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b80a03c8e22f%3A0xd52685f4a2fe003c!2sBanasree%2C+Dhaka%2C+Bangladesh!5e0!3m2!1sen!2s!4v1484271141831" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- **************** footer ******************* -->
    <section id="footer">
        <div class="container">
            <div class="row footer">
                <div class="col-sm-4">
                    <div class="footer_logo">
                        <a href="#"><img src="images/intern.png" alt="intern" class="img-responsive"></a>
                    </div>
                    <hr>
                    <div class="logo_text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                    </div>
                    <br>
                    <div class="follow_us">
                        <ul class="list-inline">
                            <li>Follow us : </li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email *"> <span class="input-group-addon btn btn-custom3" id="addon">Subscribe</span> </div>
                </div>
                <div class="col-sm-4">
                    <h3>Recent Blog Post</h3>
                    <hr>
                    <div class="row blog">
                        <div class="col-sm-3">
                            <a href="#"><img src="images/foot.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-9">
                            <p>Lorem Ipsum is simply dummy text of the printing</p> <span>jan 9,2016</span> </div>
                    </div>
                    <div class="row blog">
                        <div class="col-sm-3">
                            <a href="#"><img src="images/foot.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-9">
                            <p>Lorem Ipsum is simply dummy text of the printing</p> <span>jan 9,2016</span> </div>
                    </div>
                    <div class="row blog">
                        <div class="col-sm-3">
                            <a href="#"><img src="images/gallery4.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="col-sm-9">
                            <p>Lorem Ipsum is simply dummy text of the printing</p> <span>jan 9,2016</span> </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h3>Instagram</h3>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                        <div class="col-sm-4 instagram"> <img src="images/foot.jpg" alt="" class="img-responsive"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include "includes/footer.php"?>