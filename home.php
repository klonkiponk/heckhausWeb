<?php include("etc/config.php");?>
<?php $lang = "de";
	if ($lang=="de"){
		$altlang = "en";
	} else {
		$altlang = "de";
	}
?>
<?php include("php/inc.head.php");?>
<body id="home">
<?php include("php/inc.modalen.php");?>
<?php include("php/inc.header.subSites.php");?>

	<div id="wrapper" style="width:100%;">
		<div class="container">
			<div class="landingPageContainer">
			<?php /****************************************\
				CONTENT OF LANDING PAGE
			\*********************************************/?>
				<h1>Welcome to the Heckhaus Site</h1> 
								
				<img src="http://heckhaus.de/images/519177741slidewelcomets.jpg">
				

							<?php /****************************************\
				END OF LANDING PAGE
			\*********************************************/?>				
			</div>
<footer class="container">

<div class="row">
		<div class="col-md-9 footerLeft">
			Copyright 2013­-2014 by Heckhaus® ­<a id="modalLink" data-toggle="modal" data-target="#myModal">Kontakt</a> | Sitemap | <a href="http://heckhaus.de/de/impressum/">Impressum</a>
		</div>
		<div class="col-md-3 footerRight">
			<address>
				<h3>HECKHAUS</h3>
				GmbH &amp; Co. KG<br>
				<br>
				Thalkirchner Strasse 62<br>
				80337 München<br>
				Fon +49 (0)89 - 62 27 17 - 30<br>
				Fax +49 (0)89 - 62 27 17 - 39<br>
				<a class="red" href="mailto:info@heckhaus.de">info [ at ] heckhaus.de</a>
			</address>
		</div>
</div>
</footer>			
			
			<div class="clearfix"></div>
		</div>
	</div><?php //wrapper ?>

<div xmlns="http://www.w3.org/1999/xhtml"
xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
xmlns:xsd="http://www.w3.org/2001/XMLSchema#"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:owl="http://www.w3.org/2002/07/owl#"
xmlns:vcard="http://www.w3.org/2006/vcard/ns#"
xmlns:gr="http://purl.org/goodrelations/v1#">
	<div typeof="gr:BusinessEntity" about="http://heckhaus.de/en/impressum">
		<div property="gr:legalName" content="Heckhaus GmbH & Co. KG" xml:lang="de"></div>
		<div property="rdfs:label" content="Heckhaus GmbH & Co. KG" xml:lang="de"></div>
		<div property="vcard:fn" content="Heckhaus GmbH & Co. KG" xml:lang="de"></div>
		<div property="gr:name" content="Heckhaus GmbH & Co. KG" xml:lang="de"></div>
		<div property="vcard:tel" content="089 - 62271730"></div>
		<div rel="vcard:adr">
			<div typeof="vcard:Address" about="http://heckhaus.de/en/impressum">
				<div property="vcard:street-address" content="Thalkirchner Straße 62"></div>
				<div property="vcard:postal-code" content="80337"></div>
				<div property="vcard:locality" content="München"></div>
				<div property="vcard:country-name" content="Deutschland" xml:lang="de"></div>
			</div>
		</div>
	</div>
</div>

	<?php include("php/inc.scripts.php");?>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.scrollTo.js"></script>
	<?php
	if ($iOS == true) {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus-iOS.js"></script>';
	} elseif($ie == true) {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus.js"></script>';		
	} else {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus.js"></script>';				
	}
	?>		
</body>
</html>