<?php
require_once(__DIR__ . '/../Models/ActividadesModel.php');
require_once(__DIR__ . '/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class ActividadesModelTest extends TestCase{

    public function testlistar_actividades_del_proyecto(){

        $id_proyecto = '1';


        $test = new ActividadesModel();
        $this->assertNotEmpty($test->listar_actividades_del_proyecto($id_proyecto));
    }

    public function testagregaractividad(){

      $data['id_proyecto'] = '1';
      $data['lugar'] = 'Amador';
      $data['actividad'] = 'Limpieza de calle';
      $data['descripcion_lugar'] = 'Avenida principal';
      $data['horas'] = '3';


        $test = new ActividadesModel();
        $this->assertTrue($test->agregaractividad($data));
    }

}
