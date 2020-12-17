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

    public function obtenerProyectosAprobados(){
        $consulta = $this->db->query("SELECT * FROM proyectos WHERE estado='Aprobado';");
        while($filas = $consulta->fetch_assoc()){
            $proyectos[] = $filas;
        }
        return $proyectos;
    }

    public function registrarproyecto($data)
    {
        $consulta = $this->db->query("INSERT INTO proyectos(estado, proponente, fecha, direccionimg, nombre, tipo, nivel, modalidad, clasificacion, categoria, objetivo, descripcion)
        VALUES ('".$data['estado']."','".$data['proponente']."','".$data['fecha']."','".$data['direccionimg']."','".$data['nombre']."','".$data['tipo']."','".$data['nivel']."','".$data['modalidad']."','".$data['clasificacion']."','".$data['categoria']."','".$data['objetivo']."','".$data['descripcion']."');"); 
        if($consulta)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function actualizarestado($data)
    {
        $consulta = $this->db->query("UPDATE proyectos SET 
        estado = '".$data['estado']."'
        WHERE id = '$data[id_proyecto]';");

        if($consulta){
            return true;
        }else{
            return false;
        } 


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
        WHERE id = '".$data['id_proyecto']."';");

        /*$llaves = array_keys($data);
        $valores = array_values($data);
        $string = 'UPDATE proyectos SET';
        for($i = 0; $i< count($data);$i++){
            $string .= " ".$llaves[$i] ." = ". "'".$valores[$i]."'" .",";
          }
          
          $string .= " WHERE id =". $id .";";
          $consulta = $this->db->query($string); */
          

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