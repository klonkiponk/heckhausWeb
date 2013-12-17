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
	$(document).on("click",".navbar-fixed-top a",function(event){
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

	/********************************\
	
	CONTENT loading
	
	\********************************/
	
	//loading the content of the subsites into the first site
	//Javascript is working from relational folder structure, therefore no /de or /en is used


	$("#weContact article").load("we/contact.php article");
	$("#wePress article").load("we/press.php article");
	$("#weProfile article").load("we/profile.php article");
	$("#weTeam article").load("we/team.php article");

	$("#workHome article").load("work/home.php article");
	$("#workBestOf article").load("work/bestOf.php article");
	$("#workSetDesign article").load("work/setDesign.php article");
	$("#workLadenbau article").load("work/ladenbau.php article");
	$("#workRetail article").load("work/retail.php article");
	$("#workDisplay article").load("work/display.php article");
	$("#workGraphics article").load("work/graphics.php article");
	$("#workShowroom article").load("work/showroom.php article");
	$("#workEvents article").load("work/events.php article");
	$("#workSetDesign article").load("work/setDesign.php article");

	$("#forYouJobs article").load("forYou/jobs.php article");
	$("#forYouReferences article").load("forYou/references.php article");
	$("#forYouPartner article").load("forYou/partner.php article");
	$("#forYouDownloads article").load("forYou/downloads.php article",function(){
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
	
	$(document).on("click",".submitNewsletter",function(){
		$.ajax({
			type: 'post',
			url:"../php/newsletter.php",
			data: $(this).parent().serialize(),
			success:function(result){
				$("#newsletter form").html(result);
			}
		});
	});
		
	$('#slider1').tinycarousel({
		axis: 'y',
		interval: true,
		intervaltime: 3000
	});
	$('#slider2').tinycarousel({
		axis: 'y',
		interval: true,
		intervaltime: 3000
	});
	
	
	/********************************\
	*
	* Europa Slider
	*
	*/
	$("#weArt article").load("we/art.php article",function(){
		$("#europaSlider").nivoSlider({
			effect:"fade",
			controlNav:false,
			controlNavThumbs:false,
			directionNav:false,
			pauseTime:2000
		});
	});	
});