<?php

class Parents{
    private $pk=0;
    private $name=0;
    private $lastname1=0;
    private $lastname2=0;
    private $telephone=0;
    private $email=0;

    /*function __construct($pk, $name, $last1, $last2, $phone, $mail){
        $this->pk=$pk;
        $this->name=$name;
        $this->lastname1=$last1;
        $this->lastname2=$last2;
        $this->telephone=$phone;
        $this->email=$mail;

    }*/

    function queryInsertParent ($name, $lastname, $telephone){
        return "insert into parent (name, lastname1, telephone) values ('$name', '$lastname','$telephone')";
    }

    function selectLastParent (){
        return "select primary_key from parent order by primary_key desc limit 1";
    }




    /**
     * @return int
     */
    public function getPk(): int
    {
        return $this->pk;
    }

    /**
     * @param int $pk
     */
    public function setPk(int $pk): void
    {
        $this->pk = $pk;
    }

    /**
     * @return int
     */
    public function getName(): int
    {
        return $this->name;
    }

    /**
     * @param int $name
     */
    public function setName(int $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getLastname1(): int
    {
        return $this->lastname1;
    }

    /**
     * @param int $lastname1
     */
    public function setLastname1(int $lastname1): void
    {
        $this->lastname1 = $lastname1;
    }

    /**
     * @return int
     */
    public function getLastname2(): int
    {
        return $this->lastname2;
    }

    /**
     * @param int $lastname2
     */
    public function setLastname2(int $lastname2): void
    {
        $this->lastname2 = $lastname2;
    }

    /**
     * @return int
     */
    public function getTelephone(): int
    {
        return $this->telephone;
    }

    /**
     * @param int $telephone
     */
    public function setTelephone(int $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int
     */
    public function getEmail(): int
    {
        return $this->email;
    }

    /**
     * @param int $email
     */
    public function setEmail(int $email): void
    {
        $this->email = $email;
    }


}
