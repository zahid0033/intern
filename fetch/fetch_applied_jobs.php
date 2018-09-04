<?php
date_default_timezone_set('Asia/Dhaka');
session_start();
require "../config.php";

$cMail = $_SESSION['un'];




$output_result = 
    '<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>Job ID</th>
        <th>Job Title</th>
        <th>Company Name</th>
        <th>Employment Status</th>
        <th>Vacancy</th>
        <th>Status</th>
        <th>Action</th>
		</tr>';


    
                                
   
    
    $statement = "select * from applicant where cMail = '$cMail' ";
    $result = mysqli_query($conn,$statement);

    $count = mysqli_num_rows($result);
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            
        $status = '';
        $current_timestamp= strtotime(date('Y-m-d H:i:s') . '-10 sec');
        $current_timestamp = date('Y-m-d H:i:s' , $current_timestamp);
            
            $jobId = $row['jobId'];
            
            $query = "select * from jobpost where id = '$jobId' and deletedAT is null ";
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    
                    
                    $jobId = $row['id'];
                    $jobTitle = $row['title'];
                    $vacancy = $row['vacancy'];
                    $empStatus = $row['empStatus'];
                    $empId = $row['empId'];
                    $compName = $row['companyName'];
                    
                    
                    
                    
                    
                    
                    $sub_query = "select * from employer where eId = '$empId' ";
                    $sub_output = mysqli_query($conn,$sub_query);
            
                    if(mysqli_num_rows($sub_output) > 0){
                        while($row = mysqli_fetch_assoc($sub_output)){
                            
                           $eMail = $row['eMail'];
                            
                            $user_last_activity = $row['eLastActivity'];
                            
                   //         echo "<p>".$current_timestamp."</p>";
                   //         echo "<p>".$user_last_activity."</p>";
                            
                            
                               if($user_last_activity > $current_timestamp){
                                    $status = '<span class="label label-success"> Online </span>';
                                }
                                else{
                                    $status = '<span class="label label-danger"> Offline </span>';
                                }
                                
                    
                    $output_result .='
                    <tr>
                             <td>'.$jobId.'</td>
                             <td>'.$jobTitle.'</td>
                             <td>'.$compName.'</td>
                             <td>'.$empStatus.'</td>
                             <td>'.$vacancy.'</td>
                             <td>'.$status.'</td>                             
                             <td><a href="../intern/candidate/cancel_applyJob.php?id='.$jobId.'&cMail='.$cMail.'" onClick=\"return confirm("Are you sure you want to delete?")\">Cancel</a> | <a href="../intern/singleJob.php?id='.$jobId.'">View Job</a> | <a href="empProfile.php?user='.$eMail.'">View Profile</a></td></td>
                             </tr>';
                            
                              }
                        }
                    
                }
            }
        }
    }

    
    $_SESSION['applied_job'] = $count;



    $output_result .= '</table>';
    echo $output_result;

?>