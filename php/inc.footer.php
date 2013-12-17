<div class="divider"></div>
<div class="divider"></div>
<footer class="container">
		<div class="col-md-9 footerLeft">
			Heckhaus ist eine Design- und Planungsagentur für Ladenbau, Showrooms, Shop-in-Shop-Systeme, Displays, Messestände und Set-Design. Unser Anspruch: Individualität.
			<hr>
			<p><a href="https://www.facebook.com/pages/Heckhaus/109524019089498?ref=ts"><button class="btn btn-danger">LIKE</button></a> us on Facebook</p>
			
			<section class="details" id="newsletter">
				<span class="newsletterToggler" data-id="contactUs">+ / - SUBSCRIBE TO NEWSLETTER</span>
				<div class="toggled" data-id="contactUs">
					<form method="post" action="<?php echo SERVER; ?>/php/newsletter.php">
						<div class="col-md-12">
							<div class="col-md-6 noPadding">							
								<div class="input-group">
									<span class="input-group-addon">
										<input type="radio" name="title" value="maennlich" id="titleMale">
									</span>
								  <span class="form-control">Herr</span>
								</div>
							</div>
							<div class="col-md-6 noPadding">							
								<div class="input-group">
									<span class="input-group-addon">
										<input type="radio" name="title" value="weiblich" id="titleFemale">
									</span>
								  <span class="form-control">Frau</span>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="inputs">
								<div class="input-group">
								  <span class="input-group-addon">Firma</span>
								  <input type="text" class="form-control" name="company" placeholder="Firma">
								</div>
	
								<div class="input-group">
								  <span class="input-group-addon">Name</span>
								  <input type="text" class="form-control" name="name"  placeholder="Nachname">
								</div>
	
								<div class="input-group">
								  <span class="input-group-addon">Vorname</span>
								  <input type="text" class="form-control" name="surname"  placeholder="Vorname">
								</div>
	
								<div class="input-group">
								  <span class="input-group-addon">Strasse / Nr.</span>
								  <input type="text" class="form-control"  name="street"  placeholder="Straße / Nr.">
								</div>
	
								<div class="input-group">
								  <span class="input-group-addon">PLZ / Ort</span>
								  <input type="text" class="form-control" name="postal"  placeholder="PLZ / Ort">
								</div>							
	
								<div class="input-group">
								  <span class="input-group-addon">E-Mail @</span>
								  <input type="text" class="form-control"  name="email" placeholder="E-Mail">
								</div>
							</div>
						</div>
						
						<input type="hidden" name="language" value="<?php echo LANGUAGE;?>">
						<span class="btn btn-danger pull-right submitNewsletter" style="margin-right:15px;padding:3px">
							Subscribe
						</span>
						<div class="clearfix"></div>						
					</form>
				</div>				
			</section>
			<hr>
    				 website design by <a href="http://www.nikobe.net" class="red" target="_blank">nikobe nyc</a><br>
                     website development by <a href="http://siegerth.com" class="red" target="_blank">Kevin Siegerth</a><br>
                     website content copy by <a href="http://www.buerobotz.de/index.html" class="red" target="_blank">Robert Botz</a>			
			<hr>
			Copyright © <?php echo date("Y");?> Heckhaus | <a class="red" href="/<?php echo $lang;?>/impressum.php">Impressum</a> | <a class="red" href="/<?php echo $lang;?>/agb.php">AGB</a>
	Referenzen: Ladenbau | Shop-in-Shop | Displays & Aufsteller | Graphics & Visuals | Messedesign & Messeplanung | Set Design | Showroom Design | Schaufenster-Inszenierung
		</div>
		<div class="col-md-3 footerRight">
			<address>
				<h3>HECKHAUS</h3>
				GmbH & Co. KG<br>
				<br>
				Thalkirchner Strasse 62<br>
				80337 München<br>
				Fon +49 (0)89 - 62 27 17 - 30<br>
				Fax +49 (0)89 - 62 27 17 - 39<br>
				<a class="red" href="mailto:info@heckhaus.de">info [ at ] heckhaus.de</a>
			</address>
		</div>
</footer>