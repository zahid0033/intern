<?php
include ('config.php');
session_start();
		$comId=0;
		$eId=0;

	
 		$sql="INSERT INTO employer (eId, eName, ePass, eCompId, eDesignation, eMobile, eMail, ePosition, eDescription, eDob, eDeleteDate, eLogin, eLogout ,eLastActivity) VALUES ('NULL', '".$_SESSION['uname']."', '".$_SESSION['pass']."', 'NULL', '".$_SESSION['ds']."', '".$_SESSION['ph']."', '".$_SESSION['email']."', '".$_SESSION['uname']."', '".$_SESSION['desc']."', '".$_SESSION['dob']."', 'NULL', 'NULL', 'NULL','NULL')";
		
		$sql2 ="INSERT INTO company(compName, compAddress, compWebLink, compType ) VALUES ('".$_SESSION['comname']."','".$_SESSION['comadd']."','".$_SESSION['comweb']."','".$_SESSION['type']."')";
		
		if(mysqli_query($conn,$sql)&&mysqli_query($conn,$sql2))
		{
			$result1=mysqli_query($conn,"SELECT * FROM employer where eName='".$_SESSION['uname']."' ");
			$result2=mysqli_query($conn,"SELECT * FROM company where compName='".$_SESSION['comname']."' ");
			if (mysqli_num_rows($result1) > 0) {
    
				while($row = mysqli_fetch_assoc($result1)) {
					$eId = $row['eId'];
				}
			} 
			if (mysqli_num_rows($result2) > 0) {
    
				while($row = mysqli_fetch_assoc($result2)) {
					$comId = $row['compId'];
				}
			} 
			
		
			
			$sql3= "UPDATE employer SET eCompId = '".$comId."' where eName = '".$_SESSION['uname']."'";
			echo $eId;
			echo $comId;
			$sql4= "UPDATE company SET empId = '".$eId."' where compId = '".$comId."'";
			
			mysqli_query($conn,$sql3);
			mysqli_query($conn,$sql4);
			header('location:login_intern.php?val=0');
			
		}else
			die("query failed".mysqli_error($conn));

mysqli_close($conn);

	
	


?>