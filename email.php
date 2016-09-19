<?php
if($_POST){
	$to      = 'snullpointer@gmail.com';
	$subject = $_POST['asunto'];
	$message = 'De: '. $_POST['nombre'] . ' Email:'. $_POST['email'] . 'Mensaje: ' . $_POST['mensaje'];

	echo $message;
	/*
	if(mail($to, $subject, $message){
		
	}*/
}
?>