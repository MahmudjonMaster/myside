<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$login = $_POST['login'];
$pasword = $_POST['pasword'];
$email = $_POST['email'];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(isset($lname)&& isset($fname) && isset($email)&&isset($login)&&isset($pasword)){
					if (empty($fname)) {
						echo "<p style='color:red;'> Ism  kiritilmadi !!!.";
					}
					elseif (empty($lname)) {
						echo "<p style='color:red;'> Familiya  kiritilmadi !!!.";
					}
					elseif (empty($login)) {
						echo "<p style='color:red;'> Login  kiritilmadi !!!.";
					}
					elseif (empty($pasword)) {
						echo "<p style='color:red;'> Password  kiritilmadi !!!.";
					}
					elseif (empty($email)) {
						echo "<p style='color:red;'> Email  kiritilmadi !!!.";
					}
					else
					echo "<h1 style='color:green;'> Siz ro'yxatdan  o'tdingiz!! <br>
					 Ismingiz: $fname<br> Familiyangiz: $lname<br> Login:$login<br> Parolingiz: $pasword <br> E-mailingiz: $email<br> sizni  tabriklaymiz!!!";
			}
			
	}
?>