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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


		<title>Toy´s Land - Registro de usuarios</title>
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
 						    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
  function validar()
    {
        var correo = document.getElementById("txtCorreo").value;
        var contra = document.getElementById("txtContraseña").value;
        var priv = document.getElementById("frmPrivilegio").value;

        if (correo.trim().length<1) 
        {
            alert("El campo del correo esta vacio");
            return false;
        }

        if (contra.trim().length<1) 
        {
            alert("El campo contraseña esta vacio");
            return false;
        }
        
         if (priv.trim().length<1) 
        {
            alert("El campo privilegio esta vacio");
            return false;
        }
        
      $.getJSON("datos.php?IDUsuario=" + id).done(function(datos)  
    {
      if (datos[0][0]>0) 
      {
        alert("Usuario ya existe, inserte otro correo");
        document.getElementById('txtCorreo').value='';
      }
        
    });  
    
    // Get our input reference.
	var emailField = document.getElementById('txtCorreo');
	
	// Define our regular expression.
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	// Using test we can check if the text match the pattern
	if( validEmail.test(emailField.value) ){
		return true;
	}else{
		alert('El correo es invalido | ejamplo: Jose123@gmail.com');
		return false;
	}
        
        	var pass = document.getElementById('txtContraseña');

	var  validPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/  ;

	if( validPass.test(pass.value) ){
		return true;
	}else if (pass.length < 8) {
		alert('La contraseña debe de tener al menos 8 caracteres');
		return false;
	}else{
		alert('La contraseña debe de tener al menos una mayuscula, una minuscula, un numero y al menos 8 caracteres | ejamplo: ABCabc12');
		document.getElementById('txtContraseña').value='';
		return false;
	}

}

function mostrar(){
    var pass = document.getElementById('txtContraseña');
    if (pass.type==="password") {
        pass.type="text";
    }else{
        pass.type="password";
    }


        return true;
    }

function buscar_usuario(id)
{
  $.getJSON("datos.php?IDUsuario=" + id).done(function(datos)  
    {
      if (datos[0][0]>0) 
      {
        alert("Usuario ya existe, inserte otro correo");
        document.getElementById('txtCorreo').value='';
      }
        
    });  
    
    // Get our input reference.
	var emailField = document.getElementById('txtCorreo');
	
	// Define our regular expression.
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	// Using test we can check if the text match the pattern
	if( validEmail.test(emailField.value) ){
		return true;
	}else{
		alert('El correo es invalido | ejamplo: Jose123@gmail.com');
		return false;
	}
}

function validateEmail(){
                
	// Get our input reference.
	var emailField = document.getElementById('txtCorreo');
	
	// Define our regular expression.
	var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

	// Using test we can check if the text match the pattern
	if( validEmail.test(emailField.value) ){
		return true;
	}else{
		alert('El correo es invalido | ejamplo: Jose123@gmail.com');
		return false;
	}
} 

function validaPass(){
	var pass = document.getElementById('txtContraseña');

	var  validPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,18}$/  ;

	if( validPass.test(pass.value) ){
		return true;
	}else if (pass.length < 8) {
		alert('La contraseña debe de tener al menos 8 caracteres');
		return false;
	}else{
		alert('La contraseña debe de tener al menos una mayuscula, una minuscula, un numero y al menos 8 caracteres | ejamplo: ABCabc12');
		document.getElementById('txtContraseña').value='';
		return false;
	}

}

function mostrar(){
    var pass = document.getElementById('txtContraseña');
    if (pass.type==="password") {
        pass.type="text";
    }else{
        pass.type="password";
    }
}

function Editvalidar()
    {
        var correo = document.getElementById("corr").value;
        var privilegio = document.getElementById("priv").value;


        if (correo.trim().length<1) 
        {
            alert("El campo del correo esta vacio");
            return false;
        }

         if (correo.trim().length != correo.length) 
        {
            alert("Tienes espacios de mas en el correo");
            return false;
        }

          if (privilegio.trim().length<1) 
        {
            alert("El campo privilegio esta vacio");
            return false;
        }

        return true;
    }

function Edit_buscar_usuario(id)
{
  $.getJSON("validaciones/datos.php?IDUsuario=" + id).done(function(datos)  
    {
      if (datos[0][0]>0) 
      {
        alert("Usuario ya existe, inserte otro correo");
      }
        
    });  
}

	function cerrar_sesion()
		{
			if (confirm("¿Estas seguro de cerrar la sesion")) {
				window.location = "cerrar_sesion.php"
			}
		}

function cancelar(){
 window.location = "Usuario.php"; 
}



