<?php
include('conexion.php');  // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['usuario'];
    $password1 = $_POST['pswd'];

    $sql = "SELECT id ,
    nombre ,
    apellido ,
    email ,
    usuario ,
    pass ,
    fecha_nac ,
    genero ,
    imagen  from usuarios
            WHERE
            usuario = '$username' AND pass = '$password1'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("Location: ../Pagina_inicio_log.php?usuario=$username");
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }
}

$conn->close();
?>
