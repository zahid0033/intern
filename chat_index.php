<?php
session_start();



include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";

?>
<div class="container">
    <div id="user_details"> </div>
    <div id="user_model_details"> </div>
</div>




<script>
    $(document).ready(function(){
        
        fetch_user();
        
        setInterval(function(){
            fetch_user();
            update_last_activity();
        },5000);
        
        
       function fetch_user(){
           $.ajax({
               url: "chat_fetch_user.php",
               method: "POST",
               success: function(data){
                   $('#user_details').html(data);
               }
           })
       } 
        
       function update_last_activity(){
           $.ajax({
               url: "chat_update_last_activity.php",
               success:function(){
                   
               }
           })
       }
    
        function make_chat_dialog_box(to_user_id,to_user_name){
            var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with'+to_user_name+'">';
            
            modal_content += '<div style="height:400px;border:1px solid #ccc; overflow-y:scroll; margin-bottom: 24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
            
            modal_content += '</div>';
            modal_content += '<div class="form-group">';
            modal_content += '<textarea name="chat_message_'+to_user_id+'" id = "chat_message_'+to_user_id+'" class= "form-control"></textarea>';
            modal_content += '</div><div class="form-group" align="right">';
            modal_content += '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
            
            $('#user_model_details').html(modal_content);
        }
        
        $(document).on('click','.start_chat',function(){
            var to_user_id = $(this).data('touserid');
            var to_user_name = $(this).data('tousername');
            make_chat_dialog_box(to_user_id,to_user_name);
            $("#user_dialog_"+to_user_id).dialog({
                autoOpen:false,
                width:200
            });
            $('#user_dialog_'+to_user_id).dialog('open');
            
        });
        
        
    });
</script>

<?php include "includes/last.php";?>
<?php include "includes/footer.php";?>