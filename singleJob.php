
<?php 
    $id = $_GET['id']; 
    
    session_start();
    include "includes/header.php";
    include "includes/head.php";
    include "includes/navbar.php";
?>


<div class="container">
        <?php
            require 'config.php';

            $statement="select * from jobpost where id='$id'";
            $result = mysqli_query($conn, $statement);
           

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    
                    $title = $row['title'];
                    $companyName = $row['companyName'];
                    $context = $row['context'];
                    $vacancy = $row['vacancy'];
                    $description = $row['description'];
                    $empStatus = $row['empStatus'];
                    $eduRequirement = $row['eduRequirement'];
                    $expRequirement = $row['expRequirement'];
                    $addRequirement = $row['addRequirement'];
                    $jobLocation = $row['jobLocation'];
                    $salary = $row['salary'];
                    $postTime = $row['postTime'];
                    $expDate = $row['expDate'];
                    
                
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            
            $query = "select * from company where compName = '$companyName'";
            $output = mysqli_query($conn,$query);
    
            if(mysqli_num_rows($output)>0){
                
                while($row = mysqli_fetch_assoc($output))
                {
                    $compAddress = $row['compAddress'];
                    
                }
            }
            else
            {
                echo "Nothing founds in in db";
            }
    
    
            mysqli_close($conn);
        ?>
        
        
        <div class="col-sm-12">
        <div class="panel-group">
           <div class="panel panel-info">
               <div class="panel-heading">
                  <h2><?php echo $title ?></h2>
                  <h4><?php echo $companyName ?><i class="fa fa-check-circle" aria-hidden="true" style="margin-left:10px;"></i></h4>
                  <h4><i class="fa fa-map-marker" aria-hidden="true" style="margin-right:10px;"></i><?php echo $compAddress ?></h4>
               </div>
               <div class="panel-body">
                    
                    
                   <p class = "singlePost"><i class="fa fa-briefcase" aria-hidden="true"></i><b>Context</b></p>
                   <p><?php echo $context ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Description</b></p>
                   <p><?php echo $description ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Employment Status</b></p>
                   <p><?php echo $empStatus ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-book" aria-hidden="true"></i><b>Educational Requirements</b></p>
                   <p><?php echo $eduRequirement ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Experience Required</b></p>
                   <p><?php echo $expRequirement ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Added Requirements</b></p>
                   <p><?php echo $addRequirement ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Job Location</b></p>
                   <p><?php echo $jobLocation ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Vacancy</b></p>
                   <p><?php echo $vacancy ?></p>
                   
                   <p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Salary</b></p>
                   <p><?php echo $salary ?></p>
                   
                   <i class="fa fa-user" aria-hidden="true"></i><p class = "singlePost"><i class="fa fa-user" aria-hidden="true"></i><b>Deadline</b></p>
                   <p><?php echo $expDate ?></p>
                   
                   <?php
                        if(isset($_SESSION['un'])){
                            echo '<a href="index.php" class="btn btn-primary" style="float:right;"> interested </a>';
                            
                            echo '<form action="index.php" method="get"><input type="submit" name="submit" value="interested"></form>';
                        }
                        else if(isset($_SESSION['en'])){
                            echo '<a href="index.php" class="btn btn-primary" style="float:right;"> ok </a>';
                        }
                   ?>
                   
               </div>
           </div>
            
        </div>
        
       </div>
        
        
</div>
    <?php include "includes/footer.php" ?>