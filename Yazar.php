<?php

require_once "Model.php";

class Yazar extends Model {

  protected $fileName = "yazarlar.txt";

  protected $columns = ["name", "surname", "birthyear"];

}
 ?>
