<!DOCTYPE html>
<html>

<head>
    <meta lang="en-us">
    <h1 style="width:40%" align=center>Web University Bangladesh</h1>
</head>

<body>

    <?php
    session_start();
    if (empty($_SESSION["email"])) {
        header("Location: Login.php");
    }
    include('../control/Teacher_Reg_check.php');
    ?>


    <fieldset style="width:40%">
        <legend><b>Teacher Registration</b></legend>
        <form method="POST" enctype="multipart/form-data">
            <table align=center>
                <tr>
                    <td>Name </td>
                    <td> : <input type="text" name="name"> <?php echo $error_name ?> </td>
                </tr>
                <tr>
                    <td>Email </td>
                    <td>: <input type="text" name="email"> <?php echo $error_email ?> </td>
                </tr>
                <tr>
                    <td>
                        <label for="birthday">Date of Birth</label> <?php echo $error_dob ?>
                    </td>
                    <td>
                        : <input type="date" id="birthday" name="birthday">
                    </td>
                </tr>
                <tr>
                    <td><label for="gender"> Gender </label></td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male" checked>
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
                    <td>Contact Number </td>
                    <td>: <input type="text" name="contact"><?php echo $error_contact ?> </td>
                </tr>
                <tr>
                    <td>Address </td>
                    <td>: <input type="text" name="address"><?php echo $error_address ?> </td>
                </tr>
                <tr>
                    <td>Religion </td>
                    <td>: <input type="text" name="religion"> <?php echo $error_religion ?></td>
                </tr>
                <tr>
                    <td>Joining Year </td>
                    <td>: : <input type="date" id="joining_year" name="joining_year"><?php echo $error_joining_year ?> </td>
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
                    <td>: <input type="text" name="designation"> <?php echo $error_designation ?></td>
                </tr>
                <tr>
                    <td>Working Experience </td>
                    <td>: <input type="text" name="working_experience"><?php echo $error_working_experience ?> </td>
                </tr>
                <tr>
                    <td>Salary </td>
                    <td>: <input type="text" name="salary"><?php echo $error_salary ?> </td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>: <input type="password" name="password"><?php echo $error_password ?> </td>
                </tr>
                <tr>
                    <td> Profile image</td>
                    <td>
                        <input type="file" name="fileToUpload" id="fileToUpload"> <?PHP echo $error_image; ?>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name=submit value="Submit">
                        <input type="submit" name=refresh value="Refresh">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php echo $db_error; ?>
    <br><br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>