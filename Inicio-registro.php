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

		<title>Toy´s Land - Iniciar Sesion</title>

		<!-- Normalize -->
		<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

 		<!-- icono de la pagina-->
        <link rel="icon" type="image/x-icon" href="img/logo_tl.ico" />

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

<script>

  function validar()
    {
        var correo = document.getElementById("txtCorreo").value;
        var contra = document.getElementById("txtContraseña").value;

        if (correo.trim().length<1) 
        {
            alert("El campo del correo esta vacio");
            return false;
        }

        if (contra.trim().length<1) 
        {
            alert("El campo de la contraseña esta vacio");
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
		alert('El correo es invalido | ejemplo: example@gmail.com');
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
		alert('El correo es invalido | ejemplo: example@gmail.com');
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

function cancelar(){
 window.location = "inicio-sesion.php"; 
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
        @$IDUsuario = $_POST['txtIDUsuario'];
        @$Correo = $_POST['txtCorreo'];
        @$Contraseña = $_POST['txtContraseña'];
        @$Privilegio = "Usuario";

        $datos = $obj->Ejecutar_Instruccion("insert into tblusuario (Correo, Contraseña, Privilegio) values('$Correo','$Contraseña','$Privilegio')");

$datos = $obj->Ejecutar_Instruccion("Select * from tblusuario where Correo = '$Correo'");

        @$_SESSION['IDUsuario'] = $datos[0][0];
        @$_SESSION['Correo'] = $datos[0][1];
        @$_SESSION['Contraseña'] = $datos[0][2];
        @$_SESSION['Privilegio'] = $datos[0][3];

        
        echo '<script>window.location = "inicio-registro-datos.php"; </script>';
        }

        
        ?>
		
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
			<!-- container -->
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
						<h3 class="breadcrumb-header">Registro</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Inicio</a></li>
							<a href="index.php" class="logo">
						</a>
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
								<h3 class="title">Nuevo Registro</h3>
							</div>
							<form action="Inicio-registro.php" id="fromulario" name="frminsertar" method="POST" autocomplete="off" onsubmit="return validar()">
								<!--Correo-->
                            <div class="form-group">
                            	<label>Correo electrónico</label> 
							<input class="input" type="email" name="txtCorreo" id="txtCorreo"  maxlength="50" minlength="8"  placeholder="Correo" data-validation-required-message="Por favor ingresa tu usuario." 
  onblur="javascript: buscar_usuario(this.value);">
							</div>
							<!--Contaseña-->
							<div class="form-group">
								<label>Contraseña</label> 
							<input class="input" type="password" name="txtContraseña" id="txtContraseña" maxlength="50" minlength="8" placeholder="Contraseña" onblur="javascript: validaPass(this.value)">
							<input type="checkbox" name="cajita" onclick="mostrar()"> Mostrar contraseña
							</div>
							<a href="inicio-sesion.php"><label for="tab-1" >¿Ya tienes cuenta?</a></label>
						    </div>
                    	<div name="botones" class="formulario__grupo esp-arr margenabj1em" >
                    		<input type="submit" class="btn green-btn form-group esp-arr" id="btninsertar" name="btninsertar" value="Registrar">
                    		<input type="submit" class="btn red-btn form-group esp-arr" id="btncancelar" name="btncancelar" value="Cancelar" onclick="cancelar()">
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

		<!-- jQuery Plugins -->

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<!-- <script src="js/main.js"></script> -->

	</body>
</html>
