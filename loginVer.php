<?php
require 'config.php';
session_start();
$cMail=$_POST['cMail'];
$cPass=$_POST['cPass'];


if(isset($_POST['save'])){
    
    $statement="select eMail, ePass from employer where eMail='$cMail' and ePass='$cPass'";

    $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) == 1)
            {
                mysqli_query($conn,"update employer set eLogin=now() WHERE eMail='$_SESSION[en]'");
            	$_SESSION['en']= $cMail;
                
            	header("location:index.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
                header("location:loginEmployee.php");
            }
            mysqli_close($conn);
    
}
else if(isset($_POST['submit'])){
    
    $statement="select cMail, cPass from candidate where cMail='$cMail' and cPass='$cPass'";

    $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) == 1)
            {
            	$_SESSION['un']= $cMail;
                mysqli_query($conn,"update candidate set cLogin=now() WHERE cMail='$_SESSION[un]'");
            	header("location:index.php");
               
    		}
            else
            {
                echo "User Name or Password is wrong";
                header("location:loginCandidate.php");
            }
            mysqli_close($conn);
    
}




            ?>