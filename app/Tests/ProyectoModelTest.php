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
        $test = new ProyectoModel();
        $this->assertTrue($test->listarproyecto());
    }
/**
     * @dataProvider datoslistado
     */

    public function testregistrarproyecto($data){
        
        $test = new ProyectoModel();
        $this->assertFalse($test->registrarproyecto($data));

    }


    public function datoslistado(){

        $data['proponente'] = 'Anthony Dandrade';
        $data['fecha'] = '03/12/2020';
        $data['direccionimg'] = 'google.com';
        $data['nombre'] = 'Limpieza de playas';
        $data['estado'] = 'En revisión';
        $data['tipo'] = 'Actividad';
        $data['nivel'] = 'Servicio Social';
        $data['modalidad'] = 'Grupal';
        $data['clasificacion'] = 'Medio Ambiente';
        $data['categoria'] = 'Limpieza';
        $data['objetivo'] = 'Trabajar en equipo';
        $data['descripcion']= 'Nada aquí';
    }

}