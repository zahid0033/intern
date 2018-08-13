<?php

require "../config.php";
session_start();

$id = $_GET['id'];


$query = "DELETE FROM applicant  where id = '$id' ";
mysqli_query($conn,$query);

header("location:../candidates.php");


?>