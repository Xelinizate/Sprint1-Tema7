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
        $resultatEsperat = "Primera Divisió.";

        $resultat = $proba->verificaGrau($nota);

        $this->assertEquals($resultatEsperat, $resultat);

    }
}

?>