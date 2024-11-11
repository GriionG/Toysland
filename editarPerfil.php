
<?php
        require 'bd/conexion_bd.php'; //Pa que este conectado con el archvivo que conecta con la base de tatos 
    //crear objeto 
        $obj = new BD_PDO();

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
        $usuario = $_POST['selusuario'];

         $result = $obj->Ejecutar_Instruccion("update tblclientes set Nombre = '$Nombre', ApPaterno = '$AP', ApMaterno = '$AM', Fecha = '$FechaNac', TelCliente = '$NumeroT', ApMaterno = '$AM', Fecha = '$FechaNac', Calle = '$Calle', NumCasa = '$NumeroC', Colonia = '$Colonia', CP = '$CP', Referencias = '$Referencia', IDUsuario = '$usuario' WHERE IDClientes = '$IDClientes'");

         Header("Location: Perfil.php");
?>

