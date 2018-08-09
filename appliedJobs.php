<?php
session_start();
require "config.php";

$cmail = $_SESSION['un'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>


<?php 
    
    $statement = "select * from applicant where cMail = '$cmail'";
    $result = mysqli_query($conn,$statement);
    $count = mysqli_num_rows($result);
    if(mysqli_num_rows($result)){
        while($row = mysqli_fetch_assoc($result)){
            
            $jobId = $row['id'];
            
            $query = "select * from jobpost where id = '$jobId' ";
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output)){
                while($row = mysqli_fetch_assoc($output)){
                    $jobTitle = $row['title'];
                }
            }
        }
    }

    echo $count;

?>


<?php include "includes/footer.php";?>