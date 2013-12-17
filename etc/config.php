
<?php date_default_timezone_set("UTC");
	$server = "http://".$_SERVER['HTTP_HOST'];
	define ('SERVER',$server);
	define ('LANGUAGE',$_GET['lang']);
	$lang = $_GET['lang'];
	if ($lang == ""){
		$lang = "de";
	} 
?>