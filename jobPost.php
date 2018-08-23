<?php
session_start();
//$location = $_GET['location']; 
//$category = $_GET['category'];
include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";

$location = "";
$category = "";
if(isset($_GET['location'])){
    $location = $_GET['location'];
}
if(isset($_GET['category'])){
    $category = $_GET['category'];
}
?>

   
        <div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>Current Job Posts</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
       </div>
         
        <div id="job_post" class="container">
       
           <h2 style="text-align:center;">Job Posts</h2>

            
            
        </div>
        
        
        
<script>
    $(document).ready(function(){
        
        fetch_job_posts();
        
        setInterval(function(){
            fetch_job_posts();
        },5000);
        
        
        
        function fetch_job_posts(){
            
           // var locations = "";
            var locations = "<?php echo $location ?>";
            var categorys = "<?php echo $category ?>";
            
           $.ajax({
               type:"GET",
               url: "fetch/fetch_job_posts.php",
               data: {location: locations,
                      category: categorys}, 
                    
               success: function(data){
                   $('#job_post').html(data);
               }
           })
       } 
        

       
        
        
    });
</script>
        
       <?php include "includes/last.php" ?>
       <?php include "includes/footer.php" ?>