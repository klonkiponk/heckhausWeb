<?php include("../etc/config.php");?>
<?php $lang = $_GET['lang']; ?>
<?php include("../php/inc.head.php");?>
<body>
<?php include("../php/inc.header.php");?>
<div id="debug">
	<pre>
		<?php print_r($_REQUEST); ?>
	</pre>
</div>

<div id="wrapper">
<div id="container">	
<div id="contentLeft">
	<section id="jumbotron" class="jumbotron">
		<div class="container">
			<?php include("../admin/data/blocks/de/jumbotron.html"); ?>
		</div>
	</section>
	
	<section id="start" class="container">
		<?php include("../admin/data/blocks/de/start.html"); ?>
	</section>
	
	<div class="divider"></div>

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
		<div class="divider"></div>
		<section id="weContact">
			<article class="container"></article>			
		</section>
	</section>
	<?php include("../php/inc.footer.php") ;?>

</div>

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
	
	
	
	
</div>

<div id="contentRight">	

	<section id="work">
		<section id="workHome">
			<article class="container"></article>			
		</section>
		<div class="divider"></div>
		<section id="workBestOf">
			<article class="container"></article>			
		</section>	
		<div class="divider"></div>
		<section id="workDisplay">
			<article class="container"></article>			
		</section>			
		<div class="divider"></div>
		<section id="workGraphics">
			<article class="container"></article>			
		</section>
		<div class="divider"></div>
		<section id="workShowroom">
			<article class="container"></article>			
		</section>					
		<div class="divider"></div>
		<section id="workLadenbau">
			<article class="container"></article>			
		</section>
		<div class="divider"></div>
		<section id="workEvents">
			<article class="container"></article>			
		</section>
		<div class="divider"></div>
		<section id="workRetail">
			<article class="container"></article>			
		</section>		
		<div class="divider"></div>
		<section id="workSetDesign">
			<article class="container"></article>			
		</section>
	</section>
	<?php include("../php/inc.footer.php") ;?>
</div>


	
	<?php include("../php/inc.scripts.php");?>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.nivo.slider.js"></script>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="<?php echo SERVER ?>/js/heckhaus.js"></script>

</div>
</div>
	<script type="text/javascript">	
		
		$(window).load(function() {
			$("#wrapper").scrollTo( "#<?php echo $_GET['id'];?>", 2000, {queue:true} );
		});
	</script>
</body>
</html>