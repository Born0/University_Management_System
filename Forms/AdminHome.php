<!DOCTYPE html>

<?php
//session_start();
include("../control/AdminHomeControl.php")
?>




<head>
	<link rel="stylesheet" href="../CSS/Admin_Home2.css">
	<style>
		<?php //include "../CSS/header.css"
		?>
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
			<a href="">Accounts</a>
			<a href="AdminProfile.php">Profile</a>
			<a href="RegPage.php">Registration</a>



		</div>
	</div>

</body>






</html>