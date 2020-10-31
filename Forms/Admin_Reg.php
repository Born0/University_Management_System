<!DOCTYPE html>
<html>
	<body>

		<h2 align="center">Admin Regisstration Form</h2>

			<form action="page2.php" >

				 <table style="width:20%" align="center">
					  <tr>
					   <td> <label>Name</label></td>
					   <td> : <input type="text" id="name" name="name" align="center"><br></td>
					  </tr>
					  
					  <tr>
						<td><label>Email:</label></td>
						<td>: <input type="text" id="mail" name="mail" ></td><br>
					  </tr>
					  
					   <tr>
						<td><label>DOB:</label></td>
						<td>: <input style="font-size: 1rem" type="date" id="DOB" name="DOB" ><br></td>
					  </tr>

						<tr>
							<td><label>Gender:</label></td>
							<td>: 
								<input type="radio" id="maleRadio" name="gender" value="m" checked>
								<label>Male</label>
								<input type="radio" id="femaleRadio" name="gender" value="f">
								<label>Female</label><br>
							</td>
					  </tr>
					  <tr>
						<td> <label>BloodGroup:</label></td>
						<td>: 
							<select name="subject" id="subject" >
							<option value="A+" selected="selected">A+</option>
							<option value="A-" selected="selected">A-</option>
							<option value="B+" selected="selected">B+</option>
							<option value="B-" selected="selected">B-</option>
							<option value="O+" selected="selected">O+</option>
							<option value="O-" selected="selected">O-</option>
							<option value="AB+" selected="selected">AB+</option>
							<option value="AB-" selected="selected">AB-</option>
							</select><br>
						</td>
					   </tr>

						<tr>
							<td><label>Contact Number:</label></td>
							<td>: <input type="text" id="number" name="number" ></td>
						</tr>
					  
					  
						<tr>
							<td> <label>Address:</label></td>
							<td>: <input type="text" id="address" name="address" ></td>
						</tr> 
					  
					  
						<tr>
							<td><label>Religion:</label></td>
							<td>: <input type="text" id="religion" name="religion" ><br></td>
						</tr>
					  
						<tr>
							<td><label>Joining Date:</label></td>
							<td>: <input style="font-size: 1rem" type="date" id="joinDate" name="joinDate"></td>
					   </tr> 
					  
					   <tr>
							<td><label>Salary:</label></td>
							<td>: <input type="text" id="salary" name="salary" ></td>
					   </tr>  
					   <tr>
							<td><label>Password:</label></td>
							<td>: <input type="text" id="password" name="password" ></td>
					   </tr> 
				  
				  
				</table>
				<div style="text-align:center">  
					<input type="submit" value="Submit" align="center"> 
				</div>
	
		</form> 
	</body>
</html>
