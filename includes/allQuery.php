 <?php
                        
    //require 'config.php';
    $query1 = "select * from jobpost where jobLocation = 'Dhaka' AND deletedAt is null order by id desc ";
    $query2 = "select * from jobpost where jobLocation = 'Chittagong' AND deletedAt is null order by id desc";
    $query3 = "select * from jobpost where jobLocation = 'Rajshahi' AND deletedAt is null order by id desc";
    $query4 = "select * from jobpost where jobLocation = 'Rangpur' AND deletedAt is null order by id desc";
    $query5 = "select * from jobpost where jobLocation = 'Barishal' AND deletedAt is null order by id desc";
    $query6 = "select * from jobpost where jobLocation = 'Khulna' AND deletedAt is null order by id desc";
    $query7 = "select * from jobpost where jobLocation = 'Comilla' AND deletedAt is null order by id desc";
    $query8 = "select * from jobpost where jobLocation = 'Sylhet' AND deletedAt is null order by id desc";


    $count1 =  mysqli_num_rows(mysqli_query($conn,$query1));
    $count2 =  mysqli_num_rows(mysqli_query($conn,$query2));
    $count3 =  mysqli_num_rows(mysqli_query($conn,$query3));
    $count4 =  mysqli_num_rows(mysqli_query($conn,$query4));
    $count5 =  mysqli_num_rows(mysqli_query($conn,$query5));
    $count6 =  mysqli_num_rows(mysqli_query($conn,$query6));
    $count7 =  mysqli_num_rows(mysqli_query($conn,$query7));
    $count8 =  mysqli_num_rows(mysqli_query($conn,$query8));


    $catg1 = "select * from jobpost where browseCatg = 'Accounting/Finance' AND deletedAt is null order by id desc";
    $catg2 = "select * from jobpost where browseCatg = 'NGO/Development' AND deletedAt is null order by id desc";
    $catg3 = "select * from jobpost where browseCatg = 'Commercial/Supply Chain' AND deletedAt is null order by id desc";
    $catg4 = "select * from jobpost where browseCatg = 'Education/Training' AND deletedAt is null order by id desc";
    $catg5 = "select * from jobpost where browseCatg = 'Engineer/Architects' AND deletedAt is null order by id desc";
    $catg6 = "select * from jobpost where browseCatg = 'Garments/Textile' AND deletedAt is null order by id desc";
    $catg7 = "select * from jobpost where browseCatg = 'HR/Org. Development' AND deletedAt is null order by id desc";
    $catg8 = "select * from jobpost where browseCatg = 'Gen Mgt/Admin' AND deletedAt is null order by id desc";
    $catg9 = "select * from jobpost where browseCatg = 'Design/Creative' AND deletedAt is null order by id desc";
    $catg10 = "select * from jobpost where browseCatg = 'Production/Operation' AND deletedAt is null order by id desc";
    $catg11 = "select * from jobpost where browseCatg = 'Hospitality/ Travel/ Tourism' AND deletedAt is null order by id desc";
    $catg12 = "select * from jobpost where browseCatg = 'Beauty Care/ Health /Fitness' AND deletedAt is null order by id desc";
    $catg13 = "select * from jobpost where browseCatg = 'Electrician/ Construction/ Repair' AND deletedAt is null order by id desc";
    $catg14 = "select * from jobpost where browseCatg = 'IT/Telecommunication' AND deletedAt is null order by id desc";
    $catg15 = "select * from jobpost where browseCatg = 'Marketing/Sales' AND deletedAt is null order by id desc";
    $catg16 = "select * from jobpost where browseCatg = 'Customer Support/Call Centre' AND deletedAt is null order by id desc";
    $catg17 = "select * from jobpost where browseCatg = 'Media/Ad./Event Mgt' AND deletedAt is null order by id desc";
    $catg18 = "select * from jobpost where browseCatg = 'Medical/Pharma' AND deletedAt is null order by id desc";



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