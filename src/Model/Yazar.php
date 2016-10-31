<?php
namespace CanerDB\Model;

use CanerDB\Model;

class Yazar extends Model {


  protected $fileName = "yazarlar.txt";
  protected $columns = ["yazarID","name", "surname", "birthyear"];
  protected $id;


  public function kitaplar($id) {
    $kitap = new Kitap();
    $rows = $kitap->getRows();
    foreach ($rows as $key => $value) {
      if($id == $value["yazarID"]) {
        return $rows[$key];
      }
    }
  }
}
?>
