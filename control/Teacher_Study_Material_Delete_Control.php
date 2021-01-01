<?php
include('../Repository/DataAccess.php');
include('../Repository/Study_Material_repo.php');
$name = $_GET["name"];
if ($name != "") {
    $mat = new Material_Repo();
    $result = $mat->Delete($name);
    if ($result) {
        echo '<script  > 
        alert( "Deleted");
         </script>';
    } else {
        echo '<script  > 
                alert( "Error Delete");
                 </script>';
    }
    header("Refresh:0; url=../Forms/Teacher_Study_Material.php");
}
