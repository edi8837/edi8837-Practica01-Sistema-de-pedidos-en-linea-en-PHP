
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <script type="text/javascript" src="../../../public/controlador/validarregistro.js"></script>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../../../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../../../css/style.css">    
      
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../../css/custom.css">
    <link rel="stylesheet" href="../../../css/estilos.css">  

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="../../../images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>	
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Productos</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">Crear Productos</a>
								<a class="dropdown-item" href="blog-details.html">Modificar Productos</a>
								<a class="dropdown-item" href="blog-details.html">Eliminar  Productos</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">restaurantes</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="registrarRest.php">Crear Restaurantes</a>
								<a class="dropdown-item" href="blog-details.html">Modificar Restaurante</a>
								<a class="dropdown-item" href="blog-details.html">Eliminar  Rtaurante</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="cerrar seccion">cerar sececion</a></li>
						<li class="nav-item dropdown">
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
<body>
<br>


<section class="form-register">
<br>
<br>
<br>

  <h1><center> FORMULARIO REGISTRO </center></h1>
  <form class="formu" id="formulario01" method="POST" action="../controlador/registrarCliente.php"
      onsubmit="return validarCamposObligatorios()">
      <br>
      <labelfor="nombres">Nombres (*)</label><br>
      <input class="controls" type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ...
     " onkeyup="return validarLetrasN(this)"  />
      <span id="mensajeNombres" class="error"></span>
      <br>
      <label for="direccion">Direccion (*)</label><br>
      <input class="controls" type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección" />
      <span id="mensajeDirecion" class="error"></span>
      <br>
      <label for="telefono">Telefono (*)</label><br>
      <input class="controls" type="text" id="telefono" name="telefono" value="" placeholder="Ingrese su telefono"
       onkeyup="return validarTelefono(this)"  />
      <span id="mensajeTelefono" class="error"></span>
      <br>
      <br>


      <input class="botons"  type="submit" id="crear" name="crear" value="Crear" />

      <br>
  </form>
  <br>
 
</section>
<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">

					<div class="subscribe_form">
						<form class="subscribe_form">
							<p>
								Edisson Adrian Salinas Jara - Universidad Politécnica Salesiana <a class="celular" href="tel:+593083578838">(+593) 98 357 8838</a> <a class="mail" href="mailto:esalinasj@est.ups.edu.ec"> esalinasj@est.ups.edu.ec</a>
								<br/>&copy; Todos los derechos reservados
							</p>
							</footer>>
							
						
						</form>
					</div>
					
				</div>
			</div>
		</div>
		
	</footer>
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="../../../js/jquery-3.2.1.min.js"></script>
	<script src="../../../js/popper.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../../../js/jquery.superslides.min.js"></script>
	<script src="../../../js/images-loded.min.js"></script>
	<script src="../../../js/isotope.min.js"></script>
	<script src="../../../js/baguetteBox.min.js"></script>
	<script src="../../../js/form-validator.min.js"></script>
    <script src="../../js/contact-form-script.js"></script>
    <script src="../../../js/custom.js"></script>
</body>
</html>


