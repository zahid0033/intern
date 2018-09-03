
<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View All Employee</h2>
    <h3><a href='convertxml.php' style='float:left;' class='btn btn-info'>Add Employee</a></h3>
    <h3><a href='convertxml/employee_xml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
    
    
    
    
    
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

            $statement="select * from employer where eDeleteDate is null order by eId desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['eId']."</td>";
					echo "<td>".$row['eName']."</td>";
					echo "<td>".$row['eMail']."</td>";
					echo "<td>".$row['eMobile']."</td>";
					echo "<td>".$row['ePosition']."</td>";
					echo "<td>".$row['eDob']."</td>";
					echo "<td><a href=\"includes/delete_employee.php?id=$row[eId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"view_employee.php?id=$row[eId]\">View</a></td>";
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