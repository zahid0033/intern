<?php
session_start();
include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>
    
     <!-- *********** login **************  -->
		<div class="container">
		
		<div class="col-sm-4">
		   
		</div>
		<div class="col-sm-4">
		    <h2> Employee Login </h2><hr>
			<div class="form-group">
				<form method="post" action="loginVer.php" name="login">
					<label for="Email">Email</label>
					<input type="email" name="cMail" class="form-control" required /> <br/>
					
					<label for="password">Password</label>
					<input type="password" name="cPass" class="form-control" required /><br/>
					
					<input type="submit" name="save" value="Log in" class="btn btn-success" />
				</form>
				<button class="btn btn-primary" style="float:right;"  onclick="document.getElementById('modal-wrapper').style.display='block'"> Forgot Password? </button>'
			</div>
		</div>
		<div class="col-sm-4">
            
		</div>
		
			
			
			
		</div>
		<div id="modal-wrapper" class="modal container form-group">
			 <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    
                  
              </div>
			<form method="post" action="eresetPass.php" name="login">
			 <div class="modal-content">
				<div class="modal-header">
				  
				  <h4 class="modal-title">Forgot Password?</h4>
				</div>
				<div class="modal-body">
				  <label for="Email">Enter Your Email</label>
					<input type="email" name="rMail" class="form-control" required />
					<p>We will send your password to this email.</p>
				</div>
				<div class="modal-footer">
				
					<button type="submit" class="btn btn-default" name ="submit">Send Password</button>
				  <button type="button" class="btn btn-default" onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">Close</button>
				</div>
			</div>
			</form>
		</div>
<?php include "includes/last.php" ?>
<?php include "includes/footer.php" ?>