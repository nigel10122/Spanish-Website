<?php
session_start();
?>


<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio.html</title>
<link href="css/ciuad.css" rel="stylesheet" type="text/css">
<script src="javascript/ciudad.js" type="text/javascript"></script>	

</head>
<body>
<!-- Main Container -->
<div class="container_inicio"> 
  <!-- Navigation -->
  <header class="header_inicio"> <a href="">
    <img class="logo" src="images/Logotipo.png" alt="logo">
    </a>
    <nav>
      <ul>
        <li><a href="Inicio.php">INICIO</a></li>
        <li><a href="Nosotros.html">NOSOTROS</a></li>
        <li> <a href="Equipos.html">EQUIPOS</a></li>
		<li><a href="http://ndd9444.uta.cloud">BLOG</a></li>
        <li><a href="Contacto.html">CONTACTO</a></li>
        <li> <a class="active" href="#popup1">INICIO DE SESSION</a></li>  
      </ul>
    </nav>
  </header>
	
  <!-- Section  ###############################################HEADER-HOMEPAGE-LOGO-SECTION-START###################################################################-->
  <section class="hero_inicio" id="hero_inicio">
  <h2 class="hero_header_inicio">  GENETE <span class="light_inicio">Y CIUDAD</span></h2>
  <h4 class="tagline_inicio">
  <pre> 
 Buscamos marcar un punto de partida para la transformación de nuestras
 dificultades y diferencias en cimientos firmes que, desde las ciudades,
 requieren nuestros países latinoamericanos para convertirse en los mejores
 lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
 por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
 vida y asegurar los derechos de las futuras generaciones.</pre></h4>
  </section>
  <!-- Section  ###############################################HEADER-HOMEPAGE-LOGO-SECTION--END###################################################################-->	
  

	<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Inicio de <i id="col"> Sesion </i></h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
	<?php
			if(!isset($_SESSION['email']))
			{
				?>
			<form   name="inciciodesessionloginform" action="php/login.php"  method="post">
				<hr>
				<label>Correo</label>
				<p>
				<input id="iniciodesession_email"  type="email" name="email">
			</p>
				<label>Contrasena</label>
				<p>
				<input id="iniciodesession_password"  type="password"  name="password">
			</p>
			<hr>
			<button onClick="incio_desession_login()">ENVIAR</button> 
		    </form>
	<?php
				if(isset($_GET["feedback"]))
				 	echo $_GET["feedback"];
					
				   }
			?>
		</div>
	</div>
</div>  
	  
	  
	  
	  
	  
    
<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
  <!-- Footer Section -->
  <!-- Footer Section -->
  <section class="footer_main" id="contact_inicio">
    <h2 class="hidden">Footer Banner Section </h2>
	 <form method="post" action="php/subscribe.php">
    <h2 class="footer_header">Contactate con Nosotros</h2>
	<input id="subsrcibe" type="email" name="subscribe">
	<input value="ENVIAR" type="submit" name="submit" class="button">
		 </form> 
  </section>
	<div id="social_icons_footer">
		<a href="#"><img src="images/msg_footer.JPG" alt="msg"></a>
		<a href="#"><img src="images/twitter_footer - Copy.JPG" alt="twitter"></a>
		<a href="#"><img src="images/insta_footer.JPG" alt="insta"></a>
	
	
	</div>
  <!-- Copyrights Section -->
  <div class="copyright">Diazapps&copy;2020- <strong>All rights reserved</strong>
	</div>
	
</div>
<!-- Main Container Ends -->
</body>
</html>
