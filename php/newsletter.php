<?php
	$email = $_POST['email'];
	$title = $_POST['title'];
	$company = $_POST['company'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$street = $_POST['street'];
	$postal = $_POST['postal'];
	$language = $_POST['language'];	
					
	$header = 	'From: heckhaus.de' . "\r\n" .
				'Reply-To: kevin@siegerth.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

	$to = "kevin.siegerth@icloud.com";
	$subject = "Neue Newsletter Registrierung";
	$body = "Hallo Marketing,\n \n \n es gibt eine Newsletteranmeldung von heckhaus.de, folgende E-Mail wurde registriert:\n \n";
	$body .= "Email: ".$email."\n";
	$body .= "Titel: ".$title."\n";
	$body .= "Company: ".$company."\n";
	$body .= "Name: ".$name."\n";
	$body .= "Surname: ".$surname."\n";
	$body .= "Street: ".$street."\n";
	$body .= "Postal: ".$postal."\n";
	$body .= "Email: ".$email."\n";
	$body .= "Language: ".$language."\n";		
	if (mail($to, $subject, $body, $header)) {
		echo("<p>Email successfully sent!</p>");
	} else {
		echo("<p>Email delivery failed…</p>");
	}
?>