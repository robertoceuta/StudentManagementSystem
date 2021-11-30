<?php
class Database{
    private $localhost;
    private $username;
    private $password;
    private $bdname;

    function __construct($localhost, $username, $password, $bdname){
        $this->localhost=$localhost;
        $this->username=$username;
        $this->password=$password;
        $this->bdname=$bdname;
    }
    function querySelect($query){
        $mysqli = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if($mysqli->connect_error){
            die('Error de Conexión (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
        }
        $consulta = $mysqli->query($query);
        //$resultado = $consulta->fetch_assoc();
        //var_dump($consulta);
        //var_dump($resultado);

        //return $resultado;
        return $consulta;

    }

    function queryAssoc($query){
        $mysqli = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if($mysqli->connect_error){
            die('Error de Conexión (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
        }
        $consulta = $mysqli->query($query);
        $resultado = $consulta->fetch_assoc();
        //var_dump($consulta);
        //var_dump($resultado);

        return $resultado;
        //return $consulta;

    }

     function queryInsert($query){
         $mysqli = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

         if ($mysqli->connect_error) {
             die('Error de Conexión (' . $mysqli->connect_errno . ') '
                 . $mysqli->connect_error);
         }
         $mysqli->query($query);
     }
}


?>

