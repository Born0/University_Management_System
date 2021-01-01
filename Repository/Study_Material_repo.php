<?php
//include('DataAccess.php');
class Material_Repo
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function Insert(Study_Material  $entity)
    {
        $sql = " INSERT INTO `study_material`( `t_id`, `section_id`, `file_path`) VALUES ( '" . $entity->getT_id() . "','" . $entity->getSection_id() . "',
                                            '" . $entity->getFile_path() . "' ) ";
        $result = $this->db->executeQuery($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function GetAll(Study_Material  $entity)
    {
        $allMaterials = array();
        $sql = "SELECT * FROM study_material WHERE section_id= '" . $entity->getSection_id() . "' AND  t_id='" . $entity->getT_id() . "'  ";
        $result = $this->db->ReaderQuery($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // $entity->setId($row["id"]);
                // $entity->setT_id($row["t_id"]);
                // $entity->setSection_id($row["section_id"]);
                array_push($allMaterials, $row["file_path"]);
            }
            return $allMaterials;
        } else {
            return null;
        }
    }

    function Delete($name)
    {
        $sql = " DELETE FROM `study_material` WHERE 	file_path='" . $name . "' ";
        $result = $this->db->executeQuery($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
