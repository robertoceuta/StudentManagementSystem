<?php

class Teacher {
    //Variables de BBDD
    protected static $bd;

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

    function __construct($pk=0, $name=0, $last1=0, $last2=0, $adress=0, $ss=0, $birthday=0, $titu=0, $phone=0, $mail=0, $classroomK=0){
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
    }

    function selectTeacher($bd,$query){
        $bd->querySelect($query);
    }

    function insertTeacher($bd,$query){
        $bd->queryInsert($query);
    }

    function queryInsertTeacher($name, $lastname, $telephone,$birthday, $titulation, $numSS, $adress){
        return "insert into teacher (name, lastname1, telephone, ss, adress, birthdate, titulation) values ('$name', '$lastname','$telephone','$numSS', '$adress','$birthday','$titulation')";
    }

    function selectLastTeacher (){
        return "select primary_key from teacher order by primary_key desc limit 1";
    }


    function selectStudents($bd){
        foreach ($bd->querySelect("select * from student where classroom_key = $this->pk") as $item){
            var_dump($item);
        }

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
    public function getAdress(): mixed
    {
        return $this->adress;
    }

    /**
     * @param int|mixed $adress
     */
    public function setAdress(mixed $adress): void
    {
        $this->adress = $adress;
    }

    /**
     * @return int|mixed
     */
    public function getSs(): mixed
    {
        return $this->ss;
    }

    /**
     * @param int|mixed $ss
     */
    public function setSs(mixed $ss): void
    {
        $this->ss = $ss;
    }

    /**
     * @return int|mixed
     */
    public function getBirthdate(): mixed
    {
        return $this->birthdate;
    }

    /**
     * @param int|mixed $birthdate
     */
    public function setBirthdate(mixed $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return int|mixed
     */
    public function getTitulation(): mixed
    {
        return $this->titulation;
    }

    /**
     * @param int|mixed $titulation
     */
    public function setTitulation(mixed $titulation): void
    {
        $this->titulation = $titulation;
    }

    /**
     * @return int|mixed
     */
    public function getTelephone(): mixed
    {
        return $this->telephone;
    }

    /**
     * @param int|mixed $telephone
     */
    public function setTelephone(mixed $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int|mixed
     */
    public function getEmail(): mixed
    {
        return $this->email;
    }

    /**
     * @param int|mixed $email
     */
    public function setEmail(mixed $email): void
    {
        $this->email = $email;
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
?>