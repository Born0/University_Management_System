<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
    <script src="../JS/Teacher_Reg.js"></script>

</head>

<body><?php
        include('AdminHome.php');
        //session_start();
        include('../control/Teacher_Reg_check.php');
        ?>

    <div class="container">

        <form method="POST" enctype="multipart/form-data">

            <ul>
                <li> <label> Name</label>
                    : <input type="text" id="name" name="name"><?php echo $error_name ?> </li>
                <li> <label>Email</label>
                    : <input type="text" id="email" name="email"><?php echo $error_email ?> </li>
                <li><label for="birthday">Date of Birth</label><?php echo $error_dob ?>
                    : <input type="date" id="dob" name="birthday"> </li>
                <li> <label for="gender"><br> Gender </label>
                    : <input type="radio" id="gender1" name="gender" value="male" checked><label for="male">Male</label>
                    <input type="radio" id="gender" name="gender" value="female"><label for="female">Female</label><?php echo $error_gender ?></li>
                <li> <label for="blood"><br> Blood Group</label><?php echo $error_blood ?>
                    : <select name="blood" id="blood">
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
                    : <input type="text" id="contact" name="contact"><?php echo $error_contact ?> </li>
                <li><label>Address</label>
                    : <input type="text" id="address" name="address"><?php echo $error_address ?> </li>
                <li> <label>Religion</label>
                    : <input type="text" id="religion" name="religion"><?php echo $error_religion ?> </li>
                <li><label>Joining Year</label>
                    : <input type="date" id="joining_year" name="joining_year"><?php echo $error_joining_year ?> </li>
                <li><label for="dept">Department</label>
                    : <select name="dept" id="dept">
                        <option value="CS">CS</option>
                        <option value="EEE">EEE</option>
                        <option value="Matd">Math</option>
                        <option value="Englisg">English</option>
                    </select><?php echo $error_dept ?> </li>
                <li><label> Designation</label>
                    : <input type="text" id="designation" name="designation"><?php echo $error_designation ?> </li>
                <li><label>Working Experience</label>
                    : <input type="text" id="working_experience" name="working_experience"><?php echo $error_working_experience ?> </li>
                <li><label>Salary</label>
                    : <input type="text" id="salary" name="salary"><?php echo $error_salary ?> </li>
                <li><label>Password</label>
                    : <input type="password" id="password" name="password"><?php echo $error_password ?>
                </li>
                <li><label>Profile image</label>
                    <input type="file" name="fileToUpload" id="fileToUpload"><?PHP echo $error_image; ?> </li>
                <button type="submit" id="submit" name=submit class="registerbtn" onclick="validateForm()">Submit</button>
                <button type="submit" id="refresh" name=refresh class="registerbtn">Refresh</button>
            </ul>
        </form>
    </div>

</body>

</fieldset><?php echo $db_error; ?> <?php include '../Common/footer.php'; ?>

</body>

</html>