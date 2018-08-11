<?php
    
require "config.php";
session_start();

$query = "";
if(isset($_SESSION['un'])){
    $query = "update candidate set cLastActivity=now() WHERE cMail='$_SESSION[un]'";
    
}
else if($_SESSION['en']){
    $query = "update employer set eLastActivity=now() WHERE eMail='$_SESSION[en]'";
   
}

mysqli_query($conn,$query);




?>