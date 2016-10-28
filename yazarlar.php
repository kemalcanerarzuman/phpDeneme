<?php
  require_once "Autoload.php";

  $yazar = new CanerDB\Model\Yazar();
  $kitap = new CanerDB\Model\Kitap;
  $kitap->setBookName("Tutunamayanlar");
  echo "<pre>";
  //print_r($yazar->findByName("ss"));

/*  $yazar->create(array(
    'name' => 'asdd',
    'surname' => 'dddd',
    'birth_year' => 1995
  ));*/
//  print_r($yazar->findByName("asdd"));
  echo $yazar->count()."\n";

  echo  $yazar->find('name','Oguz');
  $yazar->addBook($kitap) ;
  $yazar->addBook(new CanerDB\Model\Kitap()) ;
  print_r($yazar->getBooks());

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
