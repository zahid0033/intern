<?php include "includes/admin_header.php" ?>

    
        
    

        <!-- Navigation -->
        
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">
   
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin 
                            <small>Zahid Hossain</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                
                
                       
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        
    
                                    $statement="select * from jobpost where deletedAt is null order by id desc";
                                    $result = mysqli_query($conn, $statement);
                                    $post_count = mysqli_num_rows($result);
                                    echo "<div class='huge'>{$post_count}</div>";
                                        
                                        ?>
                                    
                                  
                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="view_job_posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        
                                        $statement="select * from employer where eDeleteDate is null order by eId desc";
                                        $result = mysqli_query($conn, $statement);
                                        $emp_count = mysqli_num_rows($result);
                                        echo "<div class='huge'>{$emp_count}</div>";
                                        
                                        ?>
                                    
                                    
                                      <div>Employer</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    
                                    <?php
                                        
                                        $statement="select * from candidate where cDeleteDate is null order by cId desc";
                                        $result = mysqli_query($conn, $statement);
                                        $cand_count = mysqli_num_rows($result);
                                        echo "<div class='huge'>{$cand_count}</div>";
                                        
                                        ?>
                                    
                                        <div> Candidate</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                       
                                       <?php
                                        
                                        $statement="select * from company where compDeleteDate is null order by compId desc";
                                        $result = mysqli_query($conn, $statement);
                                        $comp_count = mysqli_num_rows($result);
                                        echo "<div class='huge'>{$comp_count}</div>";
                                        
                                        ?>
                                       
                                         <div>Company</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                
                
                <div class="row">
                    
                    
                     <script type="text/javascript">
                      google.charts.load('current', {'packages':['bar']});
                      google.charts.setOnLoadCallback(drawChart);

                      function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                          ['Data', 'Count'],
                            
                            
                            <?php
                            
                            $element_text = ['Active Post','Candidate','Employee','Company'];
                            $element_count = [$post_count,$cand_count,$emp_count,$comp_count];
                            
                            for($i=0 ; $i<4; $i++){
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
                
                
                
                
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php" ?>
