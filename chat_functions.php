<?php 

require "config.php";
session_start();

    function fetch_user_chat_history($from_user_id,$to_user_id){
        
        $query = "select * from chat_message where (from_user_id = '".$from_user_id."' and to_user_id = '".$to_user_id."') or (from_user_id = '".$to_user_id."' and to_user_id = '".$from_user_id."' order by timestamp desc) ";
        
        
        $result = mysqli_query($conn,$query);
                if(mysqli_num_rows($result) > 0){
                     while($row = mysqli_fetch_assoc($result)){
                                    
                         $output = '<ul class="list-unstyled">';
                         $user_name = '';
                         
                         if($row['from_user_id'] == $from_user_id){
                             $user_name = '<b class = "text-success">You</b>';
                         }
                         else{
                             $user_name = '<b class = "text-danger">'.get_user_name($row['from_user_id']).'</b>';
                         }
                         
                     }
                      
                         
                }
        $output .= '
                         <li style = "border-bottom:1px dotted #ccc">
                            <p>'.$user_name.' - '.$row["chat_message"].'
                                <div align="right">
                                    -<small><em>'.$row['timestamp'].'</em></small>
                                </div>
                            </p>
                         </li>
                         ';
        
        $output .= '</ul>';
        return $output;
        
    }


function get_user_name($user_id){
    $sub_query = "select cName from candidate where cId = '$user_id' ";
    $sub_result = mysqli_query($conn,$sub_query);
    
        if(mysqli_num_rows($sub_result)){
            while($row = mysqli_fetch_assoc($sub_result)){
                return $row['cName'];
            }
        }
}


?>