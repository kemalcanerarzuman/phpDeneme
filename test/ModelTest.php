<?php
use CanerDB\Model as cm;
use CanerDB\Model\Yazar as cmy;

class ModelTest extends PHPUnit_Framework_TestCase
{
  public function setUp() {
    $this->model = new cm;
  }

  public function testCount() {
    $yazar = new cmy();
    $this->assertEquals(3,$this->model->yazar->count());
  }

  public function testGetRows() {

  }

}




?>
