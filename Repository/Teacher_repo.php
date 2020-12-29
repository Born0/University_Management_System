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
        if ($result) {
            $id = $this->Get($entity)->getId();
            $res = $this->InsertType($entity, $id);
            if ($res) {
                return $id;
            } else {
                return null;
            }
            // echo " your id is:" . $id;
        } else {
            //echo "INSERT ERROR";
            return null;
        }
    }

    function InsertType(Teacher $entity, $id)
    {
        $type = "teacher";
        $sql2 = "INSERT INTO login_type (id,email,password,type)VALUES(?,?,?,?) ";
        $stm = $this->db->conn->prepare($sql2);

        $stm->bind_param("isss",  $id, $email, $password, $type);
        $email = $entity->getEmail();
        $password = $entity->getPassword();
        $result2 = $stm->execute();
        if ($result2) {
            $stm->close();
            return true;
        } else {
            return false;
            //echo "INSERT ERROR from login_type";
            //return null;
        }
    }

    function GetAll()
    {
        $entity = new Teacher();
        $sql2 = "SELECT * FROM teacher ";
        $result = $this->db->ReaderQuery($sql2);
        $allEntity = array();
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
                array_push($allEntity, $entity);
            }
            return $allEntity;
        } else {
            echo "0 result ";
            return null;
        }
    }
    function Get(Teacher $entity)
    {

        $sql2 = "SELECT * FROM teacher WHERE t_id = '" . $entity->getId() . "'  OR email='" . $entity->getEmail() . "' ";
        $result = $this->db->ReaderQuery($sql2);
        $newEntity = new Teacher();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $newEntity->setId($row["t_id"]);
                $newEntity->setName($row["t_name"]);
                $newEntity->setEmail($row["email"]);
                $newEntity->setDob($row["dob"]);
                $newEntity->setGender($row["gender"]);
                $newEntity->setBlood($row["blood_group"]);
                $newEntity->setAddress($row["address"]);
                $newEntity->setContact($row["contact_number"]);
                $newEntity->setReligion($row["religion"]);
                $newEntity->setJoinig_year($row["joining_year"]);
                $newEntity->setSalary($row["salary"]);
                $newEntity->setDept($row["department"]);
                $newEntity->setDesignation($row["designation"]);
                $newEntity->setWorking_Experience($row["working_experience"]);
                $newEntity->setPassword($row["password"]);
                $newEntity->setImage($row["profile_image"]);
                return $newEntity;
            }
        } else {
            echo "0 result ";
            return null;
        }
    }

    function GetBy(Teacher $entity)
    {
        $name = $entity->getName();
        $sql2 = "SELECT * FROM `teacher` WHERE concat(`t_id`, `t_name`, `email`) LIKE '%" . $name . "%' ";
        $result = $this->db->ReaderQuery($sql2);
        $allEntity = new Teacher();
        $allEntity =  array();

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
                array_push($allEntity, $entity->getId());
                //$allEntity[] = $entity;
            }
            // echo $allEntity[0]->getName();
            // echo $allEntity[1]->getName();
            // echo $allEntity[2]->getName();
            return $allEntity;
        } else {
            return null;
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
            return null;
        }
    }
    function Delete(Teacher $entity)
    {
    }
}
