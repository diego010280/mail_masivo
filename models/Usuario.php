<?php

class Usuario extends Conectar {
    /* Insertar correo electronico en nuestra base de datos */
    public function insert_correo($usu_correo){
        $conectar= parent::conexion();
        $sql="insert into tm_usuario (
          usu_correo, 
          fech_crea, 
          est
        )
      values
        (?,
          now(), 
          1
        )";
        $sql=$conectar->prepare($sql);
        $sql ->bindValue(1,$usu_correo);
        $sql ->execute();

    }
    
}

?>

