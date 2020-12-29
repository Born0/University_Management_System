<?php
//include('DataAccess.php');


class Grade_repo
{
    private $db;
    function __construct()
    {

        $this->db = new DataAccess();
    }

    function Insert(Grade $grd)
    {
        $sql = " UPDATE `grade` SET`mid`='" . $grd->getMid() . "',`m_total`='" . $grd->getMTotal()  . "',
                                    `final`='" . $grd->getFinal()  . "',`f_total`='" . $grd->getFTotal()  . "' WHERE  `id`='" . $grd->getId() . "' ";
        $result = $this->db->executeQuery($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
