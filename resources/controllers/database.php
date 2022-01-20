<?php
class Database{
    private $localhost;
    private $username;
    private $password;
    private $bdname;

    /*function __construct($localhost, $username, $password, $bdname){
        $this->localhost=$localhost;
        $this->username=$username;
        $this->password=$password;
        $this->bdname=$bdname;
    }*/

    function connect(){
        $mysqli = new mysqli("localhost", "root", "", "sicole");
        if($mysqli->connect_error){
            die('Error de Conexión (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
        }else{
            return $mysqli;
        }
    }
    function querySelect($bbdd, $query){
        $consulta = $bbdd->query($query)->num_rows;
        //$resultado = $consulta->fetch_assoc();
        //var_dump($consulta);
        //var_dump($resultado);

        //return $resultado;
        return $consulta;

    }

    function queryAssoc($bbdd, $query){
        $consulta = $bbdd->query($query);
        $resultado = $consulta->fetch_assoc();
        //var_dump($consulta);
        //var_dump($resultado);
        return $resultado;
        //return $consulta;

    }

     function queryInsert($bbdd, $query){
         $bbdd->query($query);
     }
}


?>

