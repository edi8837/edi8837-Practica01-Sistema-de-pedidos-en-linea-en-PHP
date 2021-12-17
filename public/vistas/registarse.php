<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Formulario de Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="../controlador/validarregistro.js"></script>
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    
<section class="form-register">
  <h1><center> FORMULARIO REGISTRO </center></h1>
  <form class="formu" id="formulario01" method="POST" action="../controlador/registrarCliente.php"
      onsubmit="return validarCamposObligatorios()">
      <br>
      <label for="cedula">Cedula (*)</label><br>
      <input class="controls"  type="text" id="cedula" name="cedula" value="" placeholder="Ingrese su número de cédula"
          onkeyup="return validarCedula(this)" />
      <span id="mensajeCedula" class="error"></span>
      <br>

      <label for="nombres">Nombres (*)</label><br>
      <input class="controls" type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ...
     " onkeyup="return validarLetrasN(this)" onblur="validarDosNombres()" />
      <span id="mensajeNombres" class="error"></span>
      <br>
      <label for="apellidos">Apelidos (*)</label><br>
      <input class="controls" type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos ...
      " onkeyup="return validarLetrasA(this)" onblur="validarDosApellidos()" />
      <span id="mensajeApellidos" class="error"></span>
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


      <label for="correo">Correo Electrónico (*)</label><br>
      <input class="controls" class="largos" type="email" id="correo" name="correo" value=""
          placeholder="Ingrese su correo electrónico" onkeyup="validarCorreo(this)" />
      <span id="mensajeCorreo" class="error"></span>
      <br>

      <label for="contrasena">Contraseña (*)</label><br>
      <input class="controls" type="password" id="contrasena" name="contrasena" value="" placeholder="Ingrese su contraseña"
          onkeyup="return validarPassword(this)" onblur="validarCaracteres()" />
          
      <span id="mensajeContra" class="error"></span>
      <br>

      <label for="rol">Rol Usuario (*)</label></br>

      <select class="controls" class="select" id="rol" name="rol">
          <option>R</option>
          <option>C</option>
      </select>
      <span id="mensajerol" class="error"></span>
      <br>


      <input class="botons"  type="submit" id="crear" name="crear" value="Crear" />
      
      <p><a href="index.html">¿Ya tengo Cuenta?</a></p>
      <br>
  </form>
  <br>
 
</section>
<footer class="footer-area bg-f">
		<div class="container">
			

					<div class="subscribe_form">
						<form class="subscribe_form">
							<p><center>
								Edisson Adrian Salinas Jara - Universidad Politécnica Salesiana <a class="celular" href="tel:+593083578838">(+593) 98 357 8838</a> <a class="mail" href="mailto:esalinasj@est.ups.edu.ec"> esalinasj@est.ups.edu.ec</a>
								<br/>&copy; Todos los derechos reservados
							</p>
						</center>
							</footer>>
							
						
						</form>
					</div>
					
				</div>
			
		</div>
		
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="../../js/jquery-3.2.1.min.js"></script>
	<script src="../../js/popper.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="../../js/jquery.superslides.min.js"></script>
	<script src="../../js/images-loded.min.js"></script>
	<script src="../../js/isotope.min.js"></script>
	<script src="../../js/baguetteBox.min.js"></script>
	<script src="../../js/form-validator.min.js"></script>
    <script src="../../js/contact-form-script.js"></script>
    <script src="../../js/custom.js"></script>
</body>

</html>