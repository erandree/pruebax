<?php


$controllers = array(
    'Menu' => ['index'],
    'Proyecto'=>["registro","listado","administracion","actualizar","editar","detalles","registrarproyecto"],
    'Usuario'=>["administracion","registrar","guardar","editar","actualizar", "eliminar","eliminarusuario"],
    'Participantes'=>["administracion","editar","actualizar","asignar","agregarparticipante","remover","eliminar"],
    'Actividades'=>["administracion","editar","modificar","agregar","guardar","remover","eliminar"]
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('Menu', 'index');
    }
} else {
    call('Menu', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'Menu':
            $controller = new MenuController();
            break;
        case 'Cliente':
            $controller = new ClienteController();
            break;
        case 'Proyecto':
            $controller = new ProyectoController();
            break;
        case 'Usuario':
            $controller = new UsuarioController();
            break; 
        case 'Participantes':
            $controller = new ParticipantesController();
            break;
        case 'Actividades':
            $controller = new ActividadesController();
            break;     
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>