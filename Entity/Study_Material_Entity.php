<?php
class Study_Material
{
    private $id;
    private $t_id;
    private $secton_id;
    private $file_path;

    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setT_id($t_id)
    {
        $this->t_id = $t_id;
    }
    function getT_id()
    {
        return $this->t_id;
    }

    function setSection_id($secton_id)
    {
        $this->secton_id = $secton_id;
    }
    function getSection_id()
    {
        return $this->secton_id;
    }

    function setFile_path($file_path)
    {
        $this->file_path = $file_path;
    }
    function getFile_path()
    {
        return $this->file_path;
    }
}
