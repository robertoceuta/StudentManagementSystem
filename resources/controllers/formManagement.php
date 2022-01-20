<?php
require_once "database.php";
require_once "./../class/user.php";
require_once "./../class/teacher.php";
require_once "./../class/parents.php";
$portServer = $_SERVER['SERVER_PORT'];
$bdConnect = new Database();
$bd = $bdConnect->connect();
$arr_cookie_options = array (
    'expires' => time()+120,
    'path' => '/',
    'domain' => false, // leading dot for compatibility or use subdomain
    'secure' => true,     // or false
    //'httponly' => true,    // or false
    //'samesite' => 'None' // None || Lax  || Strict
);
$arr_cookie_options_erase = array (
    'expires' => time()-120,
    'path' => '/',
    'domain' => false, // leading dot for compatibility or use subdomain
    'secure' => true,     // or false
    //'httponly' => true,    // or false
    //'samesite' => 'None' // None || Lax  || Strict
);
$forbidden_chars = array(
    "?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&",
    "$", "#", "*", "(", ")" , "|", "~", "`", "!", "{", "}", "%", "+" , chr(0));
    if(isset($_POST['type'])){
        if($_POST['type']=='login'){
            $mailUser = $_POST['mailLog'];
            $passUser = $_POST['passLog'];
            //COMPRUEBO QUE EL EMAIL EXISTE //COMPRUEBO QUE LA CONTRASEÑA HA SIDO INTRODUCIDA CORRECTAMENTE
            if(($bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")!=NULL) && ($passUser == $bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['user_pass'])){
                //COMPRUEBO EL TIPO DE USUARIO Y CREO VARIABLES DE SESIÓN SEGÚN CORRESPONDA
                //PROFESOR
                if($bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['teacher_key']!=NULL){
                    session_start();
                    $_SESSION['pk']=$bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['teacher_key'];
                    $_SESSION['rol']='teacher';
                    $_SESSION['name']=$bdConnect->queryAssoc($bd,"select * from teacher inner join user where user.teacher_key = teacher.primary_key and user.email = '$mailUser'")['name'];//PADRE
                }elseif ($bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['parent_key']!=NULL){
                    session_start();
                    $_SESSION['pk']=$bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['parent_key'];
                    $_SESSION['rol']='parent';
                    $_SESSION['name']=$bdConnect->queryAssoc($bd,"select * from parent inner join user where user.parent_key = parent.primary_key and user.email = '$mailUser'")['name'];//ADMINISTRADOR
                }elseif ($bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['isadmin']==1){
                    session_start();
                    $_SESSION['pk']=$bdConnect->queryAssoc($bd,"select * from user where email = '$mailUser'")['primary_key'];
                    $_SESSION['rol']='admin';
                    $_SESSION['name']='ADMINISTRADOR';
                }
            }else{
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=login', TRUE, 302);
            }
        }
        //MONTANDO LA LÓGICA DEL CREAR USUARIO
        elseif($_POST['type']=='create'){
            //CUADO SE PULSA EL BOTÓN CREAR TODOS LO DATOS DE LOS IMPUTS SE GUARDAN EN COOKIES
            setcookie('regName',trim($_POST['nombre']),$arr_cookie_options);
            setcookie('regLastName',trim($_POST['apellidos']),$arr_cookie_options);
            setcookie('regTipoUser',trim($_POST['tipoDeUsuario']),$arr_cookie_options);
            setcookie('regDni',trim($_POST['dni']),$arr_cookie_options);
            setcookie('regMailCookie',trim($_POST['regmail']),$arr_cookie_options);
            setcookie('regTel',trim($_POST['telefono']),$arr_cookie_options);
            if($_POST['provincia_oculta']!='Provincia' && $_POST['municipio_oculto']!= 'Municipio'){
                setcookie('regAdress',trim($_POST['direccion'].'. '.$_POST['provincia_oculta'].', '.$_POST['municipio_oculto']),$arr_cookie_options);
            }
            $regMail = trim($_POST['regmail']);
            $regDni = trim($_POST['dni']);
            //CON ESTE FILTRO COMPRUEBO SI EL MAIL TIENE LA ESTRUCTURA CORRECTA
            if(!filter_var($regMail, FILTER_VALIDATE_EMAIL)) {
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=badMail', TRUE, 302);
            //SI TIENE LA ESTRUCTURA CORRECTA COMPRUEBO SI YA ESTÁ EN LA BBDD EL EMAIL O EL DNI, QUE DEBEN SER ÚNICOS
            }elseif($bdConnect->queryAssoc($bd,"select * from user where email = '$regMail'")!=NULL || $bdConnect->queryAssoc($bd, "select * from user where dni = '$regDni'")!=NULL){
                //var_dump($_COOKIE['regName']);
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=regMail', TRUE, 302);
                //SI EL TIPO DE USUARIO NO HA SIDO ELEGIDO, SE MANDA UN MENSAJE DE ERROR
            }elseif($_POST['tipoDeUsuario']==0){
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?error=tipoUser', TRUE, 302);
                //SI ESTÁ BIEN ESCRITO Y NO ESTÁ EN LA BBDD PASO A CREAR LAS VARIABLES CON EL CONTENIDO DE LOS INPUT.
            }else{
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?complete=reg', TRUE, 302);
            }
        }
        //Creando la contraseña
        elseif($_POST['type']=='terminar'){
            if($_POST['pass1']!=$_POST['pass2']){
                define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                header('Location: '.URL.'login.php?complete=regErrorPass', TRUE, 302);
            }else{
                $nameNoSpace = $_COOKIE['regName'];
                $mailNoSpace = $_COOKIE['regMailCookie'];
                $lastnameNoSpace = $_COOKIE['regLastName'];
                $passRegNoSpace = $_POST['pass1'];
                $telephoneNoSpace = $_COOKIE['regTel'];
                $dniNoSpace = $_COOKIE['regDni'];
                $adressRegNoSpace = $_COOKIE['regAdress'];
                if($_COOKIE['regTipoUser']==1){
                    $userAux = new User();
                    $parentAux = new Parents();
                    $bdConnect->queryInsert($bd, $parentAux->queryInsertParent($nameNoSpace, $lastnameNoSpace, $telephoneNoSpace));
                    $auxId = $bdConnect->queryAssoc($bd, $parentAux->selectLastParent())['primary_key'];
                    $bdConnect->queryInsert($bd, $userAux->queryInsertParentUser($auxId,$passRegNoSpace,$mailNoSpace,$dniNoSpace));
                    setcookie('regName',trim($_POST['nombre']),$arr_cookie_options_erase);
                    setcookie('regLastName',trim($_POST['apellidos']),$arr_cookie_options_erase);
                    setcookie('regTipoUser',trim($_POST['tipoDeUsuario']),$arr_cookie_options_erase);
                    setcookie('regDni',trim($_POST['dni']),$arr_cookie_options_erase);
                    setcookie('regMailCookie',trim($_POST['regmail']),$arr_cookie_options_erase);
                    setcookie('regTel',trim($_POST['telefono']),$arr_cookie_options_erase);
                    define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                    header('Location: '.URL.'login.php?completeOk', TRUE, 302);
                }elseif($_COOKIE['regTipoUser']==2){
                    $birthdayRegNoSpace = $_POST['birthday'];
                    $ssRegNoSpace = $_POST['ssNumber'];
                    $titulationNoSpace = $_POST['titulation'];
                    $originalDate = $birthdayRegNoSpace;
                    $newDate = date("Y-m-d", strtotime($originalDate));// SQL query $sql = "SELECT * FROM checkdate WHERE DATE(createdat) = '$newDate'";
                    $userAux = new User();
                    $teacherAux = new Teacher();
                    $bdConnect->queryInsert($bd, $teacherAux->queryInsertTeacher($nameNoSpace, $lastnameNoSpace, $telephoneNoSpace,$newDate,$titulationNoSpace,$ssRegNoSpace,$adressRegNoSpace));
                    $auxId = $bdConnect->queryAssoc($bd, $teacherAux->selectLastTeacher())['primary_key'];
                    $bdConnect->queryInsert($bd, $userAux->queryInsertTeacherUser($auxId,$passRegNoSpace,$mailNoSpace,$dniNoSpace));
                    setcookie('regName',trim($_POST['nombre']),$arr_cookie_options_erase);
                    setcookie('regLastName',trim($_POST['apellidos']),$arr_cookie_options_erase);
                    setcookie('regTipoUser',trim($_POST['tipoDeUsuario']),$arr_cookie_options_erase);
                    setcookie('regDni',trim($_POST['dni']),$arr_cookie_options_erase);
                    setcookie('regMailCookie',trim($_POST['regmail']),$arr_cookie_options_erase);
                    setcookie('regTel',trim($_POST['telefono']),$arr_cookie_options_erase);
                    define('URL', 'http://localhost:'.$portServer.'/StudentManagementSystem/');
                    header('Location: '.URL.'login.php?completeOk', TRUE, 302);
                }
            }
        }
    }
?>

