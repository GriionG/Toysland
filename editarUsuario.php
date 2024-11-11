
<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

        $IDUsuario = $_POST['txtIDUsuario'];
        $Correo = $_POST['txtCorreo'];
        $Contraseña = $_POST['txtContraseña'];
        $Privilegio = $_POST['frmPrivilegio'];

         $result = $obj->Ejecutar_Instruccion("update tblusuario set Correo = '$Correo', Privilegio = '$Privilegio' WHERE IDUsuario = '$IDUsuario'");

         echo '<script>window.location = "Usuario.php"; </script>';

