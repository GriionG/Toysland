<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

        $IDCategoria = $_POST['txtIDCategoria'];
        $nomC = $_POST['txtNomCategoria'];

         $result = $obj->Ejecutar_Instruccion("update tblcategoria set NomCategoria = '$nomC' WHERE IDCategoria = '$IDCategoria'");
         
               echo '<script>window.location = "Categorias.php"; </script>';
?>

