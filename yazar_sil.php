<?php
  require_once("function/functions.php");
  $yazarlar = readTxtFile("yazarlar.txt");
  deleteAuthor($_GET['index'], $yazarlar);
  writeTXT($yazarlar);
  redirect('yazarlar.php');
  echo $_GET['index'];
 ?>
