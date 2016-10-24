<?php
echo "Hello World\n";
$number1 = 5;
$number2 = 10;
echo $number1+=$number2;
echo "\n".--$number1."\n";
echo 7%2;
$cetvelFiyat = 2;
$kdv =8;
echo "\n".$kdv." KDV \n";
echo $cetvelFiyat + $cetvelFiyat*$kdv/100;
echo "\n";
$a;
echo (empty($a)) ? "Bos" : "Bos Degil";
echo "\n";
echo ($kdv<8 || $cetvelFiyat<2) ?"true" : "false";
echo "\n";

if($kdv == 8) {
  echo "KDV %8'tur";
}
else {
  echo "KDV = ".$kdv;
}
echo "\n".date("Y:m:d:H:i:s");
