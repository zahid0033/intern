<!-- ******* start ******* -->
    <section id="start">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col-sm-4">
                            <div class="contact">
                                <a href="#"><img src="images/callus.png" alt=""></a>
                                <p>English</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                           
                        </div>
                        <div class="col-sm-4">
                            
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="social">
                            <div class="col-sm-6">
                               
                               <?php 
                                
                                    if(isset($_SESSION['un'])||isset($_SESSION['en']) || isset($_SESSION['an'])){
                                        echo '';
                                    }
                                    else{

                                        echo  ' <div class="contact pull-right">
                                        <span><img src="images/signin.png" alt=""></span>


                                        <div class="dropdown">
                                          <a class="dropbtn" style="text-decoration:none;margin-right:5px;">Login</a>
                                          <div class="dropdown-content">
                                            <a href="loginCandidate.php">Candidate</a>
                                            <a href="loginEmployee.php">Employee</a>
                                            <a href="loginAdmin.php">Admin</a>
                                          </div>
                                        </div>
                                        <spqn style="margin-right:5px;"> / </spqn>
                                        <div class="dropdown">
                                          <a class="dropbtn" style="text-decoration:none;"> Register</a>
                                          <div class="dropdown-content">
                                            <a href="reg/reg_candidate.php">Candidate</a>
                                            <a href="reg/login_intern.php">Employee</a>
                                          </div>
                                        </div>

                                        </div> ';
                                    }
                                
                                ?>
                                
                                
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-inline pull-right social">
                                    <li><a href="https://www.facebook.com/zahidhossain123"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>