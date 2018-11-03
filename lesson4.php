<?php
echo("Lesson 4<br>");
function sinov()
{
	echo 4+6;
	echo "<br>";
}
sinov();
function myfun($a,$b)
{
  	if ($a< $b) 
  		return $a;
  	else
  		return $b;
}
function maks($c,$d,$f,$g,$h){
	$x=myfun($c,myfun($d,myfun($f,myfun($g,$h))));
		echo "maximum is: " .$x."<br>";
}
maks(45,49,30,46,50);

$num = array(3,4,2,5,1);
sort($num);
$co=count($num);
for ($i=0; $i < $co; $i++) { 
	echo $num[$i];
	echo "<br>";
}
# new Line
	$moto = array('Mahmudjon' => 20 , 'Jasur'=> 21 );
	arsort($moto);
	$co=count($moto);
	foreach ($moto as $x => $value) {
		echo "Ism: ".$x. ", Yosh: ".$value;
		echo "<br>";
	}

	echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>