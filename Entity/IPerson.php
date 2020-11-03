<!DOCTYPE html>
<html lang="en">

<?php

trait IPerson 
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
	
    function setEmail($email)
    {
        $this->email=$email;
    }
    function getEmail()
    {
        return $this->email;
    }
	function setId($id)
    {
        $this->id=$id;
    }
    function getId()
    {
        return $this->id;
    }
	function setPassword($password)
    {
        $this->password=$password;
    }
    function getPassword()
    {
        return $this->password;
    }
	function setDob($dob)
    {
        $this->dob=$dob;
    }
    function getDob()
    {
        return $this->dob;
    }
	function setGender($gender)
    {
        $this->gender=$gender;
    }
    function getGender()
    {
        return $this->gender;
    }
	
	function setContact($contact)
    {
        $this->contact=$contact;
    }
    function getContact()
    {
        return $this->contact;
    }
	function setAddress($address)
    {
        $this->address=$address;
    }
    function getAddress()
    {
        return $this->address;
    }
	function setReligion($religion)
    {
        $this->religion=$religion;
    }
    function getReligion()
    {
        return $this->religion;
    }
	function setBlood($blood)
    {
        $this->blood=$blood;
    }
    function getBlood()
    {
        return $this->blood;
    }

}


?>
</html>
