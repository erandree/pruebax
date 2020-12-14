<?php
class ProyectoModel{
    private $db;
    private $listado;
    private $proyectos;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->listado = array();
    
    }

    //Listar todos los proyectos de la tabla proyectos

    public function listarProyectos(){
        $this->listado = $this->obtenerProyectos();
        return $this->listado;
    }

    public function obtenerProyectos(){
        $consulta = $this->db->query("SELECT * FROM proyectos;");
        while($filas = $consulta->fetch_assoc()){
            $proyectos[] = $filas;
        }
        return $proyectos;
    }

    
    //Listar todos los proyectos disponibles de la tabla proyectos
    public function listarProyectosDisponibles(){
        $this->listado = $this->obtenerProyectosDisponibles();
        return $this->listado;
    }

    public function obtenerProyectosDisponibles(){
        $consulta = $this->db->query("SELECT * FROM proyectos WHERE estado='Disponible';");
        while($filas = $consulta->fetch_assoc()){
            $proyectos[] = $filas;
        }
        return $proyectos;
    }

    //Listar todos los proyectos de la tabla proyectos

    public function actualizarproyecto($data){
        $consulta = $this->db->query("UPDATE proyectos SET 
        estado = '".$data['estado']."' ,
        proponente = '".$data['proponente']."' , 
        fecha = '".$data['fecha']."' , 
        direccionimg = '".$data['direccionimg']."' , 
        nombre = '".$data['nombre']."' , 
        tipo = '".$data['tipo']."' , 
        nivel = '".$data['nivel']."' , 
        modalidad = '".$data['modalidad']."' , 
        clasificacion = '".$data['clasificacion']."' , 
        categoria = '".$data['categoria']."' , 
        objetivo = '".$data['objetivo']."' , 
        descripcion = '".$data['descripcion']."'
        WHERE id = '$data[id_proyecto]';");
        if($consulta){
            return true;
        }else{
            return false;
        } 
    }

    public function listarproyecto($data){
        $consulta = $this->db->query("SELECT * FROM proyectos WHERE id = '".$data."';");
        while($filas = $consulta->fetch_assoc()){
            $proyectos[] = $filas;
        }
        return $proyectos;

    }

    
}

?>