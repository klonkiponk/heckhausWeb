<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		
<?php
		$email = $_POST['newsletterFormEmail'];
		$company = $_POST['newsletterFormCompany'];
		$name = $_POST['newsletterFormName'];
		$language = $_POST['newsletterFormlanguage'];	
		$spamProtect = $_POST['PLZ'];					
		$header = 	'From: heckhaus.de' . "\r\n" .
					'Reply-To: kevin@siegerth.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$to = $_POST['newsletterSendToMail'];
		$subject = "Neue Newsletteranmeldung über heckhaus.de";
		$body = "";
		$body .= "Email: ".$email."\n";
		$body .= "Company: ".$company."\n";
		$body .= "Name: ".$name."\n";
		if (empty($spamProtect)){		
			if (mail($to, $subject, $body, $header)) {
				if($language == "en") {
					echo "<p>Email successfully sent!</p>
					  <p>The window will close automatically.</p>";
					
				} else {
					echo "<p>Email successfully sent!</p><p>Dieses Fenster schließt sich automatisch</p>";
				}
			} else {
				echo "<p>Email delivery failed…</p>";
			}
		} else {
			echo "<p>Verdacht auf SPAM: Nachricht wurde nicht abgesendet</p>";
		}	
?>