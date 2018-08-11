
    <!-- *********** Navbar **************  -->
    <section id="navbar">
        
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="logo">
                        <a class="navbar-brand" href="index.php"><img src="images/intern.png" alt="" style="height: 33px;"></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                       <?php
                       if(isset($_SESSION['un'])){
                            $un= $_SESSION['un'];
                            echo '<li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About us</a></li>
                                  <li><a href="appliedJobs.php">Applied Jobs <span style="color: #fbf5f5;border: 2px solid green;border-radius: 100%;font-size: 15px;background: green;padding: 0px 4px 0px 4px;font-weight: 800;">'.$_SESSION['applied_job'].'</span></a></li>   <li><a href="jobPost.php?location=Dhaka">Job Posts</a></li>
                                  <li><a href="contact.php">Contact us</a></li>';
                            echo "<li><a href=\"logoutVer.php\">Logout</a></li>";
                           
                            echo "<li><a href='candProfile.php?user=".$un."' style='float:right;'>"."<span class='label label-info'>".$un."</span></a></li>";
                       }
                        else if(isset($_SESSION['en'])){
                            $en= $_SESSION['en'];
                            echo '<li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About us</a></li>
                                  <li><a href="candidates.php">Candidates <span style="color: #fbf5f5;border: 2px solid green;border-radius: 100%;font-size: 15px;background: green;padding: 0px 4px 0px 4px;font-weight: 800;">'.$_SESSION["candidate_count"].'</span></a></li>
                                  <li><a href="myjob.php">My job posts</a></li>
                                  <li><a href="contact.php">Contact us</a></li>';
                            echo "<li><a href=\"logoutVer.php\">Logout</a></li>";
                            echo "<li><a href='empProfile.php?user=".$en."' style='float:right;'>"."<span class='label label-info'>".$en."</span></a></li>";
                       }
                        
                        else{
                       
                  echo' <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#recent_courses">Services</a></li>
                        <li><a href="#resource_person">Portfolio</a></li>
                        <li><a href="#webcode_offer">Offer</a></li>
                        <li><a href="jobPost.php?location=Dhaka">Job Posts</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>';
                      }
                        
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            
            
        
    </section>
    
    
    
    
    
    
