<?php
require_once(__DIR__ . '/../Models/ProyectoModel.php');
require_once(__DIR__ . '/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class ProyectoModelTest extends TestCase{

    #Verificar que no esté vacia la tabla proyectos.
    
    public function testListarproyectos(){
        $test = new ProyectoModel();
        $this->assertNotEmpty($test->obtenerProyectos());
    }

}