
<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>

<div id="page-wrapper" class="">


   <h2 style="text-align:center">Company</h2>
    <h3><a href='convertxml/company_xml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>

<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Web Link</th>
        <th>Company Type</th>
        <th>Actions</th>
		</tr>
        <?php
            require '../config.php';

            $statement="select * from company where compDeleteDate is null order by compId desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['compId']."</td>";
					echo "<td>".$row['compName']."</td>";
					echo "<td>".$row['compAddress']."</td>";
					echo "<td><a href='".$row['compWebLink']."'>".$row['compWebLink']."</a></td>";
					echo "<td>".$row['compType']."</td>";
					echo "<td><a href=\"includes/delete_job.php?id=$row[compId]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"view_job.php?id=$row[compId]\">View</a></td>";
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