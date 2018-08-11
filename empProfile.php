<?php
    session_start();
    require "config.php";
    include "includes/header.php";
    include "includes/head.php";
    include "includes/navbar.php";


    $eMail = $_GET['user'];

       $statement = "select * from employer where eMail = '$eMail' ";
    $result = mysqli_query($conn,$statement);


    if(mysqli_num_rows($result) == 1 ){
        
        while($row = mysqli_fetch_assoc($result)){
            
            $eId = $row['eId'];
            $eName = $row['eName'];
            $eCompId = $row['eCompId']; 
            $eDesignation = $row['eDesignation'];
            $eMobile = $row['eMobile'];
            $eMail = $row['eMail'];
            $ePosition = $row['ePosition']; 
            $eDescription = $row['eDescription']; 
            $eDob = $row['eDob']; 
            
            
            $query = "select * from company where compId = '$eCompId' ";
            $output = mysqli_query($conn,$query);
            if(mysqli_num_rows($output) == 1){
                while($row = mysqli_fetch_assoc($output)){
                    
                    $compName = $row['compName'];
                    $compAddress = $row['compAddress'];
                    $compType = $row['compType'];
                    $compWebLink = $row['compWebLink'];
                
            
            
            ?>
            
            
            <div class="container">
               <h2 style="text-align:center;" >Profile</h2>
               <button class="btn btm-primary" style="float:right;"> Edit </button>
                <div class="col-sm-12">
                   
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Name : </b> <?php echo $eName ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Email : </b> <?php echo $eMail ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Mobile : </b> <?php echo $eMobile ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Designation : </b> <?php echo $eDesignation ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Date of Birth : </b> <?php echo $eDob ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Position : </b> <?php echo $ePosition ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Description : </b> <?php echo $eDescription ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Company Name : </b> <?php echo $compName ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Company Address : </b> <?php echo $compAddress ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Company Type : </b> <?php echo $compType ?> </p>
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Company Web Link : </b> <?php echo $compWebLink ?> </p>
                    
                </div>
            </div>
            
            
            
     <?php 
                }
            }
        
        }
    }
include "includes/last.php";
include "includes/footer.php";
?>

    