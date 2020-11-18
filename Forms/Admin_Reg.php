<!DOCTYPE html>
<html>
	<body>
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
			
			/*elseif(empty($mail))
				$error="Please provide all the info";
			elseif(empty($dob))
				$error="Please provide all the info";
			elseif(empty($gender))
				$error="Please provide all the info";
			elseif(empty($bloodtype))
				$error="Please provide all the info";
			elseif(empty($number))
				$error="Please provide all the info";
			elseif(empty($address))
				$error="Please provide all the info";
			elseif(empty($religion))
				$error="Please provide all the info";
			elseif(empty($joinDate))
				$error="Please provide all the info";
			elseif(empty($salary))
				$error="Please provide all the info";*/
			}
		  function formNotFilled()
		  {
			  global $name,$mail,$dob,$gender,$bloodtype,$number,$address,$religion,$joinDate,$salary,$password;
			  if($name==""||$mail==""||$dob==""||$gender==""||$bloodtype==""||$number==""||$address==""||$religion==""||$joinDate==""||$salary==""||$password=="")
				  return true;
			  else return false;
		  }
			
			
			
		?>

		<h2 align="center">Admin Regisstration Form</h2>

			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">

				 <table style="width:20%" align="center">
					  <tr>
					   <td> <label>Name</label></td>
					   <td> : <input type="text" id="name" name="name" align="center" value="<?php echo $name;?>"><br></td>
					  </tr>
					  
					  <tr>
						<td><label>Email:</label></td>
						<td>: <input type="text" id="mail" name="mail" value="<?php echo $mail;?>"></td><br>
					  </tr>
					  
					   <tr>
						<td><label>DOB:</label></td>
						<td>: <input style="font-size: 1rem" type="date" id="DOB" name="DOB" value="<?php echo $dob;?>"><br></td>
					  </tr>

						<tr>
							<td><label>Gender:</label></td>
							<td>: 
								<input type="radio" id="maleRadio" name="gender" value="m" checked>
								<label>Male</label>
								<input type="radio" id="femaleRadio" name="gender" value="f" >
								<label>Female</label><br>
							</td>
					  </tr>
					  <tr>
						<td> <label for="bloodtype">BloodGroup:</label></td>
						<td>: 
							<select name="bloodtype" id="bloodtype" >
							<option value="A+" >A+</option>
							<option value="A-" >A-</option>
							<option value="B+" >B+</option>
							<option value="B-" >B-</option>
							<option value="O+" >O+</option>
							<option value="O-" >O-</option>
							<option value="AB+" >AB+</option>
							<option value="AB-" >AB-</option>
							</select><br>
						</td>
					   </tr>

						<tr>
							<td><label>Contact Number:</label></td>
							<td>: <input type="text" id="number" name="number" value="<?php echo $number;?>"></td>
						</tr>
					  
					  
						<tr>
							<td> <label>Address:</label></td>
							<td>: <input type="text" id="address" name="address" value="<?php echo $address;?>"></td>
						</tr> 
					  
					  
						<tr>
							<td><label>Religion:</label></td>
							<td>: <input type="text" id="religion" name="religion" value="<?php echo $religion;?>"><br></td>
						</tr>
					  
						<tr>
							<td><label>Joining Date:</label></td>
							<td>: <input style="font-size: 1rem" type="date" id="joinDate" name="joinDate" value="<?php echo $joinDate;?>"></td>
					   </tr> 
					  
					   <tr>
							<td><label>Salary:</label></td>
							<td>: <input type="text" id="salary" name="salary" value="<?php echo $salary;?>"></td>
					   </tr>  
					   <tr>
							<td><label>Password:</label></td>
							<td>: <input type="text" id="password" name="password" value="<?php echo $password;?>"></td>
					   </tr> 
				  
				  
				</table>
				
				<div style="color:Tomato; text-align:center">
					<i><?php echo "$error<br><br>";?></i>
				</div>
				<div style="text-align:center"> 
					<input type="submit" value="Submit" align="center"> 
				</div>
	
		</form> 
	</body>
</html>
