<?php 

session_start();

@$_SESSION['Privilegio'];


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


		<title>Toy's Land Reporte de Quejas</title>

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
            window.location = "QuejasA.php?id_eliminar=" + id;
        }
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
        $tblusuario = $obj ->Ejecutar_Instruccion("Select *from tblusuario");
						
        if (isset($_POST['btninsertar'])){
        $IDQueja = $_POST['txtIDQueja'];
        $IDUsuario = $_POST['lsttblusuario'];
        $Tipo = $_POST['frmTipo'];
        $DescQueja = $_POST['txtDescQueja'];

                     @$result = $obj->Ejecutar_Instruccion("insert into tblquejas (Tipo,IDQueja,DescQueja,IDUsuario) values ('$Tipo','$IDQueja','$DescQueja','$IDUsuario')");

        }
        

        else if (isset($_GET['id_eliminar']))
            {
                $id = $_GET['id_eliminar'];
                 $obj->Ejecutar_Instruccion("delete from tblquejas where IDQueja = '$id'");
            }

        if (isset($_POST['btnbuscar'])){
        $buscar = $_POST['txtbuscar'];
        $result = $obj->Ejecutar_Instruccion("select * from tblquejas where DescQueja like '$buscar%'");
        }
        else{
        $result = $obj->Ejecutar_Instruccion("select * from tblquejas");
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
						<li><a href="#"><i class="fa fa-envelope-o"></i> ToysLand@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Bahía Escondida, Las palmas 2 #322</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> MX</a></li>
						<li><a href="Perfil.php"><i class="fa fa-user-o"></i> Perfil</a></li>
						<li><a onclick="javascript: cerrar_sesion();" href="#"><i class="fa fa-power-off" ></i> Cerrar sesion</a></li>
						<?php 
    
    if (@$_SESSION['Privilegio']=='Admin') 

    {

	?>
						<li><a href="inicio-principal.php"><i class="fa fa-cog"></i>Admin</a></li>
						
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
						<li><a href="Registro-juguetes.php">Juguetes</a></li>
						<li class=""><a href="marcas.php">Marca</a></li>
						<li class=""><a href="proveedores.php">Proveedores</a></li>
						<li class=""><a href="Categorias.php">Categoría</a></li>
						<li class="active"><a href="QuejasA.php">Quejas</a></li>
						<li class=""><a href="Usuario.php">Usuario</a></li>
						<li class=""><a href="Cliente.php">Clientes</a></li>
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
						<h3 class="breadcrumb-header">Lista de Quejas</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Inicio</a></li>
							<li class="active">Lista de Quejas </li>
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

                        <!-- Billing Details --> 
                        <div class="col-md-6">
                            <div class="header-search">

<form action="QuejasG.php" id="frmbuscar" name="frmbuscar" method="POST">

        <input type="text" id="txtbuscar" name="txtbuscar" placeholder="Buscar Usuario" class="input">
        <input type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" class="btn blue-btn">

        </form>
    </div>
</div>
</div>
</div>
<!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row datos-cent">

                    <div class="col-md-12">
                        <!-- Billing Details -->

        <table class="table" >
            <thead>
            <tr border="1">
                    <th>IDUsuario</th>
                    <th>IDQuejas</th>
                    <th>Tipo</th>
                    <th>Descripcion de Queja</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (@$result as $renglon) { ?>
                <tr>
                    <td><?php echo $renglon['IDUsuario']; ?></td>
                    <td><?php echo $renglon['IDQueja']; ?></td>
                    <td><?php echo $renglon['Tipo']; ?></td>
                    <td><?php echo $renglon['DescQueja']; ?></td>
                    <td><button type="button" class="btn green-btn editbtn" data-toggle="modal" data-target="#editar"> Contestar </button> </td>
                    <td><input type="button" class="btn red-btn" id="btnbuscar" name="btnbuscar" value="Eliminar" onclick="javascript: eliminar('<?php echo $renglon['IDQueja']; ?>');"></td>

                    </tr>
                <?php } ?>
                </tbody>
        </table>
    </form>
                     </div>
                     <!-- /Billing Details -->
                   </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->


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
                                    <li><a href="Contacto.php">Contáctanos</a></li>
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
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!--formulario-->
      	<form action="editar.php" method="POST">
      		<input type="hidden" name="id" id="update_id">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDUsuario" id="id" placeholder="IDUsuario" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="txtCorreo" id="corr" placeholder="Correo" >
							</div>
							<div class="form-group">
								<input class="input" type="text" name="txtContraseña" id="Contra" placeholder="Contraseña" >
							</div>
							<div>
								<select class="input" type="text" name="frmPrivilegio" id="priv" placeholder="Privilegio" required>
									    <option disabled selected >Privilegio</option>
									    <option value = "Admin">Admin</option>
            	                        <option value = "Moderador">Moderador</option>
            	                        <option value = "Usuario">Usuario</option>
            	                </select>
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
	$('#corr').val(datos[1]);
	$('#Contra').val(datos[2]);
	$('#priv').val(datos[3]);
});	
</script>


		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<?php } ?>
	</body>
</html>
