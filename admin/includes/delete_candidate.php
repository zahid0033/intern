<?php
 require "../../config.php";
    $id = $_GET['id'];

    $result = mysqli_query($conn,"update candidate set cDeleteDate=now() WHERE cId='$id' ");
if(!$result){
    die("query failed".mysqli_error($conn));
}
    header("Location:../view_all_candidate.php");

?>