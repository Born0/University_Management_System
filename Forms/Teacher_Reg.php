<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us">
        <h1 style="width:40%" align= center>Web University Bangladesh</h1>
    </head>
    <body>
        <?php
            $name=$email=$dob=$gender=$blood=$contact=$address=$religion=$joining_year=$dept=$designation=$working_experience=$salary=$password="";
            $error_msg="";
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                
                if(empty($_REQUEST["name"]))
                {
                   $error_msg="Error";
                }
                else
                {      
                    $name=$_REQUEST["name"];  $error_msg="";  
                }

                if(empty($_REQUEST["email"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $email=$_REQUEST["email"]; $error_msg="";                    
                }

                if(empty($_REQUEST["birthday"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $dob=$_REQUEST["birthday"];  $error_msg="";                
                }

                if(empty($_REQUEST["gender"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $gender=$_REQUEST["gender"];  $error_msg="";                  
                }
                
                if(empty($_REQUEST["blood"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $blood=$_REQUEST["blood"];   $error_msg="";  
                }

                if(empty($_REQUEST["contact"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $contact=$_REQUEST["contact"]; $error_msg="";                 
                }

                if(empty($_REQUEST["address"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $address=$_REQUEST["address"];  $error_msg="";                 
                }

                if(empty($_REQUEST["religion"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $religion=$_REQUEST["religion"];  $error_msg="";                 
                }

                if(empty($_REQUEST["joining_year"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $joining_year=$_REQUEST["joining_year"]; $error_msg="";                   
                }

                if(empty($_REQUEST["dept"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $dept=$_REQUEST["dept"];       $error_msg="";             
                }

                if(empty($_REQUEST["designation"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $designation=$_REQUEST["designation"];     $error_msg="";               
                }

                if(empty($_REQUEST["working_experience"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $working_experience=$_REQUEST["working_experience"];   $error_msg="";                
                }

                if(empty($_REQUEST["salary"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $salary=$_REQUEST["salary"];    $error_msg="";
                }

                if(empty($_REQUEST["password"]))
                {
                   $error_msg="Error ";
                }
                else
                {
                    $password=$_REQUEST["password"];   $error_msg="";               
                }

            
            }
            ?>
        <fieldset style="width:40%" >
            <legend><b>Teacher Registration</b></legend>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST"  >
                <table align=center >
                    <tr>
                        <td>Name </td>
                        <td> :   <input type="text" name="name" > <?php echo $error_msg; ?> </td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>:   <input type="email" name="email"  ><?php echo $error_msg; ?> </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="birthday">Date of Birth</label>
                        </td>
                        <td> 
                            :   <input type="date" id="birthday" name="birthday"><?php echo $error_msg;; ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="gender"> Gender  </label></td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male" checked >
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        <td>
                    </tr>
                    <tr>
                        <td><label for="blood">Blood Group:</label></td>
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
                        <td>:   <input type="text"  name="contact" ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:   <input type="text"  name="address"  ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Religion </td>
                        <td>:   <input type="text"  name="religion"  ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Joining Year </td>
                        <td>:   <input type="text" name="joining_year"   ><?php echo $error_msg; ?></td>
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
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>:   <input type="text"  name="designation"  ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Working Experience </td>
                        <td>:   <input type="text"  name="working_experience" ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Salary </td>
                        <td>:   <input type="text" name="salary"  ><?php echo $error_msg; ?></td>
                    </tr>
                    <tr>
                        <td>Password  </td>
                        <td>:   <input type="password" name="password" ><?php echo $error_msg; ?></td>
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

                   
    </body>
</html>