<?php
require_once "./resources/controllers/connectdb.php";

class Teacher {
    private $pk=0;
    private $name=0;
    private $lastname1=0;
    private $lastname2=0;
    private $adress=0;
    private $ss=0;
    private $birthdate=0;
    private $titulation=0;
    private $telephone=0;
    private $email=0;
    private $classroomK=0;

    /*function __construct($pk, $name, $last1, $last2, $adress, $ss, $birthday, $titu, $phone, $mail, $classroomK){
        $this->pk=$pk;
        $this->name=$name;
        $this->lastname1=$last1;
        $this->lastname2=$last2;
        $this->adress=$adress;
        $this->ss=$ss;
        $this->birthdate=$birthday;
        $this->titulation=$titu;
        $this->telephone=$phone;
        $this->email=$mail;
        $this->classroomK=$classroomK;
    }*/

    function select($bd,$query){
        $bd->querySelect($query);
    }

    function selectStudents($bd){
        foreach ($bd->querySelect("select * from student where classroom_key = 1") as $item){
            $item;
        }

    }
}
?>