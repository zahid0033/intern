<?php
date_default_timezone_set('Asia/Dhaka');
session_start();
require "config.php";

$cMail = $_SESSION['un'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>

<div class="container">

<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>Job ID</th>
        <th>Job Title</th>
        <th>Employment Status</th>
        <th>Vacancy</th>
        <th>Status</th>
        <th>Action</th>
		</tr>


<?php 
    
                                
     $status = '';
    
    $statement = "select * from applicant where cMail = '$cMail' ";
    $result = mysqli_query($conn,$statement);
    $count = mysqli_num_rows($result);
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            
            $jobId = $row['jobId'];
            
            $query = "select * from jobpost where id = '$jobId' ";
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    
                    
                    $jobId = $row['id'];
                    $jobTitle = $row['title'];
                    $vacancy = $row['vacancy'];
                    $empStatus = $row['empStatus'];
                    $empId = $row['empId'];
                    
                    
                    $sub_query = "select * from employer where eId = '$empId' ";
                    $sub_output = mysqli_query($conn,$sub_query);
            
                    if(mysqli_num_rows($sub_output) > 0){
                        while($row = mysqli_fetch_assoc($sub_output)){
                            
                           
                            include "includes/current_time.php";
                            
                            $user_last_activity = $row['eLastActivity'];
                            
                            echo "<p>".$user_last_activity."</p>";
                            echo "<p>".$current_timestamp."</p>";
                            
                               if($user_last_activity > $current_timestamp){
                                    $status = '<span class="label label-success"> Online </span>';
                                }
                                else{
                                    $status = '<span class="label label-danger"> Offline </span>';
                                }
        
                            
                            
                    
                            echo "<tr>"; 
                            echo "<td>".$jobId."</td>";
                            echo "<td>".$jobTitle."</td>";
                            echo "<td>".$empStatus."</td>";
                            echo "<td>".$vacancy."</td>";
                            echo "<td>".$status."</td>";
                            echo "<td><a href=\"empPostDelete.php?id=$jobId\" onClick=\"return confirm('Are you sure you want to delete?')\">Cancel</a> | <a href=\"singleJob.php?id=$jobId\">View Job</a></td>";
                            echo "</tr>";
                            
                              }
                        }
                    
                }
            }
        }
    }

    
    $_SESSION['applied_job'] = $count;
    echo $count;

?>

    </table>
</div>

<?php include "includes/last.php" ?>
<?php include "includes/footer.php";?>