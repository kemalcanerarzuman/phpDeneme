<?php
use CanerDB\Model\Kitap as cmk;

class KitapTest extends PHPUnit_Framework_TestCase
{
  public function setUp() {
    $this->kitap = new cmk();
  }

  public function testCount() {
    $this->assertEquals(7,$this->kitap->count());
  }

  public function testGetRows() {
    $this->assertEquals(null, $this->kitap->find());
    $this->assertEquals(null, $this->kitap->find("name"));
    $this->assertEquals(null, $this->kitap->find("", "ss"));
  }

}

?>
