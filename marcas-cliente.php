<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Toy´s Land - Marcas</title>
		<!-- icono de la pagina-->
        <link rel="icon" type="image/x-icon" href="img/logo_tl.ico" />

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<?php 
			require 'bd/conexion_bd.php';
			$obj = new BD_PDO();
			$marcas = $obj->Ejecutar_Instruccion("SELECT * FROM tblmarca");
		?>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container-fluid">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>  +52 878 145 3747</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Sparks.ToysLand@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Bahía Escondida, Las palmas 2 #322</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> MX</a></li>
						<?php 
	
	if (@$_SESSION['Privilegio']=='Usuario' | @$_SESSION['Privilegio']=='Admin') 

	{

	?>
						<li><a href="Perfil.php"><i class="fa fa-user-o"></i> Perfil</a></li>
							<?php } ?>
							
		<?php 
	
	if (@$_SESSION['Privilegio']=='Usuario' | @$_SESSION['Privilegio']=='Admin') 

	{

	?>						
						<li><a onclick="javascript: cerrar_sesion();" href="#"><i class="fa fa-power-off" ></i> Cerrar sesion</a></li>
						<?php } ?>
						
						<?php 
	
	if (@$_SESSION['Privilegio']=='Admin' |  @$_SESSION['Privilegio']=='Moderador') 

	{

	?>
						<li><a href="inicio-principal.php"><i class="fa fa-cog"></i>Admin</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->


			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logoTL.png" id="logo-TLheader">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Categorías</option>
                                        <option value="1">Mesa</option>
                                        <option value="1">De Acción</option>
                                        <option value="1">De Bebes</option>
                                        <option value="1">Para Armar</option>
                                        <option value="1">Lanzadores</option>
									</select>
									<input class="input" placeholder="Busca aqui">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!-- Wishlist -->
                                <div>
                                    <a href="#">
                                        <i class="fa fa-heart-o"></i>
                                        <span>Favoritos</span>
                                        <div class="qty">2</div>
                                    </a>
                                </div>
                                <!-- /Wishlist -->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Carrito</span>
                                        <div class="qty">3</div>
                                    </a>
                                    <div class="cart-dropdown" id="cart">
                                        <div class="cart-list">
                                            <div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/J1.jpg" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">McFarlane Toys DC Batman: The Batman (película) Figura de acción</a></h3>
                                                    <h4 class="product-price"><span class="qty">1x</span>$799.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>
											<div class="product-widget">
                                                <div class="product-img">
                                                    <img src="./img/J2.jpg" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <h3 class="product-name"><a href="#">Mattel Star Wars, Figura Yoda de The Child</a></h3>
                                                    <h4 class="product-price"><span class="qty">2x</span>$749.00</h4>
                                                </div>
                                                <button class="delete"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                        <div class="cart-summary">
                                            <small>3 Objetos Seleccionados</small>
                                            <h5>SUBTOTAL: $1498.00</h5>
                                        </div>
                                        <div class="cart-btns">
                                            <a href="#">Ver Carrito</a>
                                            <a href="#">Pagar<i class="fa fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart -->
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
                                    <a href="#">
                                        <i class="fa fa-bars"></i>
                                        <span>Menu</span>
                                    </a>
                                </div>
                                <!-- /Menu Toogle -->
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li><a href="productos.php">Productos</a></li>
						<li class="active"><a href="marcas-cliente.php">Marca</a></li>
						<li><a href="Contacto.php">Contacto</a></li>
						<li><a href="Quejas.php">¿Estás inconforme?</a></li>	
						<li><a href="inicio-sesion.php">Inicio de sesión</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Marcas</h3>
						<ul class="breadcrumb-tree">
							<li><a href="blank.html">Inicio</a></li>
							<li class="active">Marcas</li>
						</ul>
					</div>
				</div>

				<!-- /row -->

			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<?php foreach ($marcas as $renglon) { ?>
							<!-- Productos con foreach -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img height="200px" width="200px" src="<?php echo $renglon['ImgMarc'];?>">
										<div class="product-label">
											<!--
											<span class="sale">-30%</span>>
											<span class="new">NEW</span>
											-->
										</div>
									</div>
									<div class="product-body">
										<h3 class="product-name"><a href="#"><?php echo $renglon['NombreMarca']; ?></a></h3>
										
										<div class="product-btns">
											
											
										</div>
									</div>
									
								</div>
							</div>
							<!-- /product -->
						<?php } ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Mandanos tus  <strong>sugerencias</strong></p>
							<form>
								<input class="input" type="email" placeholder="Ingresa tu correo">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Enviar</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Contacto</h3>
								<p>Somos una juguetería que se dedica a hacer realidad los deseos de tus niños. Ven y regálales eso que los hará tan felices.</p>
								<ul class="footer-links">
									<li><a href="https://goo.gl/maps/i95vSSLMcFxAo5aU7"><i class="fa fa-map-marker"></i>Bahía Escondida, Las palmas 2 #322, CP. 26070, Piedras Negras, Coahuila, México.</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+52 878 145 3747</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>ToysLand@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Categorias</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Juegos de mesa</a></li>
                                    <li><a href="#">Figuras de Acción</a></li>
                                    <li><a href="#">Juegetes para Bebés</a></li>
                                    <li><a href="#">De construcción</a></li>
                                    <li><a href="#">Lanzadores</a></li>
                                </ul>
                            </div>
                        </div>

						<div class="clearfix visible-xs"></div>

                        <div class="col-md-3 col-xs-6">
                            <div class="footer">
                                <h3 class="footer-title">Información</h3>
                                <ul class="footer-links">
                                    <li><a href="#">Sobre Nosotros</a></li>
                                    <li><a href="#">Contáctanos</a></li>
                                    <li><a href="#">Políticas de Privacidad</a></li>
                                    <li><a href="#">Pedidos</a></li>
                                    <li><a href="#">Términos y Condiciones</a></li>
                                </ul>
                            </div>
                        </div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="#">Mi Cuenta</a></li>
                                    <li><a href="#">Ver Carrito</a></li>
                                    <li><a href="#">Favoritos</a></li>
                                    
                                    <li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
            <div id="bottom-footer" class="section">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12 text-center ">
                            
                            <span class="copyright ">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Resevados | <i class="fa fa-heart-o" aria-hidden="true"></i> por Toys' Land </a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>
                        </div>
                    </div>
                        <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
