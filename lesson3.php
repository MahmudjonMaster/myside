<?php
echo "<h1 style='text-align: center'> THE LESSON 3 </h1><br>";
for($i=0;$i<=9;$i++)
{
	echo "The number is $i <br>";
}
# Massiv
$language = array('English','Russian','Uzbek','Korean');
echo var_dump($language[0]."<br>");
echo count($language);
$sana = count($language);
for ($j=0; $j < $sana; $j++) { 
	echo $language[$j]."<br>";
}
# Associative Arrays
$age = array('Mahmudjon' => '20' ,'Jasurbek' => '21','Javohir' => '19', 'Saidkarim'=> 22);
echo "The age of Mahmudjon is ".$age['Mahmudjon']. " years old<br>";
$talaba = array('Mahmudjon' =>314,'Ibrohim' =>313,'Asqad' =>310 );
foreach ($talaba as $y => $value) {
	echo "Talaba ismi:".$y.". Guruhi: ".$value."<br>";
}
# Multi dimensional array
$Members = array(
				array('Father','54','watch'),
				array('Mother','49','paper'),
				array('Brother','24','korea'),
				array('Sister','22','situation'),
				array('Me','20','programming')
);
// echo count($Members);
echo"-------------------------------------------------- <br>";
	for ($j=0; $j <=4 ; $j++) { 
		echo "Relation: ".$Members[$j][0];
		for ($z=1; $z < 2 ; $z++) { 
			echo ", Age: ".$Members[$j][$z];
		}
		for ($m=2; $m < 3 ; $m++) { 
			echo ", Interest: ".$Members[$j][$m];
		}
		echo "<br>";
	}


?>