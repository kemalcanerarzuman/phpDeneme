<?php
namespace CanerDB\Model;

use CanerDB\Model;

class Yazar extends Model {

  protected $fileName = "yazarlar.txt";
  protected $columns = ["name", "surname", "birthyear"];
  protected $books = array();

  public function getBooks() {
    return $this->books;
  }

  public function addBook($book) {
    $this->books[] = $book;
  }

}
 ?>
