<?php

    include("config.php");
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update jobpost set deletedAt=now() WHERE id='$id' ");
	//close_db();
//redirecting to the display page (listdata.php in our case)
    header("Location:myJob.php");

?>

