<?php
include('DataAccess.php');

class Credential
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function Get(Login  $entity)
    {

        $sql2 = "SELECT * FROM login_type WHERE password= '" . $entity->getPassword() . "' AND  email='" . $entity->getUsername() . "' OR id = '" . $entity->getUsername() . "' ";
        $result = $this->db->ReaderQuery($sql2);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $entity->setId($row["id"]);
                $entity->setEmail($row["email"]);
                $entity->setType($row["type"]);
                return $entity;
            }
        } else {
            echo "No such user found!";
        }
    }
}
