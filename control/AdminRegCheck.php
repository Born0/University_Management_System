<?php
		
			$name=$mail=$dob=$gender=$bloodtype=$number=$address=$religion=$joinDate=$salary=$password="";
			$error="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
			$name=$_REQUEST["name"];
			$mail=$_REQUEST["mail"];
			$dob=$_REQUEST["DOB"];
			$gender=$_REQUEST["gender"];
			$bloodtype=$_REQUEST["bloodtype"];
			$number=$_REQUEST["number"];
			$address=$_REQUEST["address"];
			$religion=$_REQUEST["religion"];
			$joinDate=$_REQUEST["joinDate"];
			$salary=$_REQUEST["salary"];
			$password=$_REQUEST["password"];
			
			if(formNotFilled())
				$error="All the information must be provided before submitting";
			
			
			}
		  function formNotFilled()
		  {
			  global $name,$mail,$dob,$gender,$bloodtype,$number,$address,$religion,$joinDate,$salary,$password;
			  if($name==""||$mail==""||$dob==""||$gender==""||$bloodtype==""||$number==""||$address==""||$religion==""||$joinDate==""||$salary==""||$password=="")
				  return true;
			  else return false;
		  }
			
			
			$targetDir="files/";
			if(isset($_FILES["fileup"]["name"]))
			{
				$targetFile=$targetDir . basename($_FILES["fileup"]["name"]);
			
			if (move_uploaded_file($_FILES["fileup"]["tmp_name"], $targetFile)) {
				echo "The file ". basename( $_FILES["fileup"]["name"]). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
			}
			

		?>