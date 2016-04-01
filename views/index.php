<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Keple y Ikut Tecnologies está dedicada al desarrollo de software móvil o web.">
	<title>Keplet & Ikut</title>

	<!-- style -->
	<link rel="stylesheet" href="assets/css/normalize.css"/> 
    <link rel="stylesheet" href="assets/css/foundation.min.css" />  
 	<link rel="stylesheet" href="assets/css/style.css"/> 

</head>
<body class="antialiased hide-extra">
	<nav class="top-bar" data-topbar role="navigation">
		<div class="row">
			<ul class="title-area">
				<li class="name">
					<h1><a href="#">Keple & Ikut</a></h1>
				</li>
			</ul>

			<section class="top-bar-section">
				<ul>		
					<li class="active"><a href="http://localhost:8080/wear/">Inicio</a></li>				
					<li class=""><a href="http://localhost:8080/wear/login">LogIn</a></li>		
				</ul>
			</section>
		</div>		
	</nav>
	<section class="scroll-container" role="main">
		<div class="row">
	      	<div class="text-center large-12 columns">
	         	<h1 class="center">Bienvenido a Keple & Ikut</h1>
	      	</div>		
	      	<div class="large-12 columns">
	         	<div class="large-8 medium-8 columns">
	         		<h5>Inicia Sección</h5>
            		<hr>
			            <div class="large-8 medium-4">
			                  <label>Nombre</label>
			                  <input type="text" id="name">
			                  <small id="msg-name" class="error" style="display:none;"></small>
			            </div> 
			            <div class="large-8 medium-4">
			                  <label>Apellido</label>
			                  <input type="text" id="last">
			                  <small id="msg-last" class="error" style="display:none;"></small>			                  
			            </div> 
			            <div class="large-8 medium-4">
			                  <label>Cedula</label>
			                  <input type="text" id="cd">
			                  <small id="msg-cd" class="error" style="display:none;"></small>			                  
			            </div> 
			            <div class="large-8 medium-4">
			                  <label>Correo Eléctronico</label>
			                  <input type="text"id="email">
			                  <small id="msg-email" class="error" style="display:none;"></small>	
			            </div>
			            <div class="large-8 medium-4">
			                  <label>Contraseña</label>
			                  <input type="password"id="password">
			                  <small id="msg-password" class="error" style="display:none;"></small>	
			            </div>		            		            
			            <div class="row">
				            <div class="large-3 madium-2">
				            	<div class="large-2 medium-2 columns">
				            		<button href="#" class="small success button" id="save">Guardar</button>         
				            	</div>
				            	<div class="large-2 medium-2 columns">
				            		<button href="#" class="small alert button" id="cancel">Cancelar</button>         
				            	</div>
				            </div>			            	
			            </div>           		                       				            
	         	</div>
	         	<div class="large-4 medium-4 columns">
	         		<h5>Sugerencias</h5>
	         		<br>
	         		<div class="panel">
	         			<p>Colocar tus datos personales.</p>
	         			<ul>
	         				<li>Nombre</li>
	         				<li>Apellido</li>
	         				<li>Cedula</li>
	         			</ul>
	         			<a href="#" class="small info button">Ayuda</a>
	         		</div>
	         	</div>	         	
	      	</div>	
		</div>
	</section>

	<!-- script -->
	<script type="text/javascript" src="assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="assets/js/foundation.min.js"></script>
</body>
</html>