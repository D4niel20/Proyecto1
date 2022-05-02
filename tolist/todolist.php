<?php
session_start();
if(!isset($_SESSION['usuario'])){
	echo'
	<script>
	alert("debes iniciar sesión");
	window.location = "index.php";
	</script>
	';
	session_destroy();
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TODO List</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <h1><span class="title">Todo</span>List</h1>
    <div class="inputDiv">
    <input type="text" class="input" placeholder="¿Qué tienes planeado?">
    <button class="add"><i class="fas fa-plus"></i></button>
    </div>
    <div class="container">
    </div>
    <script src='main.js'></script>
</body>
		<center>
			<a href="php/cerrar_sesion.php"><img src="cerrar.png"></a>
		</center>
	
</body>
</html>