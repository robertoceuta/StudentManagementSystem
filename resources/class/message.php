<?php
require_once "./resources/controllers/connectdb.php";
class Message {
    private $pk=0;
    private $teacherK=0;
    private $matter=0;
    private $body=0;
    private $date=0;

    function __construct($pk, $teach, $matter, $body, $date){
        $this->pk=$pk;
        $this->teacherK=$teach;
        $this->matter=$matter;
        $this->body=$body;
        $this->date=$date;
    }
}