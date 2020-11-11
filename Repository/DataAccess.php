<?php
class DataAccess
{
   public $conn;

   function __construct() 
   {
        $this->conn = new mysqli("localhost", "root", "", "university_management_system");
   }

   function executeQuery($query)
   {
        $res = $this->conn->query($query);
        if($res>0)
        {
            return true;
        }
        else
        {
            return false;
        }
   }

   function __destruct()
   {
      $this->conn->close();
   }
}
