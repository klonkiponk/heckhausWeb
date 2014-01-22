<div class="divider"></div>
<div class="divider"></div>
<footer class="container">
		<div class="col-md-9 footerLeft">
Heckhaus is a design and planning agency for store construction, shopfittings, showrooms, shop-in-shop-systems, displays, trade show stands and set-design. Our aspiration: individuality.
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

						<div class="well spamProtection">
							<h4>Spam-Schutz:</h4>
							Bitte wählen Sie das Heckhaus Logo!
							<br>
							<input type="radio" name="spamProtect" id="item1" value="12"><label for="item1"><img src="<?php echo SERVER; ?>/images/forYou/partner/reebok.gif"></label>
							<input type="radio" name="spamProtect" id="item2" value="8"><label for="item2"><img src="<?php echo SERVER; ?>/images/forYou/partner/bencore.gif"></label>
							<input type="radio" name="spamProtect" id="item3" value="92"><label for="item3"><img src="<?php echo SERVER; ?>/images/forYou/partner/logo.png"></label>
							<input type="radio" name="spamProtect" id="item4" value="73"><label for="item4"><img src="<?php echo SERVER; ?>/images/forYou/partner/holzrausch.gif"></label>																			
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
			Copyright © <?php echo date("Y");?> Heckhaus | <a class="red" href="/<?php echo $lang;?>/impressum">Imprint</a> | <a class="red" href="/<?php echo $lang;?>/agb">AGB</a>
<!--	Referenzen: Ladenbau | Shop-in-Shop | Displays & Aufsteller | Graphics & Visuals | Messedesign & Messeplanung | Set Design | Showroom Design | Schaufenster-Inszenierung-->
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40094735-1', 'heckhaus.de');
  ga('send', 'pageview');

</script>