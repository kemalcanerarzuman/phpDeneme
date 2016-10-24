  <?php

    require_once ("functions.php");
    startHTML();
    $yazarlar = readTxtFile("yazarlar.txt");
    if($_POST){
      $_POST = readPOST($_POST,"yazarlar.txt",$yazarlar);
    }

    $yazarlar = readTxtFile("yazarlar.txt");
    createTable($yazarlar);

    createForm();

    finishHTML();
  ?>
