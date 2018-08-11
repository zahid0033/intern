<?php


date_default_timezone_set('Asia/Dhaka');
require "config.php";
session_start();

$cMail = $_SESSION['un'];

$query = "select * from candidate where cMail != '$cMail' ";
$result = mysqli_query($conn,$query);
$output = 
'<table class="table table-bordered table-striped">
<tr>
    <td>userName</td>
    <td>Status</td>
    <td>Action</td>
</tr>';

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $status = '';
        $current_timestamp= strtotime(date('Y-m-d H:i:s') . '-10 sec');
        $current_timestamp = date('Y-m-d H:i:s' , $current_timestamp);
        
        

            $sub_query = "select * from candidate where cMail = '$cMail' ";
            $sub_result = mysqli_query($conn,$sub_query);
            if(mysqli_num_rows($sub_result)>0){
                while($sub_row = mysqli_fetch_assoc($sub_result) ){
                    
                   $user_last_activity = $row['cLastActivity'];
                    
                                    
                }
            }
        
            if($user_last_activity > $current_timestamp){
                $status = '<span class="label label-success"> Online </span>';
            }
            else{
                $status = '<span class="label label-danger"> Offline </span>';
            }
        
        
            $output .='
            <tr>
                <td>'.$row['cName'].'</td>
                <td>'.$status.'</td>
                <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid=" '.$row['cId'].' " data-tousername=" '.$row['cName'].' ">Start Chat</button></td>
            </tr>';         
    }
}

$output .='</table>';

echo $output;

?>