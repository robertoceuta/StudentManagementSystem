<?php
require_once "./resources/controllers/connectdb.php";

class Parents{
    private $pk=0;
    private $name=0;
    private $lastname1=0;
    private $lastname2=0;
    private $telephone=0;
    private $email=0;

    function __construct($pk, $name, $last1, $last2, $phone, $mail){
        $this->pk=$pk;
        $this->name=$name;
        $this->lastname1=$last1;
        $this->lastname2=$last2;
        $this->telephone=$phone;
        $this->email=$mail;

    }
}
