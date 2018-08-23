<?php
session_start();
require "config.php";

$cMail = $_SESSION['un'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>



   
       <div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>My Applied Jobs</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
       </div>
<div class="container">
    
    <div id="applied_jobs"></div>
</div>


<script>
    $(document).ready(function(){
        
        fetch_applied_jobs();
        
        
        setInterval(function(){
            fetch_applied_jobs();
            update_last_activity();
            current_time();
        },5000);
        
        
        function fetch_applied_jobs(){
           $.ajax({
               url: "fetch/fetch_applied_jobs.php",
               method: "POST",
               success: function(data){
                   $('#applied_jobs').html(data);
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
        function current_time(){
            $.ajax({
                url: "includes/current_time.php",
                success: function(){
                    
                }
            })
        }
        
    });
</script>

<?php include "includes/last.php" ?>
<?php include "includes/footer.php";?>