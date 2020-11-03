<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us">
        <h1 style="width:40%" align= center>Web University Bangladesh</h1>
    </head>
    <body>
        <?php
            $name=$email=$dob=$gender=$blood=$contact=$address=$religion=$joining_year=$dept=$designation=$working_experience=$salary=$password="";
            $error_name=$error_email=$error_dob=$error_gender=$error_blood=$error_contact=$error_address=$error_religion=$error_joining_year=$error_dept="";
            $error_designation=$error_working_experience=$error_salary=$error_password="";
            $file_status="";
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                
                if(empty($_REQUEST["name"]))
                {
                    $error_name="  Invalid name";
                }
                else
                {      
                    $name=$_REQUEST["name"]; 
                }

                if(empty($_REQUEST["email"]))
                {
                    $error_email="  Invalid email";
                }
                else
                {
                    $email=$_REQUEST["email"];                      
                }

                if(empty($_REQUEST["birthday"]))
                {
                    $error_dob="  Invalid dob"; 
                }
                else
                {
                    $dob=$_REQUEST["birthday"];                   
                }

                if(empty($_REQUEST["gender"]))
                {
                    $error_gender="  Invalid gender";
                }
                else
                {
                    $gender=$_REQUEST["gender"];                     
                }
                
                if(empty($_REQUEST["blood"]))
                {
                    $error_blood="  Invalid blod group";
                }
                else
                {
                    $blood=$_REQUEST["blood"];      
                }

                if(empty($_REQUEST["contact"]))
                {
                    $error_contact="  Invalid contact";
                }
                else
                {
                    $contact=$_REQUEST["contact"];                   
                }

                if(empty($_REQUEST["address"]))
                {
                    $error_address="  Invalid address";
                }
                else
                {
                    $address=$_REQUEST["address"];                    
                }

                if(empty($_REQUEST["religion"]))
                {
                    $error_religion="  Invalid religion";
                }
                else
                {
                    $religion=$_REQUEST["religion"];                    
                }

                if(empty($_REQUEST["joining_year"]))
                {
                    $error_joining_year="  Invalid joining_year";
                }
                else
                {
                    $joining_year=$_REQUEST["joining_year"];                     
                }

                if(empty($_REQUEST["dept"]))
                {
                    $error_dept="  Invalid dept";
                }
                else
                {
                    $dept=$_REQUEST["dept"];                     
                }

                if(empty($_REQUEST["designation"]))
                {
                    $error_designation="  Invalid designation";
                }
                else
                {
                    $designation=$_REQUEST["designation"];                     
                }

                if(empty($_REQUEST["working_experience"]))
                {
                    $error_working_experience="  Invalid working_experience";
                }
                else
                {
                    $working_experience=$_REQUEST["working_experience"];                    
                }

                if(empty($_REQUEST["salary"]))
                {
                    $error_salary="  Invalid salary";
                }
                else
                {
                    $salary=$_REQUEST["salary"];   
                }

                if(empty($_REQUEST["password"]))
                {
                    $error_password="  Invalid password";
                }
                else
                {
                    $password=$_REQUEST["password"];                   
                }
                
                $target_dir = "files/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                {
                    $file_status= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } 
                else 
                {
                    $file_status="Sorry, there was an error uploading your file.";
                }
            
            }
            ?>
        <fieldset style="width:40%" >
            <legend><b>Teacher Registration</b></legend>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" >
                <table align=center >
                    <tr>
                        <td>Name </td>
                        <td> :   <input type="text" name="name" > <?php echo $error_name ?>  </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>:   <input type="email" name="email"  > <?php echo $error_email ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="birthday">Date of Birth</label> <?php echo $error_dob ?>
                        </td>
                        <td> 
                            :   <input type="date" id="birthday" name="birthday">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender"> Gender  </label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male" checked >
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label> <?php echo $error_gender ?>
                        <td>
                    </tr>
                    <tr>
                        <td><label for="blood">Blood Group:</label><?php echo $error_blood ?></td>
                        <td>
                            : 
                            <select name="blood" id="blood">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Contact Number  </td>
                        <td>:   <input type="text"  name="contact" ><?php echo $error_contact ?> </td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:   <input type="text"  name="address"  ><?php echo $error_address ?> </td>
                    </tr>
                    <tr>
                        <td>Religion </td>
                        <td>:   <input type="text"  name="religion"  > <?php echo $error_religion ?></td>
                    </tr>
                    <tr>
                        <td>Joining Year </td>
                        <td>:   <input type="text" name="joining_year"   ><?php echo $error_joining_year ?> </td>
                    </tr>
                    <tr>
                        <td><label for="dept"> Department:</label></td>
                        <td>
                            : 
                            <select name="dept" id="dept">
                                <option value="CS">CS</option>
                                <option value="EEE">EEE</option>
                                <option value="Matd">Matd</option>
                                <option value="Englisg">English</option>
                            </select> <?php echo $error_dept ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>:   <input type="text"  name="designation"  > <?php echo $error_designation ?></td>
                    </tr>
                    <tr>
                        <td>Working Experience </td>
                        <td>:   <input type="text"  name="working_experience" ><?php echo $error_working_experience ?> </td>
                    </tr>
                    <tr>
                        <td>Salary </td>
                        <td>:   <input type="text" name="salary"  ><?php echo $error_salary ?> </td>
                    </tr>
                    <tr>
                        <td>Password  </td>
                        <td>:   <input type="password" name="password" ><?php echo $error_password ?> </td>
                    </tr>
                    <tr>
                        <td> Profile image</td>
                        <td>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><br><br></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td> <?php echo $name ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $email ?></td>
                    </tr>
                </table>  
                <br><br>
                <?php include '../Common/footer.php';?>       
    </body>
</html>