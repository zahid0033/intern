 <html>
<body>
 <script type="text/javascript" src="sweetalert.min.js"></script>

<?php
session_start();
session_unset();
$_SESSION['uname']=$_POST['uname'];
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=0;
$_SESSION['ph']=0;


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
 	
 	$_SESSION['cname']=$_POST['uname'];
 	$_SESSION['cpass']=$_POST['pw'];
	$_SESSION['cph']=$_POST['phoneNumber'];
	$_SESSION['cemail']=$_POST['email'];
  	$_SESSION['cgender']=$_POST['gender'][0];
  	$_SESSION['cskills']=$_POST['skills'][0];
	$_SESSION['cdob']=$_POST['dob'];
	$_SESSION['cexp']=$_POST['exp'];
	$_SESSION['cdegree']=$_POST['degree'];
	$_SESSION['cpresentAdd']=$_POST['presentAdd'];
	$_SESSION['cpermanentAdd']=$_POST['permanentAdd'];
	$_SESSION['cprofilepic']=$_POST['profilepic'];
	
	header("location:reg_candidateDB.php");
 }
 else
 {
    header("location:reg_candidate.php?val=1");
   
 }
?>
</body>
</html>