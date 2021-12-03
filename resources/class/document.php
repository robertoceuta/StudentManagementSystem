<?php
require_once "./resources/controllers/connectdb.php";
class Document {
    private $pk=0;
    private $messageK=0;
    private $url=0;

    function __construct($pk, $messK, $url){
        $this->pk=$pk;
        $this->messageK=$messK;
        $this->url=$url;
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
    public function getMessageK(): int
    {
        return $this->messageK;
    }

    /**
     * @param int $messageK
     */
    public function setMessageK(int $messageK): void
    {
        $this->messageK = $messageK;
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


}