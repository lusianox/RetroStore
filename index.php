<!DOCTYPE html>
<html>
<head>
	<title>Contactarse</title>
	<meta charset="utf-8">
  <link rel="icon" href="./img/Icono.png">
	<link rel="stylesheet" type="text/css" href="style/estilophp.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="img/Icono.png" id="logo" alt="Icono de la barra de busqueda" width="100" height="50"></a>
          <a class="navbar-brand text-white" href="index.html">RetroStore</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="productos.html">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="sucursales.html">Sucursales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="sobrenosotros.html">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Contacto</a>
              </li>
            </ul>
            <a class="navbar-brand"><img src="video/pacman.gif" id="logo" alt="Icono de la barra de busqueda" width="100" height="50"></a>
          </div>
        </div>
      </nav>
	

    <form method="post" class="formRegistro">
    	<h1>Envía tu información</h1>
		<h2>Nos pondremos en contacto contigo lo antes posible.</h2>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("contactarse.php");
        ?>

		<br><br><br><br><br>

	       	<!--Footer-->
			   <div class="footer">
        <div class="container-fluid">
          <div class="row pb-2 bg-dark text-white py-5">
            <div class="col-xs-12 col-md-6 col-lg-3">
              <p class="h2 text-decoration-none">Retro Store</p>
              <p class="text-secondary">Buenos Aires, Argentina.</p>
            </div>
    
            <div class="col-xs-12 col-md-6 col-lg-3">
              <p class="h4">Contáctanos</p>
              
              <div class="mb-1">
                <a class="text-secondary text-decoration-none" href="https://www.facebook.com/people/Luciano-Bucher/100016990541547/"><img src="./img/Iconos redes sociales/Facebook.png" alt="Icono Facebook footer" class="iconoFacebook"></a> 
                <a class="text-secondary text-decoration-none" href="https://www.instagram.com/lucianobucher"><img src="./img/Iconos redes sociales/Instagram.png" alt="Icono Instagram footer" class="iconoInstagram"></a>
                <a class="text-secondary text-decoration-none" href="https://wa.me/5491158902395"><img src="./img/Iconos redes sociales/WhatsApp.png" alt="Icono WhatsApp footer" class="iconoWhatsApp"></a>
              </div>
              
              </div>
              <div class="col-xs-12 col-md-6 col-lg-3">
                <p class="h4">Envíanos un comentario</p>
                <form method="post">
                  <input type="text" placeholder="Chorros hijos de puta!!!" name="mensajito">
                  <input type="submit" name="botoncitoMensaje">
                </form>
            </div>
    
            <div class="col-xs-12 pt-4">
              <p class="text-white text-center">Copyright - All rights reserved CC 2022</p>
            </div>
          </div>
        </div>	
       </div>
		

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</body>
</html>