<html>
<title>interm</title>
<head>
	<link type="text/css" rel="stylesheet" href="css\jobPost.css"/>
</head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">INTERN</a>
    </div>
    
	 
    <ul class="nav navbar-nav navbar-right">
	  <li> <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
	</li>
      
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>

	<div class="container-fluid" style="margin-top:-1.3%">
	 
	     <div class="panel panel-info" style="width:20%;height:100%;float:left;margin-left:-1%">
		<div class="panel-body">Side Bar</div>
		</div>
		
		<div class="panel panel-info" style="width:80.5%;float:left;margin-top:0%;margin-left:.5%">
		<div class="panel-body"><div class="form-group">
		
		<br>
		
		</div>
		</div>
		</div>
		
		<?php
            require 'config.php';

            $statement="select * from jobpost order by Id desc";
            $result = mysqli_query($conn, $statement);

            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
					
					echo "<div class='panel panel-info' style='width:80.5%;float:left;margin-top:0%;margin-left:.5%'>
					<div class='panel-heading'><b>"."<a href=\"singleview.php?id=$row[Id]\" class='text-warning'>".$row['Title']."</a></b> -By Admin at " .$row['date']."</div>
					<div class='panel-body'>".$row['discription'] ."</div>
					</div>";
								
						
						
					
                }
            }
            else
            {
                echo "Nothing found in db";
            }
            mysqli_close($conn);
        ?>
		
		
		
		<footer class="page-footer font-small">
		<div class="footer-copyright text-center py-3">2018 copyright</div>
		</footer>
		
    </div>
	
	
	
	
</body>

</html>