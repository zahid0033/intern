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
        <th>Job ID</th>
        <th>Job Title</th>
        <th>Candidate</th>
        <th>Vacancy</th>
        <th>Action</th>
		</tr>
    

    <?php 


require "config.php";

    $counter = 0;
    $count = 0;
    $x=0;
    
    
    $statement = "select * from employer where eMail = '$en' ";
    $result = mysqli_query($conn,$statement);

    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
                    
            $eId = $row['eId'];
            
            $query = "select * from jobpost where empId = '$eId' AND deletedAt is null order by id desc ";
                                        
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    $id = $row['id'];
                    $jobTitle =$row['title'];
                    $vacancy = $row['vacancy'];
                    
               //     echo $id;
                    
                    $statement = "select * from applicant where jobId = '$id' ";
                    $result = mysqli_query($conn,$statement);
                    
                    $count = mysqli_num_rows($result);
                    
                    
                    if($count > 0){
                        $count++;
                        while($row = mysqli_fetch_assoc($result)){
                            $cMail = $row['cMail'];
                            $jobId = $row['jobId'];
                            
                            
                            
//                            for($x=0;$x<$count;$x++){
//                                $counter++;
//                                
//                            }
                            
                            
                            echo "<tr>"; 
                            echo "<td>".$row['jobId']."</td>";
                            echo "<td> <a href=\"singleJob.php?id=$id\">$jobTitle</a> </td>";
                            echo "<td>".$row['cMail']."</td>";
                            echo "<td>".$vacancy."</td>";
                            echo "<td><a href=\"empPostDelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"editv.php?id=$row[id]\">Edit</a> | <a href=\"candProfile.php?user=$row[cMail]\">View Profile</a></td>";
                            echo "</tr>";
                            
                            
                            
                            
                            
                            
                        }
                    }
                    
                }
            
            }
            
            
        }
        
        
    }
    $_SESSION['candidate_count'] = $count;               
    echo $count;
?>
        </table>
</div>





    <?php include "includes/last.php"; ?>
    <?php include "includes/footer.php"; ?>