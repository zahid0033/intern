<?php
    session_start();

    
require "../config.php";
include "includes/admin_header.php";
include "includes/admin_navigation.php";


    $cId = $_GET['Id'];

       $statement = "select * from candidate where cId = '$cId' ";
    $result = mysqli_query($conn,$statement);


    if(mysqli_num_rows($result) == 1 ){
        
        while($row = mysqli_fetch_assoc($result)){
            
            $cId = $row['cId'];
            $cName = $row['cName'];
            $cMail = $row['cMail'];
            $cMobile = $row['cMobile'];
            $cGender = $row['cGender'];
            $cSkill = $row['cSkill'];
            $cDegree = $row['cDegree'];
            $cImage = $row['cImage'];
            $cPreviousExp = $row['cPreviousExp'];
            $cPresentAdd = $row['cPresentAdd'];
            $cPermanentAdd = $row['cPermanentAdd'];
            $cDob = $row['cDob'];

?>
           
       <div id="page-wrapper" class="">        
            
            <div class="container">
                
               <h2 style="text-align:center"><?php echo $cName ?>'s Profile</h2>
                
               
               
               
                <div class="col-sm-12">
                  <div class="col-sm-8">
                     
                      
                     
                      <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Name : </b> <?php echo $cName ?> </p>
                    
                      <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Email : </b> <?php echo $cMail ?> </p>
                      
                      <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Mobile : </b> <?php echo $cMobile ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Gender : </b> <?php echo $cGender ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Date of Birth : </b> <?php echo $cDob ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Skills : </b> <?php echo $cSkill ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Degree : </b> <?php echo $cDegree ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Previous Experience : </b> <?php echo $cPreviousExp ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Present Address : </b> <?php echo $cPresentAdd ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Permanent Address : </b> <?php echo $cPermanentAdd ?> </p>
                    
                    
                    
                    
                    
                  </div>
                  
                  <div class="col-sm-4">
                        <img style="width: 200px;height: 200px;" src="../images/<?php echo $cImage ?>" alt="">
                  </div>
                   
                   
                </div>
            </div>
            
            
            
           
                     
</div>
    
     <?php 
        }
    }
?>




<?php include "includes/admin_footer.php" ?>
    

    