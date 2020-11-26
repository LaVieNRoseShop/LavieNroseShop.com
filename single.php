<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="Shortcut Icon" href="images/mintorcha.png" type="image/x-icon"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


<title>LA LIBERTAD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body> 
<!-- banner -->
<div class="sub-banner">
		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a  href="index.html"><div class="logotipo"><h2>LA LIBERTAD</h3></div></a>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="hover-effect"><a href="index.html">Inicio</a></li>
						
						
				
				
					</ul>
				</div>

			</div>
		</nav>
</div>
<!-- banner -->
<!-- breadcrumbs -->
	<div class="agileits_breadcrumbs">
		<div class="container">
			<div class="agileits_breadcrumbs_left">
				<ul>
					<li><a href="index.html">Inicio</a><i>|</i></li>
					<li>Producto</li>
				</ul>
			</div>
			<div class="agileits_breadcrumbs_right">
				<h3>Producto</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
	<div class="blog">
		<div class="container">
			<div class="col-md-7 wthree_blog_left">
				
				<?php
                  if (@$_GET["id"]==false) {
                    $dato= 0;
                    }
                    else {
                    if ($_GET["id"]<=7) {
                    	$dato=$_GET["id"];
                    	}
                    if ($_GET["id"]>7) {
                         $dato =0;	
                      }		
                    }
                   require("php/conexion.php");

      	           $acentos = $con->query("SET NAMES 'utf8'");

                   $select="SELECT * FROM productos WHERE id='$dato'";
                    
                   

                   $sql=mysqli_query($con,$select);

                   $row = mysqli_fetch_assoc($sql);


                  echo "<div class='wthree_blog_left_grid'>
					<div class='wthree_blog_left_grid_slider'>
						<img src='images/catalogo/single/{$row['imagen']}' class='img-responsive' />
					</div>
					<h4>{$row['nombre']}</h4>
					<h3></h3>
					<ul>
						<li><span class='glyphicon glyphicon-user' aria-hidden='true'></span><a href='#'>Descripcion </a><i>|Detallada  </i></li>
					</ul>
					<p>{$row['descripcion']}</p>
				</div>
				";              
				?>
				<div class="agileits_share">
					
					</ul>
				</div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			     
			     <div class="agileits_reply">
					<h3 class="alert" style="color:#e91e63;">Comentarios</h3>
					<div class="fb-comments" data-href="<?php echo "http://localhost/web/single.php?id={$dato}"; ?>" data-numposts="5"></div>
				</div>
			</div>
			<div class="col-md-5 wthree_blog_right">
				<div class="w3ls_search">
				
				</div>
				<div class="w3l_categories">
					<h3>Otros productos</h3>
					<ul>
						<li><a href="single.php?id=0">Tarjetas</a></li>
						<li><a href="single.php?id=1">Pendones</a></li>
						<li><a href="single.php?id=2">volantes</a></li>
						<li><a href="single.php?id=3" >Sello</a></li>
						<li><a href="single.php?id=4">Factureros</a></li>
						<li><a href="single.php?id=5">rifas</a></li>
						
					</ul>
				</div>
				
				<div class="w3l_archives">
					<h3 style="margin-top: 200px;">Quienes somos?</h3>
<p>En 1990 nace LA LIBERTAD con una perspectiva de pequeña empresa. En principio utiliza una tecnología muy rudimentaria; poco a poco se va consolidando como una de las empresas de Artes Gráficas más eficaces, desarrollando su tecnología a partir de un gran esfuerzo por mantener la competitividad en el mercado.
Las antiguas máquina tipográfica manual y guillotina de manivela son cambiadas por una máquina de tipografía de aspas y una guillotina a motor. Pese a ser una pequeña empresa, LA LIBERTAD se propone jugar a ser grande y apostando por el riesgo y por el trabajo, comienza a incorporarse al nuevo universo que se abre para el mundo de las Artes Gráficas.
2º. Jorge -fundador de esta empresa- forma sociedad anónima con sus hijos en la época de agosto del 2000, y dota a su empresa de una solución de continuidad y una garantía de evolución para la empresa.
Se apuesta fuerte por la reconversión industrial, dotando a la empresa de nuevas máquinas de alta tecnología, aunque se mantiene la misma filosofía de producción: atención a todo tipo de públicos.
La línea de nuestros productos aparece mucho mejor presentada, más definida, más competitiva, mientras nos preparamos para poder ir dotando de una mayor infraestructura a la empresa: mayor capacidad, mayor rapidez y mayor calidad.
La base para poder desarrollar este tipo de trabajo es la misma que en los primeros tiempos: fe en el esfuerzo personal.
</p>
				</div>
				<div class="w3agile_flickr_posts">
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->	

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left-w3">
			<h4>Contactos</h4>
			<ul>
				<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
				<li><a href="mailto:example@mail.com"><h6>Jorgelibertad@hotmail.com</h6></a></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li><h6>+57 31343804</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
				<li><h6>Cra. 5 #18-50,Cali</h6></li>
			</ul>
			<ul>
				<li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
				<li><h6>(2) 8881121</h6></li>
			</ul>
		</div>
		<div class="col-md-5 footer-middle-w3">
			<h4>Todos los productos</h4>
			<div class="col-md-3 img-w3-agile">
				<a href="single.php?id=0"><img src="images/catalogo/tarjetas.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.php?id=1"><img src="images/catalogo/pendones.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.php?id=2"><img src="images/catalogo/volantes.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile">
				<a href="single.php?id=3"><img src="images/catalogo/sello.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.php?id=4"><img src="images/catalogo/factureros.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.php?id=5"><img src="images/catalogo/rifas.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.php?id=6"><img src="images/catalogo/carnet.jpg" alt=" " /></a>
			</div>
			<div class="col-md-3 img-w3-agile footer-middle-wthree">
				<a href="single.php?id=7"><img src="images/catalogo/aviso.jpg" alt=" " /></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 footer-right-w3">
			<a href="index.html">
			 
<div class="imagen-logo">
	
</div>		
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>&copy; 2018 La libertad  <a href="" target="_blank"> </a></p>
		</div>
	</div>
</div>
<div id="fb-root"></div>
<div id="fb-root"></div>

<!-- //footer -->
<script
  src="https://code.jquery.com/jquery-3.4.0.js">


  </script>


</script>


</body>

</html>