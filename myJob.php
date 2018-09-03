<?php
session_start();

$en = $_SESSION['en'];

include "includes/header.php";
include "includes/head.php";
include "includes/navbar.php";

$category = array("Accounting/Finance","NGO/Development","Commercial/Supply Chain","Education/Training","Engineer/Architects","Garments/Textile","HR/Org. Development","Gen Mgt/Admin","Design/Creative","Production/Operation","Hospitality/ Travel/ Tourism","Beauty Care/ Health & Fitness","Electrician/ Construction/ Repair","IT/Telecommunication","Marketing/Sales","Customer Support/Call Centre","Media/Ad./Event Mgt","Medical/Pharma");

$location = array("Dhaka","Chittagong","Rajshahi","Rangpur","Barishal","Khulna","Comilla","Sylhet");

?>

<div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2>My Job Posts</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
</div>
<div class="container">

<button class="btn btn-primary" style="float:right;"  onclick="document.getElementById('modal-wrapper').style.display='block'"> Post Job </button>

<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Title</th>
        <th>Vacancy</th>
        <th>Posting Date</th>
        <th>Action</th>
		</tr>

<?php


    require "config.php";

    $statement = "select * from employer where eMail = '$en' ";
    $result = mysqli_query($conn,$statement);

    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
                    
            $eId = $row['eId'];
            $eCompId = $row['eCompId'];
            
            $query = "select * from jobpost where empId = '$eId' AND deletedAt is null order by id desc ";
                                        
            $output = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($output) > 0){
                while($row = mysqli_fetch_assoc($output)){
                    
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['vacancy']."</td>";
					echo "<td>".$row['postTime']."</td>";
					echo "<td><a href=\"empPostDelete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"job_edit.php?id=$row[id]\">Edit</a> | <a href=\"singleJob.php?id=$row[id]\">View</a></td>";
					echo "</tr>";
                    
                    
                    
                    
                    
                }
            }
        }
                    
                    
    }
    else 
    {
        echo "query failed ";
    }
                    
?>
</table>
</div>



<?php

$sub_query = "select * from company where compId = '$eCompId'";
$result = mysqli_query($conn,$sub_query);

    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_assoc($result)){
            $company_name = $row['compName'];
        }
    }


?>






            <!--       Modal popup  for post job-->

            <div id="modal-wrapper" class="modal container form-group">
            
             <div class="">
  
              <form class="modal-content animate" action="employer/post_job.php" method="post">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    
                  <h1 style="text-align:center">Post a Job</h1>
                </div>

                <div class="container">
                
                 <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Employee ID</label>
                    <input type="text" name="empId" class="form-control" id="exampleInputPassword1"  readonly="readonly" value="<?php echo $eId ?>" >
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Company Name </label>
                    <input type="text" name="companyName" class="form-control" id="exampleInputPassword1" readonly="readonly" value="<?php echo $company_name ?>" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Vacancy</label>
                    <input type="text" name="vacancy" class="form-control" id="exampleInputPassword1" placeholder="Vacancy" >
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Context</label>
                    <input type="text" name="context" class="form-control" id="exampleInputPassword1" placeholder="Context" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Employment Status</label>
                    <input type="text" name="empStatus" class="form-control" id="exampleInputPassword1" placeholder="Employment Status" >
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Educational Requirement</label>
                    <input type="text" name="eduRequirement" class="form-control" id="exampleInputPassword1" placeholder="Educational Requirement" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Experience Required</label>
                    <input type="text" name="expRequirement" class="form-control" id="exampleInputPassword1" placeholder="Experience Required" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Additional Requirement</label>
                    <input type="text" name="addRequirement" class="form-control" id="exampleInputPassword1" placeholder="Additional Requirement" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Job Location</label>
                      
                      <select name="jobLocation" id="country" class="btn  col-sm-12" style="border: 1px solid #b0b3b0;">
                                                        <option value=" ">- select location-</option>
                                                        <?php
                                                            foreach($location as $locate){
                                                                echo '<option value="'.$locate.'">'.$locate.'</option>';
                                                            }
                                                        ?>
                     </select>
                      
                      
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Salary</label>
                    <input type="text" name="salary" class="form-control" id="exampleInputPassword1" placeholder="Salary" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Degree</label>
                    <input type="text" name="degree" class="form-control" id="exampleInputPassword1" placeholder="Degree" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    
                    <select name="browseCatg" id="country" class="btn  col-sm-12" style="border: 1px solid #b0b3b0;">
                                                        <option value=" ">- select category-</option>
                                                        <?php
                                                            foreach($category as $catg){
                                                                echo '<option value="'.$catg.'">'.$catg.'</option>';
                                                            }
                                                        ?>
                                                        
                    </select>
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Expired Date</label>
                    <input type="text" name="expDate" class="form-control" id="exampleInputPassword1" placeholder="Expired Date">
                  </div>
                  
                  
                  
                         
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                  
                </div>

              </form>

              </div>
              
            </div>





<?php include "includes/last.php" ?>
<?php include "includes/footer.php" ?>