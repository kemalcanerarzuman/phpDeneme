<?php
namespace CanerDB\Model;
use CanerDB\Model;

class Kitap extends Model
{

  protected $fileName= "kitaplar.txt";
  protected $columns = ["kitapID","name","yazarID"];
  protected $id;

  public function yazar($id) {
    $yazar = new Yazar();
    $kitapRows = $this->getRows();
    $rows = $yazar->getRows();
    $yazarID = null;
    foreach ($kitapRows as $key => $value) {
      if($kitapRows[$key]['kitapID'] == $id) {
      $yazarID = $kitapRows[$key]['yazarID'];

          }
    }
    foreach ($rows as $key => $value) {
      if(trim($rows[$key]["yazarID"]) == trim($yazarID)){
        return $value;
      }
    }
  }
}

?>
