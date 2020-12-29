<?php
include('../Entity/Grade_Entity.php');
include('../Repository/Grade_repo.php');

if (isset($_POST['finalSubmit'])) {
    $grd = new Grade();
    $grd->setId($_REQUEST["id"]);
    $grd->setMTotal($_REQUEST["mtotal"]);
    $grd->setMid($_REQUEST["mGained"]);

    $grd->setFinal($_REQUEST["fGained"]);
    $grd->setFTotal($_REQUEST["ftotal"]);

    $g_repo = new Grade_repo();
    $result = $g_repo->Insert($grd);
    if ($result) {
        echo " Uploaded";
    } else {
        echo "Error";
    }
}
