<?php
require_once "./resources/controllers/connectdb.php";
class Photo{
    private $pk=0;
    private $teacherK=0;
    private $url=0;
    private $date=0;

    function __construct($pk, $teacherK, $url, $date){
        $this->pk=$pk;
        $this->teacherK=$teacherK;
        $this->url=$url;
        $this->date=$date;
    }
}