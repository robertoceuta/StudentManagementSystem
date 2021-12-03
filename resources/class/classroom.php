<?php
require_once "./resources/controllers/connectdb.php";
class Classroom{
    private $pk=0;
    private $number=0;
    private $course=0;
    private $letter=0;

    function __construct($pk, $number, $course, $letter){
        $this->pk=$pk;
        $this->number=$number;
        $this->course=$course;
        $this->letter=$letter;
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
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getCourse(): int
    {
        return $this->course;
    }

    /**
     * @param int $course
     */
    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    /**
     * @return int
     */
    public function getLetter(): int
    {
        return $this->letter;
    }

    /**
     * @param int $letter
     */
    public function setLetter(int $letter): void
    {
        $this->letter = $letter;
    }



}
