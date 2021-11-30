<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/listadoDeUsuario.css">
    <title>TarjetaUsuario</title>
</head>
<body>
    <div class="cuerpoTarjetaUsuario">
        <!-- LISTADO DE TODOS LOS USUARIOS -->
        <ul class="nav nav-pills navDelListado">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Donde estoy <?php // echo $_GET(lugar)?></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Navegar hacia</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Listado Completo</a></li>
                    <li><a class="dropdown-item" href="#">Contacto</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar una persona" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-danger">Salir</button>
            </li>
        </ul>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo de Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
            </tr>
            </thead>
            <tbody>
           <!--/<?php
            //foreach($usuario as $us){


            ?>
            <tr>
                <th scope="row"><?php //echo ($usuario[index])?></th>
                <td><?php //echo ($usuario[nombre])?></td>
                <td><?php //echo ($usuario[Apellidos])?></td>
                <td><?php //echo ($usuario[Tipo de Usuario])?></td>
                <td><?php //echo ($usuario[Email])?></td>
                <td><?php //echo ($usuario[Telefono])?></td>
                <td><?php //echo ($usuario[Direccion])?></td>
            </tr>
            <?php
            //}
            ?> -->
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Jacob</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>606606606</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Jacob</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Thornton</td>
                <td>606606606</td>
            </tr>
            </tbody>
        </table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
