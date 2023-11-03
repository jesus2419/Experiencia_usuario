
<!-- Ailin Elizabeth Granados Cantu
Capa intermedia
7-sep-2023 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Suberbia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Archivo diseño de pagina en css  -->
  <link rel="stylesheet" type="text/css" href="../../Estilos/Diseño.css">

<!-- Archivo de java script para el comportamiento del codigo -->
       <script src="Logica.js"></script>

       <?php
// Obtén el valor de usuario pasado en la URL
if (isset($_GET['usuario'])) {
    $usuario = $_GET['usuario'];
    echo "Usuario: " . $usuario;
} else {
    echo "No se recibió un nombre de usuario.";
}
?>



       <?php
    // Realizar la conexión a la base de datos
    include('../../Funcion/conexion.php');

    // Consulta para obtener información del usuario 'geralt'
    $sqlConsulta = "SELECT 
                        u.Usua_ID,
                        u.Usua_Nombre,
                        u.Usua_Contra,
                        u.Usua_PubPriv,
                        u.Usua_Estatus,
                        u.Role_ID,
                        r.Role_Nombre,
                        r.Role_Estatus,
                        ui.UsIn_ID,
                        ui.UsIn_Nombre,
                        ui.UsIn_ApellidoPa,
                        ui.UsIn_ApellidoMa,
                        ui.UsIn_Sexo,
                        ui.UsIn_Telefono,
                        ui.UsIn_Correo,
                        ui.UsIn_Foto,
                        ui.UsIn_Fecha_Nac,
                        ui.UsIn_Fecha_Creac,
                        ui.UsIn_Estatus
                    FROM 
                        Usuario u
                    JOIN 
                        Roles r ON u.Role_ID = r.Role_ID
                    JOIN 
                        Usuario_Info ui ON u.Usua_ID = ui.Usua_ID
                    WHERE
                        u.Usua_Nombre = '$usuario'";

    $resultConsulta = $conn->query($sqlConsulta);

    if ($resultConsulta->num_rows > 0) {
        // Obtener el primer resultado (asumiendo que solo habrá uno)
        $row = $resultConsulta->fetch_assoc();

        // Asignar los valores a variables para usar en el HTML
        $usuaNombre = $row["Usua_Nombre"];
        $usuaContra = $row["Usua_Contra"];
        $Role = $row["Role_ID"];
        $NRole = $row["Role_Nombre"];
        $nombre = $row["UsIn_Nombre"];
        $apellidop = $row["UsIn_ApellidoPa"];
        $apellidom = $row["UsIn_ApellidoMa"];
        $pubpriv = $row["Usua_PubPriv"];
        $sexo = $row["UsIn_Sexo"];
        $telefono = $row["UsIn_Telefono"];
        $correo = $row["UsIn_Correo"];
        $fecha = $row["UsIn_Fecha_Nac"];
        
        // Obtener la imagen en formato blob y convertirla a una URL de datos
        $imagenBlob = $row["UsIn_Foto"];
        $imagenURL = 'data:image/jpeg;base64,' . base64_encode($imagenBlob);


        
    } else {
        echo "No se encontraron resultados para el usuario '$usuario'.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</head>


<body class="degradado" style="width: 100%; height: 100%;">
  <nav class="navbar navbar-expand-sm sticky-top">
    <div class="container-fluid">
      <!-- <a class="navbar-brand" href="#">Logo</a> -->
      <img src="../../IMAGENES/logo_sin_fondo.png" alt="Logo" style="width:40px;" class="rounded-pill">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="Pagina_inicio.php?usuario=<?php echo urlencode($usuario); ?>">Tienda</a>
          </li>
          <li class="nav-item">
         <a class="nav-link" href="Perfil_usuario_publico.php?usuario=<?php echo urlencode($usuario); ?>">Perfil</a>
          </li>

          <li class="nav-item">
         <a class="nav-link" href="Modificar_persona.php?usuario=<?php echo urlencode($usuario); ?>">Modificar Perfil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../Landing_page.php">Salir</a>
          </li>

       

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn " type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- degradado con datos para registro-->
    
      <div class="container p-5 my-5 contenedor-forms">
        
        <form action="../../Funcion/editar_persona.php" method="post" enctype="multipart/form-data">
          <!--PEDIMOS LOS DATOS DE REGISTRO-->
          <!-- nombre y apellidos -->
          <div class="input-group ">
           
           <input type="text" class="form-control" placeholder="Nombre" name="Nombre" value="<?php echo isset($nombre) ? $nombre : ''; ?>" >
          

         </div>
          <div class="input-group ">
           
    
            <input type="text" class="form-control" placeholder="Apellido Paterno" id="Apellidop" name="Apellidop" value="<?php echo isset($apellidop) ? $apellidop : ''; ?>" >
            <input type="text" class="form-control" placeholder="Apellido Materno" id="ApellidoM" name="ApellidoM" value="<?php echo isset($apellidom) ? $apellidom : ''; ?>">

          </div>

          <!-- email -->
          <div class="col form-floating mt-3 mb-3 ">
            <input type="email" class="form-control" id="email" name="email" required autofocus value="<?php echo isset($correo) ? $correo : ''; ?>">
            <label for="email">Email:</label>
          </div>

          <!-- Telefono -->
          <div class="col form-floating mt-3 mb-3 ">
            <input type="text" class="form-control" id="telefono" name="telefono" required autofocus value="<?php echo isset($telefono) ? $telefono : ''; ?>">
            <label for="telefono">Telefono:</label>
          </div>
          <!-- usuario -->
          <div class="col form-floating mt-3 mb-3 ">
            <input type="text" class="form-control" id="usuario" name="usuario" required value="<?php echo isset($usuaNombre) ? $usuaNombre : ''; ?>" readonly> 
             <label for="usuario">Usuario:</label>
           </div>


       <!-- contraseña -->
        <div class="col form-floating mt-3 mb-3">
          <input type="password" class="form-control" id="pwd" name="pswd" required value="<?php echo isset($usuaContra) ? $usuaContra : ''; ?>">
          <label for="pwd">Password</label>
        </div>

        <!-- Fecha de nacimiento -->
        <div class="col form-floating mt-3 mb-3">
          <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" required value="<?php echo isset($fecha) ? $fecha : ''; ?>">
          <label for="fecha_nac">Fecha de nacimiento</label>
        </div>
         <!--  tipo Rol -->
        <div class="col form-floating mt-3 mb-3 ">
            <input type="text" class="form-control" id="rol" name="rol-usuario" required value="<?php echo isset($NRole) ? $NRole : ''; ?>" readonly> 
             <label for="usuario">Rol:</label>
           </div>



         <!-- Elegir de una lista, tipo privacidad -->
         <label for="rol" class="form-label">Elige tu tipo de usuario</label>
         <select class="form-select" id="rol2" name="rol-usuario2">
           <option value = 1>Publico</option>
           <option value = 0>Privado</option>
           
         </select>

       <!-- Elegir de una lista, Genero -->
        <label for="genero" class="form-label">Género</label>
           <select class="form-select" id="genero" name="genero">
            <option value="Femenino" <?php echo ($sexo === 'Femenino') ? 'selected' : ''; ?>>Femenino</option>
            <option value="Masculino" <?php echo ($sexo === 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
            <option value="No-binario" <?php echo ($sexo === 'No-binario') ? 'selected' : ''; ?>>No-binario</option>
            <option value="Prefiero no especificar" <?php echo ($sexo === 'Prefiero no especificar') ? 'selected' : ''; ?>>Prefiero no especificar</option>
          </select>

               
        <!-- imagen de usuario -->
        <div class="col form-floating mt-3 mb-3">
          <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required onchange="mostrarImagen(event)">
          <label for="imagen">Imagen</label>
        </div>
        <img id="imagenMostrada" src="#" alt="Vista previa de la imagen" style="display: none; max-width: 100%; height: auto;">

        <script> 
         function mostrarImagen(event) {
         const input = event.target;
         const imgMostrada = document.getElementById('imagenMostrada');

          // Asegúrate de que se haya seleccionado un archivo
          if (input.files && input.files[0]) {
           const reader = new FileReader();

          reader.onload = function(e) {
            imgMostrada.src = e.target.result;
            imgMostrada.style.display = 'block';  // Muestra la imagen
          };

           reader.readAsDataURL(input.files[0]);  // Lee el archivo como una URL de datos
          }
          }

          </script>

          <!-- Boton de submit -->
          <br>
          <input type="submit" class="btn button_pink" value="REGISTRAR"><br>

        </form> 
        
      </div>
      <a href="../../Funcion/desactivar_persona.php?usuario=<?php echo urlencode($usuario); ?>" class="btn button_pink">Eliminar usuario</a>

 
</body>

<!-- Barra de informacion al final de la pagina -->
<footer>
    © 2023 Tu Empresa. Todos los derechos reservados.
</footer>

</html>
