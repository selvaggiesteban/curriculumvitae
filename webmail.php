<?php

	$name = $_POST["name"];
	$email = $_POST["email"];
	$tel = $_POST["tel"];
	$subject = "Nueva consulta desde la web";
	$to = "selvaggi.esteban@gmail.com";
	$headers = "DE: " . $to;
	$message = $_POST['message'];
	$message2 = "NUEVO MENSAJE DE: " . $name . "\n\n" . "E-mail: " . $email . "\n\n" . "Teléfono de contacto: " . $tel . "\n\n" . "Mensaje: " . $message . "\n\n" . "Por favor responder a la brevedad.";

 if(mail($to, $subject, $message2)){
	header("Refresh:0; url=index.html");
		$alert = "Tu mensaje fue enviado correctamente.";
		echo "<script type='text/javascript'>alert('$alert');</script>";;
}else{ 
	echo 'Tu mensaje no se pudo enviar. Por favor vuelve a intentar.'; 
 }
?>