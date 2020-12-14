<?php

require_once('Models/ActividadesModel.php');

class ActividadesController
{
    function __construct()
    {

    }

    function administracion(){
        $id_proyecto = $_GET['id_proyecto'];
        $actividades = new ActividadesModel();
        if($datosactividades = $actividades->listar_actividades_del_proyecto($id_proyecto)){
          require_once('Views/Proyecto/Actividades/administracion.php');
        }
        else
        {
          require_once('Views/Proyecto/Actividades/administracion.php');
        }

    }

    function agregar()
      {
        require_once('Views/Proyecto/Actividades/agregar.php');
      }
    
    function guardar()
    {
      $data['id_proyecto'] = $_POST['id_proyecto'];
      $data['lugar'] = $_POST['lugar'];
      $data['actividad'] = $_POST['actividad'];
      $data['descripcion_lugar'] = $_POST['descripcion_lugar'];
      $data['horas'] = $_POST['horas'];


      $actividades = new ActividadesModel();

      if($actividades->agregaractividad($data))
          {
            $mensaje = 'La actividad fue agregada exitosamente';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Actividades&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }else{
            $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Actividades&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }
    }

    function editar(){

      $id_actividad = $_GET['id_actividad'];
      $id_proyecto = $_GET['id_proyecto'];

      $actividades = new ActividadesModel();

      $actividad = $actividades->datos_actividad_proyecto($id_actividad, $id_proyecto);

      require_once('Views/Proyecto/Actividades/editar.php');

    }

    function modificar()
    {
      $data['id_proyecto'] = $_POST['id_proyecto'];
      $data['id_actividad'] = $_GET['id_actividad'];
      $data['lugar'] = $_POST['lugar'];
      $data['actividad'] = $_POST['actividad'];
      $data['descripcion_lugar'] = $_POST['descripcion_lugar'];
      $data['horas'] = $_POST['horas'];

      $actividades = new ActividadesModel();

      if($actividades->modificaractividad($data))
          {
            $mensaje = 'La actividad fue modificada exitosamente';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Actividades&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }else{
            $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Actividades&action=administracion&id_proyecto=$data[id_proyecto]";

            require_once('Views/Usuarios/mensaje.php');

          }
    }

}