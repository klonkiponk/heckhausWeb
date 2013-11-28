$(document).ready(function() {
	
	//red small more/less toggler
	$(document).on("click","span.toggler",function(){
		var id= $(this).attr("data-id");
		var toggler = this;
		$(".toggled[data-id='"+id+"']").slideToggle("slow",function(){
				//callback function if i want to change something AFTER the animation
				$(toggler).find("span").toggleClass("less");
				$(toggler).find("span").toggleClass("more");
				
		});
	});

	var height = $(window).height();
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
	
	//FUNCTION DISABLES THE HYPERLINKS AND INSTEAD SCROLLS TO THE DESIRED SECTION ON THE PAGE
	$(document).on("click",".navbar-fixed-top a",function(event){
		//var width = $(window).width();
		//var halfWidth = width / 2;
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		
		//SET THE ACTIVE CONTENTWRAPPER WITH CLASS ACTIVE .. DO A SCROLLING WHEN RESIZING!!!!
/*		$("#contentLeft").removeClass("active");
		$("#contentRight").removeClass("active");
		$("#contentCenter").removeClass("active");		
		$(id).parent().parent().addClass("active"); */
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});


	$(document).on("click","#forYouReferences ul li a",function(event){
		var container = $("#wrapper");
		var id = $(this).attr("data-link");
		event.preventDefault();
		container.scrollTo( id, 2000, {queue:true} );
	});

	//FUNCTION DISABLES THE HYPERLINKS AND INSTEAD SCROLLS TO THE DESIRED SECTION ON THE PAGE
/*	$(document).on("click",".navbar-fixed-top a",function(event){
		var id = $(this).attr("data-link");
		$(id).animatescroll({
			scrollSpeed:1000,
			easing:'easeOutBack',
			padding:99
		});
		event.preventDefault();
	});
*/
	
	//loading the content of the subsites into the first site
	//Javascript is working from relational folder structure, therefore no /de or /en is used

	$("#weArt article").load("we/art.php article",function(){
		$("#europaSlider").nivoSlider({
			effect:"fade",
			controlNav:false,
			controlNavThumbs:false,
			directionNav:false,
			pauseTime:2000
		});
	});
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
});

/*sliceDown
sliceDownLeft
sliceUp
sliceUpLeft
sliceUpDown
sliceUpDownLeft
fold
fade
random
slideInRight
slideInLeft
boxRandom
boxRain
boxRainReverse
boxRainGrow
boxRainGrowReverse*/