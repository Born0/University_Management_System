<!DOCTYPE html>
<html>
    <head>
        <meta lang="en-us">
        <h1>Web University Bangladesh</h1>
    </head>
    <body>
        <fieldset style="width:40%" >
            <legend><b>Teacher Registration</b></legend>
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" metdod='post'  >
                <table align=center >
                    <tr>
                        <td>Name </td>
                        <td> :   <input type="text" name="name" ></td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>:   <input type="email" name="email"  ></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="birthday">Date of Birth</label>
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
                        <td>:   <input type="text"  name="contact" ></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:   <input type="text"  name="address"  ></td>
                    </tr>
                    <tr>
                        <td>Religion </td>
                        <td>:   <input type="text"  name="religion"  ></td>
                    </tr>
                    <tr>
                        <td>Joining Year </td>
                        <td>:   <input type="text" name="joining_year"   ></td>
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
                        <td>:   <input type="text"  name="designation"  ></td>
                    </tr>
                    <tr>
                        <td>Working Experience </td>
                        <td>:   <input type="text"  name="working_experience" ></td>
                    </tr>
                    <tr>
                        <td>Salary </td>
                        <td>:   <input type="text" name="salary"  ></td>
                    </tr>
                    <tr>
                        <td>Password  </td>
                        <td>:   <input type="password" name="password" ></td>
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


        <?php

            $name=$email=$dob=$gender=$blood=$contact=$address=$religion=$joining_year=$dept=$designation=$working_experience=$salary=$password="";

            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $name=$_REQUEST["name"];
                $email=$_REQUEST["email"];
                $dob=$_REQUEST["birthday"];
                $gender=$_REQUEST["gender"];
                $blood=$_REQUEST["blood"];
                $contact=$_REQUEST["contact"];
                $address=$_REQUEST["address"];
                $religion=$_REQUEST["religion"];
                $joining_year=$_REQUEST["joining_year"];
                $dept=$_REQUEST["dept"];
                $designation=$_REQUEST["designation"];
                $working_experience=$_REQUEST["working_experience"];
                $salary=$_REQUEST["salary"];
                $password=$_REQUEST["password"];
            }

                echo isEmpty($name);
                echo isEmpty($email); 
                echo isEmpty($dob);
                echo isEmpty($gender);
                echo isEmpty($blood);
                echo isEmpty($contact);
                echo isEmpty($address);
                echo isEmpty($religion);
                echo isEmpty($joining_year);
                echo isEmpty($dept);
                echo isEmpty($designation);
                echo isEmpty($working_experience);
                echo isEmpty($salary);
                echo isEmpty($password);
            
        
            function isEmpty($attriubte)
            {
                if(empty($attriubte)) 
                {
                    echo "<br>";
                    return "please fill the box";   
                }
                else 
                {
                    echo "<br>";
                    return $attriubte;
                }    
            }
    

        // echo $dob;
        // echo "<br>";
        // echo $gender;
        // echo "<br>";
        // echo $blood;
        // echo "<br>";
        // echo $contact;
        // echo "<br>";
        // echo $address;
        // echo "<br>";
        // echo $religion;
        // echo "<br>";
        // echo $joining_year;
        // echo "<br>";
        // echo $dept;
        // echo "<br>";
        // echo $designation;
        // echo "<br>";
        // echo $working_experience;
        // echo "<br>";
        // echo $salary;
        // echo "<br>";
        // echo $password;
        // echo "<br>";

    ?>
    </body>
</html>