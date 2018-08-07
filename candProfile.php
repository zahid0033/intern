<?php
    session_start();
    require "config.php";
    include "includes/header.php";
    include "includes/head.php";
    include "includes/navbar.php";


    $cMail = $_GET['user'];

       $statement = "select * from candidate where cMail = '$cMail' ";
    $result = mysqli_query($conn,$statement);


    if(mysqli_num_rows($result) == 1 ){
        
        while($row = mysqli_fetch_assoc($result)){
            
            $cId = $row['cId'];
            $cName = $row['cName'];
            $cMail = $row['cMail'];
            $cMobile = $row['cMobile'];
            $cGender = $row['cGender'];
            $cSkill = $row['cSkill'];
            $cDegree = $row['cDegree']; ?>
            
            
            <div class="container">
               <h2 style="text-align:center;" >Profile</h2>
               <button class="btn btm-primary" style="float:right;"> Edit </button>
                <div class="col-sm-12">
                   
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Name : </b> <?php echo $cName ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Email : </b> <?php echo $cMail ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Mobile : </b> <?php echo $cMobile ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Gender : </b> <?php echo $cGender ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Skills : </b> <?php echo $cSkill ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Degree : </b> <?php echo $cDegree ?> </p>
                    
                </div>
            </div>
            
            
            
     <?php   }
    }
include "includes/footer.php";
?>

    