<?php

include("../Entity/Admin.php");
include("../Repository/AdminRepo.php");
$admin=new Admin();
$flag=true;
$name=$mail=$dob=$gender=$bloodtype=$number=$address=$religion=$joinDate=$salary=$password="";
$error_name=$error_email=$error_dob=$error_gender=$error_blood=$error_number=$error_address=$error_religion=$error_joinDate=$error_salary=$error_password="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{



 	
  global $name,$mail,$dob,$gender,$bloodtype,$number,$address,$religion,$joinDate,$salary,$password;
  
  if (empty($_REQUEST["name"])) 
    {
        $error_name = "*Cannot be empty";
    } 
  else {
        $name = $_REQUEST["name"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) 
		{
            $error_name = "*Only letters and white space allowed";
            $flag = false;
        } 
		else 
		{
          
            $admin->setName($name);
        }
    }
	
	

    if (empty($_REQUEST["mail"])) 
	{
        $error_email = "*Cannot be empty";
        $flag = false;
    } else {
        $mail = $_REQUEST["mail"];
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $error_email = "*Invalid format";
            $flag = false;
        } else {
            
            $admin->setEmail($mail);
        }
    }
	
	

    if (empty($_REQUEST["DOB"])) 
	{
        $error_dob = "*Cannot be empty";
        $flag = false;
    } else {
        $dob = $_REQUEST["DOB"];
        $admin->setDob($dob);
    }
	

    if (empty($_REQUEST["gender"])) {
        $error_gender = "*Cannot be empty";
        $flag = false;
    } else {
        $gender = $_REQUEST["gender"];
        $admin->setGender($gender);
    }
	
	

    if (empty($_REQUEST["bloodtype"])) 
	{
        $error_blood = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $bloodtype = $_REQUEST["bloodtype"];
        $admin->setBlood($bloodtype);
    }



    if (empty($_REQUEST["number"])) 
	{
        $error_number = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $number = $_REQUEST["number"];
        if (!preg_match("/^[0-9]*$/", $number)) {
            $error_number = "*Only numbers allowed";
            $flag = false;
        } else {
            $admin->setContact($number);
        }
    }

    if (empty($_REQUEST["address"])) {
        $error_address = "*Cannot be empty";
        $flag = false;
    } else	
	{
        $address = $_REQUEST["address"];
        $admin->setAddress($address);
    }
	
	

    if (empty($_REQUEST["religion"])) {
        $error_religion = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $religion = $_REQUEST["religion"];
        if (!preg_match("/^[a-zA-Z-' ]*$/", $religion)) {
            $$error_religion = "Only letters and white spaces allowed";
            $flag = false;
        } else {
            $admin->setReligion($religion);
        }
    }

    if (empty($_REQUEST["joinDate"])) 
	{
        $error_joinDate = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $joinDate = $_REQUEST["joinDate"];
        $admin->setJoinigYear($joinDate);
    }
	
	

    
    
   
    if (empty($_REQUEST["salary"])) {
        $error_salary = "*Cannot be empty";
        $flag = false;
    } else 
	{
        $salary = $_REQUEST["salary"];
        if (!ctype_alnum($salary)) {
            $error_salary = "*Only Numbers allowed";
            $flag = false;
        } else 
		{
            $admin->setSalary($salary);
        }
    }

    if (empty($_REQUEST["password"])) {
        $error_password = "*Cannot be empty";
        $flag = false;
    } else {
        $password = $_REQUEST["password"];
        $admin->setPassword($password);
    }
   
}
else $flag=false;


$targetDir="files/";
if(isset($_FILES["fileup"]["name"]))
{
	$targetFile=$targetDir . basename($_FILES["fileup"]["name"]);

if (move_uploaded_file($_FILES["fileup"]["tmp_name"], $targetFile)) {
	echo "The file ". basename( $_FILES["fileup"]["name"]). " has been uploaded.";
	$admin->setImage($targetFile);
} else {
	echo "Sorry, there was an error uploading your file.";
}
}

if($flag)
		{
			$_SESSION["mail"]=$mail;
			$repo=new AdminRepo();
			$repo->Insert($admin);
			$admin=$repo->Get($admin);
			$repo->InsertLogin($admin->getId(),$admin->getEmail(),$admin->getPassword(),"admin");
		//	header("Refresh:0;url= AdminProfile.php");
		}


?>