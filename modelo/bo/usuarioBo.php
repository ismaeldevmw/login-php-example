<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/login-mvc/ruta.php';
require_once $_SERVER['DOCUMENT_ROOT'].ruta::ruta. '/Modelo/Dao/usuario/usuariosDao.php';

class usuarioBo {

    var $dao;

    function __construct() {
        $this->dao=new usuarioDao();
    }

    function identificarUsuarioBo($usuario, $password) {
        $resultado = $this->dao->identificarUsuarioDao($usuario, $password);
        return $resultado;
    }

    function registrarUsuarioBo($apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status) {
        $resultado = $this->dao->registrarUsuarioDao($apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status);
        return $resultado;
    }

    function traeUsuariosBo(){
        $resultado = $this->dao->traeUsuariosDao();
        return $resultado;
    }

    function actualizarUsuarioBo($usuario) {
        $resultado = $this->dao->actualizarUsuarioDao($usuario);
        return $resultado;
    }

    function saveDataUsuarioBo($id, $apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status) {
        $resultado = $this->dao->saveDataUsuarioDao($id, $apaterno, $amaterno, $nombre, $usuario, $clave, $tipo, $status);
        return $resultado;
    }

    function eliminarUsuarioBo($usuario) {
        $resultado = $this->dao->eliminarUsuarioDao($usuario);
        return $resultado;
    }

    function logoutBo() {
        $resultado = $this->dao->logoutDao();
        return $resultado;
    }

    function sessionValidateBo() {
        $resultado = $this->dao->sessionValidateDao();
        return $resultado;
    }

    function sessionUserTypeBo($type) {
        $resultado = $this->dao->sessionUserTypeDao($type);
        return $resultado;
    }

}
?>
