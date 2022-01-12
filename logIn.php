<?php
require_once ('resources/controllers/database.php');
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="resources/img/owl-47526.svg">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/login.css">
    <title>Inicio de sesión</title>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pselect.js@4.0.1/dist/pselect.min.js" ></script>
</head>
<body>

    <?php
        require_once "resources/tools/modalLogin.php";
        require_once "resources/tools/modalReg.php";
    ?>
    <?php var_dump($_COOKIE['regName']);
    if(count($_COOKIE) > 2) {
        echo "<br>Cookies are enabled/exists";
    } else {
        echo "<br>Cookies are disabled/not exists";
    }?>
    <!-- DIV PRINCIPAL CON LOS DOS FORMULARIOS DENTRO -->
    <div class="cuerpoLogin container-fluid "  >
        <div class="row justify-content-around " style="height: 100vh">
           <!-- <div class=""> -->
                <div class="formRegistro col-sm-6 align-self-center d-flex flex-column align-items-center">
                    <h3>¿No estás registrado?</h3>
                    <h1 style="margin-bottom: 0.5em">¡Regístrate ahora!</h1>
                    <!-- FORMULARIO DE REGISTRO -->
                    <form class="formulario col-10 col-md-7" action="resources/controllers/formManagement.php" method="post">
                        <input type="text" hidden name="type" value="create">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" required name="nombre" value="<?php echo (isset($_COOKIE['regName'])) ? $_COOKIE['regName']:'';?>">
                            <div id="emailHelp" class="form-text">Si tu nombre es compuesto, introdúcelo completo</div>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="inputApellidos" required name="apellidos" value="<?php echo (isset($_COOKIE['regLastName']))?$_COOKIE['regLastName']:'';?>">
                        </div>
                        <div class="mb-3 ">
                            <label for="tipoDeUsuario" class="form-label">Tipo de Usuario</label>
                            <select class="form-select" aria-label="Default select example" name="tipoDeUsuario">
                                <option value="0">Selecciona uno</option>
                                <option value="1">Padre</option>
                                <option value="2">Profesor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="provincia" class="form-label">Dirección</label>
                            <select class="form-select" aria-label="Default select example" id="ps-prov" name="provincia"></select>
                            <input type="hidden" name="provincia_oculta" id="provincia_oculta"  value=""/>
                            <label for="municipio" class="form-label"></label>

                            <select class="form-select" aria-label="Default select example" id="ps-mun" name="municipio"></select>
                            <input type="hidden" name="municipio_oculto" id="municipio_oculto"  value=""/>
                            <label for="calle" class="form-label"></label>
                            <input type="text" class="form-control" id="search_input" name="direccion" placeholder="Calle Número y letra" value="<?php echo (isset($_COOKIE['regAdress']))?$_COOKIE['regAdress']:'';?>">
                        </div>
                        <div class="mb-3">
                            <label for="dni" class="form-label">DNI</label>
                            <input type="text" class="form-control" id="inputDni" required name="dni" value="<?php echo (isset($_COOKIE['regDni']))?$_COOKIE['regDni']:'';?>">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Dirección de Email</label>
                            <input type="email" class="form-control" id="inputMail"  required name="regmail" value="<?php echo (isset($_COOKIE['regMailCookie']))?$_COOKIE['regMailCookie']:'';?>">
                        </div>




                        <div class="mb-3">
                            <label for="telefono" class="form-label">Número de teléfono</label>
                            <input type="tel" class="form-control" id="inputTelefono" required name="telefono" value="<?php echo (isset($_COOKIE['regTel']))?$_COOKIE['regTel']:'';?>">
                        </div>


                        <button type="submit" class="btn btn-primary" id="btn-registro">Regístrate</button>
                    </form>
                </div>
           <!-- </div> -->
           <!-- <div class="">-->
                <div class="formLogin col-10 col-md-4 align-self-center d-flex flex-column align-items-center justify-content-around border border-1 border-dark shadow-lg p-3 mb-5 bg-white rounded" style=" height: 75vh">
                    <!-- FORMULARIO DE LOGIN-->
                    <img src="resources/img/owl-47526.svg" class="img-fluid d-flex align-self-center " alt="iconoEscuela" width="150" height="150">
                    <h3 style="margin-bottom: -2.5em">Si ya estás registrado</h3>
                    <h1 style="margin-bottom: 0.5em">Entra ahora</h1>
                    <form class="formulario col-md-10" action="resources/controllers/formManagement.php" method="post">
                        <input type="text" hidden name="type" value="login">
                        <div class="mb-3 ">
                            <label for="mailLog" class="form-label">Email del Usuario</label>
                            <input type="email" class="form-control" id="inputMailLog" required name="mailLog">
                        </div>
                        <div class="mb-3">
                            <label for="passLog" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="passLog" required name="passLog">
                        </div>
                        <button type="submit" class="btn btn-primary" >Entra</button>
                    </form>
                </div>
            <!--</div>-->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        var prov = document.getElementById('ps-prov');
        var mun = document.getElementById('ps-mun');
        new Pselect().create(prov, mun);
    </script>
    <?php
    if(isset($_GET['error'])){
        ?>
            <script>
                let myModal = new bootstrap.Modal(document.getElementById("errorModal"), {});
                document.onreadystatechange = function () {
                    myModal.show();
                };
            </script>
        <?php
    }
    if(isset($_GET['complete'])){
        ?>
            <script>
                let myModal = new bootstrap.Modal(document.getElementById("registroModal"), {});
                document.onreadystatechange = function () {
                    myModal.show();
                };
            </script>
    <?php
    }
    ?>
    <script src="resources/js/tomarValorDireccion.js"></script>
</body>
</html>
