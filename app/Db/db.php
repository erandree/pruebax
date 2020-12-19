<?php

class Db
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql2", "root", "abc123", "test");
        return $conexion;
    }
}
