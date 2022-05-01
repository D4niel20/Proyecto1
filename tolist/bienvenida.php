<?php 

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
        alert ("Debes iniciar sesion");
        window.location="index.php";
        </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1.0">
        <title>Bienvenida</title>
    </head>
    <body>
        <h1>bienvenido a mi mundo</h1>
        <a href="php/cerrar_sesion.php">Cerrar sesión</a>
    </body>
</html>