<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/ciuad.css">
</head>
<body>
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
        <li> <a href="Inicio de Session.php">INICIO DE SESSION</a></li>  
      </ul>
    </nav>
  </header>



<section class="hero_inicio" id="hero_inicio">
    <h2 class="hero_header_inicio">GENETE <span class="light_inicio">Y CIUDAD</span></h2>
    <p class="tagline_inicio">
   Buscamos marcar un punto de partida para la transformación de nuestras
   dificultades y diferencias en cimientos firmes que, desde las ciudades,
   requieren nuestros países latinoamericanos para convertirse en los mejores
   lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino
   por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de
   vida y asegurar los derechos de las futuras generaciones.</p>
  </section>
	<div> <h1 id="hello1">Welcome ADMIN</h1></div>
	
	
	<div class="row">

	<div class="column2_inicio">
		
		<div class="vertical-menu">
			<a href="php/logout.php">LOGOUT</a>
		  <a href="php/admin.php">Manager Profile</a>
		  <a href="manager_add_events.html"> Add Events</a>
		  <a href="manager_add_discussions.php" class="active">Add Discussions</a>
		  <a href="manager_add_team.html">Add Team</a>
		  
		  
		</div>
		
		</div>

	<div class="column2_inicio">
		
		<form action="php/adddiscussion.php" method="post">
  <label for="e_name">Discussion name:</label><br>
  <input type="name" id="e_name" name="discussion_name" value=""><br>
  
	<label for="w_name">Discussion date:</label><br>
  <input type="date" id="w_name" name="discussion_date" value=""><br>
	
	<label for="b_content">Discussion time:</label><br>
  <input type="time"  name="discussion_time" value=""><br>
	
	<label for="e_description">Short Description:</label><br>
  <input type="text" id="b_content" name="discussion_description" value=""><br><br>
	
  <input type="submit" value="Add Discussion">
</form>
		
</div>


	<div class="column2_inicio">
  		

	</div>


</div>
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