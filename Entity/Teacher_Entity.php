<!DOCTYPE html>
<html lang="en">

<?php

class Teacher implements IPerson
{
    $joinig_year;
    $salary;
    $dept_id;
    $designation;

	function setJoinig_year($joinig_year)
    {
        $this->joinig_year=$joinig_year;
    }
    function getJoinig_year()
    {
        return $this->joinig_year;
    }

    function setSalary($salary)
    {
        $this->salary=$salary;
    }
    function getSalary()
    {
        return $this->salary;
    }

    function setDept_id($dept_id)
    {
        $this->dept_id=$dept_id;
    }
    function getDept_id()
    {
        return $this->dept_id=$dept_id;
    }
    
    function setDesignation($designation)

    {
        $this->designation=$designation;
    }
    function getDesignation()
    {
        return $this->designation;
    }
}


?>
</html>
