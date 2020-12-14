<?php

require_once('Models/UsuarioModel.php');

class UsuarioController
{
    function __construct()
    {

    }

    function administracion(){
		$participantes = new UsuarioModel();
		$datos = $participantes->listarUsuarios();
		require_once('Views/Usuarios/administrar.php');
    }

    function registrar(){

		require_once('Views/Usuarios/registrar.php');
    }

    function guardar(){

      $mensaje = null;
      $mensajeboton = null;
      $direccion = null;
      $regresar = null;

      $data['cedula']=$_POST['cedula'];
      $data['nombre']=$_POST['nombre'];
      $data['apellido']=$_POST['apellido'];
      $data['correoutp']=$_POST['correoutp'];
      $data['contrasena']=$_POST['contrasena'];
      $data['celular']=$_POST['celular'];

      if(!empty($data['cedula'])
		  && !empty($data['nombre']) 
		  && !empty($data['apellido'])
		  && !empty($data['correoutp'])
      && !empty($data['contrasena']))
      {
        $usuario = new UsuarioModel();
        $existe_usuario = $usuario->verificarusuario($data['cedula']);
        if(!$existe_usuario){
          if($usuario->registrarusuario($data))
          {
            $mensaje = 'El registro fue exitoso';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Usuario&action=administracion";

            require_once('Views/Usuarios/mensaje.php');

          }else{
            $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
            $mensajeboton = "Aceptar";
            $direccion = "?controller=Menu&action=index";

            require_once('Views/Usuarios/mensaje.php');

          }
        }else{
          $mensaje = "El usuario actual con cédula: ".$data['cedula']." se encuentra registrado";
          require_once('Views/Usuarios/registrar.php');
        }


      }
      else
      {
        $mensaje = "¡Existen campos vacios!";
        require_once('Views/Usuarios/registrar.php');

      }
    }

      function editar(){

        $id_usuario = $_GET['id_usuario'];
        $participante = new UsuarioModel();
        $usuario = $participante->listarusuario($id_usuario);
        require_once('Views/Usuarios/editar.php');
      }

      function actualizar() {

        
        $mensaje = null;
        $mensajeboton = null;
        $direccion = null;
        $regresar = null;

        $data['id_usuario'] = $_POST['id_usuario'];
        $data['cedula'] = $_POST['cedula'];
        $data['nombre'] = $_POST['nombre'];
        $data['apellido'] = $_POST['apellido'];
        $data['correoutp'] = $_POST['correoutp'];
        $data['contrasena'] = $_POST['contrasena'];
        $data['celular']= $_POST['celular'];
  
        if(!empty($data['cedula'])
        && !empty($data['nombre']) 
        && !empty($data['apellido'])
        && !empty($data['correoutp'])
        && !empty($data['contrasena'])){
          
          $usuario = new UsuarioModel();
          $existe_usuario = $usuario->verificarusuario($data['id_usuario']);
          if(!$existe_usuario){
            if($usuario->actualizarusuario($data))
            {
              $mensaje = 'La actualización fue exitosa';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Usuario&action=administracion";
  
              require_once('Views/Usuarios/mensaje.php');
  
            }else{
              $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Menu&action=index";
  
              require_once('Views/Usuarios/mensaje.php');
  
            }
          

        }

      }
    }

    function eliminar(){

      $id_usuario = $_GET['id_usuario'];
      $participante = new UsuarioModel();
      $usuario = $participante->listarusuario($id_usuario);
      require_once('Views/Usuarios/eliminar.php');
    }

    function eliminarusuario(){
      $id_usuario = $_POST['id_usuario'];
      $participante = new UsuarioModel();
      if($participante->eliminarusuario($id_usuario))
            {
              $mensaje = 'Se ha eliminado con exito';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Usuario&action=administracion";
  
            }else{
              $mensaje = 'Hubo un problema en la inserción de los datos en la Base de datos';
              $mensajeboton = "Aceptar";
              $direccion = "?controller=Menu&action=index";
            }

      require_once('Views/Usuarios/mensaje.php');
    }

  

}