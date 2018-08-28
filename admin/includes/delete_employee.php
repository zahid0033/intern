<?php
 require "../../config.php";
    $id = $_GET['id'];

    $result = mysqli_query($conn,"update employer set eDeleteDate=now() WHERE eId='$id' ");
if(!$result){
    die("query failed".mysqli_error($conn));
}
    header("Location:../view_all_employee.php");

?>