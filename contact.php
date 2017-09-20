<!DOCTYPE html>
<html>
<head>
    <title>Mu-Shalom Musica para tu  Corazon</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
        <link type="image/x-icon" href="favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="favicon.ico" rel="shortcut icon" /> 
<!-- 

Sonic Template 

http://www.templatemo.com/tm-394-sonic 

-->
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
	<link rel="stylesheet" href="css/templatemo_style.css">
</head>
<body>
	
	<!-- This one in here is responsive menu for tablet and mobiles -->
    <div class="responsive-navigation visible-sm visible-xs">
        <a href="#" class="menu-toggle-btn">
            <i class="fa fa-bars fa-2x"></i>
        </a>
        <div class="navigation responsive-menu">
            <ul>
	            <li class="home"><a href="index.html">Home</a></li>
	            <li class="about"><a href="musica.html">Musica</a></li>
	            <li class="services"><a href="peliculas.html">Peliculas</a></li>
	            <li class="portfolio"><a href="radios.html">Radios</a></li>
                <li class="contact"><a href="http://www.biblia.es">Biblia</a></li>
	            <li class="contact"><a href="contact.php">Contact</a></li>
            </ul> <!-- /.main_menu -->
        </div> <!-- /.responsive_menu -->
    </div> <!-- /responsive_navigation -->

	<div id="main-sidebar" class="hidden-xs hidden-sm">
		<div class="logo">
			<a href="#"><h1>Mu-Shalom</h1></a>
			<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Musica Para tu Corazon</span>
		</div> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
	            <li class="home"><a href="index.html">Home</a></li>
	            <li class="about"><a href="musica.html">Musica</a></li>
	            <li class="services"><a href="peliculas.html">Peliculas</a></li>
	            <li class="portfolio"><a href="radios.html">Radios</a></li>
                <li class="contact"><a href="http://www.biblia.es">Biblia</a></li>
	            <li class="contact"><a href="contact.php">Contact</a></li>
	        </ul>
		</div> <!-- /.navigation -->

	</div> <!-- /#main-sidebar -->

	<div id="main-content">

		

		<div class="container-fluid">
			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Contact Us</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas">
                    		</div>
						</div> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row contact-form">
                    <?php
if (!isset($_POST['email-id'])) {
?>
                    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<div class="col-md-4">
						<label for="name-id" class="required">Nambre:</label>
						<input name="name-id" type="text" id="name-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="email-id" class="required">Email:</label>
						<input name="email-id" type="text" id="email-id" maxlength="40">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<label for="subject-id">Asunto:</label>
						<input name="subject-id" type="text" id="subject-id" maxlength="60">
					</div> <!-- /.col-md-4 -->
					<div class="col-md-12">
						<label for="message-id" class="required">Mensaje:</label>
						<textarea name="message-id" id="message-id" rows="6"></textarea>
					</div> <!-- /.col-md-12 -->
					<div class="col-md-12">
						<div class="submit-btn">
							<!--a href="#" class="largeButton contactBgColor">Send Message</a-->
                             <input type="submit" value="Send Message" />
						</div> <!-- /.submit-btn -->
					</div> <!-- /.col-md-12 -->
                    </form>
                    <?php
}else{
  $mensaje="Mensaje de tu pagina musicacristiana.pe.hu";
  $mensaje.= "\nNombre: ". $_POST['name-id'];
  $mensaje.= "\nEmail: ".$_POST['email-id'];
  $mensaje.= "\nAsunto: ".$_POST['subject-id'];
  $mensaje.= "\nMensaje: \n".$_POST['message-id'];
  $destino= "joseyana7@gmail.com";
  $remitente = $_POST['email-id'];
  $asunto = "Mensaje enviado por: ".$_POST['name-id'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <a href="#" class="largeButton contactBgColor">Mensaje enviado</a>
                
<?php
}
?>
				</div>
			</div> <!-- /#contact -->

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
									<li><a href="#" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-rss"></a></li>
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.first-footer -->
			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright">Copyright © 2084 <a href="#">MU-SHALOM</a>
                            </p>
						</div> <!-- /.col-md-6 -->
						<div class="col-md-6 credits">
							<p><!-- Design: <a rel="nofollow" href="http://www.templatemo.com/tm-394-sonic" target="_parent">Sonic</a> --></p>
						</div> <!-- /.col-md-6 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.bottom-footer -->
		</div> <!-- /.site-footer -->

	</div> <!-- /#main-content -->

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
          var mapOptions = {
            zoom: 13,
            center: new google.maps.LatLng(40.7809919,-73.9665273)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>
<!-- templatemo 394 sonic -->
</body>
</html>