<?php
//ob_start();
  require_once("functions.php");
    $yazarlar = readTxtFile("yazarlar.txt");
  if($_POST != null) {
    if(!isset($_POST['cancel'])) {
    $yazarlar[$_GET['index']]->setName($_POST['name']);
    $yazarlar[$_GET['index']]->setSurname($_POST['surname']);
    $yazarlar[$_GET['index']]->setBirthYear($_POST['birth_year']."\n");
    writeTXT($yazarlar);
  }
    redirect('yazarlar.php');
  }

    echo '<form method="post">
  Name:        <input type="text" name="name" value="'.$yazarlar[$_GET['index']]->getName().'" /> <br />
  Surname:     <input type="text" name="surname" value="'.$yazarlar[$_GET['index']]->getSurname().'" /><br />
  Birth Date:  <input type="text" name="birth_year" value="'.$yazarlar[$_GET['index']]->getBirthYear().'" /> <br />
  <input type="submit" value="Save" />
  <input type="submit" name="cancel" value="Cancel" /> <a href="yazarlar.php" />
  </form>';


//ob_end_flush();
 ?>
