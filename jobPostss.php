<?php
session_start();
//$location = $_GET['location']; 
//$category = $_GET['category'];
include "includes/header.php";
include "includes/navbar.php";
include "includes/head.php";

$location = "1";
$category = "";
if(isset($_GET['location'])){
    $location = $_GET['location'];
}
else if(isset($_GET['category'])){
    $category = $_GET['category'];
}
echo $location ;
echo $category;

?>

   
               
        <div id="job_post" class="container">
       
           <h2 style="text-align:center;">Job Posts</h2>

            
            
        </div>
        
        
        
<script>
    $(document).ready(function(){
        
        fetch_job_posts();
        //fetch_catg_posts();
        
        setInterval(function(){
            //fetch_job_posts();
           // fetch_catg_posts();
        },5000);
        
        
        
        function fetch_job_posts(){
            
           // var locations = "";
            var locations = "4";
            var categorys = "NGO/Development";
            
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
        
//        function fetch_catg_posts(){
//            var categorys = "<?php echo $category ?>";
//            
//           $.ajax({
//               url: "fetch/fetch_job_posts.php",
//               data: {category:  categorys}, 
//                    
//               success: function(data){
//                   $('#job_post').html(data);
//               }
//           })
//       } 
//        
       
        
        
    });
</script>
        
       <?php include "includes/last.php" ?>
       <?php include "includes/footer.php" ?>