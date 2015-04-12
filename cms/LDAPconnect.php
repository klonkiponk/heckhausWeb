
<form method="post" action="">
	User<br>
	<input type="text" name="username"><br>
	pass<br>
	<input type="password" name="password"><br>
	<input type="submit">
</form>


<?php
if(!empty($_POST['username'])){	
	$ldaprdn  = $_POST['username'];    //vllt. müssen wir an den User @heckhaus.local anhängen... oder wie is euer Domain Name
	$ldappass = $_POST['password'];  
	
	// VERBINGUNG ZUM LDAP //KS: Funktioniert
	$ldapconn = ldap_connect("127.0.0.1")
	    or die("Keine Verbindung zum LDAP server möglich.");
	
	// LDAP OPTIONS
	ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
	ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);
	
	//LDAP BIND
	if ($ldapconn) {

	    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
	
		//PRÜFEN DES BIND
		if ($ldapbind) {
			echo "Congratulations! $ldaprdn is authenticated.";
		} else {
			echo "BIND UNSUCCESSFUL";
		}
	}
}
?>