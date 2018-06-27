<?php  
	if ( !empty($_POST) ) {
		$message = "Вам пришло новое сообщение с сайта \n" 
				 . "Имя отправителя: " . $_POST["userName"] . "\n"
				 . "Email Отправителя: " . $_POST["userEmail"] . "\n"
				 . "Сообщение: \n" . $_POST["message"];

		$headers = "From: info@mail.ru";
		$resultMail = mail( "evgeniys1@tut.by", "Сообщение с сайта", $message, $headers );

		if ( $resultMail ) {
			echo "Форма отправлено успешно";
		} else {
			echo "Что-то пошло не так";
		}
	}
?>

 <form action ="index.php" method ="post">
 	<input type="text" name="userName" placeholder="Ваше имя"><br>
 	<input type="text" name="userEmail" placeholder="Email"><br>
 	<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="submit" value="send form">
</form>
