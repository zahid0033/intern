<?php

require "../config.php";
echo "success";

$cName = $_POST['cName'];
$cMail = $_POST['cMail'];
$cMobile = $_POST['cMobile'];
$cGender = $_POST['cGender'];
$cDob = $_POST['cDob'];
$cSkill = $_POST['cSkill'];
$cDegree = $_POST['cDegree'];
$cPreviousExp = $_POST['cPreviousExp'];
$cPresentAdd = $_POST['cPresentAdd'];
$cPermanentAdd = $_POST['cPermanentAdd'];

$sql = "UPDATE candidate
SET cName = '$cName', cMobile= '$cMobile' , cGender= '$cGender' , cDob= '$cDob' , cSkill= '$cSkill' , cDegree= '$cDegree' , cPreviousExp= '$cPreviousExp' , cPresentAdd= '$cPresentAdd' , cPermanentAdd= '$cPermanentAdd' 
WHERE cMail = '$cMail'";

$result = mysqli_query($conn,$sql);




if($result){
    header("location:../candProfile.php?user=".$cMail."");
}
else{
  die("Query failed".mysqli_error($conn));   
}


?>