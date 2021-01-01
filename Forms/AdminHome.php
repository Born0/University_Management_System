<!DOCTYPE html>
<html>
<?php Include("../control/AdminHomeControl.php")?>
<head>
	<link rel="stylesheet" href="../CSS/header.css">
</head>


<body>
		 <div class="mainheader">
			<div class="header">
				<div class="icon">
					<img src="../Resources/varsity.png" alt="University logo">
				</div>
				<div class="title">
					<h1>Web University<br>Bangladesh</h1>
				</div>
				<form method="GET" enctype="multipart/form-data">
					<button type="submit" name=logout class="logoutbtn">Logout</button>
				</form>
			</div>

        <div class="topnav">
			<ul>
				<li><a href="#home">Accounts</a></li>
				<li><a href="AdminProfile.php">Profile</a></li>
				<li><a href="Admin_Reg.php">Registration</a></li>
			</ul>
		</div>
	  </div>   
</body>
	  
	  
	 
    

	
</html>