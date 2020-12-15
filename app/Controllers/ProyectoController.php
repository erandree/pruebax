<?php

require_once('Models/ProyectoModel.php');
require_once('Models/ActividadesModel.php');
require_once('Models/ParticipantesModel.php');

class ProyectoController
{
    function __construct()
    {

    }

    function registro()
    {
        require_once('Views/Proyecto/Registro.php');
    }

	function listado(){
		$proyecto= new ProyectoModel();
		$datos = $proyecto->listarProyectosDisponibles();
		require_once('Views/Proyecto/Listado.php');
    }
    
    function administracion(){
        $proyecto= new ProyectoModel();
		$datos = $proyecto->listarProyectos();
		require_once('Views/Proyecto/administracion.php');
    }
    
    function registrarproyecto() {

        
        $mensaje = null;
        $mensajeboton = null;
        $direccion = null;

        $data['proponente'] = $_POST['proponente'];
        $data['fecha'] = $_POST['fecha'];
        $data['direccionimg'] = $_POST['direccionimg'];
        $data['nombre'] = $_POST['nombre'];
        $data['estado'] = $_POST['estado'];
        $data['tipo'] = $_POST['tipo'];
        $data['nivel'] = $_POST['nivel'];
        $data['modalidad'] = $_POST['modalidad'];
        $data['clasificacion'] = $_POST['clasificacion'];
        $data['categoria'] = $_POST['categoria'];
        $data['objetivo'] = $_POST['objetivo'];
        $data['descripcion']= $_POST['descripcion'];
  
        if(!empty($data['proponente'])
        && !empty($data['nombre']) 
        && !empty($data['tipo'])
        && !empty($data['nivel'])
        && !empty($data['modalidad'])){
          
          $usuario = new ProyectoModel();
            if($usuario->registrarproyecto($data))
            {
              $mensaje = 'El registro de propuesta fue exitoso';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Proyecto&action=administracion";
              require_once('Views/Proyecto/mensaje.php');
  
            }else{
              $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Menu&action=index";
              require_once('Views/Proyecto/mensaje.php');
  
            }

            
          
        }


      }

      function editar(){
        $id_proyecto = $_GET['id_proyecto'];
        $proyectos = new ProyectoModel();
        $proyecto = $proyectos->listarproyecto($id_proyecto);
        require_once('Views/Proyecto/editar.php');
    }

    function actualizar() {
        
        $mensaje = null;
        $mensajeboton = null;
        $direccion = null;

        $data['id_proyecto'] = $_POST['id_proyecto'];
        $data['proponente'] = $_POST['proponente'];
        $data['fecha'] = $_POST['fecha'];
        $data['direccionimg'] = $_POST['direccionimg'];
        $data['nombre'] = $_POST['nombre'];
        $data['estado'] = $_POST['estado'];
        $data['tipo'] = $_POST['tipo'];
        $data['nivel'] = $_POST['nivel'];
        $data['modalidad'] = $_POST['modalidad'];
        $data['clasificacion'] = $_POST['clasificacion'];
        $data['categoria'] = $_POST['categoria'];
        $data['objetivo'] = $_POST['objetivo'];
        $data['descripcion']= $_POST['descripcion'];
  
        if(!empty($data['proponente'])
        && !empty($data['nombre']) 
        && !empty($data['tipo'])
        && !empty($data['nivel'])
        && !empty($data['modalidad'])){
          
          $proyecto = new ProyectoModel();
            if($proyecto->actualizarproyecto($data))
            {
              $mensaje = 'La actualización fue exitosa';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Proyecto&action=administracion";
              require_once('Views/Proyecto/mensaje.php');
  
            }else{
              $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Proyecto&action=administracion";
              require_once('Views/Proyecto/mensaje.php');
            }
        }
        else
        {

        }
      }

      function detalles()
      {
        $id_proyecto = $_GET['id_proyecto'];
        $totalhoras = 0;
        $contador = 0;

        $proyecto = new ProyectoModel();
        $activiades = new ActividadesModel();
        $participantes = new ParticipantesModel();

        $datosproyecto = $proyecto->listarproyecto($id_proyecto);
        $datosactividades = $activiades->listar_actividades_del_proyecto($id_proyecto);
        $datosparticipantes = $participantes->participantesproyecto($id_proyecto);

        require_once('Views/Proyecto/detalles.php');

      }
}