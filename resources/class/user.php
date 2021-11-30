<?php
require_once "./resources/controllers/connectdb.php";
class User {
    private $pk=0;
    private $teacherK=0;
    private $userPass=0;
    private $isAdmin=0;
    private $parentK=0;
    private $userName=0;

    function __construct($pk, $teacherK, $userPass, $isAdmin, $parentK, $userName){
        $this->pk=$pk;
        $this->teacherK=$teacherK;
        $this->userPass=$userPass;
        $this->isAdmin=$isAdmin;
        $this->parentK=$parentK;
        $this->userName=$userName;
    }
}