<?php
require_once "./resources/class/teacher.php";
//require_once "./resources/class/student.php";
$teacher1= new Teacher();
var_dump($teacher1->selectStudents($bd));
//var_dump($teacher1->select($bd,'select * from teacher '));

?>
