<?php
require_once "./resources/controllers/connectdb.php";
class Parent_Student {
    private $pk=0;
    private $parentK=0;
    private $studentK=0;

    function __construct($pk, $parentK, $studentK){
        $this->pk=$pk;
        $this->parentK=$parentK;
        $this->studentK=$studentK;
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
    public function getStudentK(): int
    {
        return $this->studentK;
    }

    /**
     * @param int $studentK
     */
    public function setStudentK(int $studentK): void
    {
        $this->studentK = $studentK;
    }


}