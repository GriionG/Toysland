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

		<title>Toy´s Land - Registro de producto</title>

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
 		<link rel="stylesheet" href="css/font-awesome.min.css"/>

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style1.css"/>

 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
		            window.location = "Registro-juguetes.php?id_eliminar=" + id;

		        }
		    }

		function cerrar_sesion()
		{
			if (confirm("¿Estas seguro de cerrar la sesion")) {
				window.location = "cerrar_sesion.php"
			}
		}

		function verificar_precio(){
			var cant = document.getElementById("txtcantidad").value;

			if (cant >= 0) {
				return true;
			}else if (cant < 0){
				alert("La cantidad no puede ser negativa");
				return false;
			}
		}
		
		function validaciones() {
			var codigo_barras = document.getElementById("txtcodbarras").value;
			var nombre = document.getElementById("txtnomprod").value;
			var desc_prod = document.getElementById("txtdescprod").value;
			var precio_compra = document.getElementById("txtpreciocompra").value;
			var precio_venta = document.getElementById("txtprecioventa").value;
			var existencia_prod = document.getElementById("txtexistencia").value;
			var imagen = document.getElementById("txtimagen").value; 
			var marca = document.getElementById("selmarca").value; 
			var categoria = document.getElementById("selcategoria").value; 
			var proveedor = document.getElementById("selproveedor").value; 

			

			if (codigo_barras.trim().length<1) {
				alert("El codigo de barras esta vacio");
				return false;
			}

			if (codigo_barras.length<13) {
				alert("El codigo de barras no cumple con la longitud de 13 caracteres");
				return false;
			}

			if (nombre.trim().length<1) {
				alert("El nombre del producto esta vacio");
				return false;
			}			

			if (desc_prod.trim().length<1) {
				alert("La descripcion del producto esta vacia");
				return false;
			}

			if (precio_compra.trim().length<1) {
				alert("El precio de compra del producto esta vacio");
				return false;
			}

			if (precio_venta.trim().length<1) {
				alert("El precio de venta del producto esta vacio");
				return false;
			}
			/*
			if (precio_compra > precio_venta) {
				alert("El precio de compra es mayor que el precio de la venta");
				return false;
			}

			if (precio_venta < precio_compra) {
				alert("El precio de venta no puede ser menor que el precio de compra");
				return false;
			} */

			if (existencia_prod.trim().length<1) {
				alert("La existencia del producto esta vacia");
				return false;
			}
	
			if (marca.trim().length<1) {
				alert("La marca del producto esta vacia");
				return false;
			}	
			
			if (categoria.trim().length<1) {
				alert("La categoria del producto esta vacia");
				return false;
			}	

			if (proveedor.trim().length<1) {
				alert("El proveedor del producto esta vacio");
				return false;
			}	

			return true;
		}

		function compmay(){
			var pcom = document.getElementById("txtpreciocompra").value;
			var pvent = document.getElementById('txtprecioventa').value;

			if ( pvent != "") {

			if ( pvent >  pcom) {
				return true;
			}else if(pcom > pvent){
				alert("El precio de compra es mayor que el precio de la venta");
				return false;
			}

		  }

		}

		function ventamen(){
			var pcom = document.getElementById("txtpreciocompra").value;
			var pvent = document.getElementById('txtprecioventa').value;


			//alert("El precio de compra es "+pcom +" "+ "El precio de venta es "+pvent);
			
			if ( pvent >  pcom) {
				return true;
			}
			else if (pcom > pvent) {
				alert("El precio de venta no puede ser menor a el precio de la compra");
				return false;
			} 

		}

		function fileValidation(){
		    var fileInput = document.getElementById('txtimagen');
		    var filePath = fileInput.value;
		    var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
		    if(!allowedExtensions.exec(filePath)){
		        alert('Porfavor seleccione un archivo que tenga las extensiones .jpeg/.jpg/.png/ solamente.');
		        fileInput.value = '';
		        return false;
		    }else{
		        //Image preview
		        if (fileInput.files && fileInput.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function(e) {
		            document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
		            };
		            reader.readAsDataURL(fileInput.files[0]);
		        }
		    }
		}

				function fileValidationmod(){
		    var fileInput = document.getElementById('img');
		    var filePath = fileInput.value;
		    var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
		    if(!allowedExtensions.exec(filePath)){
		        alert('Porfavor seleccione un archivo que tenga las extensiones .jpeg/.jpg/.png/ solamente.');
		        fileInput.value = '';
		        return false;
		    }else{
		        //Image preview
		        if (fileInput.files && fileInput.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function(e) {
		            document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
		            };
		            reader.readAsDataURL(fileInput.files[0]);
		        }
		    }
		}

		function verificar_producto(id)
		{
		  $.getJSON("validaciones/verificar_producto.php?p=" + id).done(function(datos)  
		    {
		      if (datos[0][0]>0) 
		      {
		        alert("Producto ya existe, verifique");
		      }        
		    });  
		} 

		function cancelar(){
				window.location = "Registro-juguetes.php"; 
		}

		function validacionesmod(){

			var codigo_barras = document.getElementById("codbarr").value;
			var nombre = document.getElementById("nomprod").value;
			var desc_prod = document.getElementById("descprod").value;
			var precio_compra = document.getElementById("pcompra").value;
			var precio_venta = document.getElementById("pventa").value;
			var existencia_prod = document.getElementById("exist").value;
			var imagen = document.getElementById("img").value; 
			var marca = document.getElementById("marca").value; 
			var categoria = document.getElementById("cate").value; 
			var proveedor = document.getElementById("prove").value; 

			if (codigo_barras.trim().length<1) {
				alert("El codigo de barras esta vacio");
				return false;
			}

			if (codigo_barras.length<13) {
				alert("El codigo de barras no cumple con la longitud de 13 caracteres");
				return false;
			}

			if (nombre.trim().length<1) {
				alert("El nombre del producto esta vacio");
				return false;
			}			

			if (desc_prod.trim().length<1) {
				alert("La descripcion del producto esta vacia");
				return false;
			}

			if (precio_compra.trim().length<1) {
				alert("El precio de compra del producto esta vacio");
				return false;
			}

			if (precio_venta.trim().length<1) {
				alert("El precio de venta del producto esta vacio");
				return false;
			}
			/*
			if (precio_compra > precio_venta) {
				alert("El precio de compra es mayor que el precio de la venta");
				return false;
			}

			if (precio_venta < precio_compra) {
				alert("El precio de venta no puede ser menor que el precio de compra");
				return false;
			} */

			if (existencia_prod.trim().length<1) {
				alert("La existencia del producto esta vacia");
				return false;
			}

			/*
			if (imagen.trim().length<1) {
				alert("La imagen del producto esta vacia");
				return false;
			} */

			
			if (marca.trim().length<1) {
				alert("La marca del producto esta vacia");
				return false;
			}	
			
			if (categoria.trim().length<1) {
				alert("La categoria del producto esta vacia");
				return false;
			}	

			if (proveedor.trim().length<1) {
				alert("El proveedor del producto esta vacio");
				return false;
			}	

			return true;	


		
		}


		function compmaymod(){
			var pcom = document.getElementById("pcompra").value;
			var pvent = document.getElementById('pventa').value;

			if ( pvent != "") {

			if ( pvent >  pcom) {
				return true;
			}else if(pcom > pvent){
				alert("El precio de compra es mayor que el precio de la venta");
				return false;
			}

		  }

		}

		function ventamenmod(){
			var pcom = document.getElementById("pcompra").value;
			var pvent = document.getElementById('pventa').value;


			//alert("El precio de compra es "+pcom +" "+ "El precio de venta es "+pvent);
			
			if ( pvent >  pcom) {
				return true;
			}
			else if (pcom > pvent) {
				alert("El precio de venta no puede ser menor a el precio de la compra");
				return false;
			} 

		}	



		</script>
		

    </head>
	<body>

		<!-- PHP -->

		<?php 

			require 'bd/conexion_bd.php';

			$obj = new BD_PDO();

				/* Traer datos de marca.categoria y proveedores */
				$lstmarca = $obj->Ejecutar_Instruccion("select * from tblmarca");
				$lstcategoria = $obj->Ejecutar_Instruccion("select * from tblcategoria");
				$lstproveedores = $obj->Ejecutar_Instruccion("select * from tblprovedores");
				/* var_dump($lstmarca); */
				/* var_dump($lstcategoria);*/

			 if (isset($_POST['btninsertar'])) {

			 	$codbarras = $_POST['txtcodbarras'];
				$nombreprod = $_POST['txtnomprod'];
				$descprod = $_POST['txtdescprod'];
				$precioC = $_POST['txtpreciocompra'];
				$precioV = $_POST['txtprecioventa'];
				$existencia = $_POST['txtexistencia'];
				@$imagen = $_POST['txtimagen'];
				$marca = $_POST['selmarca'];
				$categoria = $_POST['selcategoria'];
				$proveedor = $_POST['selproveedor'];

				// Ruta donde se concentraran las imagenes
				$dir_subida = 'img/subidas/';
				// Obtenemos el nombre del archivo a subir
				$nombre_archivo = basename($_FILES['txtimagen']['name']);
				// Se prepara una variable con la ruta y el nombre del archivo para subirlo
				$fichero_subido = $dir_subida . $nombre_archivo;
			
				if (move_uploaded_file($_FILES['txtimagen']['tmp_name'], $fichero_subido)) {
				
			    $result = $obj->Ejecutar_Instruccion("Insert into tblproductos(CodBarras,NomProd,DescProd,PrecioC,PrecioV,Existencia,Imagen,IDMarca,IDCategoria,IDProvedores) values('$codbarras','$nombreprod','$descprod','$precioC','$precioV','$existencia','$fichero_subido','$marca','$categoria','$proveedor') ");
			    
			    
			    echo '<script>window.location = "Registro-juguetes.php"; </script>';

				} 
				else {
				   echo "No se pudo mover el archivo\n";
				}

				
			} 
			else if (isset($_GET['id_eliminar']))
            {
                $id = $_GET['id_eliminar'];
                $obj->Ejecutar_Instruccion("delete from tblproductos where id_producto = '$id'");
                echo '<script>window.location = "Registro-juguetes.php"; </script>';
                
            }

			if (isset($_POST['btnbuscar'])){
	        $buscar = $_POST['txtbuscar'];
	        $result = $obj->Ejecutar_Instruccion("SELECT tblproductos.id_producto,tblproductos.CodBarras,tblproductos.NomProd,tblproductos.DescProd,tblproductos.PrecioC,tblproductos.PrecioV,tblproductos.Existencia,tblproductos.Imagen,tblproductos.IDMarca,tblmarca.NombreMarca,tblproductos.IDCategoria,tblcategoria.NomCategoria,tblproductos.IDProvedores,tblprovedores.NomProv FROM tblproductos INNER JOIN tblmarca ON tblproductos.IDMarca = tblmarca.IDMarca INNER JOIN tblcategoria ON tblproductos.IDCategoria = tblcategoria.IDCategoria INNER JOIN tblprovedores ON tblproductos.IDProvedores = tblprovedores.IDProvedores where NomProd like '$buscar%' or NombreMarca like '%$buscar%' ");
	        //$result = $obj->Ejecutar_Instruccion("select * from tblproductos where NomProd like '$buscar%'");
	        }
	        else{
	        $result = $obj->Ejecutar_Instruccion("SELECT tblproductos.id_producto,tblproductos.CodBarras,tblproductos.NomProd,tblproductos.DescProd,tblproductos.PrecioC,tblproductos.PrecioV,tblproductos.Existencia,tblproductos.Imagen,tblproductos.IDMarca,tblmarca.NombreMarca,tblproductos.IDCategoria,tblcategoria.NomCategoria,tblproductos.IDProvedores,tblprovedores.NomProv FROM tblproductos INNER JOIN tblmarca ON tblproductos.IDMarca = tblmarca.IDMarca INNER JOIN tblcategoria ON tblproductos.IDCategoria = tblcategoria.IDCategoria INNER JOIN tblprovedores ON tblproductos.IDProvedores = tblprovedores.IDProvedores");
	        }    

	        if (isset($_POST['btncancelar'])) {
	        	
	        	echo '<script>window.location = "Registro-juguetes.php"; </script>';
	        }

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
					<ul class="main-nav nav">
						<li class="active"><a href="Registro-juguetes.php">Juguetes</a></li>
						<li class=""><a href="marcas.php">Marca</a></li>
						<li class=""><a href="proveedores.php">Proveedores</a></li>
						<li class=""><a href="Categorias.php">Categoría</a></li>
						<li class=""><a href="QuejasA.php">Quejas</a></li>
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
						<h3 class="breadcrumb-header">Registrar producto</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Inicio</a></li>
							<li class="active">Registrar producto </li>
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
								<h3 class="title">Datos del producto</h3>
							</div>

							<form action="Registro-juguetes.php" onsubmit="return validaciones();" id="frminsertar" name="frminsertar" method="post"  enctype="multipart/form-data">

							<div class="form-group">
								<input class="input" type="hidden" name="txtidprod" id="txtidprod" placeholder="ID producto" >
							</div>

							<div class="form-group ">	
								<label>Código de barras</label> 			
								<input class="input" type="text" id="txtcodbarras" name="txtcodbarras" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Codigo de barras" pattern="[0-9]+"  minlength="13" maxlength="13"  >
							</div>

							<div class="form-group">
								<label>Nombre</label>
								<input class="input" type="text" id="txtnomprod" name="txtnomprod" placeholder="Nombre del producto" maxlength="50" onblur="javascript: verificar_producto(this.value)" >
							</div>

							<div class="form-group">
								<label>Descripcion</label>
								<textarea class="input" type="text" id="txtdescprod" name="txtdescprod" placeholder="Descripcion del producto"  maxlength="255"  ></textarea>
							</div>

							<div class="form-group">
								<label>Precio de compra</label>
								<input class="input" type="text" id="txtpreciocompra" name="txtpreciocompra" placeholder="Precio compra"  pattern="[0-9.]+" maxlength="10" onblur="compmay();">
							</div>

							<div class="form-group">
								<label>Precio de venta</label>
								<input class="input" type="text" id="txtprecioventa" name="txtprecioventa" placeholder="Precio venta" maxlength="10" onblur="ventamen();" pattern="[0-9.]+" >
							</div>

							<div class="form-group">
								<label>Existencia</label>
								<input class="input" type="text" id="txtexistencia" name="txtexistencia" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Existencia" pattern="[0-9]+"  maxlength="11"  >
							</div>

							<div class="form-group">
								<label>Imagen</label>
								<input class="input" type="file" accept="image/png,image/jpeg" id="txtimagen" name="txtimagen" onchange="return fileValidation()"/>
							</div>

							<div class="form-group">
								<label>Marca</label>
								<select class="input" id="selmarca" name="selmarca">
									<option value="">Seleccionar marca</option>
										<?php foreach ($lstmarca as $renglon) { ?>	
									<option value="<?php echo($renglon[0]) ?>"><?php echo $renglon[1]; ?></option>
										<?php } ?>
								</select>
							</div>

							<div class="form-group" name="categoriainput">
								<label>Categoria</label>
								<select id="selcategoria" name="selcategoria" class="input">
									<option value="">Seleccionar categoría</option>
										<?php foreach ($lstcategoria as $renglon) { ?>
									<option value="<?php echo($renglon[0]) ?>"><?php echo $renglon[1]; ?></option>
										<?php } ?>
								</select>
							</div>

							<div class="form-group" name="Proveedores">
								<label>Proveedor</label>							 
								<select class="input" id="selproveedor" name="selproveedor">
									<option value="">Seleccionar proveedor</option>
										<?php foreach ($lstproveedores as $renglon) { ?>							
									<option value="<?php echo($renglon[0]) ?>"><?php echo $renglon[1]; ?></option>
										<?php } ?>					
								</select>
							</div>

							<div name="botones" class="esp-arr margenabj1em" >
                    		<input type="submit" class="btn green-btn form-group esp-arr" id="btninsertar" name="btninsertar" value="Registrar">
                    		
                    		
                    		<input type="button" class="btn red-btn form-group esp-arr" id="btncancelar" name="btncancelar" value="Cancelar" onclick="cancelar()">
                    		</form>
                    	</div>
						
						<br><br>
					</div>
		            </div>
                    </div>
    				</div>
				<!-- /row -->
			</div>
			<!-- /container -->

