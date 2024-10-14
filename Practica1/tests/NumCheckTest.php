<?php

use PHPUnit\Framework\TestCase;

class NumCheckTest extends TestCase {

    private $number;


	public function setUp(): void{
        $this->number = new NumCheckTest(40);
    }


	public function testIsEven(): bool {
		return $this->number%2 == 0;
	}

	public function testIsPositive(): bool {
		return $this->number > 0;
	}

}
?>

