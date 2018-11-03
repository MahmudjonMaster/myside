
 </head>
 <body>
 <?php 
echo readfile("schedgule.txt");# r o'rniga w+ qoysa write  bo'ladi
$myFunction=fopen('schedgule.txt','r+') or die('Fayl topilmadi!!!');

$txt='Tatu talabasi';
fwrite($myFunction, $txt);
fclose($myFunction);
$myFunction1= fopen('schedgule.txt','r') or die('Fayl topilmadi!!!');
echo fread($myFunction1, filesize('schedgule.txt'));
fclose($myFunction1);

$mytest=fopen('schedgule.txt','r') or die('Fayl topilmadi shekl!!!');
while (!feof($mytest)) {
	echo fgetc($mytest)."<br>"; #fgets inline  fgetc har bitta har alohida o'qidi
}
#---------------------------------------------------------------------------------

$file=fopen('New_file.txt', 'w') or die("fayl borku");
$txt2= "login: Mahmudjon";
fwrite($file, $txt2);

echo fread($file, filesize('New_file.txt'));
#--------------------------------------------------------------------------------

$file2=fopen('empty.txt', 'w') or die("fayl yo'q");
$txt3= "0123456789";
fwrite($file2, $txt3);
fclose($file2);

$file3=fopen('empty.txt', 'w') or die("fayl yo'q");
for ($i=0; $i <=10; $i++) { 
 	fwrite($file3,$i.'<br>' );

 } 
 header('Location')
// while (!feof($file3)) {
// 	echo fgetc($file3)."<br>";
// }

 ?>
 </body>
 </html>