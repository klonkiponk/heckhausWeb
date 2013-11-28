<?php
	if ((preg_match("/\bde/i",$_SERVER['HTTP_ACCEPT_LANGUAGE']))) {
		header('Location:de/index.php?lang=de');
	} else {
		header('Location:en/index.php?lang=en');
	}
?>