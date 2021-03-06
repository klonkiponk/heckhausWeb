<?php
	include("../etc/config.php");
	include("../php/inc.db.php");
	include("../php/helpers.php");
	include("../php/db/selectFromDB.php");
?>
<?php $lang = "de";
	if ($lang=="de"){
		$altlang = "en";
	} else {
		$altlang = "de";
	}
?>
<?php include("../php/inc.head.php");?>
<body>
<?php include("../php/inc.modalde.php");?>
<?php include("../php/inc.header.php");?>
<div id="debug">
	<pre>
		<?php //print_r($_REQUEST); ?>
		<?php //print_r($_SERVER); ?>		
	</pre>
</div>
<div id="wrapper">
<div id="container">	
	<div id="contentLeft" class="active">
		<?php echo displayJumbotron($lang,"Work"); ?>
		<section id="work">
			<section id="workHome">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workBestOf">
				<article class="container"></article>			
			</section>	
			<div class="divider"></div>
			<section id="workLadenbau">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workRetail">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workShowroom">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workGraphics">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workDisplay">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workEvents">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workSetDesign">
				<article class="container"></article>			
			</section>
		</section>
		<?php include("../php/inc.footer.php") ;?>	
	</div><?php //contentLeft ?>
		<div id="contentCenter">
			<section id="forYou">
			<section id="forYouJobs">
				<article class="container"></article>
			</section>
			<div class="divider"></div>
			<section id="forYouReferences">
				<article class="container"></article>
			</section>
			<div class="divider"></div>		
			<section id="forYouPartner">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>		
			<section id="forYouDownloads">
				<article class="container"></article>			
			</section>		
		</section>
		<?php include("../php/inc.footer.php") ;?>
		
	</div><?php //contentCenter ?>
	<div id="contentRight">	
				<?php echo displayJumbotron($lang,"We"); ?>
<?php /*		<section id="jumbotronWe" class="jumbotron">
			<div class="container">
				<?php include("../admin/data/blocks/de/jumbotron_we.html"); ?>
				

				
			</div>
		</section>*/?>
		<section id="we">
			<section id="weProfile">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="weTeam">
				<article class="container"></article>
			</section>
			<div class="divider"></div>
			<section id="weArt">
				<article class="container"></article>
			</section>
			<div class="divider"></div>
			<section id="wePress">
				<article class="container"></article>			
			</section>
			<!--<div class="divider"></div>-->
			<section id="weContact">
				<article class="container"></article>			
			</section>
		</section>
		<?php include("../php/inc.footer.php") ;?>
	</div><?php //contentRight ?>
	<div class="clearfix"></div>
</div><?php //container ?>
<div class="clearfix"></div>
</div><?php //wrapper ?>
	<?php include("../php/inc.scripts.php");?>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/heckhaus.js"></script>
	<script type="text/javascript">	
		
		$(window).load(function() {
			var container = $("#wrapper");
			var id = "#<?php echo $_GET['id'];?>";
			$("#contentLeft").removeClass("active");
			$("#contentRight").removeClass("active");
			$("#contentCenter").removeClass("active");
			$(id).parent().parent().addClass("active");
			var containerHeight = $("#container").find(".active").height();
			$("#container").css("height",containerHeight);
			event.preventDefault();
			container.scrollTo( id, 2000, {queue:true} );
		});
	</script>
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
</body>
</html>