<?php
//include('../Entity/Teacher_Entity.php');
//include('../Repository/Teacher_repo.php');

$teacher = new Teacher();
$error_name = $error_email = $error_dob = $error_gender = $error_blood = $error_contact = $error_address = $error_religion = $error_joining_year = $error_dept = "";
$error_designation = $error_working_experience = $error_salary = $error_password = $error_image = "";
$file_status = "";
$flag = true;
$mainId = "";
$db_error = "";

if (isset($_POST['refresh'])) {
    header("Refresh:0; url=Teacher_Reg.php");
}

if (isset($_POST['submit'])) {

    if (empty($_REQUEST["name"])) {
        $error_name = "  Invalid name";
    } else {
        $name = $_REQUEST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $error_name = "Only letters and white space allowed";
            $flag = false;
        } else {
            $_SESSION["name"] = $name;
            $teacher->setName($name);
        }
    }

    if (empty($_REQUEST["email"])) {
        $error_email = "  Invalid email";
        $flag = false;
    } else {
        $email = $_REQUEST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "Invalid email format";
            $flag = false;
        } else {
            $_SESSION["email"] = $email;
            $teacher->setEmail($email);
        }
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
        if (!preg_match("/^[0-9]*$/", $contact)) {
            $error_contact = "Only number allowed";
            $flag = false;
        } else {
            $teacher->setContact($contact);
        }
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
        if (!preg_match("/^[a-zA-Z-' ]*$/", $religion)) {
            $$error_religion = "Only letters and white space allowed";
            $flag = false;
        } else {
            $teacher->setReligion($religion);
        }
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
        if (!preg_match("/^[a-zA-Z-' ]*$/", $designation)) {
            $error_designation = "Only letters and white space allowed";
            $flag = false;
        } else {
            $teacher->setDesignation($designation);
        }
    }
    ///////////
    if ($_REQUEST["working_experience"] == 0) {
        $_REQUEST["working_experience"] = "NoExperience";
    }
    /////////////
    if (empty($_REQUEST["working_experience"])) {
        $error_working_experience = "  Invalid working_experience";
        $flag = false;
    } else {
        $working_experience = $_REQUEST["working_experience"];
        if (!ctype_alnum($working_experience)) {
            $error_working_experience = "Only Number allowed in work exp";
            $flag = false;
        } else {
            $teacher->setWorking_Experience($working_experience);
        }
    }

    /////////////
    if ($_REQUEST["salary"] == 0) {
        $_REQUEST["salary"] = "NoSalary";
    }
    //////////
    if (empty($_REQUEST["salary"])) {
        $error_salary = "  Invalid salary";
        $flag = false;
    } else {
        $salary = $_REQUEST["salary"];
        if (!ctype_alnum($salary)) {
            $error_salary = "Only Number allowed in Salary";
            $flag = false;
        } else {
            $teacher->setSalary($salary);
        }
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
        //$file_status = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";

        ///////////////////
        // if (empty($target_file)) {
        //     $error_image = "upload a image";
        //     $flag = false;
        // } else {
        //     //$image = $target_file;
        //     $_SESSION["fileToUpload"] = $target_file;
        //     $teacher->setImage($target_file);
        // }
        //////////////////
        $teacher->setImage($target_file);
    } else {
        $file_status = "Sorry, there was an error uploading your file.";
    }

    if ($flag) {
        $t_repo = new Teacher_repo();
        $mainId = $t_repo->Insert($teacher);
        if ($mainId == null) {
            echo "User already exists";
        } else {
            echo " your id is:" . $mainId;
            echo "you are ready to login";
            // echo "<script type=\"text/javascript\">alart( 'login success'); </script>";
        }
    } else {
        $db_error = " Missed Choosing between options";
    }
}
