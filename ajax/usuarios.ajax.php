<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class AjaxUsuarios{
    /*
     * EDITAR USUARIOS
     *
     */

    public $idUsuario;

    public function ajaxEditarUsuario()
    {
        $item = "id";
        $valor = $this->idUsuario;

        $respuesta = ControladorUsuarios::ctrListarUsuarios($item, $valor);

        echo json_encode($respuesta);
    }


}

/*
     * EDITAR USUARIOS
     *
     =====================*/
if (isset($_POST["idUsuario"])){
    $editar = new AjaxUsuarios();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();
}
