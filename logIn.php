<?php
require ('resources/controllers/database.php');

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
    <!-- DIV PRINCIPAL CON LOS DOS FORMULARIOS DENTRO -->
    <div class="cuerpoLogin container-fluid "  >
        <div class="row justify-content-around " style="height: 100vh">
           <!-- <div class=""> -->
                <div class="formRegistro col-sm-6 align-self-center d-flex flex-column align-items-center">
                    <h3>¿No estás registrado?</h3>
                    <h1 style="margin-bottom: 0.5em">¡Regístrate ahora!</h1>
                    <!-- FORMULARIO DE REGISTRO -->
                    <form class="formulario col-10 col-md-7" >
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputNombre" name="nombre">
                            <div id="emailHelp" class="form-text">Si tu nombre es compuesto, introdúcelo completo</div>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="inputApellidos" name="apellidos">
                        </div>
                        <div class="mb-3 ">
                            <label for="tipoDeUsuario" class="form-label">Tipo de Usuatio</label>
                            <select class="form-select" aria-label="Default select example" name="tipoDeUsuario">
                                <option value="0">Selecciona uno</option>
                                <option value="1">Alumno</option>
                                <option value="2">Profesor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Dirección de Email</label>
                            <input type="email" class="form-control" id="inputMail"  name="mail">
                        </div>
                        <div class="mb-3">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="inputPass"  name="pass">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Número de teléfono</label>
                            <input type="tel" class="form-control" id="inputTelefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="provincia" class="form-label">Dirección</label>
                            <select class="form-select" aria-label="Default select example" id="ps-prov" name="provincia"></select>
                            <label for="municipio" class="form-label"></label>
                            <select class="form-select" aria-label="Default select example" id="ps-mun" name="municipio"></select>
                            <label for="calle" class="form-label"></label>
                            <input type="text" class="form-control" id="search_input" name="direccion" placeholder="Calle Número y letra">
                            <input type="hidden" id="latitude_input"/>
                            <input type="hidden" id="longitude_input"/>

                        </div>

                        <button type="submit" class="btn btn-primary">Regístrate</button>
                    </form>
                </div>
           <!-- </div> -->
           <!-- <div class="">-->
                <div class="formLogin col-10 col-md-4 align-self-center d-flex flex-column align-items-center justify-content-around border border-1 border-dark shadow-lg p-3 mb-5 bg-white rounded" style=" height: 75vh">
                    <!-- FORMULARIO DE LOGIN-->
                    <img src="resources/img/owl-47526.svg" class="img-fluid d-flex align-self-center " alt="iconoEscuela" width="150" height="150">
                    <h3 style="margin-bottom: -2.5em">Si ya estás registrado</h3>
                    <h1 style="margin-bottom: 0.5em">Entra ahora</h1>
                    <form class="formulario col-md-10" ">
                        <div class="mb-3 ">
                            <label for="mailLog" class="form-label">Nombre de Usuario</label>
                            <input type="email" class="form-control" id="inputMailLog" name="mailLog">
                        </div>
                        <div class="mb-3">
                            <label for="passLog" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="passLog" name="passLog">
                        </div>
                        <button type="submit" class="btn btn-primary">Entra</button>
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
</body>
</html>
