<?php
$x=4;
$y=5;
$z=4;
$d=6;
if($x==$z xor $y==$d)
{
	echo "XOR working <br> ";
}
else 
{
	echo "Try again <br>";
}
$m = date("H");
echo $m;
var_dump($x !== $y);
$var = "sariq";
switch ($var) {
	case 'yashil':
		echo " <br>Sizning sevimli  rangingiz sariq";
		break;
	
	default:
		echo "<br> Ubu narsa<br>";
		break;
}
  do{
 	echo "the first number: $z <br>";
 	$z++;
 }while ($z<5);

 $arr = array('Apple','Orange','Banana', 'Kiwi');
 foreach ($arr as $value) {
 	echo "$value <br>";
 }

 # FUNCTIONS 
 function newFunction($fname, $age)
 {
 	echo "$fname Utkurov, Born in $age <br>";
 }
 newFunction("Mahmudjon", "1998");
 newFunction("Muzaffar",  "1994");# bog'cha , maktab kollej, 
 $age1 = 21;
 switch ($age1) {
 	case '$age1<=7':
 		echo "Maktab bolasi";
 		break;
 	case '$age1<=7':
 		echo "Bog'cha bolasi";
 		break;
 	case '$age1>7 and $age1<=16':
 		echo "Maktab bolasi";
 		break;
 	case '$age1>=17 and $age1<19':
 		echo "Kollej bolasi";
 		break;
 	case '$age1>=19 and $age1<=23':
 		echo "Universitet bolasi";
 		break;
 	
 	default:
 		echo "Qarib  qobsiz!!!<br>";
 		break;
 }
 $age2=15;
 if ($age2<=7) {
 	echo "Bog'cha bolasi";
 }
 elseif ($age2>7 and $age2<=16) {
 	echo "Maktab bolasi<br>";
 }
 elseif ($age2>17 and $age2<=23) {
 	echo "Universitet talabasi";
 }
 else
 {
 	echo "Qarib  qobsiz!!!";
 }
 $var3=0;
 $var4=1;
 $sum=0;
 $pro=1;
 while ($var4<=3) {
 	$sum+=$var3;
 	$pro *=$var4;
 	$var3++;
 	$var4++;
 }
 echo "Sum equal is $sum <br>";
 echo "Product equal is $pro";
?>