<?php
namespace CanerDB\Model;
use CanerDB\Model;

class Kitap extends Model
{
  protected $bookName;


  public function setBookName($bookName) {
    $this->bookName = $bookName;
  }


}

?>
