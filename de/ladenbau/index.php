<?php include("../../etc/config.php");?>
<?php $lang = "de";
	if ($lang=="de"){
		$altlang = "en";
	} else {
		$altlang = "de";
	}
?>
<?php include("../../php/inc.head.php");?>
<body>
<?php include("../../php/inc.modalde.php");?>
<?php include("../../php/inc.header.subSites.php");?>

	<div id="wrapper" style="width:100%;">
		<div class="container">
			<div class="landingPageContainer">
			<?php /****************************************\
				CONTENT OF LANDING PAGE
			\*********************************************/?>
				<h1>Ladenbau<small> / Ihr Store ist unsere Mission</small></h1> 
								
				<img src="http://heckhaus.de/images/106122454kjusdavos1slide.jpg">
				

				<h2>Faszination im Ladenbau spürbar machen</h2>
				
				<p>Ganz gleich, was Sie auf der Verkaufsfläche präsentieren möchten, wir sorgen für beeindruckende Produkt­ und Markenerlebnisse. Mit Kreativität, Dynamik und unkonventionellen Ideen setzen wir Ihre Wünschen und Ideen gemeinsam um. So entstehen auch auf kleinsten Flächen Ladeneinrichtungen, die großen Eindruck machen und eigenständig und individuell sind. Durch flexibel einsetzbare Ladenbau­Elemente sind optimale Positionierungen möglich und setzen an den richtigen Stellen die gewünschten Akzente. Als zuverlässiger Ladenbauer sorgen wir für eine termin­ und budgetgerechte Fertigstellung mit Auf­und Abbau. <i>So werden Kunden zu Fans!</i></p>

				<img class="callToAction" data-toggle="modal" data-target="#myModal" src="/img/callToAction.png">

				<h3>Unsere Referenzen im Bereich Ladenbau</h3>


			<div class="col-md-12 well">
				<div class="col-md-3 smallItem">
					<img src="http://heckhaus.de/images/1530981328domicilthumb.jpg" class="img-responsive">
					<h3>Ladenbau ­ Reebok</h3>
					<p class="excerpt">In einer ehemaligen Industriehalle haben wir die erste CrossFit Box in Deutschland realisiert.</p>
					<span class="btn btn-danger">Weiterlesen</span>
				</div>
				<div class="col-md-3 smallItem">
					<img src="http://heckhaus.de/images/6072742541826740036bestoffitness-firstblack-label-club-am-marienplatz-munchenffgalerie01aufmacher.jpg" class="img-responsive">
					<h3>Ladenbau ­ Fitness First</h3>
					<p class="excerpt">Für den weltgrößten Fitnessstudio Betreiber „Fitness First“ haben wir ein brandneues Designkonzept entwickelt.</p>
					<span class="btn btn-danger">Weiterlesen</span>
				</div>
				<div class="col-md-3 smallItem">
					<img src="http://heckhaus.de/images/654298315kickzthumb.jpg" class="img-responsive">				
					<h3>Ladenbau ­ 1860 München</h3>
					<p class="excerpt">Am berühmten altmünchner „Platzl“ haben wir den 1860 München Fanshop neu gestaltet.</p>
					<span class="btn btn-danger">Weiterlesen</span>
				</div>
				<div class="col-md-3 smallItem">
					<img src="http://heckhaus.de/images/618852567villastuckthumb.jpg" class="img-responsive">
					<h3>Ladenbau ­ Kickz.com</h3>
					<p class="excerpt">Auf 400 qm, verteilt auf 4 Etagen, findet der „Streetwear­Fan“ alles, was sein Herz begehrt.</p>
					<span class="btn btn-danger">Weiterlesen</span>
				</div>
				<div class="clearfix"></div>
			</div>

			<?php /****************************************\
				END OF LANDING PAGE
			\*********************************************/?>				
			</div>
<p>&nbsp;</p>
<footer class="container">

<div class="row">
		<div class="col-md-9 footerLeft">
			Copyright 2013­-2014 by Heckhaus® ­ Ihr Ladenbau Unternehmen in Deutschland<br><a id="modalLink" data-toggle="modal" data-target="#myModal">Kontakt</a> | <a href="http://heckhaus.de/de/impressum/">Impressum</a>
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

<?php include("../../php/inc.scripts.php");?>
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