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
            $cDegree = $row['cDegree'];
            $cImage = $row['cImage'];
            $cPreviousExp = $row['cPreviousExp'];
            $cPresentAdd = $row['cPresentAdd'];
            $cPermanentAdd = $row['cPermanentAdd'];
            $cDob = $row['cDob'];

?>
            
<div class="top_banner">
           
           <div class="col-sm-6 top_banner_left">
               <h2><?php echo $cName ?>'s Profile</h2>
               <p>Currently you have applied to this jobs . and they are still on pending.</p>
               <p>They are neither approved nor unapproved</p>
           </div>
           <div class="col-sm-6"></div>
           
           
</div>            
            
            
            <div class="container">
                
               
               
               <?php
                    if(isset($_SESSION['un'])){
                        
                        ?>
                        <button class="btn btn-primary" style="float:right;"  onclick="document.getElementById('modal-wrapper').style.display='block'"> Edit </button>'
                        
                        
                        <?php
                        
                    }
                    else{
                            echo '';
                    }
                ?>
               
               
               
               
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
                        <img style="width: 200px;height: 200px;" src="images/<?php echo $cImage ?>" alt="">
                  </div>
                   
                    
                    
                    
                    
                    
                    
                </div>
            </div>
            
            
            
           <!--       Modal popup -->

            <div id="modal-wrapper" class="modal container form-group">
            
             <div class="">
  
              <form class="modal-content animate" action="candidate/cand_profile_edit.php" method="post">

                <div class="imgcontainer">
                  <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                    
                  <h1 style="text-align:center">Edit Profile</h1>
                </div>

                <div class="container">
                
                 <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="cName" class="form-control" id="exampleInputPassword1" placeholder="Name" value="<?php echo $cName ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="cMail" class="form-control" id="exampleInputPassword1" placeholder="Email" readonly="readonly" value="<?php echo $cMail ?>">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" name="cMobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile" value="<?php echo $cMobile ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gender</label>
                    <select name="cGender" id="country" class="btn  col-sm-12" style="border:2px solid gray">
                           <option value="<?php echo $cGender?>"><?php echo $cGender?></option>
                           
                           <?php
                                
                                if($cGender == "male"){
                                    echo '<option value="female">Female</option>';                               
                                }
                                else if($cGender == "female"){
                                    echo '<option value="male">Male</option>';
                                }
                                
                            ?>  
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input type="text" name="cDob" class="form-control" id="exampleInputPassword1" placeholder="Date of Birth(11/11/1111)" value="<?php echo $cDob ?>">
                  </div>
                  
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skills</label>
                    <input type="text" name="cSkill" class="form-control" id="exampleInputPassword1" placeholder="Skills" value="<?php echo $cSkill ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Degree</label>
                    <input type="text" name="cDegree" class="form-control" id="exampleInputPassword1" placeholder="Degree" value="<?php echo $cDegree ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Previous Experience</label>
                    <input type="text" name="cPreviousExp" class="form-control" id="exampleInputPassword1" placeholder="Previous Experiene" value="<?php echo $cPreviousExp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Present Address</label>
                    <input type="text" name="cPresentAdd" class="form-control" id="exampleInputPassword1" placeholder="Present Address" value="<?php echo $cPresentAdd ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Permanent Address</label>
                    <input type="text" name="cPermanentAdd" class="form-control" id="exampleInputPassword1" placeholder="Permanent Address" value="<?php echo $cPermanentAdd ?>">
                  </div>
                  
                  
                  
                         
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                  
                </div>

              </form>

              </div>
              
            </div>
           
                     

    
     <?php 
        }
    }
?>

<script>
    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
     
        
</script>

<?php
include "includes/last.php";
include "includes/footer.php";
?>
    

    