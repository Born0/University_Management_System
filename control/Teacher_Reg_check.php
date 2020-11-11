<?php
include('../Entity/Teacher_Entity.php');
include('../Repository/Teacher_repo.php');
session_start();
$teacher = new Teacher();
$error_name = $error_email = $error_dob = $error_gender = $error_blood = $error_contact = $error_address = $error_religion = $error_joining_year = $error_dept = "";
$error_designation = $error_working_experience = $error_salary = $error_password = "";
$file_status = "";
$flag = true;
$db_error = "";

if (isset($_POST['submit'])) {

    if (empty($_REQUEST["name"])) {
        $error_name = "  Invalid name";
        $flag = false;
    } else {
        $name = $_REQUEST["name"];
        $_SESSION["name"] = $name;
        $teacher->setName($name);
    }

    if (empty($_REQUEST["email"])) {
        $error_email = "  Invalid email";
        $flag = false;
    } else {
        $email = $_REQUEST["email"];
        $_SESSION["email"] = $email;
        $teacher->setEmail($email);
    }

    if (empty($_REQUEST["birthday"])) {
        $error_dob = "  Invalid dob";
        $flag = false;
    } else {
        $dob = $_REQUEST["birthday"];
        $teacher->setDob($dob);
    }

    if (empty($_REQUEST["gender"])) {
        $error_gender = "  Invalid gender";
        $flag = false;
    } else {
        $gender = $_REQUEST["gender"];
        $teacher->setGender($gender);
    }

    if (empty($_REQUEST["blood"])) {
        $error_blood = "  Invalid blod group";
        $flag = false;
    } else {
        $blood = $_REQUEST["blood"];
        $teacher->setBlood($blood);
    }

    if (empty($_REQUEST["contact"])) {
        $error_contact = "  Invalid contact";
        $flag = false;
    } else {
        $contact = $_REQUEST["contact"];
        $teacher->setContact($contact);
    }

    if (empty($_REQUEST["address"])) {
        $error_address = "  Invalid address";
        $flag = false;
    } else {
        $address = $_REQUEST["address"];
        $teacher->setAddress($address);
    }

    if (empty($_REQUEST["religion"])) {
        $error_religion = "  Invalid religion";
        $flag = false;
    } else {
        $religion = $_REQUEST["religion"];
        $teacher->setReligion($religion);
    }

    if (empty($_REQUEST["joining_year"])) {
        $error_joining_year = "  Invalid joining_year";
        $flag = false;
    } else {
        $joining_year = $_REQUEST["joining_year"];
        $teacher->setJoinig_year($joining_year);
    }

    if (empty($_REQUEST["dept"])) {
        $error_dept = "  Invalid dept";
        $flag = false;
    } else {
        $dept = $_REQUEST["dept"];
        $teacher->setDept($dept);
    }

    if (empty($_REQUEST["designation"])) {
        $error_designation = "  Invalid designation";
        $flag = false;
    } else {
        $designation = $_REQUEST["designation"];
        $teacher->setDesignation($designation);
    }

    if (empty($_REQUEST["working_experience"])) {
        $error_working_experience = "  Invalid working_experience";
        $flag = false;
    } else {
        $working_experience = $_REQUEST["working_experience"];
        $teacher->setWorking_Experience($working_experience);
    }

    if (empty($_REQUEST["salary"])) {
        $error_salary = "  Invalid salary";
        $flag = false;
    } else {
        $salary = $_REQUEST["salary"];
        $teacher->setSalary($salary);
    }

    if (empty($_REQUEST["password"])) {
        $error_password = "  Invalid password";
        $flag = false;
    } else {
        $password = $_REQUEST["password"];
        $_SESSION["password"] = $password;
        $teacher->setPassword($password);
    }

    $target_dir = "files/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $file_status = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        $file_status = "Sorry, there was an error uploading your file.";
    }

    if ($flag) {
        $t_repo = new Teacher_repo();
        $t_repo->Insert($teacher);
    } else {
        $db_error = "Fill all the fileds!";
    }
}
