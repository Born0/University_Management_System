<?php
class Grade
{
    private $id;
    private $mid;
    private $mTotal;
    private $final;
    private $fTotal;



    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setMTotal($mTotal)
    {
        $this->mTotal = $mTotal;
    }
    function getMTotal()
    {
        return $this->mTotal;
    }

    function setMid($mid)
    {
        $this->mid = $mid;
    }
    function getMid()
    {
        return $this->mid;
    }

    function setFinal($final)
    {
        $this->final = $final;
    }
    function getFinal()
    {
        return $this->final;
    }

    function setFTotal($fTotal)
    {
        $this->fTotal = $fTotal;
    }
    function getFTotal()
    {
        return $this->fTotal;
    }

    ///////////////////////////////


}
