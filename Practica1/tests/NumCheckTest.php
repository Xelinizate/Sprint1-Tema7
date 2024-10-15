<?php

require 'NumberChecher.php';

use PHPUnit\Framework\TestCase;

class NumCheckTest extends TestCase {

    private $number;


	public function setUp(): void{
        $this->number = new NumCheckTest(40);
    }


	public function testIsEven()  {
		 $this->number%2 == 0;
	}

	public function testIsPositive() {
		 $result = $this->number->add(2);
		 $this->number > 0;
		 $this->assertEquals(0, $result);
	}

}
?>

