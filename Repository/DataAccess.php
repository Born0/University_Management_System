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
        $result = $this->conn->query($query);
        if ($result > 0) {
            return $result;
        } else {
            //return null;
        }
    }

    function ReaderQuery($query)
    {
        $result = $this->conn->query($query);
        if ($result != null) {
            return $result;
        } else {
            //return null;
        }
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
