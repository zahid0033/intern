
<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View All Candidates</h2>
    <h3><a href='../reg/reg_candidate.php' style='float:left;' class='btn btn-info'>Add Candidate</a></h3>
    <h3><a href='convertxml/candidate_xml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
    
    
    
    
    
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Position</th>
        <th>Date of Birth</th>
        <th>Actions</th>
		</tr>
        <?php
            require '../config.php';

            $statement="select * from candidate where cDeleteDate is null order by cId desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['cId']."</td>";
					echo "<td>".$row['cName']."</td>";
					echo "<td>".$row['cMail']."</td>";
					echo "<td>".$row['cMobile']."</td>";
					echo "<td>".$row['cGender']."</td>";
					echo "<td>".$row['cDob']."</td>";
					echo "<td><a href=\"includes/delete_candidate.php?id=$row[cId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"view_candidate.php?Id=$row[cId]\">View</a></td>";
					echo "</tr>";
                }
			
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
		</table>
</div>

<?php include "includes/admin_footer.php" ?>