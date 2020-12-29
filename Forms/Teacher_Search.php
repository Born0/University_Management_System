<!DOCTYPE html>

<head>
    <?php
    include('Teacher_home.php');
    ?>
    <link rel="stylesheet" href="../CSS/Teacher_Reg.css">
    <script src="../JS/Teacher_Search.js"></script>
</head>

<body>
    <div class="search">
        <!-- Search  -->

        <label id="search"><b>Find user:</b></label>
        <input type="text" id="uname" onkeyup="showTeacher()">
        <p id="mytext"> </p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

    <?php include '../Common/footer.php'; ?>
</body>

</html>