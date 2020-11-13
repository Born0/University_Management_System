<?php
include("Person.php");
class Admin extends Person
{
   
    private $joinigYear;
    private $salary;


    function setJoinigYear($joinigYear)
    {
        $this->joinigYear = $joinigYear;
    }
    function getJoinigYear()
    {
        return $this->joinigYear;
    }

    function setSalary($salary)
    {
        $this->salary = $salary;
    }
    function getSalary()
    {
        return $this->salary;
    }

}
?>