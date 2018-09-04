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
      
       
       
       
 
        <div class="container">
        <div class="empReg">
            <h2 style="text-align: center;"> Candidate Registration</h2><hr>
           
            <div class="form-group">
                <form method="POST" action="reg_candidate_validation.php" name="reg">
               
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">User Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="uname" class="validate form-control" placeholder="Full Name" required />
                        </div>
                </div>
				<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Profile picture</label>
                        <div class="col-sm-9">
                            <input type="file" name="profilepic" />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="validate form-control" id="email" placeholder="e.g : abc@gmail.com" onchange="JavaScript:show()" required /><br/>
                            
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
                        <label class="col-sm-3 col-form-label">Gender <span class="error">*</span></label>
                        <div class="col-sm-9">
                            <select name="gender[]" id="country" class="btn  col-sm-12">
                                <option value=" ">- select -</option>
                                <option value="Male ">Male</option>
                                <option value="Startup ">Female</option>
                                
                            </select>
                            <span class="error_box"></span>
                        </div>
                </div>
				<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
							  <input type="date" name="dob" required>
                        </div>
                </div>
				
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Skills</label>
                        <div class="col-sm-9">
                            <input type="text" name="skills" class="validate form-control" placeholder="e.g : Java,php" required />
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Previous Experience</label>
                        <div class="col-sm-9">
                            <input type="text" name="exp" class="validate form-control" placeholder="N/A for no experience"/>
                        </div>
                </div>
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Degrees</label>
                        <div class="col-sm-9">
                            <input type="text" name="degree" class="validate form-control" placeholder="BSc in CSE"/>
                        </div>
                </div>
               
                
               
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Present Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="presentAdd" class="validate form-control"/>
                        </div>
                </div>
				<div class="form-group row">
                    <label class="col-sm-3 col-form-label">Permanent Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="permanentAdd" class="validate form-control"/>
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
    validation.init("reg_candidate");

  </script>
  
	   <?php 
         $passErr="" ;$bdErr="" ; $phErr="" ;$unErr="";$cwErr="";
          if(isset($_GET['val']))
               {
                if($_GET['val']==1)
                {
                  
                  
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
			   
			   
				 echo "<script>setTimeout(function() {
                        swal('Oops!','".$str."','error');
                      }, 200);</script>";
				 
                }
				else if($_GET['val']==0)
			    {
				   
				   echo "<script>setTimeout(function() {
                        swal('Done!','','success');
                      }, 200);</script>";
			    }
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
                var url="cemailcheck.php?emailvalue="+emailvalue;
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
		
		<script>
		     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
		</script>
		
		
    <?php include "../includes/footer.php" ?>
  