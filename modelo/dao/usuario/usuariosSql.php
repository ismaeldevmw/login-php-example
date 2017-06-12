<?php
class usuariosSql
{
    public static function  indentificarUsuario()
    {
        $query="SELECT * FROM usuarios WHERE usuario=? AND clave=?";
        return $query;
    }

    public static function  registrarUsuario()
    {
        $query="INSERT INTO usuario(usuario,clave)VALUES(?,?)";
        return $query;
    }

    public static function validateIfExistsUser()
    {
        $query = "SELECT * FROM usuarios WHERE usuario=?";
        return $query;
    }
}
?>
