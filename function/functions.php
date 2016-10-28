<?php

require("Autoload.php");
function startHTML(){
  echo "<html><head><title>Yazarlar</title></head><body>";
}

function readTxtFile ($a) {
  $arr = file("$a");
  $yazarlar;
  $arr2;
  for($i = 0; $i < count($arr); $i++){
      $arr3 = explode(",",$arr[$i]);
      $yazar = new Yazar($arr3[0],$arr3[1],$arr3[2]);
      $yazarlar[] = $yazar;
}
  return $yazarlar;
}

function readPOST($post,$yazarlar) {
//  global $yazarArray;
  if($post['name'] != null  && $post['surname'] != null && $post['birth_year'] != null) {
    if(is_numeric($post['birth_year'])){
      //file_put_contents($txtFile, $post['name'].",".$post['surname'].",".$post['birth_year']."\n", FILE_APPEND);
      $yazarlar[] = new Yazar($post['name'],$post['surname'],$post['birth_year']."\n");
      writeTXT($yazarlar);
      $post = null;
    }
  }
  return $post;
}
function writeTXT($yazarlar){
  $myfile = fopen("yazarlar.txt", "w");
  foreach ($yazarlar as $yazar) {
  $txt = $yazar->getName().",".$yazar->getSurname().",".$yazar->getBirthYear();
  fwrite($myfile, $txt);
}
  fclose($myfile);
}

function createTable($yazarlar){
  echo  '<table border="1" style="width: 25%;" cellpadding="5" cellspacing="5"> <tbody>';
  for($i = 0; $i<count($yazarlar); $i++) {
    echo '<tr><td style="text-align: center"; bgcolor= "yellow">'.$yazarlar[$i]->getName()."</td>";
    echo '<td style="text-align: center"; bgcolor= "yellow">'.$yazarlar[$i]->getSurname()."</td>";
    echo '<td style="text-align: center"; bgcolor= "yellow">'.$yazarlar[$i]->getBirthYear()."</td>";
    echo '<td style="text-align: center"; bgcolor= "yellow">'.'<a href="yazar_sil.php?index='.$i.'">delete</a> </td>';
    echo '<td style="text-align: center"; bgcolor= "yellow">'.'<a href="yazar_duzenle.php?index='.$i.'">update</a>'."</td> </tr>";
  }
  echo "</tbody>   </table>";
}

function createForm(){
  echo '<form method="post">
  Name:        <input type="text" name="name" /> <br />
  Surname:     <input type="text" name="surname" /><br />
  Birth Date:  <input type="text" name="birth_year" /> <br />
  <input type="submit" value="Save" />
  </form>';
}

function finishHTML(){
  echo "</body></html>";
}
function redirect($place){
  header('Location: '.$place);
  exit();
}
function deleteAuthor($index, &$yazarlar) {
  unset($yazarlar[$index]);

}
?>
