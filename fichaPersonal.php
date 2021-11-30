<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/fichaPersonal.css">
    <title>Ficha Personal</title>
</head>
<body>
    <div class="cuerpoFichaPersonal">
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
        <!-- TITULO DEL ALUMNO/PROFESOR -->
        <h3 class="titNombre">
            <small class="text-muted">Ficha de: </small>
            Roberto Carlos García Poyato <?php //echo $nombre ?>
        </h3>
        <!-- DIV CON EL ACORDEÓN -->
        <div class="accordion accordion-flush acordeon" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Curso 2021/2022
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
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
                                <th scope="col">Nota Media Final</th>
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
                                <th scope="row">1</th>
                                <td>Roberto Carlos</td>
                                <td>Garcia Poyato</td>
                                <td>Estudiante</td>
                                <td>robertopoyato@outlook.com</td>
                                <td>609749792</td>
                                <td>Avd. España 32 2ºA</td>
                                <td>7,8</td>
                            </tr>

                            <tr>
                                <th scope="col">Asignatura</th>
                                <th scope="col">Nota</th>
                            </tr>
                            <tr>
                                <td>Inglés</td>
                                <td>8,7</td>
                            </tr>
                            <tr>
                                <td>Desarrollo Entorno Servidor</td>
                                <td>6,4</td>
                            </tr>
                            <tr>
                                <td>Empresa</th>
                                <td>7,6</td>
                            </tr>
                            <tr>
                                <td>Despliegue Aplicaciones Web</td>
                                <td>9,7</td>
                            </tr>
                            <tr>
                                <td>Diseño Interfaz Web</td>
                                <td>8,4</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Curso 2020/2021
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <!-- TABLA DENTRO DEL ACORDEÓN -->
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
                                <th scope="col">Nota Media Final</th>
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
                                    <th scope="row">1</th>
                                    <td>Roberto Carlos</td>
                                    <td>Garcia Poyato</td>
                                    <td>Estudiante</td>
                                    <td>robertopoyato@outlook.com</td>
                                    <td>609749792</td>
                                    <td>Avd. España 32 2ºA</td>
                                    <td>9,8</td>
                                </tr>

                                <tr>
                                    <th scope="col">Asignatura</th>
                                    <th scope="col">Nota</th>
                                </tr>
                                <tr>
                                    <td>Bases de datos</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Lenguaje de Marca</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Entornos de Desarrollo</th>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Sistemas Informáticos</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Formación y Orientación Laboral</td>
                                    <td>9</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
