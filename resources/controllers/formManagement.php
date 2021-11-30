<?php
require_once "formdb.php";
    if(isset($_POST['type'])){
        if($_POST['type']=='login'){
            $mailUser = $_POST['mailLog'];
            $passUser = $_POST['passLog'];
            //COMPRUEBO QUE EL EMAIL EXISTE //COMPRUEBO QUE LA CONTRASEÑA HA SIDO INTRODUCIDA CORRECTAMENTE
            if(($bd->queryAssoc("select * from user where email = '$mailUser'")!=NULL) && ($passUser == $bd->queryAssoc("select * from user where email = '$mailUser'")['user_pass'])){
                //COMPRUEBO EL TIPO DE USUARIO Y CREO VARIABLES DE SESIÓN SEGÚN CORRESPONDA
                //PROFESOR
                if($bd->queryAssoc("select * from user where email = '$mailUser'")['teacher_key']!=NULL){
                    session_start();
                    $_SESSION['pk']=$bd->queryAssoc("select * from user where email = '$mailUser'")['teacher_key'];
                    $_SESSION['rol']='teacher';
                    $_SESSION['name']=$bd->queryAssoc("select * from teacher inner join user where user.teacher_key = teacher.primary_key and user.email = '$mailUser'")['name'];//PADRE
                }elseif ($bd->queryAssoc("select * from user where email = '$mailUser'")['parent_key']!=NULL){
                    session_start();
                    $_SESSION['pk']=$bd->queryAssoc("select * from user where email = '$mailUser'")['parent_key'];
                    $_SESSION['rol']='parent';
                    $_SESSION['name']=$bd->queryAssoc("select * from parent inner join user where user.teacher_key = parent.primary_key and user.email = '$mailUser'")['name'];//ADMINISTRADOR
                }elseif ($bd->queryAssoc("select * from user where email = '$mailUser'")['isadmin']==1){
                    session_start();
                    $_SESSION['pk']=$bd->queryAssoc("select * from user where email = '$mailUser'")['primary_key'];
                    $_SESSION['rol']='admin';
                    $_SESSION['name']='ADMINISTRADOR';
                }
            }else{
                define('URL', 'http://localhost/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=login', TRUE, 302);
            }
        }

        elseif($_POST['type']=='create'){
            echo("hola");
        }
    }
?>