</script>

    </head>
	<body>

		<?php
    
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();
    //Comprarobar que jale | $result = $obj->Ejecutar_Instruccion("select * from categorias");
        if (isset($_POST['btninsertar'])){
        $IDUsuario = $_POST['txtIDUsuario'];
        $Correo = $_POST['txtCorreo'];
        $Contraseña = $_POST['txtContraseña'];
        @$Privilegio = $_POST['frmPrivilegio'];
        @$result = $obj->Ejecutar_Instruccion("insert into tblusuario (Correo, Contraseña, Privilegio) values('$Correo','$Contraseña','$Privilegio')");
        echo '<script>window.location = "Usuario.php"; </script>';
        }
        else if (isset($_GET['id_eliminar']))
            {
                $id = $_GET['id_eliminar'];
                 $obj->Ejecutar_Instruccion("delete from tblusuario where IDUsuario = '$id'");
            }

        if (isset($_POST['btnbuscarC'])){
        $buscar = $_POST['txtbuscarCorr'];
        $result = $obj->Ejecutar_Instruccion("select * from tblusuario where Correo like '$buscar%' or Privilegio like '$buscar%'");
        }
        else{
        $result = $obj->Ejecutar_Instruccion("select * from tblusuario");
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
								
															
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Favoritos</span>
										<div class="qty">2</div>
									</a>
								</div>
								 <!--Wishlist -->

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
 
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav">
						<li class=""><a href="Registro-juguetes.php">Juguetes</a></li>
						<li class=""><a href="marcas.php">Marca</a></li>
						<li class=""><a href="proveedores.php">Proveedores</a></li>
						<li class=""><a href="Categorias.php">Categoría</a></li>
						<li class=""><a href="QuejasA.php">Quejas</a></li>
						<li class="active"><a href="Usuario.php">Usuario</a></li>
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
						<h3 class="breadcrumb-header">Registrar Usuario</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Inicio</a></li>
							<li class="active">Registrar Usuario </li>
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
								<h3 class="title">Datos Del Usuario</h3>
							</div>
							<form action="Usuario.php" id="frminsertar" name="frminsertar" method="POST" autocomplete="off"  onsubmit="return validar()">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDUsuario" id="txtIDUsuario" placeholder="IDUsuario" >
							</div>
							<div class="form-group">
								<label>Correo Electronico</label> 
								<input class="input" type="email" name="txtCorreo" id="txtCorreo" maxlength="100" minlength="8" placeholder="Correo"  data-validation-required-message="Por favor ingresa tu usuario." 
  onblur="javascript: buscar_usuario(this.value);">
							</div>
							<div class="form-group">
								<label>Contraseña</label> 
								<input class="input" type="password" name="txtContraseña" id="txtContraseña" maxlength="100" minlength="8" placeholder="Contraseña"  onblur="javascript: validaPass(this.value)">
							</div>
							<div>
								<label>Privilegio</label> 
								<select  name="frmPrivilegio" id="frmPrivilegio" class="input">
									    <option disabled selected value="" >Seleccione Privilegio</option>
									    <option value = "Admin">Admin</option>
            	                        <option value = "Moderador">Moderador</option>
            	                        <option value = "Usuario">Usuario</option>
            	                </select>
							</div>
							 <div name="botones" class="esp-arr margenabj1em" >
                    		<input type="submit" class="btn green-btn form-group esp-arr" id="btninsertar" name="btninsertar" value="Registrar" >
                    		<input type="submit" class="btn red-btn form-group esp-arr" id="btncancelar" name="btncancelar" value="Cancelar" onclick="cancelar()">
         
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

<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

						<!-- Billing Details --> 
						<div class="col-md-6">
							<div class="header-search">

<form action="Usuario.php" id="frmbuscar" name="frmbuscar" method="POST">
    	<input type="text" id="txtbuscarCorr" name="txtbuscarCorr" placeholder="Buscar Usuario" class="input">    
    	<input type="submit" id="btnbuscarC" name="btnbuscarC" value="Buscar" class="btn blue-btn">

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
					<th>Correo</th>
					<th>Privilegio</th>
				</tr>
				</thead>
				<tbody>
                <?php foreach (@$result as $renglon) { ?>			
				<tr>	
				    <td><?php echo $renglon['IDUsuario']; ?></td>
				    <td><?php echo $renglon['Correo']; ?></td>
				    <td><?php echo $renglon['Privilegio']; ?></td>
				    <td><button type="button" class="btn purple-btn editbtn" data-toggle="modal" data-target="#editar"> Modificar </button> </td>
				    <td><input type="button" class="btn red-btn" id="btnbuscar" name="btnbuscar" value="Eliminar" onclick="javascript: eliminar('<?php echo $renglon['IDUsuario']; ?>');"></td>
                        
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
									<li><a href="Perfil.php">Mi Cuenta</a></li>
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
        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<!--formulario-->
      	<form action="editarUsuario.php" method="POST" onsubmit="return Editvalidar()">
      		<input type="hidden" name="id" id="update_id">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDUsuario" id="id" placeholder="IDUsuario" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="txtCorreo" id="corr" placeholder="Correo"  onblur="javascript: Edit_buscar_usuario(this.value);">
							</div>
							<div>
								<select class="input" type="text" name="frmPrivilegio" id="priv" placeholder="Privilegio" required>
									    <option disabled selected value="" >Privilegio</option>
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
						$('#priv').val(datos[2]);
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
