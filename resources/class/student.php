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

    /**
     * @return int|mixed
     */
    public function getPk(): mixed
    {
        return $this->pk;
    }

    /**
     * @param int|mixed $pk
     */
    public function setPk(mixed $pk): void
    {
        $this->pk = $pk;
    }

    /**
     * @return int|mixed
     */
    public function getRegistration(): mixed
    {
        return $this->registration;
    }

    /**
     * @param int|mixed $registration
     */
    public function setRegistration(mixed $registration): void
    {
        $this->registration = $registration;
    }

    /**
     * @return int|mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @param int|mixed $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int|mixed
     */
    public function getLastname1(): mixed
    {
        return $this->lastname1;
    }

    /**
     * @param int|mixed $lastname1
     */
    public function setLastname1(mixed $lastname1): void
    {
        $this->lastname1 = $lastname1;
    }

    /**
     * @return int|mixed
     */
    public function getLastname2(): mixed
    {
        return $this->lastname2;
    }

    /**
     * @param int|mixed $lastname2
     */
    public function setLastname2(mixed $lastname2): void
    {
        $this->lastname2 = $lastname2;
    }

    /**
     * @return int|mixed
     */
    public function getClassroomK(): mixed
    {
        return $this->classroomK;
    }

    /**
     * @param int|mixed $classroomK
     */
    public function setClassroomK(mixed $classroomK): void
    {
        $this->classroomK = $classroomK;
    }




}