<!DOCTYPE html>
<html>
	<body>
		<?php
		
			$studentId=$name=$dob=$gender=$religion=$country=$city=$address=$admissionDate=$bloodgroup=$contactNumber=$fatherName=$motherName=$departmentId=$sectionId=$email=$passord="";
			$error="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
			$studentId=$_REQUEST["studentId"];
			$name=$_REQUEST["name"];
            $dob=$_REQUEST["DOB"];
			$gender=$_REQUEST["gender"];
			$religion=$_REQUEST["religion"];
			$country=$_REQUEST["country"];
			$city=$_REQUEST["city"];
			$address=$_REQUEST["address"];
            $admissionDate=$_REQUEST["admissionDate"];
			$bloodgroup=$_REQUEST["bloodgroup"];
			$contactNumber=$_REQUEST["contactNumber"];
			$fatherName=$_REQUEST["fatherName"];
			$motherName=$_REQUEST["motherName"];
			$department=$_REQUEST["department"];
			$sectionId=$_REQUEST["sectionId"];
			$email=$_REQUEST["email"];
			$password=$_REQUEST["password"];
				
			if(formNotFilled())
				$error="All the information must be provided before submitting";
			
			
			}
		  function formNotFilled()
		  {
			  global $name,$studentId,$dob,$gender,$religion,$country,$city,$address,$admissionDate,$bloodgroup,$contactNumber,$email,$fatherName,$motherName,$department,$sectionId,$password;
			  if($studentId==""||$name==""||$dob==""||$gender==""||$religion==""||$country==""||$city==""||$address==""||$admissionDate==""||$bloodgroup==""||$contactNumber==""||$email==""||$fatherName==""||$motherName==""||$department==""||$sectionId==""||$password=="")
				  return true;
			  else return false;
		  }
			
			
			
		?>

		<h2 align="center">Student Registration Form</h2>

			<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method="post">

				 <table style="width:20%" align="center">
					  <tr>
						<td><label> Student ID</label></td>
						<td>: <input type="text" id="studentId" name="studentId" value="<?php 
						echo $studentId;?>"></td><br>
					  </tr>
					  
					  
					  
					  <tr>
					   <td> <label>Name</label></td>
					   <td> : <input type="text" id="name" name="name" align="center" value="<?php 
					   echo $name;?>"><br>
					</td>
					  </tr>
					  
					  
					   <tr>
						<td><label>DOB</label></td>
						<td>: <input style="font-size: 1rem" type="date" id="DOB" name="DOB" value="<?php
						 echo $dob;?>"><br>
					</td>
					  </tr>

					  <tr>
							<td><label>Gender</label></td>
							<td>: 
								<input type="radio" id="maleRadio" name="gender" value="m" checked>
								<label>Male</label>
								<input type="radio" id="femaleRadio" name="gender" value="f" >
								<label>Female</label><br>
							</td>
					  </tr>

					  <tr>
							<td><label>Religion</label></td>
							<td>:
							<select name="religion" id="religion" >
							<option value="islam" >Islam</option>
							<option value="hindu" >Hindu</option>
							<option value="christianity" >Christianity</option>
							<option value="buddhism" >Buddhism</option>
							
						</td>
						</tr>

					  <tr>
						<td> <label >Country</label>
					</td>
						<td>: 
							<select name="country" id="country" >
							<option value="bd" >Bangladesh</option>
							<option value="kr" >Korea</option>
							<option value="cn" >Canada</option>
							<option value="jp" >Japan</option>
							<option value="ch" >China</option>
							<option value="in" >India</option>
							<option value="ne" >Nepal</option>
							<option value="bh" >Bhutan</option>
						</td>
					   </tr>
						

					   <tr>
						<td> <label >City</label>
					</td>
						<td>: 
							<select name="city" id="city" >
							<option value="dh" >Dhaka</option>
							<option value="se" >Seoul</option>
							<option value="ot" >Ottawa</option>
							<option value="tk" >Tokyo</option>
							<option value="bj" >Beijing</option>
							<option value="mb" >Mumbai</option>
							<option value="kt" >Kathmandu</option>
							<option value="tm" >Thimphu</option>
						</td>
					   </tr>
					  
						<tr>
							<td> <label>Address</label></td>
							<td>: <input type="text" id="address" name="address" value="<?php 
							echo $address;?>">
						</td>
						</tr> 
					  
					  
					  
						<tr>
							<td><label>Admission Date</label></td>
							<td>: <input style="font-size: 1rem" type="date" id="admissionDate" name="admissionDate" value="<?php 
							echo $admissionDate;?>">
						</td>
					   </tr> 

					   <tr>
						<td> <label >Blood Group</label>
					   </td>
						<td>: 
							<select name="bloodgroup" id="bloodgroup" >
							<option value="a+" >A+(positive)</option>
							<option value="a-" >A-(negative)</option>
							<option value="b+" >B+(positive)</option>
							<option value="b-" >B-(negative)</option>
							<option value="ab+">AB+(positive)</option>
							<option value="ab-">AB-(negative)</option>
							<option value="O+" >O+(positive)</option>
							<option value="O-" >O-(negative)</option>
						</td>
					   </tr>

					   <tr>
						<td><label>Email</label></td>
						<td>: <input type="text" id="email" name="email" value="<?php 
						echo $email;?>">
					    </td>
					  </tr> 

					   <tr>
                         <td> Contact Number</td>
						 <td>: <input type="text" name="contact" value="<?php
						  echo $contactNumber;?>"> </td>
                       </tr>

					   <tr>
					   <td> <label>Father Name</label></td>
					   <td> : <input type="text" id="fatherName" name="fatherName" value="<?php 
					   echo $fathername;?>"></td><br>
					  </tr>

					  <tr>
					   <td> <label>Mother Name</label></td>
					   <td> : <input type="text" id="motherName" name="motherName" value="<?php 
					   echo $mothername;?>"></td><br>
					  </tr>

					  <tr>
						<td><label> Depatment Name</label></td>
						<td>: <input type="text" id="department" name="department" value="<?php 
						echo $department;?>"></td><br>
					  </tr>

					  <tr>
						<td><label> Section ID</label></td>
						<td>: <input type="text" id="sectionId" name="sectionId" value="<?php 
						echo $sectionId;?>"></td><br>
					  </tr>

					   

					  <tr>
							<td><label>Password</label></td>
							<td>: <input type="password" id="password" name="password" value= "<?php 
							echo $password;?>">
						</td>
					   </tr> 
					  
					   
				  
				</table>
				
				<div style="color:Black; text-align:center">
					<i><?php 
					echo "$error<br><br>";?></i>
				</div>
				<div style="text-align:center"> 
					<input type="submit" value="Submit" align="center"> 
				</div>
	
		</form> 
	</body>
</html>