<?php
require_once "./resources/controllers/connectdb.php";
class Student {
    private $pk=0;
    private $registration=0;
    private $name=0;
    private $lastname1=0;
    private $lastname2=0;
    private $classroomK=0;

    function __construct($pk=0, $resg=0, $name=0, $last1=0, $last2=0, $classroomK=0){
        $this->pk=$pk;
        $this->registration=$resg;
        $this->name=$name;
        $this->lastname1=$last1;
        $this->lastname2=$last2;
        $this->classroomK=$classroomK;
    }
    function select($bd,$teacherKey){
        $bd->querySelect("select * from student where primary_key = '$teacherKey'");
    }




}