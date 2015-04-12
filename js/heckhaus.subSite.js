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
	$("#wrapper").css("height",height);
	$("#wrapper").css("width",width);
	
	$("#europaSlider").nivoSlider({
		effect:"fade",
		controlNav:false,
		controlNavThumbs:false,
		directionNav:false,
	});

	$(document).on("click","#submitContactForm",function(){
		if($('#contactFormEmail').val() === ""){
			$('#contactFormEmail').addClass('contactFormError');
		} else {
			$.ajax({
				type: 'post',
				url:"../php/submitContactForm.php",
				data: $("#contactFormForm").serialize(),
				success:function(result){
					$("#contactForm").html(result);
				}
			});
		}
	});
	
});