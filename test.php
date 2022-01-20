<?php
require_once "resources/class/teacher.php";
require_once "resources/controllers/database.php";

//require_once "./resources/class/student.php";
/*$teacher1= new Teacher(1,"Roberto");
var_dump($teacher1->select($bd, "select * from student"));
var_dump($teacher1->getPk(), $teacher1->getName());
//var_dump($teacher1->selectStudents($bd));*/

//var_dump($teacher1->select($bd,'select * from teacher '));
$bdConnect = new Database();
$bd = $bdConnect->connect();
$teacherAux = new Teacher();
$queryTest = "select primary_key from teacher order by primary_key desc limit 1";
var_dump($bdConnect->queryAssoc($bd,$queryTest)['primary_key'][0]);
print($bdConnect->queryAssoc($bd,$teacherAux->selectLastTeacher())['primary_key']);
$ahora = new DateTime(date('d-m-Y'));
$tomorrow = $ahora ->add((new DateInterval('P2D')));
$Date2 = $tomorrow->format('d-m-Y');
$mañana = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
var_dump($Date2);
var_dump(inttotime($mañana));

?>
