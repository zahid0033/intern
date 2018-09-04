<?php
require 'config.php';
session_start();

	
 		$sql="INSERT INTO candidate(cMail, cPass, cName, cImage, cGender, cMobile, cSkill, cPreviousExp, cDegree, cPresentAdd, cPermanentAdd, cDob) VALUES ('".$_SESSION['cemail']."','".$_SESSION['cpass']."','".$_SESSION['cname']."','".$_SESSION['cprofilepic']."','".$_SESSION['cgender']."','".$_SESSION['cph']."','".$_SESSION['cskills']."','".$_SESSION['cexp']."','".$_SESSION['cdegree']."','".$_SESSION['cpresentAdd']."','".$_SESSION['cpermanentAdd']."','".$_SESSION['cdob']."')";
		
		echo "here1";
		
		if(mysqli_query($conn,$sql))
		{
			echo "here2";
		    header("location:../loginCandidate.php");

			
		}else
			echo "here3";
			die("query failed".mysqli_error($conn));

mysqli_close($conn);

	
	


?>