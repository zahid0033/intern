
    <!-- *********** Navbar **************  -->
    <section id="navbar">
        
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <div class="logo">
                        <a class="navbar-brand" href="#"><img src="images/intern.png" alt="" style="height: 33px;"></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                       <?php
                       if(isset($_SESSION['un'])){
                            $un= $_SESSION['un'];
                            echo '<li><a href="index.php">Home</a></li>
                                  <li><a href="#about_our_code">About us</a></li>
                                  <li><a href="jobPost.php">Blog</a></li>
                                  <li><a href="listdata.php">List Data</a></li>';
                            echo "<li><a href=\"logoutm.php\">Logout</a></li>";
                            echo "<li><a href='#' style='float:right;'>"."<span class='label label-info'>Logged in as ".$un."</span></a></li>";
                       }
                        
                        else{
                       
                  echo' <li><a href="index.php">Home</a></li>
                        <li><a href="#about_our_code">About us</a></li>
                        <li><a href="#recent_courses">Services</a></li>
                        <li><a href="#resource_person">Portfolio</a></li>
                        <li><a href="#webcode_offer">Offer</a></li>
                        <li><a href="jobPost.php?location=Dhaka">Blog</a></li>
                        <li><a href="#contact_us">Contact us</a></li>
                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>';
                      }
                        
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        
    </section>
    
