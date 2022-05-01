<?php
include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //encriptar la contraseña
    $contrasena = hash('sha512',$contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    //verificar que el correo no se duplique en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    
    if(mysqli_num_rows($verificar_correo) >0){
    echo'
        <script>
            alert("correo ya registrado, Ingrese otro correo");
            window.loction = "../index.php";
        </script>
    ';
    exit();
}
    //verificar que el nombre del usuario no se duplique en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
    
    if(mysqli_num_rows($verificar_usuario) >0){
    echo'
        <script>
            alert("este usuario ya registrado, Ingrese otro usuario");
            window.loction = "../index.php";
        </script>
    ';
    exit();
}

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
        ';
    }

?>