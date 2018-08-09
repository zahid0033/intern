<?php
session_start();

$en = $_SESSION['en'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>
<div class="container">

<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Title</th>
        <th>Vacancy</th>
        <th>Posting Date and Time</th>
        <th>Action</th>
		</tr>

<?php


    require "config.php";

    $statement = "select * from employer where eMail = '$en' ";
    $result = mysqli_query($conn,$statement);

    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
                    
            $eId = $row['eId'];
            
            $query = "select * from jobpost where empId = '$eId' AND deletedAt is null order by id desc ";
                                        
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['vacancy']."</td>";
					echo "<td>".$row['postTime']."</td>";
					echo "<td><a href=\"empPostDelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"editv.php?id=$row[id]\">Edit</a> | <a href=\"singleJob.php?id=$row[id]\">View</a></td>";
					echo "</tr>";
                    
                    
                    
                    
                    
                }
            }
        }
                    
                    
    }
    else 
    {
        echo "query failed ";
    }
                    
?>
</table>
</div>

<?php include "includes/footer.php" ?>