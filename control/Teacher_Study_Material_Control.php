<?php
include('../Entity/Study_Material_Entity.php');
include('../Repository/Study_Material_repo.php');
$file_status = "";
$t_id = $_SESSION["id"];
$stm_repo = new Material_Repo();
if (isset($_POST["submit"])) {
    $material = new Study_Material();
    $material->setT_id($t_id);
    $material->setSection_id(1);

    $target_dir = "study/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $material->setFile_path($target_file);
    } else {
        $file_status = "Sorry, there was an error uploading your file.";
    }


    $result = $stm_repo->Insert($material);
    if ($result) {
        echo "Uploaded";
    } else {
        echo "error in file upload";
    }
}

$material = new Study_Material();
$material->setT_id($t_id);
$material->setSection_id(1);
$all = $stm_repo->GetAll($material);
if ($all != null) {
    $size = count($all);
    echo " <div class='container'>
            <br><br><br><br>
            
                <table   rules='hw' frame='box'  style='width: 30%;'>";
    for ($i = 0; $i < $size; $i++) {
        echo "
                <tr>
                    <td>" . $i . "</td>
                    <td>" . $all[$i] . "</td>
                </tr>";
    }

    echo  "         </table>
              
            </div>  ";
}
