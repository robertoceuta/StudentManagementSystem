<?php
/*//Get an array of your include paths
$include_parts = explode(PATH_SEPARATOR,get_include_path());
//Extend the paths
$include_parts[] = dirname(dirname(BASE_PATH)); //this is ../../
//recompile the paths and set them
set_include_path(implode(PATH_SEPARATOR,$include_parts));*/
//require_once "resources/controllers/connectdb.php";
require_once ('connectdb.php');
class User {
    private $pk=0;
    private $teacherK=0;
    private $userPass=0;
    private $isAdmin=0;
    private $parentK=0;
    private $userName=0;
    private $userMail=0;
    private $userDni =0;

    /*function __construct($pk, $teacherK, $userPass, $isAdmin, $parentK, $userName, $userMail, $userDni){
        $this->pk=$pk;
        $this->teacherK=$teacherK;
        $this->userPass=$userPass;
        $this->isAdmin=$isAdmin;
        $this->parentK=$parentK;
        $this->userName=$userName;
        $this->userMail=$userMail;
        $this->userDni=$userDni;

    }*/


    function selectUser($bd,$query){
        $bd->querySelect($query);
    }

    function queryInsertTeacherUser($pk,$user_pass, $email, $dni){
        return "insert into user (teacher_key, user_pass, email, dni) values ('$pk','$user_pass','$email','$dni')";
    }

    function queryInsertParentUser($pk,$user_pass, $email, $dni){
        return "insert into user (parent_key, user_pass, email, dni) values ('$pk','$user_pass','$email','$dni')";
    }

    function queryInsertPKParent($pk){
        return "insert into user (parent_key) value ('$pk')";
    }

    function queryInsertPKTeacher($pk){
        return "insert into user (teacher_key) value ('$pk')";
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
    public function getTeacherK(): int
    {
        return $this->teacherK;
    }

    /**
     * @param int $teacherK
     */
    public function setTeacherK(int $teacherK): void
    {
        $this->teacherK = $teacherK;
    }

    /**
     * @return int
     */
    public function getUserPass(): int
    {
        return $this->userPass;
    }

    /**
     * @param int $userPass
     */
    public function setUserPass(int $userPass): void
    {
        $this->userPass = $userPass;
    }

    /**
     * @return int
     */
    public function getIsAdmin(): int
    {
        return $this->isAdmin;
    }

    /**
     * @param int $isAdmin
     */
    public function setIsAdmin(int $isAdmin): void
    {
        $this->isAdmin = $isAdmin;
    }

    /**
     * @return int
     */
    public function getParentK(): int
    {
        return $this->parentK;
    }

    /**
     * @param int $parentK
     */
    public function setParentK(int $parentK): void
    {
        $this->parentK = $parentK;
    }

    /**
     * @return int
     */
    public function getUserName(): int
    {
        return $this->userName;
    }

    /**
     * @param int $userName
     */
    public function setUserName(int $userName): void
    {
        $this->userName = $userName;
    }


}