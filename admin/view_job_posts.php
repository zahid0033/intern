
<?php 
session_start();
include "includes/admin_header.php"
?>
<?php include "includes/admin_navigation.php" ?>


    <div id="page-wrapper" class="">


   
   <h2 style="text-align:center">View All Jobs</h2>
    <h3><a href='convertxml.php' style='float:right;' class='btn btn-info'>Export as Xml</a></h3><br/><br/>
    
    <?php include "../includes/allQuery.php"; ?>
    
     <div class="row">
                    
                    
                     <script type="text/javascript">
                      google.charts.load('current', {'packages':['bar']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Data', 'Count'],
                            
                            
                            <?php
    
                         //   include "../includes/allQuery.php";
    
                            
//                            $element_text = ['Dhaka','Chittagong','Rajshahi','Rangpur','Barishal','Khulna','Comilla','Sylhet','Accounting/Finance','NGO/Development','Commercial/Supply Chain','Education/Training','Engineer/Architects','Garments/Textile','HR/Org. Development','Gen Mgt/Admin','Production/Operation','Hospitality/ Travel/ Tourism','Beauty Care/ Health /Fitness','Electrician/ Construction/ Repair','IT/Telecommunication','Marketing/Sales','Customer Support/Call Centre','Media/Ad./Event Mgt','Medical/Pharma'];
                            
                            
                            $element_text = ['Dhaka','Chittagong','Rajshahi','Rangpur','Barishal','Khulna','Comilla','Sylhet','Accounting','NGO','Commercial supply','Education','Engineer','Garments','HR','Gen Mgt','Production','Hospitality','Beauty Care','Electrician','IT/Telecommunication','Marketing','Customer Support','Media/Ad.','Medical'];
                            
                            
//                            $element_count = [$count1,$count2,$count3,$count4,$count5,$count6,$count7,$catgCount1,$catgCount2,$catgCount3,$catgCount4,$catgCount5,$catgCount6,$catgCount7,$catgCount8,$catgCount9,$catgCount10,$catgCount11,$catgCount12,$catgCount13,$catgCount14,$catgCount15,$catgCount16,$catgCount17,$catgCount18];
                            
                            $element_count = [$count1,$count2,4,8,2,7,$count7,$catgCount1,$catgCount2,5,3,2,8,1,6,7,4,7,1,4,7,7,9,4,2];
                            
                            for($i=0 ; $i<sizeof($element_text); $i++){
                                echo"['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";  
                            }
                            
                            
                            
                            
                            ?>
                            
                            
                            
                         // ['2014', 1000],
                        ]);

                        var options = {
                          chart: {
                            title: 'Company Performance',
                            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
                          }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                      }
                    </script>
                    
                    
                    <div id="columnchart_material" style="width: auto; height: 500px;"></div>

                    
        </div>
    
    
    
	<table class="table table-striped table-bordered table-condensed">
		<tr>
        <th>News ID</th>
        <th>Headline</th>
        <th>Posting Date</th>
        <th>Exp Date</th>
        <th>Vacancy</th>
        <th>Salary</th>
        <th>Browse catg</th>
        <th>Actions</th>
		</tr>
        <?php
            require '../config.php';

            $statement="select * from jobpost where deletedAt is null order by id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>"; 
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['postTime']."</td>";
					echo "<td>".$row['expDate']."</td>";
					echo "<td>".$row['vacancy']."</td>";
					echo "<td>".$row['salary']."</td>";
					echo "<td>".$row['browseCatg']."</td>";
					echo "<td><a href=\"includes/delete_job.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"view_job.php?id=$row[id]\">View</a></td>";
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