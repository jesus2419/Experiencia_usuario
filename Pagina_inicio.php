

<!DOCTYPE html>
<html lang="es">

<head>
  <title>Sirlon Stockade</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" href="Tienda_enlinea/IMAGENES/logo_sirloin.png" type="image/x-icon">
  
  
  <!-- Boostrap links -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Archivo diseño de pagina en css  -->
  <link rel="stylesheet" type="text/css" href="Tienda_enlinea/Estilos/Diseño.css">

  <!-- Archivo de java script para el comportamiento del codigo -->
  <script src="Logica.js"></script>

</head>

<body >

  <!-- Texto de el menu off canvas -->
  <section class="side-bar">
    <div class="offcanvas offcanvas-start" id="demo">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Heading</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">

        <!-- formulario de inicio de sesion -->

        <button class="btn button_pink" type="button">A Button</button>
      </div>
    </div>
  </section>

  <!-- Productos mas vendidos -->

  <nav class="navegacion-principal navbar-expand-sm">
    <div class="boton-menu">

      <img src="Tienda_enlinea/IMAGENES/logo_sirloin_small.jpg" alt="Logo" style="width:60px;" class="rounded-pill">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav me-auto">
          
          <li class="boton-menu active ">
            <a class="nav-link" href="Pagina_inicio.php">Inicio</a>
          </li>

          <li class="boton-menu">
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

<!-- Donde encontraremos todos nuestros productos -->
<main class="wrapper">
  <!-- titulo -->
  <h2 class="titulo-principal">Promociones</h2>

  <div class="contenedor-productos_favoritos">

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/nuestros_momentos-360x360.jpg" alt="cat">
        
      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/precio_especial-360x360.jpg" alt="cat">
       
      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/logo_sirloin.png" alt="cat">
    
      </div>

      </div>
  

  <h2 class="titulo-principal">Comidas</h2>
  <div class="contenedor-productos">
  

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>
  </div>

  <div class="contenedor-productos">


      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>

      <div class="producto">
          <img class="producto-imagen" src="Tienda_enlinea/IMAGENES/red0-Sirloin-Stockade-meals-2022-07-4.jpg" alt="cat">
          <div class="producto-detalles">
              <h3 class="producto-titulo">abrigo 01</h3>
              <p class="producto-precio">$1000</p>
              <button class="producto-agregar">Agregar</button>
          </div>

      </div>
  </div>


</main>




  <footer>
    © 2023 Tu Empresa. Todos los derechos reservados.
  </footer>
</body>

<!-- Barra de informacion al final de la pagina -->


</html>