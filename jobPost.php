<?php
session_start();

?>

    <html>

    <head>
        <title>Blog</title>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Default Theme -->
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
       
       <?php include "includes/head.php" ?>
        <!-- *********** Navbar **************  -->
        <?php include "includes/navbar.php" ?>
        <div class="container">
       
           <h2 style="text-align:center;">My Job</h2>

           <div class="jobPost">            
            
                <?php

                    require 'config.php';


                    $query = "select * from jobpost where jobLocation = 'Dhaka' ";

                    $result = mysqli_query($conn,$query);
               
                    $count =  mysqli_num_rows($result);
                            echo $count;

                    if(mysqli_num_rows($result) > 0){
                        

                        while($row = mysqli_fetch_assoc($result)){
                            
                            $id = $row['id'];
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
                            
                            
                            ?>
                            
                            <div class="col-sm-12">
                            <div class="panel-group">
                               <div class="panel panel-info">
                                   <div class="panel-heading">
                                      <h2 ><a style="text-decoration:none;color:#2ace22;" href="singleJob.php?id=<?php echo $id ?>"><?php echo $title ?></a></h2>
                                      <h4><?php echo $companyName ?><i class="fa fa-check-circle" aria-hidden="true" style="margin-left:10px;"></i></h4>
                                      <h4>By Admin <?php echo $postTime; ?></h4>
                                   </div>
                                   <div class="panel-body">
                                       
                                       <p class = "jobpost"><?php echo $description ?></p>
                                        
                                        <p class = "jobpost"><i class="fa fa-bullseye" aria-hidden="true"></i><b>Vacancy : </b><?php echo $vacancy ?></p>
                                        

                                        <p class = "jobpost"><i class="fa fa-map-marker" aria-hidden="true"></i><b>Job Location : </b><?php echo $jobLocation ?></p>
                                        
                                        
                                        <p class = "jobpost"><i class="fa fa-line-chart" aria-hidden="true"></i><b>Experience Required : </b><?php echo $expRequirement ?></p>
                                        
                                        
                                        <p class = "jobpost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Deadline : </b><?php echo $expDate ?></p>


                                    </div>
                               </div>

                            </div>
        
                       </div>
                            
                            
                            
                 
                          
                     <?php   }

                    }
                    else
                    {
                        echo "Nothing found in db".mysqli_connect_error();
                    }


                ?>
                
                       
                
                
            
            </div>
            
            
        </div>
        
       <?php include "includes/footer.php" ?>