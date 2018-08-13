<?php

require "../config.php";
session_start();

$jobId = $_GET['jobId'];
$cMail = $_GET['cMail'];


$query = "select * from jobpost  where id = '$jobId' ";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
                
        $vacancy = $row['vacancy'];
        
        if($vacancy > 0){
            $vacancy = $vacancy-1;
        }
        else if($vacancy == 0 || $vacancy < 0){
            mysqli_query($conn,"update jobpost set deletedAt=now() WHERE id='$jobId'");
            
        }
        
        
        mysqli_query($conn,"DELETE FROM applicant where jobId = '$jobId' and cMail='$cMail'");
        
        $sub_query = "UPDATE jobpost SET vacancy='$vacancy' WHERE id ='$jobId'";
            mysqli_query($conn,$sub_query);
        
        echo $vacancy;
    }
}


header("location:../candidates.php");
//header("location:../candidates.php");


?>