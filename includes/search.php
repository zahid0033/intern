<?php

$category = $_POST['category'];
$location = $_POST['location'];


header("location: ../jobPost.php?category={$category}&&location={$location}");
?>