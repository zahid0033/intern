 <html>
<body>
 <script type="text/javascript" src="sweetalert.min.js"></script>

<?php
session_start();
session_unset();
$_SESSION['uname']=$_POST['uname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['comname']=$_POST['comname'];
$_SESSION['pass']=0;
$_SESSION['ph']=0;
$_SESSION['ds']=0;
$_SESSION['cw']=0;


$valid=0;


if(strlen(trim($_POST['phoneNumber']))<11)
{
	$_SESSION['phErr']="Invalid Phone Number";
	$_SESSION['ph']=1;
	
	$valid=1;
	
}



if(strlen(trim($_POST['pw']))>=6 && strlen(trim($_POST['pw']))<=16 && strlen(trim($_POST['cpw']))>=6 && strlen(trim($_POST['cpw']))<=16)
{
	if(strcmp(trim($_POST['pw']), trim($_POST['cpw']))!=0)
	{
		 $_SESSION['passErr']="Password does not matched";
         $_SESSION['pass']=1;
         $valid=1;
	}
}
else{
	$_SESSION['passErr']="Password length must be between 6 to 16";
    $_SESSION['pass']=1;
	$valid=1;
}


 if($valid==0)
 {
 	
 	$_SESSION['uname']=$_POST['uname'];
 	$_SESSION['pass']=$_POST['pw'];
	$_SESSION['ph']=$_POST['phoneNumber'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['ds']=$_POST['disignation'];
	$_SESSION['desc']=$_POST['bd'];
 	$_SESSION['comname']=$_POST['comname'];
 	$_SESSION['comadd']=$_POST['comadd'];
 	$_SESSION['comweb']=$_POST['comweb'];
  	$_SESSION['type']=$_POST['type'][0];
 	$_SESSION['bd']=$_POST['bd'];
	$_SESSION['cw']=$_POST['cw'];
	$_SESSION['dob']=$_POST['dob'];
	
	header("location:signup_intern.php");
 }
 else
 {
    header("location:login_intern.php?val=1");
   
 }
?>
</body>
</html>