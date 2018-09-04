
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
                           
                           // for counting applied jobs
                           include "config.php";
                           $statement = "select * from applicant where cMail = '$un' ";
                            $result = mysqli_query($conn,$statement);

                            $count = mysqli_num_rows($result);
                           
                           // for showing name on navbar
                           include "config.php";
                           $query= "select * from candidate where cMail='$un'";
                           $result=mysqli_query($conn,$query);
                           if(mysqli_num_rows($result) > 0){
        
                                while($row = mysqli_fetch_assoc($result)){
                                    $cName = $row['cName'];
                                }
                           }
                           
                           
                           
                            echo '<li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About us</a></li>
                                  <li><a href="appliedJobs.php">Applied Jobs <span style="color: #fbf5f5;border: 2px solid green;border-radius: 100%;font-size: 15px;background: green;padding: 0px 4px 0px 4px;font-weight: 800;">'.$count.'</span></a></li>   <li><a href="jobPost.php">Job Posts</a></li>
                                  <li><a href="contact.php">Contact us</a></li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$cName.' <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="candProfile.php?user='.$un.'"><i class="fa fa-fw fa-user"></i> Profile</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="logoutVer.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>';
                           
                           
                           // echo "<li><a href=\"logoutVer.php\">Logout</a></li>";
                           
//                  echo "<li><a href='candProfile.php?user=".$un."' style='float:right;'>"."<span class='label label-info'>".$un."</span></a></li>";
                       }
                        
                        
                        else if(isset($_SESSION['en'])){
                            $en= $_SESSION['en'];
                            
                            
                           include "config.php";
                           $query= "select * from employer where eMail='$en'";
                           $result=mysqli_query($conn,$query);
                           if(mysqli_num_rows($result) > 0){
        
                                while($row = mysqli_fetch_assoc($result)){
                                    $eName = $row['eName'];
                                }
                           }
                            
                            echo '<li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About us</a></li>
                                  <li><a href="candidates.php">Candidates </a></li>
                                  <li><a href="myjob.php">My job posts</a></li>
                                  <li><a href="jobPost.php">Job Posts</a></li>
                                  <li><a href="contact.php">Contact us</a></li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$eName.' <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="empProfile.php?user='.$en.'"><i class="fa fa-fw fa-user"></i> Profile</a>
                                        </li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="logoutVer.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>';
                    //    echo "<li><a href=\"logoutVer.php\">Logout</a></li>";
                    //    echo "<li><a href='empProfile.php?user=".$en."' style='float:right;'>"."<span class='label label-info'>".$en."</span></a></li>";
                       }
                        else if(isset($_SESSION['an'])){
                            $an= $_SESSION['an'];
                            echo '
                                  <li><a href="admin/index.php">Admin</a></li>
                                  <li><a href="index.php">Home</a></li>
                                  <li><a href="about.php">About us</a></li>
                                  <li><a href="jobPost.php">Job Posts</a></li>
                                  <li><a href="contact.php">Contact us</a></li>
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> '.$an.' <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="empProfile.php?user='.$an.'"><i class="fa fa-fw fa-user"></i> Profile</a>
                                        </li>
 
                                        <li class="divider"></li>
                                        <li>
                                            <a href="logoutVer.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </li>';
                    //    echo "<li><a href=\"logoutVer.php\">Logout</a></li>";
                    //    echo "<li><a href='empProfile.php?user=".$en."' style='float:right;'>"."<span class='label label-info'>".$en."</span></a></li>";
                       }
                        
                        else{
                       
                  echo' <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="jobPost.php">Job Posts</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        ';
                      }
                        
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            
            
        
    </section>
    
    
    
    
    
    
