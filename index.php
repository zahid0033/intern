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
                      <h3 style="padding-top: 3em;">Hello Interns</h3>
                     
                      <h4>We are here for you now </h4>
                      
                      <h5>This is one of the largest site for searching interns all over the country</h5>
                      
                      <p>Age 25 to 40 years Both males and females are allowed to apply Must be energetic, able to work under pressure and meet deadlines</p>
                      
                      
                      
                  </div>
                  <div class="col-sm-4 ">
                    
                    
                    <div class="location col-sm-12">
                     
                       
                          <h3 style="text-align:center; color:white; ">Divisional Job</h3>
                          
                           <?php include "includes/allQuery.php"; ?>

                           <div class="col-sm-6">
                              
                               <p><a href="jobPost.php?location=Dhaka">Dhaka(<?php echo $count1 ?>)</a></p>
                               <p><a href="jobPost.php?location=Chittagong">Chittagong(<?php echo $count2 ?>)</a></p>
                                <p><a href="jobPost.php?location=Rajshahi">Rajshahi(<?php echo $count3 ?>)</a></p>
                                <p><a href="jobPost.php?location=Rangpur">Rangpur(<?php echo $count4 ?>)</a></p>
                           </div>
                           <div class="col-sm-6">
                               <p><a href="jobPost.php?location=Barishal">Barishal(<?php echo $count5 ?>)</a></p>
                                <p><a href="jobPost.php?location=Khulna">Khulna(<?php echo $count6 ?>)</a></p>
                                <p><a href="jobPost.php?location=Comilla">Comilla(<?php echo $count7 ?>)</a></p>
                                <p><a href="jobPost.php?location=Sylhet">Sylhet(<?php echo $count8 ?>)</a></p>
                                
                           </div>
                           
                           <p style="color: white;margin-top: 18em;text-align: center;">Find your desirable internee from your division by just clicking in here</p>
                        
                      </div>
                       
                        
                  </div>
                   
                    
                    
            </div>
        
    </section>
    
    <!-- ************ Category2 ************ -->
    <section id="category2">
      
      <div class="container col-sm-12">
      
       <div class="col-sm-3 category2Left">
           <h3>Hello bangladesh</h3>
           <h5>We are here for you</h5>
           <p>Who wants internee urgently just click here</p>
           <p>Who wants internee urgently just click here Who wants internee urgently just click here Who wants internee urgently just click here</p>
           
           <button class="btn btn-primary" style="margin-top:2em;">Visit Page</button>
       </div>
        <div class="col-sm-9 category2">
            <h3 style="margin-left: 15px;color:#17aa10;"><i class="fa fa-bars fa-1x" aria-hidden="true" style="margin-right:10px;"></i>Categories</h3>
                      <?php include "includes/allQuery.php"; ?>
                      
                      <div class="col-sm-4">
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Accounting/Finance">Accounting/Finance(<?php echo $catgCount1 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=NGO/Development">NGO/Development(<?php echo $catgCount2 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Commercial/Supply Chain">Commercial/Supply Chain(<?php echo $catgCount3 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Education/Training">Education/Training(<?php echo $catgCount4 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Engineer/Architects">Engineer/Architects(<?php echo $catgCount5 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Garments/Textile">Garments/Textile(<?php echo $catgCount6 ?>)</a></p>
                      </div>
                      <div class="col-sm-4">
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=HR/Org. Development">HR/Org. Development(<?php echo $catgCount7 ?>)</a></p>
                          
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Gen Mgt/Admin">Gen Mgt/Admin(<?php echo $catgCount8 ?>)</a></p>
                          
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Design/Creative">Design/Creative(<?php echo $catgCount9 ?>)</a></p>
                          
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Production/Operation">Production/Operation(<?php echo $catgCount10 ?>)</a></p>
                          
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Hospitality/ Travel/ Tourism">Hospitality/ Travel/ Tourism(<?php echo $catgCount11 ?>)</a></p>
                          
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Beauty Care/ Health & Fitness">Beauty Care/ Health /Fitness(<?php echo $catgCount12 ?>)</a></p>
                      </div>
                      <div class="col-sm-4">
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Electrician/ Construction/ Repair">Electrician/ Construction/ Repair(<?php echo $catgCount13 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=IT/Telecommunication">IT/Telecommunication(<?php echo $catgCount14 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Marketing/Sales">Marketing/Sales(<?php echo $catgCount15 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Customer Support/Call Centre">Customer Support/Call Centre(<?php echo $catgCount16 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Media/Ad./Event Mgt">Media/Ad./Event Mgt(<?php echo $catgCount17 ?>)</a></p>
                          
                          <p><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="jobPost.php?category=Medical/Pharma">Medical/Pharma(<?php echo $catgCount18 ?>)</a></p>
                      </div>
                      
                      
                      
                      
                  </div>
                  
     </div> 
                  
    </section>
    
    <!-- ************ search job ************ -->
    <section id="search">
        <div class="container col-sm-12">
            <p>have you any thing ? </p>
            <form action="search.php">
               
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label">industry type <span class="error">*</span></label>
                        <div class="col-sm-9">
                            <select name="fathrNatnlity" id="country" class="btn  col-sm-12">
                                <option value=" ">- select -</option>
                                <option value="Bangladesh ">Bangladesh</option>
                                <option value="India ">India</option>
                                <option value="Pakistan ">Pakistan</option>
                            </select>
                            <span class="error_box"></span>
                        </div>
                </div>
                
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label">industry type <span class="error">*</span></label>
                        <div class="col-sm-9">
                            <select name="fathrNatnlity" id="country" class="btn  col-sm-12">
                                <option value=" ">- select -</option>
                                <option value="Bangladesh ">Bangladesh</option>
                                <option value="India ">India</option>
                                <option value="Pakistan ">Pakistan</option>
                            </select>
                            <span class="error_box"></span>
                        </div>
                </div>
                
                <input type="submit" name="submit" value="search">
                
                
            </form>
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
    
    <!-- **************** footer ******************* -->
   <?php include "includes/last.php" ?>
    
    

    
    <script>
    $(document).ready(function(){
        
        setInterval(function(){
           
            update_last_activity();
            current_time();
            
        },500);
        
       function update_last_activity(){
           $.ajax({
               url: "chat_update_last_activity.php",
               success:function(){
                   
               }
           })
       }
        function current_time(){
            $.ajax({
                url: "includes/current_time.php",
                success: function(){
                    
                }
            })
        }
    
       
        
        
    });
</script>
    
    
    
    <?php include "includes/footer.php" ?>