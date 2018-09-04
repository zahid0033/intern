<?php
session_start();
//$location = $_GET['location']; 
//$category = $_GET['category'];
require '../config.php';




$output_result ='<div class="jobPost">';            
            
         


                    
$query = "";

                if(isset($_GET['location']) && isset($_GET['category']))
                     {
                            if(strcmp($_GET['location'],"")==0 && strcmp($_GET['category'],"")!=0) {
                                $category = $_GET['category'];
                                   $query = "select * from jobpost where browseCatg = '$category' AND deletedAt is null order by id desc ";

                                
                            }
                            else if(strcmp($_GET['location'],"")!=0 && strcmp($_GET['category'],"")==0){
                                $location= $_GET['location'];
                                 $query = "select * from jobpost where jobLocation = '$location' AND deletedAt is null order by id desc ";
                                
                            }
                           else if(strcmp($_GET['location'],"")!=0 && strcmp($_GET['category'],"")!=0){
                                $category = $_GET['category'];
                                $location= $_GET['location'];
                                 $query = "select * from jobpost where jobLocation = '$location' AND browseCatg = '$category' AND deletedAt is null order by id desc ";
                                
                            }
                          else if(strcmp($_GET['location'],"")==0 && strcmp($_GET['location'],"")==0){
                              $query = "select * from jobpost where deletedAt is null order by id desc ";
                              
                          }

                    
                       }
                    



                    $result = mysqli_query($conn,$query);
               
                    $count =  mysqli_num_rows($result);
                         //   echo $count;

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
                            
                            $daydiff=floor((abs(strtotime($postTime) - strtotime($expDate))/(60*60*24)));
                            
                            
                            
                            
       $output_result .=  '<div class="col-sm-12">
                            <div class="panel-group">
                               <div class="panel panel-info">
                                   <div class="panel-heading">
                                      <h2 ><a style="text-decoration:none;color:#2ace22;" href="../intern/singleJob.php?id='.$id.'">'.$title.'</a></h2>
                                      <h4>'.$companyName.'<i class="fa fa-check-circle" aria-hidden="true" style="margin-left:10px;"></i></h4>
                                      <h4> Posted on : '.$postTime.'</h4>
                                   </div>
                                   <div class="panel-body">
                                       
                                       <p class = "jobpost">'.$description.'</p>
                                        
                                        <p class = "jobpost"><i class="fa fa-bullseye" aria-hidden="true"></i><b>Vacancy : </b>'.$vacancy.'</p>
                                        

                                        <p class = "jobpost"><i class="fa fa-map-marker" aria-hidden="true"></i><b>Job Location : </b>'.$jobLocation.'</p>
                                        
                                        
                                        <p class = "jobpost"><i class="fa fa-line-chart" aria-hidden="true"></i><b>Experience Required : </b>'.$expRequirement.'</p>
                                        
                                        
                                        <p class = "jobpost" style="color:blue;"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Deadline : </b>'.$daydiff.' Days left</p>


                                    </div>
                               </div>

                            </div>
        
                       </div>';
                            
                            
                            
                 
                          
                       }

                    }
                    else
                    {
                        echo "Nothing found in db".mysqli_connect_error();
                    }


                
                       
                
                
            
         $output_result .='</div>';

echo $output_result;
            
            

?>