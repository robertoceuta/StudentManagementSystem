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
        //MONTANDO LA LÓGICA DEL CREAR USUARIO
        elseif($_POST['type']=='create'){
            setcookie('regName',$_POST['nombre'],time()+120);
            setcookie('regLastName',$_POST['apellidos'],time()+120);
            setcookie('regTipoUser',$_POST['tipoDeUsuario'],time()+120);
            setcookie('regDni',$_POST['dni'],time()+120);
            setcookie('regMailCookie',$_POST['regmail'],time()+120);
            setcookie('regTel',$_POST['telefono'],time()+120);
            setcookie('regAdress',$_POST['direccion'],time()+120);
            $regMail = trim($_POST['regmail']);
            //CON ESTE FILTRO COMPRUEBO SI EL MAIL TIENE LA ESTRUCTURA CORRECTA
            if(!filter_var($regMail, FILTER_VALIDATE_EMAIL)) {
                define('URL', 'http://localhost/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=badMail', TRUE, 302);
            //SI TIENE LA ESTRUCTURA CORRECTA COMPRUEBO SI YA ESTÁ EN LA BBDD
            }elseif($bd->queryAssoc("select * from user where email = '$regMail'")!=NULL){
                //var_dump($_COOKIE['regName']);
                define('URL', 'http://localhost/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=regMail', TRUE, 302);
            //SI ESTÁ BIEN ESCRITO Y NO ESTÁ EN LA BBDD PASO A CREAR LAS VARIABLES CON EL CONTENIDO DE LOS INPUT.
            }else{
                define('URL', 'http://localhost/StudentManagementSystem/');
                header('Location: '.URL.'login.php?complete=reg', TRUE, 302);
            }
        }
        //Creando la contraseña
        elseif($_POST['type']=='terminar'){
            if($_POST['pass1']!=$_POST['pass2']){
                define('URL', 'http://localhost/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=badpass&complete=reg', TRUE, 302);
            }else{
                $nameNoSpace = trim($_POST['nombre']);
                $lastnameNoSpace = trim($_POST['apellidos']);
                $passRegNoSpace = trim($_POST['pass1']);
                $telephoneNoSpace = trim($_POST['telefono']);
                $dniNoSpace = trim($_POST['dni']);
                $adressRegNoSpace = trim($_POST['direccion'].". ".$_POST['municipio_oculto'].", ".$_POST['provincia_oculta']);
            }

        }
    }
?>

