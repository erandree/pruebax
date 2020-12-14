<?php

class Db
{

    public static function conectar()
    {
        $conexion = new mysqli("localhost", "root", "", "test");
        return $conexion;
    }
}
