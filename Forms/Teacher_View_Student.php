<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
    <script src="../JS/Teacher_Search.js"></script>
</head>

<body>
    <?php
    include('Teacher_home.php');
    include('../control/Teacher_View_Student_Control.php');
    if (empty($_SESSION["email"])) {
        header("Location: Login.php");
    }

    ?>
    <div class="searchST">
        <label id="search"><b>Find user:</b></label>
        <input type="text" id="uname" onkeyup="showStudent()">
        <p id="mytext"> </p>

    </div>
    <div class="container">
        <form method="POST">
            <table align=center>
                <tr>
                    <td><label for="">Student ID: </label></td>
                    <td> <input type="text" id="id" name="id"> </td>
                </tr>
            </table>
            <table align=center>
                <tr>
                    <th>Term </th>
                    <th>Total</th>
                    <th>Gained</th>
                    <!-- <th>Grade</th> -->
                    <!-- <th>Effect</th> -->
                </tr>

                <tr>
                    <td> Mid Term</td>
                    <td> <input type="text" name="mtotal"> </td>
                    <td> <input type="text" name="mGained"> </td>
                    <!-- <td> <input type="text" name="Grade"> </td> -->
                    <!-- <td> <input type="text" name="mEffect"> </td> -->
                    <!-- <td><input type="submit" class="registerbtn" name=midSubmit value="Lock grade"></td> -->
                </tr>

                <tr>
                    <td> Final Term</td>
                    <td> <input type="text" name="ftotal"> </td>
                    <td> <input type="text" name="fGained"> </td>
                    <!-- <td> <input type="text" name="Grade"> </td> -->
                    <!-- <td> <input type="text" name="fEffect"> </td> -->
                    <td><input type="submit" class="registerbtn" name="finalSubmit" value="Lock grade"></td>
                </tr>
                <!-- <tr>
                    <td>Total Grade</td>
                    <td> <input type="text" name="ttotal"> </td>
                    <td> <input type="text" name="tGained"> </td> -->
                <!-- <td> <input type="text" name="Grade"> </td> -->
                <!-- <td> <input type="text" name="tEffect"> </td>
                    <td><input type="submit" class="registerbtn" name=total value="Lock Grade"></td>
                </tr> -->
            </table>
        </form>

    </div>

    <?php include '../Common/footer.php'; ?>
</body>

</html>