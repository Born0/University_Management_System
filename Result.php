<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Log in Successful !</title>
    <h1>login Success</h1>
 
</head>

<body>
    <?php
        $name=$_REQUEST["name"];
        $email=$_REQUEST["email"];
        $dob=$_REQUEST["birthday"];
        $gender=$_REQUEST["gender"];
        $blood=$_REQUEST["blood"];
        $contact=$_REQUEST["contact"];
        $address=$_REQUEST["address"];
        $religion=$_REQUEST["religion"];
        $joining_year=$_REQUEST["joining_year"];
        $dept=$_REQUEST["dept"];
        $designation=$_REQUEST["designation"];
        $working_experience=$_REQUEST["working_experience"];
        $salary=$_REQUEST["salary"];
        $password=$_REQUEST["password"];

        echo isEmpty($name);
        echo isEmpty($email); 
        echo isEmpty($dob);
        echo isEmpty($gender);
        echo isEmpty($blood);
        echo isEmpty($contact);
        echo isEmpty($address);
        echo isEmpty($religion);
        echo isEmpty($joining_year);
        echo isEmpty($dept);
        echo isEmpty($designation);
        echo isEmpty($working_experience);
        echo isEmpty($salary);
        echo isEmpty($password);

        
        function isEmpty($attriubte)
        {
            if(empty($attriubte)) 
            {
                echo "<br>";
                return "please fill the box";   
            }
            else 
            {
                echo "<br>";
                return $attriubte;
            }    
            
        }

        // echo $dob;
        // echo "<br>";
        // echo $gender;
        // echo "<br>";
        // echo $blood;
        // echo "<br>";
        // echo $contact;
        // echo "<br>";
        // echo $address;
        // echo "<br>";
        // echo $religion;
        // echo "<br>";
        // echo $joining_year;
        // echo "<br>";
        // echo $dept;
        // echo "<br>";
        // echo $designation;
        // echo "<br>";
        // echo $working_experience;
        // echo "<br>";
        // echo $salary;
        // echo "<br>";
        // echo $password;
        // echo "<br>";

    ?>






</body>
</html>