<?php
include "includes/db.php";
include "includes/header.php";

?>

    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
               <h1 class="page-header">
                            Page Heading
                            <small>Secondary Text</small>
                        </h1>
                
                <?php
    
                    $query = "SELECT * FROM POSTS";
                    $selct_all_posts_data = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($selct_all_posts_data)){
                    
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];
                        
                        
                ?>
                
                    

                        <!-- First Blog Post -->


                        <h2>
                            <a href="#"><?php echo $post_title ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $post_author ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                        <hr>
                        <p><?php echo $post_content ?></p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                        
                        
                        
                        <br><br><br><br><br><br><br>

                 
                
                
                
                
               <?php  } ?>
                
                
                

                

                <hr>
                
                
                
                
                

                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>

 <?php include "includes/footer.php"; ?>