<?php
include('config.php');

$result1=mysqli_query($conn,"SELECT * FROM jobpost  ");

$jobs=mysqli_num_rows($result1);

$result2=mysqli_query($conn,"SELECT * FROM company ");

$comp=mysqli_num_rows($result2);

echo "<h4>$jobs Internship from $comp Companies across the country \n</h4>";
?>