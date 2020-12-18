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
    /*========================
     * ACTIVAR USUARIOS
    =========================*/
    public $activarUsuario;
    public $activarId;

    public function ajaxActivarUsuario(){
        $tabla = "usuarios";
        $item1 = "estado";
        $valor1 = $this->activarUsuario;

        $item2 = "id";
        $valor2 = $this->activarId;

        $repuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);
    }
}

/*====================
     * EDITAR USUARIOS
=====================*/
if (isset($_POST["idUsuario"])){
    $editar = new AjaxUsuarios();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();
}

/*=====================
  * ACTIVAR USUARIO
=====================*/
if (isset($_POST["activarUsuario"])){
    $activarUsuario = new AjaxUsuarios();
    $activarUsuario->activarUsuario = $_POST["activarUsuario"];
    $activarUsuario->activarId = $_POST["activarId"];
    $activarUsuario->ajaxActivarUsuario();
}

