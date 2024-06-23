<?php
/* Llamado a cadena de conexion */
require_once("../config/conexion.php");
/* Llamada a la clase */
require_once("../models/Usuario.php");
/* Inicializacion de clase */
$usuario=new Usuario();

/* Opciones de solicitud de controller */
switch ($GET['op']) {
    /* Servicio para guardar correo electronico */
    case 'GuardarCorreo':

        $usuario->insert_correo($_POST['usu_correo']);
        # code...
        break;
    
    default:
        # code...
        break;
}
?>