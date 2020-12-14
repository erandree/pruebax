<?php
class FuncionesModel{
    private $db;
    private $funciones;
    private $categorias;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->funciones = array();
    }
    public function listarFunciones(){
        $this->funciones = $this->obtenerFunciones();
        return $this->funciones;
    }

    public function obtenerFunciones(){
        $consulta = $this->db->query("SELECT * FROM funciones;");
        while($filas = $consulta->fetch_assoc()){
            $funciones[] = $filas;
        }
        return $funciones;
    }

    public function listarCategorias(){
        $this->categorias = $this->obtenerCategorias();
        return $this->categorias;
    }

    public function obtenerCategorias(){
        $consulta = $this->db->query("SELECT DISTINCT categoria FROM funciones;");
        while($filas = $consulta->fetch_assoc()){
            $categorias[] = $filas;
        }
        return $categorias;
    }
}

?>