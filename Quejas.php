<?php 

 session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		<title>Toy´s Land - Registro de Quejas</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- icono de la pagina-->
        <link rel="icon" type="image/x-icon" href="img/logo_tl.ico" />


 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style1.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


<script>
	    function eliminar(id)
    {
        if(confirm("¿ Estás seguro de eliminar el registro ? "))
        {
            window.location = "Quejas.php?id_eliminar=" + id;
        }
    }
		function validar(){
				var DescQueja = document.getElementById("txtDescQueja").value;
				var Tipo = document.getElementById("frmTipo").value;

				if (DescQueja.trim().length<1) {
					alert("La Descripcion de Queja esta vacio");
					return false;
				}

				if (Tipo == "") {
					alert("La Seleccion de Queja esta vacio");
					return false;
				}

				return true;
			}

	function cancelar(){
		window.location="Quejas.php"
	}

    function cerrar_sesion()
		{
			if (confirm("¿Estas seguro de cerrar la sesion")) {
				window.location = "cerrar_sesion.php"
			}
		}

</script>

    </head>
	<body>

		<?php
    
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 

        $obj = new BD_PDO();
       //Comprarobar que jale | $result = $obj->Ejecutar_Instruccion("select * from tblquejas");


        @$Usuario = $obj->Ejecutar_Instruccion("Select * from tblusuario where IdUsuario='".$_SESSION['IdUsuario']."'" );

        @$_SESSION['IDClientes'] = $editar[0][0];
						
        if (isset($_POST['btninsertar'])){
        $IDQueja = $_POST['txtIDQueja'];
        $Tipo = $_POST['frmTipo'];
        $DescQueja = $_POST['txtDescQueja'];

        $obj->Ejecutar_Instruccion("insert into tblquejas (Tipo,DescQueja,IDUsuario) values ('$Tipo','$DescQueja','".$_SESSION['IdUsuario']."')");

        echo "<script>alert('La queja ha sido enviada a el adimn')</script>";



        }
        
        
     //pa que mires que jale | var_dump($result); 
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
										<option value="1">De Bebés</option>
										<option value="1">Para Armar</option>
										<option value="1">Lanzadores</option>
										</select>
									<input class="input" placeholder="Buscar Aquí">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- /Wishlist -->								
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Favoritos</span>
										<div class="qty">2</div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
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

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
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
						<li class=""><a href="index.php">Inicio</a></li>
						<li><a href="productos.php">Productos</a></li>
						<li><a href="marcas-cliente.php">Marca</a></li>
						<li><a href="Contacto.php">Contacto</a></li>
						<li class="active"><a href="Quejas.php">¿Estás inconforme?</a></li>
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
						<h3 class="breadcrumb-header">Registrar Quejas</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Inicio</a></li>
							<li class="active">Registrar de Quejas </li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section " >
			<!-- container -->
			<div class="container ">
				<!-- row -->
				<div class="row datos-cent">

					<div class="col-md-7">
						<!-- Billing Details -->
						
							<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Datos De la Quejas</h3>
							</div>

							<form action="Quejas.php" id="frminsertar" name="frminsertar" method="POST" autocomplete="off" onsubmit="return validar();">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDQueja" id="txtIDQueja" placeholder="IDQueja" required>
							</div>
							<div>
								<br>
								<label>Tipo de queja</label>
								<select class="input" type="text" name="frmTipo" id="frmTipo" placeholder="Tipo de Queja">
									    <option disabled selected value ="" >Tipo de queja</option>
									    <option value = "Fallo en la Pagina">Fallo en la Pagina</option>
            	                        <option value = "Problemas del Metodo de Pago">Problemas del Metodo de Pago</option>
            	                        <option value = "Problemas con el produto(s) que eligio">Problemas con el produto(s) que eligio</option>
            	                        <option value = "Problemas con el produto(s) que eligio">Mala calidad en su producto(s)</option>
            	                        <option value = "Otro">Otro</option>
            	                </select>
							</div>
							<br>
							<div class="form-group">
								<label>Descripción de la queja</label>
								<input class="input" type="text" name="txtDescQueja" id="txtDescQueja" placeholder="Descripcion de la queja" required>
							</div>
							<div name="botones" class="esp-arr margenabj1em" >
                    		<input type="submit" class="btn green-btn form-group esp-arr" id="btninsertar" name="btninsertar" value="Enviar">
                    		<button type="button" class="btn red-btn form-group esp-arr" id="btncancelar" name="btncancelar" onclick="javascript: cancelar();">Cancelar</button>
                    	</div>
						</form>
						<br><br>
					</div>
		            </div>
                    </div>
    				</div>
				<!-- /row -->
			</div>
			<!-- /container -->




				<!-- Rayita roja inferior-->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">

				
				<!-- row -->
			</div>
		</div>
        <!-- /Rayita roja inferior -->

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
									<li><a href="#"><i class="fa fa-map-marker"></i>Bahía Escondida, Las palmas 2 #322, CP. 26070, Piedras Negras, Coahuila, México.</a></li>
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
                                    <li><a href="Contacto.html">Contáctanos</a></li>
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
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los Derechos Resevados | <i class="fa fa-heart-o" aria-hidden="true"></i> por Toys' Land <a href="" target="_blank">Sparks Corp.</a>
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

		<!-- Modal Editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!--formulario-->
      	<form action="editar.php" method="POST">
      		<input type="hidden" name="id" id="update_id">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDQueja" id="id" placeholder="IDQueja" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="txtTipo" id="corr" placeholder="text" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="txtDescQueja" id="corr" placeholder="text" >
							</div>
						
							
							</div>
      <div class="modal-footer">
        <button type="button" class="btn red-btn" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn green-btn">Actualizar</button>
      </div>
      	</form>
      </div>
    </div>
  </div>
</div>


<script>

$('.editbtn').on('click',function () {

	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function() {
    return $(this).text();

	});
	$('#id').val(datos[0]);
	$('#nomC').val(datos[1]);

});	
</script>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		
	</body>
</html>
