<?php
include('DataAccess.php');


class Teacher_repo
{
    private $db;
    function __construct()
    {

        $this->db = new DataAccess();
    }

    function Insert(Teacher $entity)
    {

        $sql = "INSERT INTO teacher(t_name,email,dob,gender,blood_group,address,contact_number,religion,joining_year,salary,department,
        designation,working_experience,password,profile_image)VALUES('" . $entity->getName() . "','" . $entity->getEmail() . "','" . $entity->getDob() . "',
        '" . $entity->getGender() . "','" . $entity->getBlood() . "','" . $entity->getAddress() . "','" . $entity->getContact() . "',
        '" . $entity->getReligion() . "','" . $entity->getJoinig_year() . "','" . $entity->getSalary() . "','" . $entity->getDept() . "',
        '" . $entity->getDesignation() . "','" . $entity->getWorking_Experience() . "'  ,  '" . $entity->getPassword() . "','" . $entity->getImage() . "')";

        $result = $this->db->executeQuery($sql);
        if ($result > 0) {
            $id = $this->Get($entity)->getId();
            //return $id;
            echo " your id is:" . $id;
        } else {
            //echo "INSERT ERROR";
            return null;
        }
        $type = "teacher";
        $sql2 = "INSERT INTO login_type (id,email,password,type)VALUES(?,?,?,?) ";
        $stm = $this->db->conn->prepare($sql2);

        $stm->bind_param("isss",  $id, $email, $password, $type);
        $email = $entity->getEmail();
        $password = $entity->getPassword();
        $result2 = $stm->execute();
        if ($result2) {
            echo  "<br>you are ready to login ";
            $stm->close();
        } else {
            echo "INSERT ERROR from login_type";
            //return null;
        }
    }

    function GetAll()
    {
    }
    function Get(Teacher $entity)
    {

        $sql2 = "SELECT * FROM teacher WHERE email='" . $entity->getEmail() . "' OR t_id = '" . $entity->getId() . "'";
        $result = $this->db->ReaderQuery($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $entity->setId($row["t_id"]);
                $entity->setName($row["t_name"]);
                $entity->setEmail($row["email"]);
                $entity->setDob($row["dob"]);
                $entity->setGender($row["gender"]);
                $entity->setBlood($row["blood_group"]);
                $entity->setAddress($row["address"]);
                $entity->setContact($row["contact_number"]);
                $entity->setReligion($row["religion"]);
                $entity->setJoinig_year($row["joining_year"]);
                $entity->setSalary($row["salary"]);
                $entity->setDept($row["department"]);
                $entity->setDesignation($row["designation"]);
                $entity->setWorking_Experience($row["working_experience"]);
                $entity->setPassword($row["password"]);
                $entity->setImage($row["profile_image"]);
                return $entity;
            }
        } else {
            echo "0 result ";
        }
    }
    function Update(Teacher $entity)
    {
        $sql3 = "UPDATE teacher SET  t_name='" . $entity->getName() . "' ,blood_group='" . $entity->getBlood() . "',address='" . $entity->getAddress() . "',
        contact_number='" . $entity->getContact() . "',religion='" . $entity->getReligion() . "',department='" . $entity->getDept() . "',
        designation='" . $entity->getDesignation() . "',working_experience='" . $entity->getWorking_Experience() . "',
        password='" . $entity->getPassword() . "' WHERE  t_id = '" . $entity->getId() . "'";

        $result3 = $this->db->executeQuery($sql3);
        if ($result3) {
            echo "Profile Updated";
            return true;
        } else {
            echo  "Profile Update ERROR !!";
        }
    }
    function Delete(Teacher $entity)
    {
    }
}
