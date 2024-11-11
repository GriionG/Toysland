<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

        $IDMarca = $_POST['txtIDMarca'];
        $NombreMarca = $_POST['txtnombreMarca'];
		$ImagenMarca = $_POST['txtimagenMarca'];
		$dirsubida="img/subidas/";
		$imagen=basename($_FILES['txtimagenMarca']['name']);
		$ficherosubido=$dirsubida . $imagen;
		echo '<pre>';
		if(move_uploaded_file($_FILES['txtimagenMarca']['tmp_name'],$ficherosubido)){
			$obj->Ejecutar_Instruccion("update tblmarca set NombreMarca = '$NombreMarca',ImgMarc ='".$ficherosubido."' WHERE IDMarca = '$IDMarca'");

			        echo '<script>window.location = "marcas.php"; </script>';
		}
		else{
			echo "No se pudo subir el archivo\n";
		}
?>