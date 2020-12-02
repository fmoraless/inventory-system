<?php
require_once "conexion.php";

Class ModeloUsuarios{
    /* =======================
    MOSTRAR USUARIOS
    =========================*/

    public static function MdlMostrarUsuarios($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt-> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

        $stmt = null;





    }
}