<?php

require_once('Models/FuncionesModel.php');

class MenuController
{
    function __construct()
    {

    }

    function index()
    {
        $funcion= new FuncionesModel();
        $datosfunciones = $funcion->listarFunciones();
        $datoscategorias = $funcion->listarCategorias();
        
        require_once('Views/Menu/index.php');
    }
}