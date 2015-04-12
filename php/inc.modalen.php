<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div id="contactForm">
		<form method="post" id="contactFormForm">
			<div class="row">
					<div class="col-xs-8">
						<span class="heading">CONTACT</span>						
					</div>
					<div class="col-xs-4 address">
						<h4>HECKHAUS</h4><br>
						Thalkirchner Strasse 62<br>
						80337 München<br>
						Fon: +49(0)89 - 62 27 17 - 30<br>
						Fax: +49(0)89 - 62 27 17 - 39						
					</div>				
			</div>
			<div class="row">
				<div class="col-md-12">					
					<div class="textLabelWrapper">
						<label class="textLabel" for="contactFormName">Name / Company</label>&nbsp;
						<input type="text" class="form-control" name="contactFormName" id="contactFormName">
					</div>
					<div class="textLabelWrapper noShow">									
						<label class="textLabel" for="contactFormCompany">COMPANY</label>&nbsp;
						<input type="text" class="form-control" name="contactFormCompany" id="contactFormCompany">
					</div>									
					<div class="textLabelWrapper">									
						<label class="textLabel" for="contactFormEmail">Email</label>&nbsp;
						<input type="email" class="form-control" name="contactFormEmail" id="contactFormEmail">
					</div>
					<div class="textLabelWrapper noShow">									
						<label class="textLabel" for="contactFormTelephone">TELEFON</label>&nbsp;
						<input type="text" class="form-control" name="contactFormTelephone" id="contactFormTelephone">
					</div>							
						<span class="request noShow">PLEASE</span>
						<label for="typeOfContactCall" class="radioLabel noShow">...CALL ME BACK</label>
						<label for="typeOfContactInformation" class="radioLabel noShow">...SEND ME MORE INFORMATION</label>
						<label for="typeOfContactNewsletter" class="radioLabel noShow">...SEND ME YOUR NEWSLETTER</label>
						<input type="checkbox" class="hidden noShow" name="typeOfContactCall" value="call" id="typeOfContactCall">
						<input type="checkbox" class="hidden noShow" name="typeOfContactInformation" value="information"  id="typeOfContactInformation">
						<input type="checkbox" class="hidden noShow" name="typeOfContactNewsletter" value="newsletter" id="typeOfContactNewsletter">
						<label>Would you like further information about us, a personal discussion or simply our newsletter?</label>
						<div class="textareaWrapper">
							<textarea row="8" class="form-control" name="message"></textarea>
							<div class="submitButtonWrapper">
								<span class="btn btn-danger pull-right" id="submitContactForm">
									<span>SEND</span>
								</span>
							</div>
						</div>						
					</div>
				</div>
				<input type="hidden" value="englisch" name="language">
				<input type="hidden" value="" name="sendToMail" id="sendToMail">				
				<input type="text" class="noShow" name="PLZ">
				<div class="clearfix"></div>
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
					<label class="textLabel" for="newsletterFormCompany">COMPANY</label>&nbsp;
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

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="newsletterModal" aria-hidden="true">
	<div id="videoInModalWrapper">
		<iframe src="//player.vimeo.com/video/117792743?color=ff0000&title=0&byline=0&portrait=0" width="580" height="326" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
</div>