$(document).ready(function() {

	/********************************\
	
	INITIALIZATION
	
	\********************************/


	var height = $(window).height();
	height = height-120;
	var width = $(window).width();
	var tripleWidth = width * 3;
	$("#wrapper").css("height",height);
	$("#wrapper").css("width",width);
	$("#container").css("width",tripleWidth);
	$("#contentLeft").css("width",width);
	$("#contentRight").css("width",width);
	$("#contentCenter").css("width",width);
	
	$(window).resize(function() {
		var height = $(window).height();
		height = height-120;
		var width = $(window).width();
		var tripleWidth = width * 3;
		$("#wrapper").css("height",height);
		$("#wrapper").css("width",width);
		$("#container").css("width",tripleWidth);
		$("#contentLeft").css("width",width);
		$("#contentRight").css("width",width);
		$("#contentCenter").css("width",width);
		
/*		var container = $("#wrapper");
		var scrollTo = $("#wrapper").find(".active");
		container.scrollTo( scrollTo, 2000, {queue:true} );*/
	});

	
	/********************************\
	
	TOGGLER
	
	\********************************/
	
	
	//red small more/less toggler
	$(document).on("click","span.toggler",function(){
		var id= $(this).attr("data-id");
		var toggler = this;
		$(".toggled[data-id='"+id+"']").slideToggle("slow",function(){
				//callback function if i want to change something AFTER the animation
				$(toggler).find("span").toggleClass("less");
				$(toggler).find("span").toggleClass("more");
				var containerHeight = $("#container").find(".active").height();
				$("#container").css("height",containerHeight);
		});
	});
	
	$(document).on("click",".newsletterToggler",function(){
		var id= $(this).attr("data-id");
		var toggler = this;
		$(".toggled[data-id='"+id+"']").slideToggle("slow",function(){
			//callback function if i want to change something AFTER the animation
			$(toggler).find("span").toggleClass("less");
			$(toggler).find("span").toggleClass("more");
			var containerHeight = $("#container").find(".active").height();
			$("#container").css("height",containerHeight);
		});
	});



	/********************************\
	
	SCROLLING NAVIGATION ON THE PAGE
	
	\********************************/
	
	//FUNCTION DISABLES THE HYPERLINKS AND INSTEAD SCROLLS TO THE DESIRED SECTION ON THE PAGE
	$(document).on("click",".jsNavigation .navbar-nav a",function(event){
		//var width = $(window).width();
		//var halfWidth = width / 2;
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		
		//SET THE ACTIVE CONTENTWRAPPER WITH CLASS ACTIVE
		$("#contentLeft").removeClass("active");
		$("#contentRight").removeClass("active");
		$("#contentCenter").removeClass("active");
		$(id).parent().parent().addClass("active");
		
		var containerHeight = $("#container").find(".active").height();
		$("#container").css("height",containerHeight);
		
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});

	$(document).on("click","#workNews a",function(event){
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		
		$("#contentLeft").removeClass("active");
		$("#contentRight").removeClass("active");
		$("#contentCenter").removeClass("active");
		$(id).parent().parent().addClass("active");
		
		var containerHeight = $("#container").find(".active").height();
		$("#container").css("height",containerHeight);
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});

	$(document).on("click","#linkToNewsletter",function(event){
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		
		$("#contentLeft").removeClass("active");
		$("#contentRight").removeClass("active");
		$("#contentCenter").removeClass("active");
		$(id).parent().parent().addClass("active");
		var containerHeight = $("#container").find(".active").height();
		$("#container").css("height",containerHeight);
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});


	$(document).on("click","#forYouReferences ul li a",function(event){
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		
		$("#contentLeft").removeClass("active");
		$("#contentRight").removeClass("active");
		$("#contentCenter").removeClass("active");
		$(id).parent().parent().addClass("active");
		var containerHeight = $("#container").find(".active").height();
		$("#container").css("height",containerHeight);
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});
	
	$(document).on("click","#contactLinkDe",function(event){
		window.location.href="http://heckhaus.de/de/impressum/";
	});
	$(document).on("click","#contactLinkEn",function(event){
		window.location.href="http://heckhaus.de/en/impressum/";
	});	

	/********************************\
	
	CONTENT loading
	
	\********************************/
	
	//loading the content of the subsites into the first site
	//Javascript is working from relational folder structure, therefore no /de or /en is used


	//$("#weContact article").load("we/contact/index.php article");
	$("#wePress article").load("we/press/index.php article");
	$("#weProfile article").load("we/profile/index.php article");
	$("#weTeam article").load("we/team/index.php article");
	
	$("#workHome article").load("work/home/index.php article");
	$("#workBestOf article").load("work/bestOf/index.php article");
	$("#workSetDesign article").load("work/setDesign/index.php article");
	$("#workLadenbau article").load("work/ladenbau/index.php article");
	$("#workRetail article").load("work/retail/index.php article");
	$("#workDisplay article").load("work/display/index.php article");
	$("#workGraphics article").load("work/graphics/index.php article");
	$("#workShowroom article").load("work/showroom/index.php article");
	$("#workEvents article").load("work/events/index.php article");
	$("#workSetDesign article").load("work/setDesign/index.php article");

	$("#forYouJobs article").load("forYou/jobs/index.php article");
	$("#forYouReferences article").load("forYou/references/index.php article");
	$("#forYouPartner article").load("forYou/partner/index.php article");
	$("#forYouDownloads article").load("forYou/downloads/index.php article",function(){
//		alert("last one loaded");
	});
	/********************************\
	
	SLIDERS
	
	\********************************/
	$("#heckhausSlider").nivoSlider({
		effect:"slideInLeft",
		slices:15,
		boxCols:8,
		boxRows:4,
		animSpeed:750,
		pauseTime:3000,
		directionNav:true,
		controlNav:false,
		controlNavThumbs:false,
		pauseOnHover:true,
		manualAdvance:false
	});
	$('#sliderWork').tinycarousel({
		axis: 'y',
		interval: true,
		intervaltime: 3000
	});
	$('#sliderWe').tinycarousel({
		axis: 'y',
		interval: true,
		intervaltime: 3000
	});
	/********************************\
	
	FORMS
	
	\********************************/
	$(document).on("click","#submitContactForm",function(){
		if($('#contactFormEmail').val() === ""){
			$('#contactFormEmail').parent().addClass('animated pulse');
			$("#contactFormEmail").focus();			
			setTimeout(function(){
				$('#contactFormEmail').parent().removeClass('animated pulse');				
			}, 1000);			
		} else {
			$.ajax({
				type: 'post',
				url:"/php/submitContactForm.php",
				data: $("#contactFormForm").serialize(),
				success:function(result){
					$("#contactForm").html(result);
					$("#contactForm button").focus();
					setTimeout(function(){
						$('#myModal').modal('hide');
						$("#contactForm").load("/php/inc.modalde.php #contactFormForm");						
					}, 5000);

				}
			});
		}
	});
	
	$(document).on("click",".callToAction",function(){
		$("#contactFormName").focus();

	});
	/*SAY HELLO BUTTON*/
	$(document).on("click","img.callToAction",function(){
			//$("#sendToMail").val("contact@heckhaus.de");
			$("#sendToMail").val("kevin.siegerth@icloud.com");			
	});
	/*WE-KONTAKT-FELD*/
	$(document).on("click","a.callToAction",function(){
			//$("#sendToMail").val("info@heckhaus.de");
			$("#sendToMail").val("kevin.siegerth@icloud.com");
	});
	

	/********************************\
	*
	* Europa Slider
	*
	*/
	$("#weArt article").load("we/art/index.php article",function(){
		$("#europaSlider").nivoSlider({
			effect:"fade",
			controlNav:false,
			controlNavThumbs:false,
			directionNav:false,
			pauseTime:2000
		});
	});
	
	$(document).on("click",".radioLabel",function(){
		$(this).toggleClass("checkedRadioButton");
	});	
});