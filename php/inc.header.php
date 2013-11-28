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
					<li><a href="/<?php echo $lang; ?>/we/home.php?lang=<?php echo $lang; ?>" data-link="#jumbotron">Home / News</a></li>
					<li><a href="/<?php echo $lang; ?>/we/art.php?lang=<?php echo $lang; ?>" data-link="#weArt">Art</a></li>
					<li><a href="/<?php echo $lang; ?>/we/profile.php?lang=<?php echo $lang; ?>" data-link="#weProfile">Profile</a></li>
					<li><a href="/<?php echo $lang; ?>/we/press.php?lang=<?php echo $lang; ?>" data-link="#wePress">Press</a></li>
					<li><a href="/<?php echo $lang; ?>/we/team.php?lang=<?php echo $lang; ?>" data-link="#weTeam">Team</a></li>
					<li><a href="/<?php echo $lang; ?>/we/contact.php?lang=<?php echo $lang; ?>" data-link="#weContact">Contact</a></li>
				</ul>
			</li>	
			<?php //WORK SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">WORK</a>
				<ul class="dropdown-menu">
					<li><a href="/<?php echo $lang; ?>/work/home.php?lang=<?php echo $lang; ?>" data-link="#workHome">Home / News</a></li>
					<li><a href="/<?php echo $lang; ?>/work/bestOf.php?lang=<?php echo $lang; ?>" data-link="#workBestOf">Best of ...</a></li>
					<li><a href="/<?php echo $lang; ?>/work/ladenbau.php?lang=<?php echo $lang; ?>" data-link="#workLadenbau">Ladenbau / Corporate Architecture</a></li>
					<li><a href="/<?php echo $lang; ?>/work/retail.php?lang=<?php echo $lang; ?>" data-link="#workRetail">Shop-in-Shop / Retail</a></li>
					<li><a href="/<?php echo $lang; ?>/work/display.php?lang=<?php echo $lang; ?>" data-link="#workDisplay">Display</a></li>
					<li><a href="/<?php echo $lang; ?>/work/graphics.php?lang=<?php echo $lang; ?>" data-link="#workGraphics">Graphics & Window-Dressing</a></li>
					<li><a href="/<?php echo $lang; ?>/work/showroom.php?lang=<?php echo $lang; ?>" data-link="#workShowroom">Showroom</a></li>
					<li><a href="/<?php echo $lang; ?>/work/events.php?lang=<?php echo $lang; ?>" data-link="#workEvents">Messe / Event</a></li>
					<li><a href="/<?php echo $lang; ?>/work/setDesign.php?lang=<?php echo $lang; ?>" data-link="#workSetDesign">Set-Design</a></li>					
				</ul>
			</li>
			<?php //FOR YOU SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><small>FOR</small> YOU</a>
				<ul class="dropdown-menu">
					<li><a href="/<?php echo $lang; ?>/forYou/jobs.php?lang=<?php echo $lang; ?>" data-link="#forYouJobs">Jobs</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/references.php?lang=<?php echo $lang; ?>" data-link="#forYouReferences">Referenzen</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/partner.php?lang=<?php echo $lang; ?>" data-link="#forYouPartner">Partner</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/downloads.php?lang=<?php echo $lang; ?>" data-link="#forYouDownloads">Downloads</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>