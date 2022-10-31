<?php

    include 'conexion.php';

    $usuario_ = $_POST['Usuario_'];
    $email_ = $_POST['Email_'];
    $password_ = $_POST['Password_'];

    // Encryptado
    $password_ = hash('sha512',$password_);

    $query = "INSERT INTO usuarios(usuario,email,passwor)
                VALUES('$usuario_','$email_','$password_')";

    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email_'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    exit();
    }

    //Verificar que el usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario_'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion,$query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado en la base de datos");
                window.location = "../index.php";
            </script>
        ';

    }else{
        echo '
        <script>
            alert("Intentelo de nuevo usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';

    }
    mysqli_close($conexion);
