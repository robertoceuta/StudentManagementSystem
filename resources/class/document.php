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
}