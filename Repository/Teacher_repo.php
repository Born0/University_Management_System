<?php

include('DataAccess.php');
//include('../Entity/Teacher_Entity.php');
//include('../control/Teacher-Reg_check.php');

class Teacher_repo
{
    //private $teacher;
    private $db;
    function __construct()
    {
        //$this->teacher = new Teacher();
        $this->db = new DataAccess();
    }

    function Insert(Teacher $entity)
    {
        //$this->teacher = $entity;
        //echo "hello from insert";
        //echo $this->teacher->getContact();
        $sql = "INSERT INTO teacher(t_name,email,dob,gender,blood_group,address,contact_number,religion,joining_year,salary,department,designation,password)VALUES
        ('" . $entity->getName() . "','" . $entity->getEmail() . "','" . $entity->getDob() . "','" . $entity->getGender() . "',
        '" . $entity->getBlood() . "','" . $entity->getAddress() . "','" . $entity->getContact() . "',
        '" . $entity->getReligion() . "','" . $entity->getJoinig_year() . "','" . $entity->getSalary() . "',
        '" . $entity->getDept() . "','" . $entity->getDesignation() . "','" . $entity->getPassword() . "') ";

        $result = $this->db->executeQuery($sql);
        if ($result != null) {
            $id = $this->Get($entity)->getId();
            //return $id;
            echo "your id is:" . $id;
        } else {
            //return null;
        }
    }

    function GetAll()
    {
    }
    function Get(Teacher $entity)
    {

        $sql2 = "SELECT * FROM teacher WHERE email='" . $entity->getEmail() . "' OR t_id = '" . $entity->getId() . "'";
        $result = $this->db->executeQuery($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $entity->setId($row["t_id"]);
                $entity->setName($row["t_name"]);
                $entity->setEmail($row["email"]);
                $entity->setDob($row["dob"]);
                $entity->setGender($row["gender"]);
                $entity->getBlood($row["blood_group"]);
                $entity->setAddress($row["address"]);
                $entity->setContact($row["contact_number"]);
                $entity->setReligion($row["religion"]);
                $entity->setJoinig_year($row["joining_year"]);
                $entity->setSalary($row["salary"]);
                $entity->setDept($row["department"]);
                $entity->setDesignation($row["designation"]);
                $entity->setPassword($row["password"]);
            }
            return $entity;
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
