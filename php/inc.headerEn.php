<nav class="navbar navbar-fixed-top jsNavigation" role="navigation">
	<div class="container">
		<div class="navbar-header pull-right">
			<a class="navbar-brand" href="/<?php echo $lang; ?>/" data-link="#jumbotronWork"><img alt="heckhaus.de" title="Logo der Firma Heckhaus" src="<?php echo SERVER;?>/img/logo.png"></a>
		</div>		
		<ul class="nav navbar-nav">			
			<?php //WE SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">WE</a>
				<ul class="dropdown-menu">
					<li><a href="/<?php echo $lang; ?>/we/home/" data-link="#jumbotronWe">Profile</a></li>
					<li><a href="/<?php echo $lang; ?>/we/team/" data-link="#weTeam">Team</a></li>
					<li><a href="/<?php echo $lang; ?>/we/art/" data-link="#weArt" id="headerHeartLink">heART</a></li>
					<li><a href="/<?php echo $lang; ?>/we/press/" data-link="#wePress">Press</a></li>
					<li><a href="/<?php echo $lang; ?>/we/contact/" id="contactLinkEn">Imprint</a></li>			
				</ul>
			</li>	
			<?php //WORK SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">WORK</a>
				<ul class="dropdown-menu">
					<li><a href="/<?php echo $lang; ?>/work/home/" data-link="#jumbotronWork">Home / News</a></li>
					<li><a href="/<?php echo $lang; ?>/work/bestOf/" data-link="#workBestOf">Best of ...</a></li>
					<li><a href="/<?php echo $lang; ?>/work/ladenbau/" data-link="#workLadenbau">Shopfitting & Corporate Architecture</a></li>
					<li><a href="/<?php echo $lang; ?>/work/retail/" data-link="#workRetail">Shop-in-Shop / Retail</a></li>
					<li><a href="/<?php echo $lang; ?>/work/showroom/" data-link="#workShowroom">Showroom</a></li>
					<li><a href="/<?php echo $lang; ?>/work/graphics/" data-link="#workGraphics">Graphics & Window Dressing</a></li>
					<li><a href="/<?php echo $lang; ?>/work/display/" data-link="#workDisplay">Display / POS</a></li>
					<li><a href="/<?php echo $lang; ?>/work/events/" data-link="#workEvents">Trade Shows / Event</a></li>
					<li><a href="/<?php echo $lang; ?>/work/setDesign/" data-link="#workSetDesign">Set-Design</a></li>
				</ul>
			</li>
			<?php //FOR YOU SECTION ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><small>FOR</small> YOU</a>
				<ul class="dropdown-menu">
					<li><a href="/<?php echo $lang; ?>/forYou/jobs/" data-link="#forYouJobs">Jobs</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/references/" data-link="#forYouReferences">References</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/partner/" data-link="#forYouPartner">Partner</a></li>
					<li><a href="/<?php echo $lang; ?>/forYou/downloads/" data-link="#forYouDownloads">Downloads</a></li>
				</ul>
			</li>
		</ul>
		<a class="languageSwitcher" href="<?php echo SERVER; ?>/<?php echo $altlang;?>"><?php echo $altlang; ?></a>
		<img class="callToAction hidden-xs" data-toggle="modal" data-target="#myModal" src="/img/callToAction_en.png">		
	</div><?php //END OF CONTAINER ?>
</nav>