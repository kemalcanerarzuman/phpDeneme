<?php
use CanerDB\Model\Yazar as cmy;

class YazarTest extends PHPUnit_Framework_TestCase
{
  public function setUp() {
    $this->yazar = new cmy();
  }

  public function testCount() {
    $this->assertEquals(7,$this->yazar->count());
  }

  public function testGetRows() {
    $this->assertEquals(null, $this->yazar->find());
    $this->assertEquals(null, $this->yazar->find("name"));
    $this->assertEquals(null, $this->yazar->find("", "ss"));
  }

}

?>
