<?php
	if ((preg_match("/\bde/i",$_SERVER['HTTP_ACCEPT_LANGUAGE']))) {
		header('Location:de/');
	} else {
		header('Location:en/');
	}
?>