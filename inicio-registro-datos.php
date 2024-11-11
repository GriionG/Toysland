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

		<title>Toy´s Land - Iniciar Sesion</title>

 		<!-- Google font -->
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
		var nombre = document.getElementById("txtNombre").value;
		var ap = document.getElementById("txtApPaterno").value;
		var am = document.getElementById("txtApMaterno").value;
		var nacf = document.getElementById("fecFecha").value;
		var tel = document.getElementById("txtTelCliente").value;
		var calle = document.getElementById("txtCalle").value;
		var num = document.getElementById("txtNumCasa").value;
		var col = document.getElementById("txtColonia").value;
		var cp = document.getElementById("txtCP").value;
		var ref = document.getElementById("txtReferencia").value;

		if (nombre.trim().length<1) 
		{
			alert("El campo nombre esta vacio");
			return false;
		}

		if (ap.trim().length<1)
		{
			alert("El campo apellido paterno esta vacio");
			return false;
		}

		if (am.trim().length<1) 
		{
			alert("El campo apellido materno esta vacio");
			return false;
		}

		if (nacf.trim().length<1) 
		{
			alert("El campo fecha de naciemiento esta vacio");
			return false;
		}

		if (tel.trim().length<1) 
		{
			alert("El campo telefono esta vacio");
			return false;
		}

		if (calle.trim().length<1) 
		{
			alert("El campo calle esta vacio");
			return false;
		}

		if (num.trim().length<1) 
		{
			alert("El campo numero de casa esta vacio");
			return false;
		}

	    if (col.trim().length<1) 
		{
			alert("El campo colonia esta vacio");
			return false;
		}

	    if (cp.trim().length<1) 
		{
			alert("El campo codigo postal esta vacio");
			return false;
		}

	    if (ref.trim().length<1) 
		{
			alert("El campo referencias esta vacio");
			return false;
		}

		return true;
	}

				
  function Nombres(){
                
	// Get our input reference.
	var Nom = document.getElementById('txtNombre');
	
	// Define our regular expression.
	var valido =  /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

	// Using test we can check if the text match the pattern
	if( valido.test(Nom.value) ){
		return true;
	}else{
		alert('Carracteres invalidos');
		return false;
	}
}

  function AP(){
  	var Apa = document.getElementById('txtApPaterno');

  	var valido =  /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

  	if( valido.test(Apa.value) ){
		return true;
	}else{
		alert('Carracteres invalidos');
		return false;
	}
  }

  function AM(){
  	var Ama = document.getElementById('txtApMaterno');

  	var valido =  /^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;

  	if( valido.test(Ama.value) ){
		return true;
	}else{
		alert('Carracteres invalidos');
		return false;
	}
  }

  function soloLetras(e) {
  	key = e.keyCode || e.which;
  	tecla = String.fromCharCode(key).toLowerCase();
  	letras = "áéíóabcdefghijklmnñopqrstuvwxyz";
  	especiales = "8-37-39-46";

  	tecla_especial = false
  	for(var i in especiales){

  		if (key == especiales[i]) {
  			tecla_especial = true;
  			break;
  		}
  	}

  	if (letras.indexOf(tecla)==-1 && !tecla_especial) {
  		alert ("Favor de ingreser solo letras");
  		return false;
  	}
  }

  function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patrón de entrada, en este caso solo acepta numeros y letras
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


 function cancelar(){
 window.location = "index.php"; 
}

			</script>

    </head>
	<body>
		<?php 
          require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();
    //Comprarobar que jale | $result = $obj->Ejecutar_Instruccion("select * from categorias");
         $result = $obj->Ejecutar_Instruccion("select * from tblclientes");
        

        if (isset($_POST['btninsertar'])){
        $IDClientes = $_POST['txtIDClientes'];
        $Nombre = $_POST['txtNombre'];
        $AP = $_POST['txtApPaterno'];
        $AM = $_POST['txtApMaterno'];
        $FechaNac = $_POST['fecFecha'];
        $NumeroT = $_POST['txtTelCliente'];
        $Calle = $_POST['txtCalle'];
        $NumeroC = $_POST['txtNumCasa'];
        $Colonia = $_POST['txtColonia'];
        $CP = $_POST['txtCP'];
        $Referencia = $_POST['txtReferencia'];
        
        
        $obj->Ejecutar_Instruccion("insert into tblclientes(Nombre, ApPaterno, ApMaterno, Fecha, TelCliente, Calle, NumCasa, Colonia, CP, Referencias, IDUsuario) values ('$Nombre','$AP','$AM','$FechaNac','$NumeroT','$Calle','$NumeroC','$Colonia','$CP','$Referencia','".$_SESSION['IDUsuario']."')");

       $datos = $obj->Ejecutar_Instruccion("Select * from tblusuario where IDUsuario = '".$_SESSION['IDUsuario']."'" );

    	if (@$datos[0][0]>0) {
    		echo "<script>alert('Bienvenido')</script>";
    		$_SESSION['IdUsuario'] = $datos[0][0];
    		$_SESSION['Correo'] = $datos[0][1];
    		$_SESSION['Contraseña'] = $datos[0][2];
    		$_SESSION['Privilegio'] = $datos[0][3];

        echo '<script>window.location = "index.php"; </script>';

        }
}
		?>

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +52 878 145 3747</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> ToysLand@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Bahía Escondida, Las palmas #322 </a></li>
					</ul>
					<ul class="header-links pull-right">
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
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
			<nav id="navigation">
			<!-- container rayita roja -->
			<div class="container">
			</div>
			<!-- /container -->
		</nav>
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Datos</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Inicio</a></li>
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
								<h3 class="title">Datos personales</h3>
							</div>
							<form action="inicio-registro-datos.php" id="frminsertar" name="frminsertar" method="POST" autocomplete="off" onsubmit="return validar()">
							<div class="form-group">
								<input class="input" type="hidden" name="txtIDClientes" placeholder="IDClientes">
							</div>
							<div class="form-group">
								<label>Nombre</label> 
								<input class="input" type="text" name="txtNombre" id="txtNombre" maxlength="30" placeholder="Nombre" onblur="javascript: Nombres(this.value)">
							</div>
					        <div class="form-group">
					        	<label>Apellido Paterno</label> 
								<input class="input" type="text" name="txtApPaterno" id="txtApPaterno" maxlength="30" placeholder="Apellido Paterno" onblur="javascript: AP(this.value)">
							</div>
							<div class="form-group">
								<label>Apellido Materno</label> 
								<input class="input" type="text" name="txtApMaterno" id="txtApMaterno" maxlength="30" placeholder="Apellido Materno" onblur="javascript: AM(this.value)">
							</div>
							<div class="form-group">
								<label>Fecha de Nacimiento</label> 
         		            <input type="Date" name = "fecFecha" id="fecFecha" class="input" min="1950-01-01" max="2012-12-31" placeholder="Fecha de Naciemiento" >
				            </div>
							<div class="form-group">
								<label>Teléfono</label> 
								<input class="input" type="text" name="txtTelCliente" id="txtTelCliente" pattern="[0-9]+" maxlength="10" minlength="10" placeholder="Telefono" onkeypress="return check(event)">
							</div>
							<br>
							<h3 class="title">Datos de Domicilio</h3>
					        <div class="form-group">
					        	<label>Calle</label> 
								<input class="input" type="text" name="txtCalle" id="txtCalle" maxlength="30"   placeholder="Calle">
							</div>
				            <div class="form-group">
				            	<label>Número de Casa</label> 
								<input class="input" type="text" name="txtNumCasa" id="txtNumCasa"  maxlength="5"
								minlength="1" pattern="[0-9]+" placeholder="Numero de Casa" >
							</div>
                            <div class="form-group">
                            	<label>Colonia</label> 
								<input class="input" type="text" name="txtColonia" id="txtColonia" maxlength="30"   placeholder="Colonia">
							</div>

				            <div class="form-group">
				            	<label>Código Postal</label> 
								<input class="input" type="text" name="txtCP" id="txtCP" pattern="[0-9]+" maxlength="5" minlength="5" placeholder="Codigo Postal" onkeypress="return check(event)">
							</div>
				            <div class="form-group">
				            	<label>Referencias</label> 
								<input class="input" type="text" name="txtReferencia" id="txtReferencia" maxlength="200"  placeholder="Referencia">
							</div>

						</div>
						<div  class="formulario__grupo esp-arr margenabj1em">
                    		<input type="submit" class="btn green-btn form-group esp-arr" id="btninsertar" name="btninsertar" value="Guardar" >
                    		<input type="submit" class="btn red-btn form-group esp-arr" id="btnomitir" name="btnomitir" value="Omitir" onclick="cancelar()">
                    	</div>
                    		</div>
         
                    
                    </form>
					</div>	
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

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
