<?php
session_start();

$en = $_SESSION['en'];
$id = $_GET['id'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";

$category = array("Accounting/Finance","NGO/Development","Commercial/Supply Chain","Education/Training","Engineer/Architects","Garments/Textile","HR/Org. Development","Gen Mgt/Admin","Design/Creative","Production/Operation","Hospitality/ Travel/ Tourism","Beauty Care/ Health & Fitness","Electrician/ Construction/ Repair","IT/Telecommunication","Marketing/Sales","Customer Support/Call Centre","Media/Ad./Event Mgt","Medical/Pharma");

$location = array("Dhaka","Chittagong","Rajshahi","Rangpur","Barishal","Khulna","Comilla","Sylhet");

?>
          
          <?php
            include 'config.php';

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
                    $degree = $row['degree'];
                    $browseCatg = $row['browseCatg'];
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
           
<div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>Edit Job Post</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
</div> 
            
                       
<div id="" class=" container form-group">
            
             <div class="">
  
              <form class="animate" action="employer/job_edit_ver.php" method="post">

                        

                <div class="container">
                
                 <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title" value="<?php echo $title ?>" >
                  </div>
                 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Company Name </label>
                    <input type="text" name="companyName" class="form-control" id="exampleInputPassword1" readonly="readonly" value="<?php echo $companyName ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Vacancy</label>
                    <input type="text" name="vacancy" class="form-control" id="exampleInputPassword1" placeholder="Vacancy" value="<?php echo $vacancy ?>"  >
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Context</label>
                    <input type="text" name="context" class="form-control" id="exampleInputPassword1" placeholder="Context" value="<?php echo $context ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Description"><?php echo $description ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Employment Status</label>
                    <input type="text" name="empStatus" class="form-control" id="exampleInputPassword1" placeholder="Employment Status" value="<?php echo $empStatus ?>"  >
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Educational Requirement</label>
                    <input type="text" name="eduRequirement" class="form-control" id="exampleInputPassword1" placeholder="Educational Requirement" value="<?php echo $eduRequirement ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Experience Required</label>
                    <input type="text" name="expRequirement" class="form-control" id="exampleInputPassword1" placeholder="Experience Required" value="<?php echo $expRequirement ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Additional Requirement</label>
                    <input type="text" name="addRequirement" class="form-control" id="exampleInputPassword1" placeholder="Additional Requirement" value="<?php echo $addRequirement ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Location</label>
                      
                      <select name="jobLocation" id="country" class="btn  col-sm-12" style="border: 1px solid #b0b3b0;">
                                                        <option value="<?php echo $location ?>"><?php echo $jobLocation ?></option>
                                                        <?php
                                                            foreach($location as $locate){
                                                                echo '<option value="'.$locate.'">'.$locate.'</option>';
                                                            }
                                                        ?>
                     </select>
                      
                      
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="text" name="salary" class="form-control" id="exampleInputPassword1" placeholder="Salary" value="<?php echo $salary ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Degree</label>
                    <input type="text" name="degree" class="form-control" id="exampleInputPassword1" placeholder="Degree" value="<?php echo $degree ?>"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    
                    <select name="browseCatg" id="country" class="btn  col-sm-12" style="border: 1px solid #b0b3b0;">
                                                        <option value="<?php echo $category ?>"><?php echo $browseCatg ?></option>
                                                        <?php
                                                            foreach($category as $catg){
                                                                echo '<option value="'.$catg.'">'.$catg.'</option>';
                                                            }
                                                        ?>
                                                        
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Expired Date</label>
                    <input type="text" name="expDate" class="form-control" id="exampleInputPassword1" placeholder="Expired Date" value="<?php echo $expDate ?>" >
                  </div>
                  
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                           
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                  
                </div>

              </form>

              </div>
              
            </div>
            
           
<?php include "includes/last.php" ?>
<?php include "includes/footer.php" ?>