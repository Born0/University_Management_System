<?php
session_start(); 
if(isset($_SESSION['name'])||isset($_SESSION['email']))
{
    header("location: ../Result.php");
}
            $name=$email=$dob=$gender=$blood=$contact=$address=$religion=$joining_year=$dept=$designation=$working_experience=$salary=$password="";
            $error_name=$error_email=$error_dob=$error_gender=$error_blood=$error_contact=$error_address=$error_religion=$error_joining_year=$error_dept="";
            $error_designation=$error_working_experience=$error_salary=$error_password="";
            $file_status="";
            
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {

                if(empty($_REQUEST["name"]))
                {
                    $error_name="  Invalid name";
                    $flag=false;
                }
                else
                {      

                    $name=$_REQUEST["name"]; 
                    $_SESSION["name"] = $name;
                }

                if(empty($_REQUEST["email"]))
                {
                    $error_email="  Invalid email";
                    $flag=false;
                }
                else
                {
                    $email=$_REQUEST["email"];   
                    $_SESSION["email"] = $email;                   
                }

                if(empty($_REQUEST["birthday"]))
                {
                    $error_dob="  Invalid dob"; 
                }
                else
                {
                    $dob=$_REQUEST["birthday"];                   
                }

                if(empty($_REQUEST["gender"]))
                {
                    $error_gender="  Invalid gender";
                }
                else
                {
                    $gender=$_REQUEST["gender"];                     
                }
                
                if(empty($_REQUEST["blood"]))
                {
                    $error_blood="  Invalid blod group";
                }
                else
                {
                    $blood=$_REQUEST["blood"];      
                }

                if(empty($_REQUEST["contact"]))
                {
                    $error_contact="  Invalid contact";
                }
                else
                {
                    $contact=$_REQUEST["contact"];                   
                }

                if(empty($_REQUEST["address"]))
                {
                    $error_address="  Invalid address";
                }
                else
                {
                    $address=$_REQUEST["address"];                    
                }

                if(empty($_REQUEST["religion"]))
                {
                    $error_religion="  Invalid religion";
                }
                else
                {
                    $religion=$_REQUEST["religion"];                    
                }

                if(empty($_REQUEST["joining_year"]))
                {
                    $error_joining_year="  Invalid joining_year";
                }
                else
                {
                    $joining_year=$_REQUEST["joining_year"];                     
                }

                if(empty($_REQUEST["dept"]))
                {
                    $error_dept="  Invalid dept";
                }
                else
                {
                    $dept=$_REQUEST["dept"];                     
                }

                if(empty($_REQUEST["designation"]))
                {
                    $error_designation="  Invalid designation";
                }
                else
                {
                    $designation=$_REQUEST["designation"];                     
                }

                if(empty($_REQUEST["working_experience"]))
                {
                    $error_working_experience="  Invalid working_experience";
                }
                else
                {
                    $working_experience=$_REQUEST["working_experience"];                    
                }

                if(empty($_REQUEST["salary"]))
                {
                    $error_salary="  Invalid salary";
                }
                else
                {
                    $salary=$_REQUEST["salary"];   
                }

                if(empty($_REQUEST["password"]))
                {
                    $error_password="  Invalid password";
                }
                else
                {
                    $password=$_REQUEST["password"];  
                    $_SESSION["password"] = $password;                 
                }
                
                $target_dir = "files/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
                {
                    $file_status= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } 
                else 
                {
                    $file_status="Sorry, there was an error uploading your file.";
                }
            
            }
            ?>