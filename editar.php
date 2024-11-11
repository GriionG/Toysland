
<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

        $IDMarca = $_POST['txtIDMarca'];
        $NombreMarca = $_POST['txtnombreMarca'];

         $result = $obj->Ejecutar_Instruccion("update tblmarca set NombreMarca = '$NombreMarca' WHERE IDMarca = '$IDMarca'");
          Header("Location: marcas.php");
?>

