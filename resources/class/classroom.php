<?php
require_once "./resources/controllers/connectdb.php";
class Classroom{
    private $pk=0;
    private $number=0;
    private $course=0;
    private $letter=0;

    function __construct($pk, $number, $course, $letter){
        $this->pk=$pk;
        $this->number=$number;
        $this->course=$course;
        $this->letter=$letter;
    }

}
