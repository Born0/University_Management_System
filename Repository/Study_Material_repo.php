<?php
include('DataAccess.php');
class Material
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function GetAll(Study_Material  $entity)
    {
        $allMaterials = new Study_Material(array());
        $sql = "SELECT * FROM study_material WHERE section_id= '" . $entity->getSection_id() . "' AND  t_id='" . $entity->getT_id() . "'  ";
        $result = $this->db->ReaderQuery($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $entity->setId($row["id"]);
                $entity->setT_id($row["t_id"]);
                $entity->setSection_id($row["section_id"]);
                $entity->setFile_path($row["file_path"]);
                array_push($allMaterials, $entity);
            }
            return $allMaterials;
        } else {
            echo "No such user found!";
        }
    }
}
