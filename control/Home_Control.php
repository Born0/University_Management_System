<?php
if (isset($_POST['logout'])) {
    header("Refresh:0; url=../Common/logout.php");
    //include('../Common/logout.php');
}
