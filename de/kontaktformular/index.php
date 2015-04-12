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
<?php //include("../../php/inc.header.php");?>

		<div class="container">
						
						<div id="contactForm">
							<form>
								<div class="col-md-6">

									<h1>SAY HELLO ...</h1>

									<div class="textLabelWrapper">
										<label class="textLabel" for="contactFormName">NAME</label>
										<input type="text" class="form-control" id="contactFormName" placeholder="Name">
									</div>
									<div class="textLabelWrapper">									
										<label class="textLabel" for="contactFormCompany">FIRMA</label>
										<input type="text" class="form-control" id="contactFormCompany" placeholder="Firma">										
									</div>									
									<div class="textLabelWrapper">									
										<label class="textLabel" for="contactFormEmail">EMAIL ADRESSE</label>
										<input type="email" class="form-control" id="contactFormEmail" placeholder="Email">										
									</div>
									<div class="row">
										<div class="col-md-4">																									
											<span class="request">BITTE UM ...</span>
										</div>									
										<div class="col-md-8">
											<label for="typeOfContactCall" class="radioLabel">...ANRUF</label><br>
											<label for="typeOfContactInformation" class="radioLabel">...INFORMATIONEN</label><br>
											<label for="typeOfContactNewsletter" class="radioLabel">...NEWSLETTER</label><br>									
											<input type="radio" class="hidden" name="typeOfContact" value="call" id="typeOfContactCall">
											<input type="radio" class="hidden" name="typeOfContact" value="information"  id="typeOfContactInformation">
											<input type="radio" class="hidden" name="typeOfContact" value="newsletter" id="typeOfContactNewsletter">												</div>
									</div>	
														
								</div>
								<div class="col-md-6 heart">
									<div class="spacer col-xs-12"></div>
									<div class="row">
										<div class="col-xs-2">
										</div>
										<div class="col-xs-8">
										<textarea class="form-control">
	
										</textarea>
										</div>
										<div class="col-xs-2">
										</div>
									</div>
								</div>							
							</form>	
						</div>

		</div>
	<?php include("../../php/inc.scripts.php");?>
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