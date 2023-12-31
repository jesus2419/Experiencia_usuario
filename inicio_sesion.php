
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
  <link rel="stylesheet" type="text/css" href="Tienda_enlinea/Estilos/Diseño.css">

<!-- Archivo de java script para el comportamiento del codigo -->
       <script src="Logica.js"></script>
</head>


<body  style="width: 100%; height: 100%;" >
  <nav class="navegacion-principal navbar-expand-sm">
    <div class="boton-menu">

      <img src="Tienda_enlinea/IMAGENES/logo_sirloin_small.jpg" alt="Logo" style="width:60px;" class="rounded-pill">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          
          <li class="boton-menu">
            <a class="nav-link" href="Pagina_inicio.php">Inicio</a>
          </li>

          <li class="boton-menu active">
            <a class="nav-link" href="inicio_sesion.php">iniciar sesion</a>
          </li>
       
          <li class="boton-menu">
            <a class="nav-link" href="Registro_persona.php">Registro</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn button_white" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- degradado con datos para registro-->
    
      <div class="container p-5 my-5 contenedor-forms" >
        
        <form  action="php/procesar_login.php" method="post" enctype="multipart/form-data">

          
          <!-- usuario -->
          <div class="col form-floating mt-3 mb-3 ">
            <input type="text" class="form-control" id="usuario" name="usuario" required>
            <label for="usuario">Usuario:</label>
          </div>

       <!-- contraseña -->
        <div class="col form-floating mt-3 mb-3">
          <input type="password" class="form-control" id="pwd" name="pswd" required>
          <label for="pwd">Password</label>
        </div>

        
        </div>

          <!-- Boton de submit -->
          <br>
          <input type="submit" class=" boton-registrar" value="REGISTRAR"><br>

        </form> 
      </div>
    
 
</body>

<!-- Barra de informacion al final de la pagina -->
<footer>
    © 2023 Tu Empresa. Todos los derechos reservados.
</footer>

</html>
