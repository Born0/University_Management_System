<?php
session_start();
if (empty($_SESSION["email"])) {
    header("Location: Forms/Teacher_Reg.php");
} else {
    echo "Success ! <br>";
    echo $_SESSION['name'];
    echo "<br>";
}


?>
<html>
<a href="control/logout.php">logout</a>

</html>