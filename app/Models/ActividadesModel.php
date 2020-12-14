<?php
class ActividadesModel{
    private $db;
    private $actividades;
 
    public function __construct(){
        $this->db = Db::conectar();
        $this->actividades = array();
    }

    public function listar_actividades_del_proyecto($proyecto){
        $consulta = $this->db->query("SELECT * FROM actividades WHERE fk_proyecto = '".$proyecto."';");
        while($filas = $consulta->fetch_assoc()){
            $actividades[] = $filas;
        }

        if(empty($actividades))
        {
            return false;
        }
        else
        {
            return $actividades;
        }

    }

    public function agregaractividad($data)
    {
        $consulta = $this->db->query("INSERT INTO actividades(fk_proyecto, lugar, descripcion_lugar, actividad, horas)
        VALUES ('".$data['id_proyecto']."','".$data['lugar']."','".$data['descripcion_lugar']."','".$data['actividad']."','".$data['horas']."');");
        if($consulta){
            return true;
        }else{
            return false;
        } 

    }

    public function datos_actividad_proyecto($id_actividad, $id_proyecto)
    {
        $consulta = $this->db->query("SELECT * FROM actividades WHERE id = '".$id_actividad."' AND fk_proyecto = '".$id_proyecto."';");
        while($filas = $consulta->fetch_assoc()){
            $actividad[] = $filas;
        }
        return $actividad;
    }

    public function modificaractividad($data)
    {
        $consulta = $this->db->query("UPDATE actividades SET 
        lugar = '".$data['lugar']."',
        descripcion_lugar = '".$data['descripcion_lugar']."',
        actividad = '".$data['actividad']."',
        horas = '".$data['horas']."'
        WHERE id = '$data[id_actividad]';");
        if($consulta){
            return true;
        }else{
            return false;
        } 
    }
    

}