<!DOCTYPE html>
<html>
<head>
	<title>HECKHAUS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link href="<?php echo SERVER ?>/css/style.css" rel="stylesheet" media="screen">
	<meta charset="utf-8">
	<link rel="publisher" href="https://plus.google.com/104546880805719863608">
	<link type="image/icon" href="<?php echo SERVER ?>/img/heckhaus_favicon.ico" rel="shortcut icon" />	
	<meta name="description" content="Heckhaus ist eine Design- und Planungsagentur für Ladenbau, Showrooms, Shop-in-Shop-Systeme, Displays, Messestände und Set-Design. Unser Anspruch: Individualität.">
	<?php
    if (preg_match("/\bMSIE\b/i",$_SERVER['HTTP_USER_AGENT'])){
        $ie = true;
		echo '<link rel="stylesheet" href="';
		echo SERVER;
		echo '/css/IE.css">';    }	
	?>
	<?php
	if (preg_match("/\biPhone\b/i",$_SERVER['HTTP_USER_AGENT']) OR preg_match("/\biPad\b/i",$_SERVER['HTTP_USER_AGENT'])) {
		$iOS = true;
		echo '<link rel="stylesheet" href="';
		echo SERVER;
		echo '/css/iOS.css">';
	}
	?>		
</head>