<?php

class Login
{
    private $email;
    private $id;
    private $username;
    private $password;
    private $type;

    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }

    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }
    function getUsername()
    {
        return $this->username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }

    function setType($type)
    {
        $this->type = $type;
    }
    function getType()
    {
        return $this->type;
    }
}
