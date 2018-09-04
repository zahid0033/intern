<?php
require "config.php";
session_start();

if(isset($_SESSION['un'])){
    mysqli_query($conn,"update candidate set cLogout=now() WHERE cMail='$_SESSION[un]'");
}
else if(isset($_SESSION[en])){
    mysqli_query($conn,"update employer set eLogout=now() WHERE eMail='$_SESSION[en]'");
}

session_unset($_SESSION['un']);
session_unset($_SESSION['en']);
session_unset($_SESSION['an']);
session_destroy();

header('location:index.php');

?>