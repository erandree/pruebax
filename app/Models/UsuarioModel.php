<?php

class UsuarioModel{
    private $db;
    private $participantes;
    private $usuario;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->participantes = array();
        $this->usuario = array();
    
    }

    public function listarUsuarios(){
        $this->participantes = $this->obtenerUsuarios();
        return $this->participantes;
    }

    public function obtenerUsuarios(){
        $consulta = $this->db->query("SELECT * FROM participantes ORDER BY id DESC;");
        while($filas = $consulta->fetch_assoc()){
            $participantes[] = $filas;
        }
        return $participantes;
    }

    public function verificarusuario($identificacion_usuario){
        $consulta = $this->db->query("select count(*) as contador from participantes where cedula = '".$identificacion_usuario."';");
        $cantidad_usuario = $consulta->fetch_assoc();
        if($cantidad_usuario['contador'] > 0){
            return true;
        }else{
            return false;
        }
    }

    public function registrarusuario($data){
        $consulta = $this->db->query("INSERT INTO participantes(cedula, nombre, apellido, correoutp, contrasena, celular)
        values('".$data['cedula']."','".$data['nombre']."','".$data['apellido']."','".$data['correoutp']."','".$data['contrasena']."','".$data['celular']."');");
        if($consulta){
            return true;
        }else{
            return false;
        } 
    }

    public function actualizarusuario($data){
        $consulta = $this->db->query("UPDATE participantes SET 
        cedula = '".$data['cedula']."' , 
        nombre = '".$data['nombre']."' , 
        apellido = '".$data['apellido']."', 
        correoutp = '".$data['correoutp']."' , 
        contrasena  = '".$data['contrasena']."' , 
        celular = '".$data['celular']."'
        WHERE id = '$data[id_usuario]';");
        if($consulta){
            return true;
        }else{
            return false;
        } 
    }

    public function listarusuario($data){
        $this->usuario = $this->obtenerusuario($data);
        return $this->usuario;
    }

    public function eliminarusuario($data){
        $consulta = $this->db->query("DELETE FROM participantes WHERE id = '".$data."';");
        if($consulta){
            return true;
        }else{
            return false;
        }
    }

    public function obtenerusuario($data){
        $consulta = $this->db->query("SELECT * FROM participantes WHERE id = '".$data."';");
        while($filas = $consulta->fetch_assoc()){
            $usuario[] = $filas;
        }
        return $usuario;
    }




    

}
