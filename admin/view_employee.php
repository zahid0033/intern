<?php
    session_start();

    
require "../config.php";
include "includes/admin_header.php";
include "includes/admin_navigation.php";


    $eId = $_GET['id'];

       $statement = "select * from employer where eId = '$eId' ";
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
            

       <div id="page-wrapper" class="">               
            <div class="container">
             
             
               <h2 style="text-align:center"><?php echo $eName ?>'s Profile</h2>
               
                             
               
               
               
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
                    
                    <p class = "singlePost"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Company Web Link : </b><a href="<?php echo $compWebLink ?>"><?php echo $compWebLink ?></a> </p>
                    
                </div>
            </div>
            
            
            
            <!--       Modal popup -->

            <div id="modal-wrapper" class="modal container form-group">
            
             <div class="">
  
              <form class="modal-content animate" action="employer/emp_profile_edit.php" method="post">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    
                  <h1 style="text-align:center">Edit Profile</h1>
                </div>

                <div class="container">
                
                 <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="eName" class="form-control" id="exampleInputPassword1" placeholder="Name" value="<?php echo $eName ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="eMail" class="form-control" id="exampleInputPassword1" placeholder="Email" readonly="readonly" value="<?php echo $eMail ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" name="eMobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile" value="<?php echo $eMobile ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="text" name="eDob" class="form-control" id="exampleInputPassword1" placeholder="Date of Birth(11/11/1111)" value="<?php echo $eDob ?>">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" name="eDesignation" class="form-control" id="exampleInputPassword1" placeholder="Skills" value="<?php echo $eDesignation ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Position</label>
                    <input type="text" name="ePosition" class="form-control" id="exampleInputPassword1" placeholder="Degree" value="<?php echo $ePosition ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="eDescription" class="form-control" id="exampleInputPassword1" placeholder="Previous Experiene" value="<?php echo $eDescription ?>">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Id</label>
                    <input type="text" name="eCompId" class="form-control" id="exampleInputPassword1" placeholder="Present Address" readonly="readonly" value="<?php echo $eCompId ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Name</label>
                    <input type="text" name="compName" class="form-control" id="exampleInputPassword1" placeholder="Present Address" value="<?php echo $compName ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Address</label>
                    <input type="text" name="compAddress" class="form-control" id="exampleInputPassword1" placeholder="Permanent Address" value="<?php echo $compAddress ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Type</label>
                    <input type="text" name="compType" class="form-control" id="exampleInputPassword1" placeholder="Permanent Address" value="<?php echo $compType ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Web Link</label>
                    <input type="text" name="compWebLink" class="form-control" id="exampleInputPassword1" placeholder="Permanent Address" value="<?php echo $compWebLink ?>">
                  </div>
                  
                  
                  
                         
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                  
                </div>

              </form>

              </div>
              
            </div>
</div>
            
            
     <?php 
                }
            }
        
        }
    }
include "includes/admin_footer.php"
?>

    