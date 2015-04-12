<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>		
<?php
		//DEBUG print_r($_POST);
		$email = $_POST['contactFormEmail'];
		$message = $_POST['message'];
		$company = $_POST['contactFormCompany'];
		$name = $_POST['contactFormName'];
		$telephone = $_POST['contactFormTelephone'];		
		$typeOfContactCall = $_POST['typeOfContactCall'];
		$typeOfContactNewsletter = $_POST['typeOfContactNewsletter'];
		$typeOfContactInformation = $_POST['typeOfContactInformation'];		
		$language = $_POST['language'];	
		$spamProtect = $_POST['PLZ'];					
		$header = 	'From: heckhaus.de' . "\r\n" .
					'Reply-To: info@heckhaus.de' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
		$to = $_POST['sendToMail'];
		//DEBUG $to = "kevin.siegerth@icloud.com";
		$subject = "Neuer Kontakt über heckhaus.de";
		$body = "";
		$body .= "Name: ".$name."\n";
		$body .= "Email: ".$email."\n";
		//$body .= "Company: ".$company."\n";
		//$body .= "Call: ".$typeOfContactCall."\n";
		//$body .= "Information: ".$typeOfContactInformation."\n";		
		//$body .= "Newsletter: ".$typeOfContactNewsletter."\n";				
		$body .= "Language: ".$language."\n";
		//$body .= "Telefon: ".$telephone."\n";	
		$body .= "Nachricht: ".$message."\n";
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
