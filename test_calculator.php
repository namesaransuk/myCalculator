<?php
include "calculator.php";

use PHPUnit\Framework\TestCase;

class Test_calculator extends TestCase {
    private $calculator;

    public function setUp():void {
        $this->calculator = new Calcolator();
    }

    public function testAdd1(){
        $this->assertEquals(4,$this->calculator->add(4,1));
    }

    public function testAdd2(){
        $this->assertEquals(5,$this->calculator->add(4,1));
    }

    public function testAdd3(){
        $this->assertEquals(3,$this->calculator->add(4,1));
    }
}
?>