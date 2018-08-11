<?php
session_start();
require "config.php";

$cMail = $_SESSION['un'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";
?>

<div id="applied_jobs" class="container"></div>


<script>
    $(document).ready(function(){
        
        fetch_applied_jobs();
        
        
        setInterval(function(){
            fetch_applied_jobs();
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
        
    });
</script>

<?php include "includes/last.php" ?>
<?php include "includes/footer.php";?>