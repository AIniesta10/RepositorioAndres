<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Campeones de League of Legends</title>
</head>

<body>
    <h1>Resultado de la encuesta sobre nuestro campeones</h1>
    <?php
    print("<h1>El formulario de PHP. Resultados del formulario</h1>\n");
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];

    $campeon = $_POST['campeon'];
    $otrocampeon = $_POST['otrocampeon'];

    print("<p>Los datos que se han introducido son:</p>\n");
    print("<ul>\n");
    print("<li>\n");
    print("<li> Nombre del usuario: $nombre \n");
    print("<li> Apellidos del usuario: $apellidos \n");
    print("<li> Campeon favorito: $camepon\n");
    print("<li> Otro campeon: $otrocampeon\n");

    print("</ul>\n");

    ?>