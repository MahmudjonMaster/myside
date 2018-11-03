<?php
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$email = $_POST['email'];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(isset($lname)&& isset($fname) && isset($email)){
					if (empty($fname)) {
						echo "<p style='color:red;'> Ism  kiritilmadi !!!.";
					}
					elseif (empty($lname)) {
						echo "<p style='color:red;'> Familiya  kiritilmadi !!!.";
					}
					elseif (empty($email)) {
						echo "<p style='color:red;'> Email  kiritilmadi !!!.";
					}
					else
					echo "<h1 style='color:green;'> Siz ro'yxatdan  o'tdingiz!! <br>
					$fname $lname sizni  tabriklaymiz!!!";
			}
			
	}
?>