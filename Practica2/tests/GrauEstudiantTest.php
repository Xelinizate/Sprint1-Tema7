<?php
declare(strict_types=1);

namespace Tests;

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Src\GrauEstudiant;

class GrauEstudiantTest extends TestCase{

    public function testPrimeraDivisio(): void{

        $proba = new GrauEstudiant();
        $nota = 75;
        $resultatEsperado = "Primera Divisió.";

        $resultat = $proba->verificaGrau($nota);

        $this->assertEquals($resultatEsperado, $resultat);

    }
    public function testSegonaDivisio(): void {

        $proba = new GrauEstudiant();
        $nota = 52;
        $resultatEsperado = "Segona Divisió";

        $resultat = $proba->verificaGrau($nota);

        $this->assertEquals($resultatEsperado, $resultat);

    }
    public function testTerceraDivisio(): void{

        $proba = new GrauEstudiant();
        $nota = 31;
        $resultatEsperado = "Tercera Divisió";

        $resultat = $proba->verificaGrau($nota);

        $this->assertEquals($resultatEsperado, $resultat);
    }
}

?>