 <?php
                        
    require 'config.php';
    $query1 = "select * from jobpost where jobLocation = 'Dhaka' ";
    $query2 = "select * from jobpost where jobLocation = 'Chittagong' ";
    $query3 = "select * from jobpost where jobLocation = 'Rajshahi' ";
    $query4 = "select * from jobpost where jobLocation = 'Rangpur' ";
    $query5 = "select * from jobpost where jobLocation = 'Barishal' ";
    $query6 = "select * from jobpost where jobLocation = 'Khulna' ";
    $query7 = "select * from jobpost where jobLocation = 'Comilla' ";


    $count1 =  mysqli_num_rows(mysqli_query($conn,$query1));
    $count2 =  mysqli_num_rows(mysqli_query($conn,$query2));
    $count3 =  mysqli_num_rows(mysqli_query($conn,$query3));
    $count4 =  mysqli_num_rows(mysqli_query($conn,$query4));
    $count5 =  mysqli_num_rows(mysqli_query($conn,$query5));
    $count6 =  mysqli_num_rows(mysqli_query($conn,$query6));
    $count7 =  mysqli_num_rows(mysqli_query($conn,$query7));


    $catg1 = "select * from jobpost where browseCatg = 'Accounting/Finance' ";
    $catg2 = "select * from jobpost where browseCatg = 'NGO/Development' ";
    $catg3 = "select * from jobpost where browseCatg = 'Commercial/Supply Chain' ";
    $catg4 = "select * from jobpost where browseCatg = 'Education/Training' ";
    $catg5 = "select * from jobpost where browseCatg = 'Engineer/Architects' ";
    $catg6 = "select * from jobpost where browseCatg = 'Garments/Textile' ";
    $catg7 = "select * from jobpost where browseCatg = 'HR/Org. Development' ";
    $catg8 = "select * from jobpost where browseCatg = 'Gen Mgt/Admin' ";
    $catg9 = "select * from jobpost where browseCatg = 'Design/Creative' ";
    $catg10 = "select * from jobpost where browseCatg = 'Production/Operation' ";
    $catg11 = "select * from jobpost where browseCatg = 'Hospitality/ Travel/ Tourism' ";
    $catg12 = "select * from jobpost where browseCatg = 'Beauty Care/ Health & Fitness' ";
    $catg13 = "select * from jobpost where browseCatg = 'Electrician/ Construction/ Repair' ";
    $catg14 = "select * from jobpost where browseCatg = 'IT/Telecommunication' ";
    $catg15 = "select * from jobpost where browseCatg = 'Marketing/Sales' ";
    $catg16 = "select * from jobpost where browseCatg = 'Customer Support/Call Centre' ";
    $catg17 = "select * from jobpost where browseCatg = 'Media/Ad./Event Mgt' ";
    $catg18 = "select * from jobpost where browseCatg = 'Medical/Pharma' ";



    $catgCount1 =  mysqli_num_rows(mysqli_query($conn,$catg1));
    $catgCount2 =  mysqli_num_rows(mysqli_query($conn,$catg2));
    $catgCount3 =  mysqli_num_rows(mysqli_query($conn,$catg3));
    $catgCount4 =  mysqli_num_rows(mysqli_query($conn,$catg4));
    $catgCount5 =  mysqli_num_rows(mysqli_query($conn,$catg5));
    $catgCount6 =  mysqli_num_rows(mysqli_query($conn,$catg6));
    $catgCount7 =  mysqli_num_rows(mysqli_query($conn,$catg7));
    $catgCount8 =  mysqli_num_rows(mysqli_query($conn,$catg8));
    $catgCount9 =  mysqli_num_rows(mysqli_query($conn,$catg9));
    $catgCount10 =  mysqli_num_rows(mysqli_query($conn,$catg10));
    $catgCount11 =  mysqli_num_rows(mysqli_query($conn,$catg11));
    $catgCount12 =  mysqli_num_rows(mysqli_query($conn,$catg12));
    $catgCount13 =  mysqli_num_rows(mysqli_query($conn,$catg13));
    $catgCount14 =  mysqli_num_rows(mysqli_query($conn,$catg14));
    $catgCount15 =  mysqli_num_rows(mysqli_query($conn,$catg15));
    $catgCount16 =  mysqli_num_rows(mysqli_query($conn,$catg16));
    $catgCount17 =  mysqli_num_rows(mysqli_query($conn,$catg17));
    $catgCount18 =  mysqli_num_rows(mysqli_query($conn,$catg18));
    
                        
    
?>