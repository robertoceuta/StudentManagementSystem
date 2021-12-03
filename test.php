<?php
require_once "resources/class/teacher.php";

//require_once "./resources/class/student.php";
$teacher1= new Teacher(1,"Roberto");
var_dump($teacher1->select($bd, "select * from student"));
var_dump($teacher1->getPk(), $teacher1->getName());
//var_dump($teacher1->selectStudents($bd));

//var_dump($teacher1->select($bd,'select * from teacher '));

?>
