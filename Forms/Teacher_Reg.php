<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="../CSS/Teacher_Home.css"> -->
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
</head>

<body><?php
        include('Teacher_home.php');
        //session_start();
        include('../control/Teacher_Reg_check.php');
        ?>





    <form method="POST" enctype="multipart/form-data">
        <div class="container">
            <ul>
                <li> <label> Name</label>
                    : <input type="text" id="reg" name="name"><?php echo $error_name ?> </li>
                <li> <label>Email</label>
                    : <input type="text" id="reg" name="email"><?php echo $error_email ?> </li>
                <li><label for="birthday">Date of Birth</label><?php echo $error_dob ?>
                    : <input type="date" id="reg" name="birthday"> </li>
                <li> <label for="gender">Gender </label>
                    : <input type="radio" id="reg" name="gender" value="male" checked><label for="male">Male</label>
                    <input type="radio" id="reg" name="gender" value="female"><label for="female">Female</label><?php echo $error_gender ?></li>
                <li> <label for="blood">Blood Group</label><?php echo $error_blood ?>
                    : <select name="blood" id="reg">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </li>
                <li><label>Contact Number</label>
                    : <input type="text" id="reg" name="contact"><?php echo $error_contact ?> </li>
                <li><label>Address</label>
                    : <input type="text" id="reg" name="address"><?php echo $error_address ?> </li>
                <li> <label>Religion</label>
                    : <input type="text" id="reg" name="religion"><?php echo $error_religion ?> </li>
                <li><label>Joining Year</label>
                    : <input type="date" id="reg" name="joining_year"><?php echo $error_joining_year ?> </li>
                <li><label for="dept">Department:</label>
                    : <select name="dept" id="reg">
                        <option value="CS">CS</option>
                        <option value="EEE">EEE</option>
                        <option value="Matd">Math</option>
                        <option value="Englisg">English</option>
                    </select><?php echo $error_dept ?> </li>
                <li><label> Designation</label>
                    : <input type="text" id="reg" name="designation"><?php echo $error_designation ?> </li>
                <li><label>Working Experience</label>
                    : <input type="text" id="reg" name="working_experience"><?php echo $error_working_experience ?> </li>
                <li><label>Salary</label>
                    : <input type="text" id="reg" name="salary"><?php echo $error_salary ?> </li>
                <li><label>Password</label>
                    : <input type="password" id="reg" name="password"><?php echo $error_password ?>
                </li>
                <li><label>Profile image</label>
                    <input type="file" name="fileToUpload" id="reg"><?PHP echo $error_image; ?> </li>
                <button type="submit" name=submit class="registerbtn">Submit</button>
                <button type="submit" name=refresh class="registerbtn">Refresh</button>

            </ul>
        </div>
    </form>

    </fieldset><?php echo $db_error; ?> <?php include '../Common/footer.php'; ?>

</body>

</html>