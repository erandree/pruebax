
<?php
require_once(__DIR__ . '/../Models/ParticipantesModel.php');
require_once(__DIR__ . '/../Db/db.php');

use \PHPUnit\Framework\TestCase;

class ParticipantesModelTest extends TestCase{

    public function testagregarparticipante(){

        $data['id_proyecto'] = '1';
        $data['id_participante'] = '14';
        $data['funcion'] = 'administrador';


        $test = new ParticipantesModel();
        $this->assertTrue($test->agregarparticipante($data));
    }

    public function testparticipantesproyecto(){

        $id_proyecto = '1';


        $test = new ParticipantesModel();
        $this->assertNotEmpty($test->participantesproyecto($id_proyecto));
    }



}