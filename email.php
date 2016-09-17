<?php
if($_POST){
	$to      = 'nobody@example.com';
	$subject = $_POST['asunto'];
	$message = 'De: '. $_POST['nombre'] . ' Email:'. $_POST['email'] . 'Mensaje: ' . $_POST['mensaje'];

mail($to, $subject, $message);
}
?>