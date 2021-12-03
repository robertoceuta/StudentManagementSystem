<?php
require_once "./resources/controllers/connectdb.php";
class Photo{
    private $pk=0;
    private $teacherK=0;
    private $url=0;
    private $date=0;

    function __construct($pk, $teacherK, $url, $date){
        $this->pk=$pk;
        $this->teacherK=$teacherK;
        $this->url=$url;
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
    public function getUrl(): int
    {
        return $this->url;
    }

    /**
     * @param int $url
     */
    public function setUrl(int $url): void
    {
        $this->url = $url;
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