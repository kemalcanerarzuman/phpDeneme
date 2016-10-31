<?php
namespace CanerDB\Model;
use CanerDB\Model;

class Kitap extends Model
{
  protected $fileName= "kitaplar.txt";
  protected $columns = ["name", "author"];

  public function setBookName($bookName) {
    $this->bookName = $bookName;
  }

  public function setColumns ($bookName = null, $yazar ) {
  $columns = array($this->bookName, $yazar);
}


}

?>
