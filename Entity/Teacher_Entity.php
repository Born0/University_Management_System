<?php
include('Person.php');
class Teacher extends Person
{
    //use Person;
    private $joinig_year;
    private $salary;
    private $dept;
    private $designation;
    private $working_experience;


    function setJoinig_year($joinig_year)
    {
        $this->joinig_year = $joinig_year;
    }
    function getJoinig_year()
    {
        return $this->joinig_year;
    }

    function setSalary($salary)
    {
        $this->salary = $salary;
    }
    function getSalary()
    {
        return $this->salary;
    }

    function setDept($dept)
    {
        $this->dept = $dept;
    }
    function getDept_id()
    {
        return $this->dept;
    }

    function setDesignation($designation)
    {
        $this->designation = $designation;
    }
    function getDesignation()
    {
        return $this->designation;
    }

    function setWorking_Experience($work)
    {
        $this->working_experience = $work;
    }
    function getWorking_Experience()
    {
        return $this->working_experience;
    }
}
