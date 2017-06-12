<?php
class procesaParametros {
    public static function PrepareStatement($query, $datos) {
        $indice = 0;
        $query1 = "";
        for ($i = 0; $i < strlen($query); $i++) {
            if ($query[$i] == "?") {
                if ($datos[$indice] != "null")
                    $query1.= (" '" . self::EvitandoInjectio($datos[$indice]) . "' ");
                else
                    $query1.= (" " . self::EvitandoInjectio($datos[$indice]) . " ");
                $indice++;
            } else {
                $query1.= $query[$i];
            }
        }
        return $query1;
    }
    private static function EvitandoInjectio($var) {
        $var = str_ireplace("'", "a", $var);
        $var = str_ireplace("$", "b", $var);
        $var = str_ireplace(";", "c", $var);
        $var = str_ireplace("%", "d", $var);
        $var = str_ireplace("=", "ig", $var);
       // $var = mysql_real_escape_string($var);
        return $var;
       // return utf8_decode($var);
    }
}
?>
