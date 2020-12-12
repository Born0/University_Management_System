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
            <label> Name</label>
            : <input type="text" name="name"><?php echo $error_name ?><br>

            <label>Email</label>
            : <input type="text" name="email"><?php echo $error_email ?><br>

            <label for="birthday">Date of Birth</label><?php echo $error_dob ?>
            : <input type="date" id="birthday" name="birthday"> <br><br>


            <label for="gender">Gender </label>
            <input type="radio" id="male" name="gender" value="male" checked><label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><?php echo $error_gender ?><br><br>



            <label for="blood">Blood Group:</label><?php echo $error_blood ?>
            : <select name="blood" id="blood">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br>

            <label>Contact Number</label>
            : <input type="text" name="contact"><?php echo $error_contact ?><br>

            <label>Address</label>
            : <input type="text" name="address"><?php echo $error_address ?><br>

            <label>Religion</label>
            : <input type="text" name="religion"><?php echo $error_religion ?><br>

            <label>Joining Year</label>
            : <input type="date" id="joining_year" name="joining_year"><?php echo $error_joining_year ?><br>


            <label for="dept">Department:</label>
            : <select name="dept" id="dept">
                <option value="CS">CS</option>
                <option value="EEE">EEE</option>
                <option value="Matd">Math</option>
                <option value="Englisg">English</option>
            </select><?php echo $error_dept ?><br>

            <label> Designation</label>
            : <input type="text" name="designation"><?php echo $error_designation ?><br>

            <label>Working Experience</label>
            : <input type="text" name="working_experience"><?php echo $error_working_experience ?><br>

            <label>Salary</label>
            : <input type="text" name="salary"><?php echo $error_salary ?><br>

            <label>Password</label>
            : <input type="password" name="password"><?php echo $error_password ?><br>

            <label>Profile image</label>
            <input type="file" name="fileToUpload" id="fileToUpload"><?PHP echo $error_image; ?><br>


            <br><br>

            <!-- <div class="registerbtn">
                <input type="submit" name=submit value="Submit"> <input type="submit" name=refresh value="Refresh">
            </div> -->
            <button type="submit" name=submit class="registerbtn">Submit</button>
            <button type="submit" name=refresh class="registerbtn">Refresh</button>
        </div>
    </form>

    </fieldset><?php echo $db_error; ?><br><br><?php include '../Common/footer.php'; ?>

</body>

</html>