<?php
include("Teacher_Entity.php");

class Department
{
   
    private $id;
    private $name;
	private $teachers=array(); 
	private static $numberOfTeachers=0;


    function setId($id)
    {
        $this->id = $id;
    }
    function getId()
    {
        return $this->id;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
	
	
	function addTeacher($teacher)
    {
		
		$tempArray=array($teacher);
		$this->teachers=array_merge($this->teachers,$tempArray);
		echo $this->teachers[self::$numberOfTeachers]->getName()."<br>";
		self::$numberOfTeachers++;
        
    }
	
	
}
?>



<?php 
//test

$rahim=new Teacher();
$fahim=new Teacher();
$kaka=new Teacher();
$rahim->setName("rahim");
$fahim->setName("fahim");
$kaka->setName("kaka");


$cse=new Department();
$cse->addTeacher($rahim);
$cse->addTeacher($fahim);
$cse->addTeacher($kaka);

?> 