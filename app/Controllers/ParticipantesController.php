<?php

require_once('Models/ParticipantesModel.php');
require_once('Models/ProyectoModel.php');

class ParticipantesController
{
    function __construct()
    {

    }

    function administracion()
    {
        $id_proyecto = $_GET['id_proyecto'];
        $participantes= new ParticipantesModel();
        $datosparticipantes = $participantes->participantesproyecto($id_proyecto);
        require_once('Views/Proyecto/Participantes/administracion.php');
    }

    function editar()
    {
        $id_proyecto = $_GET['id_proyecto'];
        $id_participante = $_GET['id_participante'];
        $participantes= new ParticipantesModel();
        $proyecto = new ProyectoModel();

        $datosproyecto = $proyecto->listarproyecto($id_proyecto);
        $datosparticipantesroyecto = $participantes->datosparticipanteproyecto($id_proyecto,$id_participante);
        require_once('Views/Proyecto/Participantes/editar.php');
    }

    function actualizar() {

        
        $mensaje = null;
        $mensajeboton = null;
        $direccion = null;
        $regresar = null;

        $data['id_proyecto'] = $_GET['id_proyecto'];
        $data['id_participante'] = $_GET['id_participante'];
        $data['funcion'] = $_POST['funcion'];
  
        if(!empty($data['id_proyecto'])
        && !empty($data['id_participante']) 
        && !empty($data['funcion'])){
          
          $participante = new ParticipantesModel();
            if($participante->actualizarparticipante($data))
            {
              $mensaje = 'La actualización fue exitosa';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Participantes&action=administracion&id_proyecto=$data[id_proyecto]";
  
              require_once('Views/Usuarios/mensaje.php');
  
            }else{
              $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Participantes&action=administracion&id_proyecto =$data[id_proyecto]";
  
              require_once('Views/Usuarios/mensaje.php');
  
            }
          

        }

      }
    }