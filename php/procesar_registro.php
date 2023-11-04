<?php
include('conexion.php');  // Incluye el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $nombre = $_POST['Nombre'];
    $usuario = $_POST['usuario'];


    $check_query = "SELECT * FROM usuarios WHERE usuario='$usuario'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
    // El nombre de usuario ya existe, puedes mostrar un mensaje de error
    echo "El nombre de usuario ya está en uso. Por favor, elige otro nombre de usuario.";
} else {
    $nombreImagen = $_FILES['imagen']['name'];
    $tamañoImagen = $_FILES['imagen']['size'];
    $tipoImagen = $_FILES['imagen']['type'];
    $tempImagen = $_FILES['imagen']['tmp_name'];

    if ($tamañoImagen <= 1048576) { // Tamaño máximo de 1 MB

    $apellidop = $_POST['Apellido'];
    
    $email = $_POST['email'];
   // $telefono = $_POST['telefono'];
    
    $password = $_POST['pswd'];
    $fecha_nac = $_POST['fecha_nac'];
   // $privacidad = isset($_POST['privado']) && $_POST['privado'] === 'Privado' ? 1 : 0;  // Corrección del campo privado
    $genero = $_POST['genero'];
    //$rol_usuario = $_POST['rol-usuario'];
    
    $imagenContenido = addslashes(file_get_contents($tempImagen));

    // Llamada al procedimiento almacenado
    $sql = "CALL InsertarUsuario('$nombre','$apellidop', '$email','$usuario', '$password', '$fecha_nac', '$genero', '$imagenContenido')";

    if ($conn->query($sql) === TRUE) {
        //echo "Registro insertado correctamente.";
        header("Location: ../Pagina_inicio_log.php?usuario=$usuario");

        


       
    } else {
        echo "Error al insertar registro: " . $conn->error;
    }
} else {
    echo "Tamaño de la imagen demasiado grande. El tamaño máximo permitido es 1 MB.";
}
  }
}

// Cerrar la conexión
$conn->close();
?>

