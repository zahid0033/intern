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




                    <div class="col-sm-6">
                        
                        <!--   insert categories  -->

                        <?php  insert_categories();  ?>



                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title"> Add Category </label>
                                    <input type="text" name="cat_title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Add category" class="btn btn-primary">
                                </div>
                            </form>


                            <!--  Edit category  -->

                            <?php
                                
                                if(isset($_GET['edit'])){
                                    
                                    $cat_id = $_GET['edit'];
                                    include "includes/update_category.php";
                                }
                            
                            ?>


                    </div>
                    <!--  category form -->




                    <div class="col-sm-6">


                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>

                            <tbody>
                                
                                <!-- Find all category  -->

                                <?php   findAllCategories(); ?>

                                <!-- Delete Query  -->
                               
                                <?php    deleteCategories();  ?>



                            </tbody>

                        </table>

                    </div>



                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>