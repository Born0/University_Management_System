<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
</head>

<body>
    <?php
    include('Teacher_home.php');
    //session_start();
    if (empty($_SESSION["email"])) {
        header("Location: Login.php");
    }
    //include('Student_profile.php');    -----> from student 
    ?>
    <div class="search">
        <!-- Search  -->

        <label id="search"><b>Find user:</b></label>
        <input type="text" id="uname" onkeyup="showmyuser()">
        <p id="mytext"> </p>

    </div>
    <div class="container">
        <fieldset>
            <legend> Upload Grade</legend>
            <table align=center>
                <tr>
                    <th>Term </th>
                    <th>Total</th>
                    <th>Gained</th>
                    <th>Grade</th>
                    <th>Effect</th>
                </tr>

                <tr>
                    <td> Mid Term</td>
                    <td> <input type="text" name="total"> </td>
                    <td> <input type="text" name="Gained"> </td>
                    <td> <input type="text" name="Grade"> </td>
                    <td> <input type="text" name="Effect"> </td>
                    <td><input type="submit" name=mid value="Lock grade"></td>
                </tr>

                <tr>
                    <td> Final Term</td>
                    <td> <input type="text" name="total"> </td>
                    <td> <input type="text" name="Gained"> </td>
                    <td> <input type="text" name="Grade"> </td>
                    <td> <input type="text" name="Effect"> </td>
                    <td><input type="submit" name=final value="Lock grade"></td>
                </tr>
                <tr>
                    <td>Total Grade</td>
                    <td> <input type="text" name="total"> </td>
                    <td> <input type="text" name="Gained"> </td>
                    <td> <input type="text" name="Grade"> </td>
                    <td> <input type="text" name="Effect"> </td>
                    <td><input type="submit" name=total value="Lock grade"></td>
                </tr>


            </table>
        </fieldset>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include '../Common/footer.php'; ?>
</body>

</html>