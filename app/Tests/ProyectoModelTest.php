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

    #Verificar que la tabla proyectos hayan proyectos aprobados.

    public function testobtenerProyectosAprobados(){
        $test = new ProyectoModel();
        $this->assertNotEmpty($test->obtenerProyectosAprobados());
    }

    #Verificar el método listar proyecto que me devuelva el proyecto con el id solicitado

    public function testlistarproyecto(){
        $id_proyecto = '1';
        $test = new ProyectoModel();
        $this->assertNotEmpty($test->listarproyecto($id_proyecto));
    }

    public function testcambiarestado()
    {
        $data['id_proyecto'] = '1'; 
             $data['estado'] = 'Aprobado';

        $test = new ProyectoModel();
        $this->assertTrue($test->actualizarestado($data));
    }

    public function testregistrarproyecto()
    {

        $data['proponente'] = 'Franklin Quintero';
        $data['fecha'] = '03/10/2020';
        $data['direccionimg'] = 'google.com';
        $data['nombre'] = 'Limpieza de amador';
        $data['estado'] = 'En revision';
        $data['tipo'] = 'Actividad';
        $data['nivel'] = 'Voluntariado';
        $data['modalidad'] = 'Grupal';
        $data['clasificacion'] = 'Limpieza urbana';
        $data['categoria'] = 'Limpieza de calles';
        $data['objetivo'] = 'Remover la basura de las calles y aceras';
        $data['descripcion']= 'Trabajar en equpipo';

        $test = new ProyectoModel();
        $this->assertTrue($test->registrarproyecto($data));
    }




    
}
