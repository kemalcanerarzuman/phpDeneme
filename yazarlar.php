<?php
  require_once "Autoload.php";

  $yazar = new CanerDB\Model\Yazar();
  $kitap = new CanerDB\Model\Kitap();
//  $kitap->setBookName("Tutunamayanlar");
//  $kitap->setColumns("Tutunamayanlar", "Oguz");
  echo "<pre>";
  //print_r($yazar->findByName("ss"));
/*  $kitap->create(array(
    'name' => 'sss' ,
    'author' => 'ddd'
  ));
  $yazar->create(array(
    'name' => 'asdd',
    'surname' => 'dddd',
    'birth_year' => 1995
  ));*/
  print_r($kitap->findByName("Tutunamayanlar"));
  print_r($yazar->findByName("aass"));
  echo $yazar->count()."\n";
  echo $kitap->count()."\n";

  echo $kitap->find('name', 'asd');
  echo  $yazar->find('name','Oguz');

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
