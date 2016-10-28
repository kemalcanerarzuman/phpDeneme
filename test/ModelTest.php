<?php
use CanerDB\Model as cm;
use CanerDB\Model\Yazar as cmy;

class ModelTest extends PHPUnit_Framework_TestCase
{
  public function setUp() {
    $this->model = new cm;
    $this->yazar = new cmy();
  }

  public function testCount() {
    $this->assertEquals(2,$this->yazar->count());
  }

  public function testGetRows() {
    $this->assertEquals(null, $this->yazar->find());
  }

}

?>
