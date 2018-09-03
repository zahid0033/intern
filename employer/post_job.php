<?php
require "../config.php";

$title = $_POST['title'];
$empId = $_POST['empId'];
$companyName = $_POST['companyName'];
$vacancy = $_POST['vacancy'];
$context = $_POST['context'];
$description = $_POST['description'];
$empStatus = $_POST['empStatus'];
$eduRequirement = $_POST['eduRequirement'];
$expRequirement = $_POST['expRequirement'];
$addRequirement = $_POST['addRequirement'];
$jobLocation = $_POST['jobLocation'];
$salary = $_POST['salary'];
$degree = $_POST['degree'];
$browseCatg = $_POST['browseCatg'];
$expDate = $_POST['expDate'];

$query = "INSERT INTO jobPost (title, empId, companyName, vacancy, context, description, empStatus, eduRequirement, expRequirement, addRequirement, jobLocation, salary, degree, browseCatg, expDate, postTime )
VALUES ('$title', '$empId', '$companyName', '$vacancy', '$context', '$description', '$empStatus', '$eduRequirement', '$expRequirement', '$addRequirement', '$jobLocation', '$salary', '$degree', '$browseCatg', '$expDate', now() )";

$result = mysqli_query($conn,$query);

if($result){
    header("location: ../myJob.php");
}
else{
    die("Query Failed".mysqli_error($conn));
}

?>