<?php  
	if(!isset($_SESSION)){
		session_start();
		if($_SESSION["session"] == "" || $_SESSION["session"] == "false"){ 
				header("http://localhost:8080/wear/login");
			}else{
				
			}		
	}
?>
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
	<link rel="stylesheet" href="../../assets/css/normalize.css"/> 
    <link rel="stylesheet" href="../../assets/css/foundation.min.css" />  
 	<link rel="stylesheet" href="../../assets/css/style.css"/> 

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
					<li class="active"><a href="http://localhost:8080/wear/">Salir</a></li>			
				</ul>
			</section>
		</div>		
	</nav>
	<section class="scroll-container" role="main">
		<div class="row">
	      	<div class="text-center large-12 columns">
	         	<h1 class="center">Bienvenido a mi cuenta Keple & Ikut</h1>
	      	</div>			
		</div>
	</section>

	<!-- script -->
	<script type="text/javascript" src="../../assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../../assets/js/foundation.min.js"></script>

</body>
</html>