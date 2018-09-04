<?php
session_start();


include "../includes/header.php";


?>
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
                      
                        
                        
                       
                  echo' <li><a href="../index.php">Home</a></li>
                        <li><a href="../about.php">About us</a></li>
                        <li><a href="../jobPost.php">Job Posts</a></li>
                        <li><a href="../contact.php">Contact us</a></li>
                        ';
                      
                        
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            
            
        
    </section>
       
       
       
 
        <div class="container" >
        <div class="empReg">
            <h2 style="text-align: center;"> Emloyee Registration</h2><hr>
           
            <div class="form-group">
                <form method="POST" action="loginIntern_validation.php" name="reg">
               
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">User Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="uname" class="validate form-control" placeholder="Full Name" required />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="validate form-control" id="email" placeholder="e.g : abc@gnail.com" onchange="JavaScript:show()"  required /><br/>
                            
                        </div>
                       
                        <div id="msg"></div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="Password length must be between 6 to 16" name="pw" class="validate form-control" required />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" name="cpw" class="validate form-control" required />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="input-medium bfh-phone form-control" data-format="+1 (ddd) ddd-dddd" name = "phoneNumber"placeholder="e.g : 015XXXXXXXX" required>
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" name="disignation" class="validate form-control" placeholder="e.g : CEO" required />
                        </div>
                </div>
				<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
							  <input type="date" name="dob" required>
                        </div>
                </div>
				
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Company's Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="comname" class="validate form-control" placeholder="e.g : Amazon" required />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Company's Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="comadd" class="validate form-control" placeholder="e.g : 14/a Rampura,Dhaka"/>
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Company's Web</label>
                        <div class="col-sm-9">
                            <input type="text" name="comweb" class="validate form-control" placeholder="e.g : https://linkedin.com"/>
                        </div>
                </div>
               
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Company Type <span class="error">*</span></label>
                        <div class="col-sm-9">
                            <select name="type[]" id="country" class="btn  col-sm-12">
                                <option value=" ">- select -</option>
                                <option value="Business ">Business</option>
                                <option value="Startup ">Startup</option>
                                <option value="Farm ">Farm</option>
                            </select>
                            <span class="error_box"></span>
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Business Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="bd" class="validate form-control"/>
                        </div>
                </div>
               
                <div class="form-group row">
                    <input type="submit" name="submit" value="submit" class="btn btn-success" style="float: right" />
                </div>
               
                   
                </form>
            </div>
           
            </div>
           
        </div>
       
    <script src="js/bootstrap.min.js"></script>
    


 <!-- Modal -->
 <div id="myModal" class="modal">
  <!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close" id="close">&times;</span>
    <h2>Term & Condition</h2>
  </div>
  <div class="modal-body">
    <p>Term And Condition will go here</p>
    <p>Some other text...</p>
  </div>
  <div class="modal-footer">
    <h3>Footer</h3>
  </div>
</div>
</div>

<script>
    validation.init("login_intern");

  </script>
  
	   <?php 
         $passErr="" ;$bdErr="" ; $phErr="" ;$unErr="";$cwErr="";
          if(isset($_GET['val']))
               {
                if($_GET['val']==1)
                {
                  
                  if(isset($_SESSION['bdErr']))
                  {
                    $bpErr=$_SESSION['bdErr'];
                  }
                  if(isset($_SESSION['phErr']))
                  {
                    $phErr=$_SESSION['phErr'];
                  }
                  if(isset($_SESSION['passErr']))
                  {
                    $passErr=$_SESSION['passErr'];
                  }
				  if(isset($_SESSION['cwErr']))
                  {
                    $cwErr=$_SESSION['cwErr'];
                  }
                
              $str='\n'.$bdErr.'\n'.$phErr.'\n'.$cwErr.'\n'.$passErr;
			   
			   echo $str;
				 echo "<script>setTimeout(function() {
                        swal('Oops!','".$str."','error');
                      }, 200);</script>";
				 
                }if($_GET['val']==0){}
					echo "<script>setTimeout(function() {
                        swal('success!''Done');
                      }, 200);</script>";
               }
			  

    ?>
	   
        <script language="Javascript">
 
            function postRequest(strURL)
            {
                var xmlHttp;
                if (window.XMLHttpRequest) // Mozilla, Safari, ...
                {
                    var xmlHttp = new XMLHttpRequest();
                    console.log("normal");
                }
                else if (window.ActiveXObject) // IE
                {
                    var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                    console.log("MS");
                }
                else
                {
                    alert("your browser does not support AJAX");
                    return;
                }
                xmlHttp.open('POST', strURL, true);
                xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xmlHttp.onreadystatechange = function()
                {
 
                    if (xmlHttp.readyState == 4)
                    {
                        updatepage(xmlHttp.responseText);
                    }
                }
                xmlHttp.send(strURL);
            }
            function updatepage(str)
            {
                document.getElementById("msg").innerHTML = str;
            }
            function show()
            {
                var div=document.getElementById("msg");
                console.log('result got');
                div.innerHTML = '<img src="img/loader.gif" />';
                console.log('loader got');
                var email=document.getElementById("email");
                var emailvalue=email.value;
                var url="emailcheck.php?emailvalue="+emailvalue;
                postRequest(url);
                console.log('request sent');
 
            }
			
			
			<!--modal-->
			var modal;
        function limit(element)
            {
              var max_chars = 8;
              var x;
              if(element.value.length > max_chars) {
                  document.getElementById('ph').value=x;
                  swal("Oops!","please enter 11 digit only","warning");
              }
             
            }
       window.onload=function(){
               modal=document.getElementById("myModal"); 

             document.getElementById("terms").addEventListener("click",function()
             {
              modal.style.display = "block";
            });

             document.getElementById("close").addEventListener("click",function(){
               modal.style.display = "none";
             });

     }

       window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		}
	}
			
        </script>