<!-- SECTION -->

		<!-- Rayita roja inferior-->

		<!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->

                        <!-- Billing Details --> 
                        <div class="col-md-7">
                            <div class="header-search">


				<form action="Registro-juguetes.php" id="frmbuscar" name="frmbuscar" method="POST">
					
			    	<input class="input" type="text" id="txtbuscar" name="txtbuscar" placeholder="Buscar productos por nombre o marca">    
			    	<input class="blue-btn" type="submit" id="btnbuscar" name="btnbuscar" value="Buscar" >
			    		
				</form>

		 					</div>
						</div>
			</div>
		</div>
	<!-- SECTION -->


		<div class="section">

			<div class="container">
			<div class="row datos-cent">



			</div>

			</div>
			<div class="container-fluid">
				<div>
				
			<!-- container -->

						<table class="table table-striped" >
							<thead>
								
								<tr border="1">
									<th>ID Prod</th>
									<th>Código de barras</th>
									<th>Nom prod</th>
									<th>Descripción de producto</th>
									<th>Precio Compra</th>
									<th>Precio Venta</th>
									<th>Existencia</th>	
									<th>Imagen</th>
									<th class="hidden">ID Marca</th>
									<th>Marca</th>
									<th class="hidden">ID Categoria</th>
									<th>Categoria</th>
									<th class="hidden">ID Proveedores</th>
									<th>Proveedores</th>
								</tr>
							</thead>

							<tbody>
			                <?php foreach (@$result as $renglon) { ?>			
							<tr>	
							    <td><?php echo $renglon[0]; ?></td>
							    <td><?php echo $renglon[1]; ?></td>
							    <td><?php echo $renglon[2]; ?></td>
							    <td><?php echo $renglon[3]; ?></td>
							    <td><?php echo $renglon[4]; ?></td>
							    <td><?php echo $renglon[5]; ?></td>
							    <td><?php echo $renglon[6]; ?></td>
							    <td><img height="200px" width="200px" src="<?php echo $renglon[7];?>"><br><p class="hidden"></td>
							    <td class="hidden"><?php echo $renglon[8]; ?></td>
							    <td><?php echo $renglon[9]; ?></td>
							    <td class="hidden"><?php echo $renglon[10]; ?></td>
							    <td><?php echo $renglon[11]; ?></td>
							    <td class="hidden"><?php echo $renglon[12]; ?></td>
							    <td><?php echo $renglon[13]; ?></td>
							    <td><input type="button" class="btn red-btn" id="btnbuscar" name="btnbuscar" value="Eliminar" onclick="javascript:eliminar('<?php echo $renglon[0];?>');"><br><br>
			                        <button type="button" class="btn purple-btn editbtn" data-toggle="modal" data-target="#editar">Modificar</button> </td>
			                    </tr>
			                <?php } ?>
                </tbody>	
						</table>
					
				<!-- row -->
			
		</div>
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
								<label>Somos una juguetería que se dedica a hacer realidad los deseos de tus niños. Ven y regálales eso que los hará tan felices.</label>
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

				<!-- Modal Editar -->
						<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Editar producto</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">

				      	<!--formulario-->
				      	<form action="editarProductos.php" method="POST" enctype="multipart/form-data" onsubmit="return validacionesmod();">
				      		<input type="hidden" name="id" id="update_id">
								<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Datos del producto</h3>
							</div>
							<!-- Checar Magnolia -->
							<form action="Registro-juguetes.php" id="frminsertar" name="frminsertar" method="post">

							<div class="form-group">
								<input class="input" type="hidden" id="idprod" name="txtidprod" placeholder="ID producto" value="<?php echo($renglon[0]) ?>" required>
							</div>

							<div class="form-group">
								<label>Código de barras</label>
								<input class="input" type="text" id="codbarr" name="txtcodbarras" placeholder="Código de barras" minlength="13" maxlength="13" pattern="[0-9]+" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
							</div>

							<div class="form-group">
								<label>Nombre</label>
								<input class="input" type="text" id="nomprod" name="txtnomprod" placeholder="Nombre del producto" maxlength="50" onblur="javascript: verificar_producto(this.value)">
							</div>

							<div class="form-group">
								<label>Descripción</label>
								<textarea class="input" type="text" id="descprod" name="txtdescprod" placeholder="Descripcion del producto"  maxlength="255"></textarea>
							</div>

							<div class="form-group">
								<label>Precio de compra</label>
								<input class="input" type="text" id="pcompra" name="txtpreciocompra" placeholder="Precio compra" pattern="[0-9.]+"  onblur="compmaymod();">
							</div>

							<div class="form-group">
								<label>Precio de venta</label>
								<input class="input" type="text" id="pventa" name="txtprecioventa" placeholder="Precio venta" pattern="[0-9.]+" onblur="ventamenmod();">
							</div>

							<div class="form-group">
								<label>Existencia</label>
								<input class="input" type="text" id="exist" name="txtexistencia" placeholder="Existencia" pattern="[0-9]+" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
							</div>

							<div class="form-group">
								<label>Imagen</label>
								<input class="input" accept="image/png,image/jpeg" type="file" id="img" name="txtimagen" onchange="return fileValidationmod()">
							</div>

							<div class="form-group">
								<label>Marca</label>
								<select class="input" id="marca" name="selmarca" >
									<option value="">Seleccionar marca</option>
										<?php foreach ($lstmarca as $renglon) { ?>
									<option value="<?php echo($renglon[0]) ?>"> <?php echo $renglon[1]; ?> </option>
										<?php } ?>
								</select>
							</div>

							<div class="form-group" name="categoriainput">
								<label>Categoria</label>
								<select id="cate" name="selcategoria" class="input" >
									<option value="">Seleccionar categoría</option>
										<?php foreach ($lstcategoria as $renglon) { ?>
									<option value="<?php echo($renglon[0]) ?>"> <?php echo $renglon[1]; ?> </option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group" name="Proveedores">
								<label>Proveedor</label>
								<select class="input" id="prove" name="selproveedor" >
									<option value="">Seleccionar proveedor</option>
										<?php foreach ($lstproveedores as $renglon) { ?>
									<option value="<?php echo($renglon[0]) ?>"> <?php echo $renglon[1]; ?> </option>
										<?php } ?>					
								</select>
							</div>

							<div class="modal-footer datos-cent">
					        	<button type="button" class="btn red-btn" data-dismiss="modal">Cancelar</button>
					        	<button type="submit" class="btn green-btn">Actualizar</button>
					      	</div>

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
						
						$('#idprod').val(datos[0]);
						$('#codbarr').val(datos[1]);
						$('#nomprod').val(datos[2]);
						$('#descprod').val(datos[3]);
						$('#pcompra').val(datos[4]);
						$('#pventa').val(datos[5]);
						$('#exist').val(datos[6]);
						$('#marca').val(datos[8]);
						$('#cate').val(datos[10]);
						$('#prove').val(datos[12]);
					});	
					</script>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<!-- <script src="validaciones/validacionesproductos.js"></script> -->

        <?php } ?>
	</body>
</html>
