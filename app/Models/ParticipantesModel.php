<?php
class ParticipantesModel{
    private $db;
    private $participantes;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->participantes = array();
    }

    public function participantesproyecto($data){
        $consulta = $this->db->query("SELECT * FROM proyectosparticipantes INNER JOIN participantes ON proyectosparticipantes.id_participante = participantes.id WHERE proyectosparticipantes.id_proyecto = '".$data."';");
        while($filas = $consulta->fetch_assoc()){
            $participantes[] = $filas;
        }

        if(empty($participantes))
        {
            return false;
        }
        else
        {
            return $participantes;
        }
        
    }

    public function datosparticipanteproyecto($proyecto, $participante){
        $consulta = $this->db->query("SELECT * FROM proyectosparticipantes INNER JOIN participantes ON proyectosparticipantes.id_participante = participantes.id WHERE proyectosparticipantes.id_proyecto = '".$proyecto."' AND proyectosparticipantes.id_participante = '".$participante."';");
        while($filas = $consulta->fetch_assoc()){
            $participantes[] = $filas;
        }
        return $participantes;
    }

    public function actualizarparticipante($data){
        $consulta = $this->db->query("UPDATE proyectosparticipantes SET 
        funcion = '".$data['funcion']."'
        WHERE id_proyecto = '$data[id_proyecto]' AND id_participante = '$data[id_participante]';");
        if($consulta){
            return true;
        }else{
            return false;
        } 
    }

    public function agregarparticipante($data){
        $consulta = $this->db->query("INSERT INTO proyectosparticipantes(id_proyecto, id_participante, funcion)
        VALUES('".$data['id_proyecto']."','".$data['id_participante']."','".$data['funcion']."');");
        if($consulta){
            return true;
        }else{
            return false;
        } 

    }

    public function verificarparticipante($data){
        $consulta = $this->db->query("SELECT COUNT(*) AS contador FROM proyectosparticipantes WHERE id_proyecto = '".$data['id_proyecto']."' AND id_participante = '".$data['id_participante']."' ;");
        $cantidad_participante = $consulta->fetch_assoc();
        if($cantidad_participante['contador'] > 0){
            return true;
        }else{
            return false;
        }
    }

    public function eliminarpartdeproyecto($id_proyecto, $id_participante)
    {
        $consulta = $this->db->query("DELETE FROM proyectosparticipantes WHERE id_proyecto = '".$id_proyecto."' AND id_participante = '".$id_participante."';");
        if($consulta){
            return true;
        }else{
            return false;
        }
    }

    




}