<?php

require 'NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumCheckTest extends TestCase {

		private $numberChecker;


		protected function setUp() : void {
			$this->numberChecker = new NumberChecker(10);
		}

		protected function tearDown(): void
		{
			$this->numberChecker = null;
		}

		public function testIsEven(){
			$result = $this->numberChecker->isEven(2);
			$this->assertEquals(true, $result);
		}

		public function testIsPositive(){
			$result = $this->numberChecker->isPositive(4,9);
			$this->assertEquals(true, $result);
		}
	
	}
?>

