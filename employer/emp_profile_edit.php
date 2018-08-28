<?php

require "../config.php";
echo "success";

$eName = $_POST['eName'];
$eMail = $_POST['eMail'];
$eMobile = $_POST['eMobile'];
$eDob = $_POST['eDob'];
$eDesignation = $_POST['eDesignation'];
$ePosition = $_POST['ePosition'];
$eDescription = $_POST['eDescription'];
$eCompId = $_POST['eCompId'];
$compName = $_POST['compName'];
$compAddress = $_POST['compAddress'];
$compType = $_POST['compType'];
$compWebLink = $_POST['compWebLink'];

$sql = "UPDATE employer
SET eName = '$eName', eMobile= '$eMobile' , eDob = '$eDob' , eDesignation = '$eDesignation' , ePosition= '$ePosition' , eDescription= '$eDescription'  
WHERE eMail = '$eMail'";

$result = mysqli_query($conn,$sql);

$query = "UPDATE company
SET compName = '$compName', compAddress= '$compAddress' , compType = '$compType' , compWebLink = '$compWebLink'  
WHERE compId = '$eCompId'";

$sub_result = mysqli_query($conn,$query);




if($result && $sub_result){
    header("location:../empProfile.php?user=".$eMail."");
}
else{
  die("Query failed".mysqli_error($conn));   
}


?>