<?php

require "../config.php";
session_start();


$jobId = $_GET['id']; 
$cMail = $_GET['cMail'];

$query = "DELETE FROM applicant where jobId = '$jobId' and cMail='$cMail'";
mysqli_query($conn,$query);

header("location:../appliedJobs.php");



?>