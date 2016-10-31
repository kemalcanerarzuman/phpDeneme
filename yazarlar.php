<?php
  require_once "Autoload.php";

  $yazar = new CanerDB\Model\Yazar();
  $kitap = new CanerDB\Model\Kitap();

  echo "<pre>";

  print_r($kitap->findByName("Tutunamayanlar"));
  print_r($yazar->findByName("Namik"));
  echo $yazar->count()."\n";
  echo $kitap->count()."\n";

//  $kitap->create(array("dca","3"));
//  echo $kitap->find('name', 'dca');
//  echo $yazar->find('name','Resat Nuri');
//  echo $kitap->indexOf('name', 'Calikusu');
  print_r($yazar->kitaplar(5));
  echo "<br>";
  print_r($kitap->yazar(1005));
  echo "<br>";
  echo "</pre>";

  /*
  require_once ("function/functions.php");
  startHTML();
  $yazarlar = readTxtFile("yazarlar.txt");
  if($_POST){
    $_POST = readPOST($_POST,"yazarlar.txt",$yazarlar);
  }

  $yazarlar = readTxtFile("yazarlar.txt");
  createTable($yazarlar);

  createForm();

  finishHTML();
  */
?>
