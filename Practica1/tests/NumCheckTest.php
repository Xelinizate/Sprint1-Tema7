<?php

require 'NumberChecher.php';

use PHPUnit\Framework\TestCase;

class NumCheckTest extends TestCase {

    private $number;


	protected function setUp(): void{
        $this->number = new NumCheckTest(40);
    }

	protected function tearDown(): void
	{
		$this->number = null;
	}

	protected function testIsEven()  {
		 $resultat = $this->number%2 == 0;
		 $this->assertEquals(8, $resultat);
	}

	public function testIsPositive() {
		 $result = $this->number->add(2);
		 $this->number > 0;
		 $this->assertEquals(0, $result);
	}

}
?>

