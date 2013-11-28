<nav class="navbar navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header pull-right">
			<a class="navbar-brand" href="#"><img alt="heckhaus.de" title="Logo der Firma Heckhaus" src="<?php echo SERVER;?>/img/logo.png"></a>
		</div>		
		<ul class="nav navbar-nav">
			
			<?php //WE SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">WE</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=jumbotron&lang=<?php echo $_GET['lang']?>">Home / News</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=weArt&lang=<?php echo $_GET['lang']?>">Art</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=weProfile&lang=<?php echo $_GET['lang']?>">Profile</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=wePress&lang=<?php echo $_GET['lang']?>">Press</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=weTeam&lang=<?php echo $_GET['lang']?>">Team</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=weContact&lang=<?php echo $_GET['lang']?>">Contact</a></li>
				</ul>
			</li>	
			<?php //WORK SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">WORK</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workHome&lang=<?php echo $_GET['lang']?>">Home / News</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workBestOf&lang=<?php echo $_GET['lang']?>">Best of ...</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workLadenbau&lang=<?php echo $_GET['lang']?>">Ladenbau / Corporate Architecture</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workRetail&lang=<?php echo $_GET['lang']?>">Shop-in-Shop / Retail</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workDisplay&lang=<?php echo $_GET['lang']?>">Display</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workGraphics&lang=<?php echo $_GET['lang']?>">Graphics & Window-Dressing</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workShowroom&lang=<?php echo $_GET['lang']?>">Showroom</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workEvents&lang=<?php echo $_GET['lang']?>">Messe / Event</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=workSetDesign&lang=<?php echo $_GET['lang']?>">Set-Design</a></li>					
				</ul>
			</li>
			<?php //FOR YOU SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><small>FOR</small> YOU</a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=forYouJobs&lang=<?php echo $_GET['lang']?>">Jobs</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=forYouReferences&lang=<?php echo $_GET['lang']?>">Referenzen</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=forYouPartner&lang=<?php echo $_GET['lang']?>">Partner</a></li>
					<li><a href="<?php echo SERVER; ?>/<?php echo $_GET['lang']?>/index.php?id=forYouDownloads&lang=<?php echo $_GET['lang']?>">Downloads</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>