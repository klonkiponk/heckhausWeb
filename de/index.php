<?php include("../etc/config.php");?>
<?php include("../php/inc.head.php");?>
<body>
<?php include("../php/inc.header.php");?>
<div id="debug">
	<pre>
		<?php print_r($_REQUEST); ?>
		<?php print_r($_SERVER); ?>		
	</pre>
</div>
<div id="wrapper">
<div id="container">	
	<div id="contentLeft" class="active">	
		<section id="jumbotronWork" class="jumbotron">
			<div class="container">
				<?php include("../admin/data/blocks/de/jumbotron_work.html"); ?>
			</div>
		</section>
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
			<section id="workGraphics">
				<article class="container"></article>			
			</section>
			<div class="divider"></div>
			<section id="workShowroom">
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
			<section id="workRetail">
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
		<section id="jumbotronWe" class="jumbotron">
			<div class="container">
				<?php include("../admin/data/blocks/de/jumbotron_we.html"); ?>
			</div>
		</section>
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
	<?php
	if ($iOS == true) {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus-iOS.js"></script>';
	} elseif($ie == true) {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus-IE.js"></script>';		
	} else {
		echo '<script type="text/javascript" src="';
		echo SERVER;
		echo '/js/heckhaus.js"></script>';				
	}
	?>
	
	<?php /*
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
	</script> */ ?>
</body>
</html>