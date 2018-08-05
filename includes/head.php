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
                            <div class="contact">
                                <a href="#"><img src="images/languages.png" alt=""></a>
                                <p>English</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact">
                                <a href="#"><img src="images/email.png" alt=""></a>
                                <p>English</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="social">
                            <div class="col-sm-6">
                               
                               <?php 
                                
                                    if(isset($_SESSION['un'])){
                                        echo '';
                                    }
                                    else{

                                        echo  ' <div class="contact pull-right">
                                        <span><img src="images/signin.png" alt=""></span>


                                        <div class="dropdown">
                                          <a class="dropbtn" style="text-decoration:none;margin-right:5px;">Login</a>
                                          <div class="dropdown-content">
                                            <a href="loginv.html">Candidate</a>
                                            <a href="#">Employee</a>
                                            <a href="../Intern/cms/admin/index.php">Admin</a>
                                          </div>
                                        </div>
                                        <spqn style="margin-right:5px;"> / </spqn>
                                        <div class="dropdown">
                                          <a class="dropbtn" style="text-decoration:none;"> Register</a>
                                          <div class="dropdown-content">
                                            <a href="regv.html">Candidate</a>
                                            <a href="#">Employee</a>
                                          </div>
                                        </div>

                                        </div> ';
                                    }
                                
                                ?>
                                
                                
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-inline pull-right social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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