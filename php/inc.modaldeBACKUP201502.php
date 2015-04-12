<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div id="contactForm">
		<form method="post" id="contactFormForm" action="<?php echo SERVER; ?>/php/contactForm.php">
			<div class="row">
			<div class="col-md-6">
				<span class="heading">SAY HELLO ...</span>

				<div class="textLabelWrapper">
					<label class="textLabel" for="contactFormName">NAME</label>&nbsp;
					<input type="text" class="form-control" name="contactFormName" id="contactFormName">
				</div>
				<div class="textLabelWrapper">									
					<label class="textLabel" for="contactFormCompany">FIRMA</label>&nbsp;
					<input type="text" class="form-control" name="contactFormCompany" id="contactFormCompany">										
				</div>									
				<div class="textLabelWrapper">									
					<label class="textLabel" for="contactFormEmail">EMAIL</label>&nbsp;
					<input type="email" class="form-control" name="contactFormEmail" id="contactFormEmail">										
				</div>
				<div class="textLabelWrapper">									
					<label class="textLabel" for="contactFormTelephone">TELEFON</label>&nbsp;
					<input type="text" class="form-control" name="contactFormTelephone" id="contactFormTelephone">										
				</div>									
				<div class="col-xs-12 smallSpacer"></div>
				<div class="row">
					<div class="col-xs-4">																									
						<span class="request">BITTE UM</span>
					</div>									
					<div class="col-xs-8 noPaddingLeftRight">
						<label for="typeOfContactCall" class="radioLabel">...EINEN RÜCKRUF</label><br>
						<label for="typeOfContactInformation" class="radioLabel">...MEHR INFORMATIONEN</label><br>
						<label for="typeOfContactNewsletter" class="radioLabel">...EUREN NEWSLETTER</label><br>									
						<input type="checkbox" class="hidden" name="typeOfContactCall" value="call" id="typeOfContactCall">
						<input type="checkbox" class="hidden" name="typeOfContactInformation" value="information"  id="typeOfContactInformation">
						<input type="checkbox" class="hidden" name="typeOfContactNewsletter" value="newsletter" id="typeOfContactNewsletter">
					</div>
				</div>							
			</div>
			<div class="col-xs-6 heart">
				<div class="spacer col-xs-12"></div>
				<div class="row">
					<div class="col-xs-2">
					</div>
					<div class="col-xs-8">
					<textarea row="8" class="form-control" name="message">

					</textarea>
					</div>
					<div class="col-xs-2">
					</div>
				</div>
			</div>
			<input type="hidden" value="<?php echo $lang; ?>" name="language">
			<input type="hidden" value="" name="sendToMail" id="sendToMail">
			<input type="text" class="noShow" name="PLZ">								
			<span class="btn btn-danger pull-right" id="submitContactForm" style="margin-right:15px;">
				SEND
			</span>	
			</div>														
		</form>	
	</div>
</div>



<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModal" aria-hidden="true">
	<div id="newsletterForm">
		<form method="post" id="newsletterFormForm" action="<?php echo SERVER; ?>/php/submitNewsletter.php">
			<div class="row">
				<div class="col-md-12">
					<span class="heading">SUBSCRIBE TO NEWSLETTER...</span>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6">
				<div class="textLabelWrapper">
					<label class="textLabel" for="newsletterFormName">NAME</label>&nbsp;
					<input type="text" class="form-control" name="newsletterFormName" id="newsletterFormName">
				</div>
				<div class="textLabelWrapper">									
					<label class="textLabel" for="newsletterFormCompany">FIRMA</label>&nbsp;
					<input type="text" class="form-control" name="newsletterFormCompany" id="newsletterFormCompany">										
				</div>									
				<div class="textLabelWrapper">									
					<label class="textLabel" for="newsletterFormEmail">EMAIL</label>&nbsp;
					<input type="email" class="form-control" name="newsletterFormEmail" id="newsletterFormEmail">										
				</div>						
			</div>
			<div class="col-xs-6 bird">
			</div>
			<input type="hidden" value="<?php echo $lang; ?>" name="newsletterFormlanguage">
			<input type="hidden" value="" name="newsletterSendToMail" id="newsletterSendToMail">
			<input type="text" class="noShow" name="PLZ">								
			<span class="btn btn-danger pull-right" id="submitNewsletterForm" style="margin-right:15px;">
				SEND
			</span>	
			</div>														
		</form>	
	</div>
</div>

