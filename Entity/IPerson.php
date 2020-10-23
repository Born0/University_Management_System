<!DOCTYPE html>
<html lang="en">

<?php

class IPerson 
{
    private $name;
    private $email;
    private $id;
    private $password;
    private $dob;
    private $gender;
    private $contact;
    private $address;
    private $religion;
    private $blood;
    
    function setName($name)
    {
        $this->name=$name;
    }
    function getName()
    {
        return $this->name;
    }


}



?>
