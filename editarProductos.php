<?php
        require 'bd/conexion_bd.php'; 
    //crear objeto 
        $obj = new BD_PDO();

        $id = $_POST['txtidprod'];
        $codbarras = $_POST['txtcodbarras'];
		$nombreprod = $_POST['txtnomprod'];
		$descprod = $_POST['txtdescprod'];
		$precioC = $_POST['txtpreciocompra'];
		$precioV = $_POST['txtprecioventa'];
		$existencia = $_POST['txtexistencia'];
		@$img = $_POST['txtimagen'];
		$marca = $_POST['selmarca'];
		$categoria = $_POST['selcategoria'];
		$proveedor = $_POST['selproveedor'];
		
		//echo "<script>alert('".basename($_FILES['txtimagen']['name'])."');</script>";
		//echo "<script>alert('".$img."');</script>";

		if (basename($_FILES['txtimagen']['name'])=="") {
			$result = $obj->Ejecutar_Instruccion("update tblproductos set CodBarras = '$codbarras',NomProd = '$nombreprod',DescProd = '$descprod',PrecioC = '$precioC',PrecioV = '$precioV',Existencia='$existencia',IDMarca ='$marca',IDCategoria='$categoria',IDProvedores='$proveedor' WHERE id_producto = '$id'");	//este else es de la toma de decisiones si la imagen esta vacia

			echo '<script>window.location = "Registro-juguetes.php"; </script>';
				
			} 
			else{
					// Ruta donde se concentraran las imagenes
					$dir_subida = 'img/subidas/';
					// Obtenemos el nombre del archivo a subir
					$nombre_archivo = basename($_FILES['txtimagen']['name']);
					// Se prepara una variable con la ruta y el nombre del archivo para subirlo
					$fichero_subido = $dir_subida . $nombre_archivo;
					
					if (move_uploaded_file($_FILES['txtimagen']['tmp_name'], $fichero_subido)) {
						
				    $result = $obj->Ejecutar_Instruccion("update tblproductos set CodBarras = '$codbarras',NomProd = '$nombreprod',DescProd = '$descprod',PrecioC = '$precioC',PrecioV = '$precioV',Existencia='$existencia',Imagen='$fichero_subido',IDMarca ='$marca',IDCategoria='$categoria',IDProvedores='$proveedor' WHERE id_producto = '$id'");	 

				      echo '<script>window.location = "Registro-juguetes.php"; </script>';

					} else {
						echo "No se pudo mover el archivo\n";

						echo '<script>window.location = "Registro-juguetes.php"; </script>';
					}

				}
?>

