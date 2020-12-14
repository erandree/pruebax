<?php

require_once('Models/ParticipantesModel.php');
require_once('Models/ProyectoModel.php');
require_once('Models/UsuarioModel.php');

class ParticipantesController
{
    function __construct()
    {

    }

    function administracion()
    {
        $id_proyecto = $_GET['id_proyecto'];
        $participantes= new ParticipantesModel();
        if($datosparticipantes = $participantes->participantesproyecto($id_proyecto)){
          require_once('Views/Proyecto/Participantes/administracion.php');
        }
        else
        {
          require_once('Views/Proyecto/Participantes/administracion.php');
        }
        
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

      function asignar()
    {
        $id_proyecto = $_GET['id_proyecto'];
        $proyecto = new ProyectoModel();
        $participantes = new UsuarioModel();

        $datosparticipantes = $participantes->listarUsuarios();
        $datosproyecto = $proyecto->listarproyecto($id_proyecto);

        require_once('Views/Proyecto/Participantes/asignar.php');
    }

    function agregarparticipante()
    {
      $data['id_proyecto'] = $_GET['id_proyecto'];
      $data['id_participante'] = $_POST['id_participante'];
      $data['funcion'] = $_POST['funcion'];

      if(!empty($data['id_proyecto'])
      && !empty($data['id_participante']) 
      && !empty($data['funcion'])){
        
        $participante = new ParticipantesModel();
        $existe_particiante = $participante->verificarparticipante($data);

        if(!$existe_particiante){

          if($participante->agregarparticipante($data))
          {
            $mensaje = 'El participante fue agregado exitosamente';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Participantes&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }else{
            $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Participantes&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }
      }
      else
      {
        $mensaje = 'El usuario ya se encuentra en el proyecto';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Participantes&action=administracion&id_proyecto=$data[id_proyecto]";

      }
    }
      else
      {
            $mensaje = 'Campos en blanco';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Participantes&action=administracion&id_proyecto=$data[id_proyecto]";

      }

      require_once('Views/Proyecto/mensaje.php');
    }

    function remover()
    {
        $id_proyecto = $_GET['id_proyecto'];
        $id_participante = $_GET['id_participante'];


        $participantes = new UsuarioModel();
        $datosparticipante = $participantes->listarusuario($id_participante);

        $proyecto = new ProyectoModel();
        $datosproyecto = $proyecto->listarproyecto($id_proyecto);

        require_once('Views/Proyecto/Participantes/remover.php');
    }

    function eliminar(){
      $id_proyecto = $_POST['id_proyecto'];
      $id_participante = $_GET['id_participante'];

      $participante = new ParticipantesModel();
      if($participante->eliminarpartdeproyecto($id_proyecto,$id_participante))
            {
              $mensaje = 'Se ha eliminado con exito';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Participantes&action=administracion&id_proyecto=$id_proyecto";
  
            }else{
              $mensaje = 'Hubo un problema en la gestión de la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Participantes&action=administracion&id_proyecto=$id_proyecto";
            }

      require_once('Views/Usuarios/mensaje.php');

    }



    


    }