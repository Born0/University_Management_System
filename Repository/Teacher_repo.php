<?php

//include('DataAccess.php');
//include('../Entity/Teacher_Entity.php');
//include('../control/Teacher-Reg_check.php');

class Teacher_repo
{
    private $teacher;
    function __construct()
    {
        $this->teacher = new Teacher();
    }

    function insert(Teacher $entity)
    {
        $this->teacher = $entity;
        echo "hello from insert";

        //$query=
    }
}
