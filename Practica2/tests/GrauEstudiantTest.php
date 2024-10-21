<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\GrauEstudiant;

class GrauEstudiantTest extends TestCase{

    public $grauEstudiant;

    protected function setUp(): void
    {
        $this->grauEstudiant = new GrauEstudiant();
    }

    protected function tearDown(): void
    {
        $this->grauEstudiant = null;
    }
    
    public static function addNotaProvider(): array{

        return  [[80, "Primera Divisió"],
                [55, "Segona Divisió"],
                [39, "Tercera Divisió"],
                [12, "L'estudiant reprovarà"],
                 ];
    }

    /**
     * @dataProvider addNotaProvider
     */

    public function testVerificaGrau($nota, $expected){
        $resultat = $this->grauEstudiant->verificaGrau($nota);

        $this->assertEquals($expected, $resultat);
    }
    
}

?>