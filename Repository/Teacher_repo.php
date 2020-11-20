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

        $sql = "INSERT INTO teacher(t_name,email,dob,gender,blood_group,address,contact_number,religion,joining_year,salary,department,designation,password,profile_image)VALUES
        ('" . $entity->getName() . "','" . $entity->getEmail() . "','" . $entity->getDob() . "','" . $entity->getGender() . "',
        '" . $entity->getBlood() . "','" . $entity->getAddress() . "','" . $entity->getContact() . "',
        '" . $entity->getReligion() . "','" . $entity->getJoinig_year() . "','" . $entity->getSalary() . "',
        '" . $entity->getDept() . "','" . $entity->getDesignation() . "','" . $entity->getPassword() . "','" . $entity->getImage() . "')";

        $result = $this->db->executeQuery($sql);
        if ($result > 0) {
            $id = $this->Get($entity)->getId();
            //return $id;
            echo "your id is:" . $id;
        } else {
            echo "INSERT ERROR";
            //return null;
        }
        $type = "teacher";
        $sql2 = "INSERT INTO login_type (id,email,password,type)VALUES('" . $id . "','" . $entity->getEmail() . "', '" . $entity->getPassword() . "','" . $type . "' ) ";
        $result2 = $this->db->executeQuery($sql2);
        if ($result2 > 0) {
            echo "your login_type id is ready";
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
    }
    function Delete(Teacher $entity)
    {
    }
}
