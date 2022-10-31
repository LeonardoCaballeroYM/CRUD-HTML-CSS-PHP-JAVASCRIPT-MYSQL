<?php

session_start();

include 'conexion.php';

$_usuario_ = $_POST['_Usuario_'];
$_password_ = $_POST['_Password_'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$_usuario_'
                                    and passwor='$_password_'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $_password_;
    header("location: ../bienvenida.php");
    exit();
} else {
    echo '
            <script>
                alert("El usuario no existe verifique los datos introducidos");
                window.location = "../index.php";
            </script>
    ';
    exit();
}
