<?php
require "../config.php";

$id = $_POST['id'];
$title = $_POST['title'];
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

$query = "Update jobPost
set title = '$title', companyName = '$companyName', vacancy = '$vacancy', context = '$context', description = '$description', empStatus = '$empStatus', eduRequirement = '$eduRequirement', expRequirement = '$expRequirement', addRequirement = '$addRequirement', jobLocation = '$jobLocation', salary = '$salary', degree = '$degree', browseCatg = '$browseCatg', expDate = '$expDate' 
where id = '$id'";

$result = mysqli_query($conn,$query);

if($result){
    header("location: ../myJob.php");
}
else{
    die("Query Failed".mysqli_error($conn));
}
?>