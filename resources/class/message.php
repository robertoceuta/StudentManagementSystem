<?php
require_once "./resources/controllers/connectdb.php";
class Message {
    private $pk=0;
    private $teacherK=0;
    private $matter=0;
    private $body=0;
    private $date=0;

    function __construct($pk, $teach, $matter, $body, $date){
        $this->pk=$pk;
        $this->teacherK=$teach;
        $this->matter=$matter;
        $this->body=$body;
        $this->date=$date;
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
    public function getMatter(): int
    {
        return $this->matter;
    }

    /**
     * @param int $matter
     */
    public function setMatter(int $matter): void
    {
        $this->matter = $matter;
    }

    /**
     * @return int
     */
    public function getBody(): int
    {
        return $this->body;
    }

    /**
     * @param int $body
     */
    public function setBody(int $body): void
    {
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date): void
    {
        $this->date = $date;
    }


}