<?php
    
require "../config.php";
session_start();

    $id = $_GET['id'];
    $cMail = $_SESSION['un'];



    $statement = "INSERT INTO applicant (cMail, jobId)VALUES ('$cMail', '$id')";
    $result = mysqli_query($conn,$statement);

    header('Location:../appliedJobs.php');




?>