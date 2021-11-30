<?php
require_once "./resources/controllers/connectdb.php";
class Parent_Student {
    private $pk=0;
    private $parentK=0;
    private $studentK=0;

    function __construct($pk, $parentK, $studentK){
        $this->pk=$pk;
        $this->parentK=$parentK;
        $this->studentK=$studentK;
    }
}