<?php
date_default_timezone_set('Asia/Dhaka');
session_start();


$en = $_SESSION['en'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>
   
<div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>Candidates Applied For Your Jobs</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
</div>
    
<div class="container">


<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>Job ID</th>
        <th>Job Title</th>
        <th>Candidate</th>
        <th>Vacancy</th>
        <th>Status</th>
        <th>Action</th>
		</tr>
    

    <?php 


require "config.php";

    $counter = 0;
    $count = 0;
    $x=0;
    
    
    $status = '';
    $current_timestamp= strtotime(date('Y-m-d H:i:s') . '-10 sec');
    $current_timestamp = date('Y-m-d H:i:s' , $current_timestamp);
            
    
    
    
    
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
                            $applicant_row_id = $row['id'];
                            $cMail = $row['cMail'];
                            $jobId = $row['jobId'];
                            
                            
                            
                            $sub_query = "select * from candidate where cMail = '$cMail'";
                            $sub_result = mysqli_query($conn,$sub_query);
                            if(mysqli_num_rows($sub_result) > 0){
                                while($row = mysqli_fetch_assoc($sub_result)){
                                    $cLastActivity = $row['cLastActivity'];
                                    
                                    
                                    
                                    if($cLastActivity > $current_timestamp){
                                        $status = '<span class="label label-success"> Online </span>';
                                    }
                                    else{
                                        $status = '<span class="label label-danger"> Offline </span>';
                                    }
                                    
                                    
                                    
                                    
                            echo "<tr>"; 
                            echo "<td>".$jobId."</td>";
                            echo "<td> <a href=\"singleJob.php?id=$id\">$jobTitle</a> </td>";
                            echo "<td>".$row['cMail']."</td>";
                            echo "<td>".$vacancy."</td>";
                            echo "<td>".$status."</td>";
                            echo "<td><a href=\"../intern/employer/candidates_unapprove.php?id=$applicant_row_id\" onClick=\"return confirm('Are you sure you want to delete?')\">Unapprove</a> | <a href=\"../intern/employer/candidates_approve.php?jobId=".$id."&cMail=".$cMail."\">Approve</a> | <a href=\"candProfile.php?user=$cMail\">View Profile</a></td>";
                            echo "</tr>";
                                    
                                    
                                    
                                    
                                }
                            }
                            
                            
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

 <script>
    $(document).ready(function(){
        
        setInterval(function(){
           
            update_last_activity();
            current_time();
            
        },500);
        
       function update_last_activity(){
           $.ajax({
               url: "chat_update_last_activity.php",
               success:function(){
                   
               }
           })
       }
        function current_time(){
            $.ajax({
                url: "includes/current_time.php",
                success: function(){
                    
                }
            })
        }
    
       
        
        
    });
</script>



    <?php include "includes/last.php"; ?>
    <?php include "includes/footer.php"; ?>