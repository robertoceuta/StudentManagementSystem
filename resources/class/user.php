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